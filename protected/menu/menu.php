<?PHP
/****************************************************
*  PHP3 Tree Menu                                   *
*                                                   *
*  Agner Fog, 2001. Open source                     *
*                                                   *
*  This program makes a tree-structured menu.       *
*  See read-me.txt for instructions.                *
****************************************************/

/****************************************************
* Input variables:                                  *
* $e defines which nodes to expand. It is set auto- *
* matically in all links.                           *
*                                                   *
* $treefile variable needs to be set in main file   *
* to point to tree definition file.                 *
*                                                   *
* Tree file format:                                 *
* Each line contains one item, the line starts      *
* with a series of dots(.). Each dot is one level   *
* deeper. Next comes the item name, link,           *
* bookmark and link target, seperated by |.         *
* Set target=+ if linked page has the same menu.    *
* The links must use absolute virtual paths unless  *
* all pages are in the same directory.              *
* Example:                                          *

    <b>Menu</b>|/BASEDIR/|#0|+
    .Category 1
    ..page 1.1|/BASEDIR/page11.php|#0|+
    ..page 1.2|/BASEDIR/page12.php|#0|+
    .Category 2|/BASEDIR/page20.php|#0|+
    ..page 2.1|/BASEDIR/page21.php|#0|+
    ..page 2.2|/BASEDIR/page22.php|#0|+
    ..page 2.3|/BASEDIR/page23.php|#0|+


*****************************************************
* Output variables:                                 *
* $previous and $next can be used for links to      *
* previous and next page.                           *
****************************************************/

$width2        = 400;                     // width of menu text in pixels
$class1        = 'tmenu';                  // style class for menu text
$class2        = 'tmenuselected';          // style class for selected page
$default_index = 'index.php';             // default name of index file
$imagedir      = '/bit/protected/img';        // directory containing images
$botmenu       = '/bit/protected/menu/';       // link to page with simple menu for search robots

$img_expand    = "$imagedir/expand.gif";  // define images
$img_collapse  = "$imagedir/collapse.gif";
$img_line      = "$imagedir/vertline.gif";
$img_split     = "$imagedir/split.gif";
$img_end       = "$imagedir/end.gif";
$img_leaf      = "$imagedir/leaf.gif";
$img_spc       = "$imagedir/space.gif";

/*********************************************/
/*  Check for search robots                  */
/*********************************************/
// This will replace the menu with a link to a simple menu if seen by a search robot
$robot =
  stristr($HTTP_USER_AGENT,'crawl') ||
  stristr($HTTP_USER_AGENT,'seek') ||
  stristr($HTTP_USER_AGENT,'spider') ||
  stristr($HTTP_USER_AGENT,'bot') ||
  stristr($HTTP_USER_AGENT,'search') ||
  stristr($HTTP_USER_AGENT,'Scooter') ||
  stristr($HTTP_USER_AGENT,'Slurp') ||
  stristr($HTTP_USER_AGENT,'Gulliver');

/*********************************************
*  Read treefile with tree structure into arrays
*
* $tree_level           node level
* $tree_text            node text
* $tree_link            link
* $tree_bookm           bookmark
* $tree_target          '+' if within same menu system
* $crit_node            node on path to active page
* $last_node            last node or leaf on subtree
* $expand               node is expanded
* $visible              branch is visible
*********************************************/

$maxlevel=0;
$n=0;  // tree size

$fd = fopen($treefile, "r");
if ($fd==0) die("menu.phps : Unable to open file ".$treefile);
while ($buffer = fgets($fd, 4096))  {
   $tree_level[$n]=strspn($buffer,".");
   $tmp=rtrim(substr($buffer,$tree_level[$n]));
   $node=explode("|",$tmp);
   $tree_text[$n]=$node[0];
   $tree_link[$n]=$node[1];
   $tree_bookm[$n]=$node[2];
   $tree_target[$n]=$node[3];
   if ($tree_level[$n] > $maxlevel) $maxlevel=$tree_level[$n];
   $n++;}
fclose($fd);

if (substr($tree_link[0],0,1) == '/') {
   // links are absolute
   $myself = $PHP_SELF;}
else {
   // links are relative. Must be in same directory
   $myself = basename($PHP_SELF);}

for ($i=0; $i<$n; $i++) {
   $expand[$i]=0; $visible[$i]=0;
   $last_node[$i]=0; $crit_node[$i]=0;}

for ($i=0; $i<$maxlevels; $i++) {
   $levels[$i]=0;}

/*********************************************/
/*  Get Node numbers to expand               */
/*********************************************/

if ($e != '') {
   $explevels = explode(',',$e);}
elseif ($QUERY_STRING == '' && basename($myself) == $default_index) {
   $e='0'; $explevels[0] = '0';}

$nexp = count($explevels);

for ($i=0; $i<$nexp; $i++) {
   $lv = $explevels[$i];
   if ($lv < $n) $expand[$lv]=1;}

/*********************************************/
/*  Find last leaves of subtrees             */
/*********************************************/

$lastlevel = $maxlevel;
for ($i=$n-1; $i>=0; $i--) {
   if ( $tree_level[$i] < $lastlevel) {
      for ($j=$tree_level[$i]+1; $j <= $maxlevel; $j++) {
         $levels[$j]=0;}}
   if ( $levels[$tree_level[$i]]==0 ) {
      $levels[$tree_level[$i]]=1;
      $last_node[$i]=1;} // last node or leave on subtree
   $lastlevel=$tree_level[$i];}

/*********************************************/
/*  Determine visible nodes                  */
/*********************************************/
$visible[0]=1;   // root is always visible
for ($i=0; $i<$nexp; $i++)  {
   $lv=$explevels[$i];
   if ($lv<$n && $visible[$lv]==1 && $expand[$lv]==1) {
      $j=$lv+1;
      while ( $tree_level[$j] > $tree_level[$lv] ) {
         if ($tree_level[$j]==$tree_level[$lv]+1) $visible[$j]=1;
         $j++;}}}

/*********************************************/
/*  Seach for active page                    */
/*  And for previous and next                */
/*********************************************/
$self = -1; $selfvisible = 0; $previous = $next = '';
for ($i=0; $i<$n; $i++) {
   if ($tree_link[$i] == $myself || $tree_link[$i].$default_index == $myself || $tree_link[$i].'/'.$default_index == $myself) {
      // found myself in menu. Am I visible?
      if ($visible[$i]) {
         $self = $i; $selfvisible = 1;} // Yes. no problem
      else {
         if ($self == -1) {
             $self = $i;}}} // index to (first) invisible line with myself
   else { // find index to previous and next
      if ($self != -1) {
         if ($next == '' && $tree_target[$i] == '+') {
            $next = $tree_link[$i];
            if ($selfvisible) {break;}}} // finished. save time
      else {
         if ($tree_target[$i] == '+') {
            $previous = $tree_link[$i];}}}}

/******************************************************/
/*  If seen by search robot output only link to menu  */
/******************************************************/
if ($robot) {
   echo "<big><a href=\"$botmenu\">Menu</a></big>\n";}
else {

/*********************************************/
/*  Find all nodes on path to active page    */
/*********************************************/
   if ($self > 0) {
      $i = $self; $lastlevel = $tree_level[$i];
      do { // go upwards through hierarchy
         $i--;
         while ($tree_level[$i]>=$lastlevel && $i > 0) {
            $i--;} // find node
         $crit_node[$i]=1;
         // expand node
         if (!$expand[$i]) {
            $expand[$i] = 1; $explevels[$nexp++] = $i;}
         $lastlevel = $tree_level[$i];}
      while ($lastlevel>0 && $i>0);
      if (!$visible[$self]) {
         // remake $explevels to make link to active page visible
         sort ($explevels);
         $e = implode($explevels,',');
         // determine visible nodes again
         for ($i=0; $i<$nexp; $i++)  {
            $lv=$explevels[$i];
            if ($lv<$n && $visible[$lv]==1 && $expand[$lv]==1) {
               $j=$lv+1;
               while ( $tree_level[$j] > $tree_level[$lv] ) {
                  if ($tree_level[$j]==$tree_level[$lv]+1) $visible[$j]=1;
                  $j++;}}}}}

/*********************************************/
/*  Output nicely formatted tree             */
/*********************************************/

   for ($i=0; $i<$maxlevel; $i++) $levels[$i]=1;
   $maxlevel++;


// Alterado por Marco Valtas - Não existe o atributo cols para a tag table.
// Original:
// echo "<table class='$class1' cellspacing=0 cellpadding=0 border=0 cols=" .
// ($maxlevel+3) . ' width=' . ($maxlevel*16+$width2) . ">\n";
//Alterado:
   echo "<table class='$class1' cellspacing=0 cellpadding=0 border=0 width='".($maxlevel*16+$width2)."' >\n";
   echo "<tr>";
   for ($i=0; $i<$maxlevel; $i++) echo "<td width=16></td>";
   echo "<td width=\"$width2\"></td></tr>\n";

   for ($cnt=0; $cnt<$n; $cnt++) {
      if ($visible[$cnt]) {
         // start new row
         echo "<tr>";
         // vertical lines from higher levels
         for ($i=0; $i<$tree_level[$cnt]-1; $i++) {
            if ($levels[$i]==1) { // vertical line
               echo "<td><img src=\"$img_line\" alt=''></td>";}
            else { // space
               echo "<td><img src=\"$img_spc\" alt=' '></td>";}}

         if ($tree_level[$cnt]) {
            // corner at end of subtree or T-split
            if ($last_node[$cnt]) { // L-shape
               echo "<td><img src=\"$img_end\" alt=''></td>";
               $levels[$tree_level[$cnt]-1]=0;}
            else { // T-split
               echo "<td><img src=\"$img_split\" alt=''></td>";
               $levels[$tree_level[$cnt]-1]=1;}}

         // Node (with subtree) or Leaf (no subtree)
         if ($tree_level[$cnt+1]>$tree_level[$cnt]) {
            // Node
            // Create expand/collapse parameters
            $params='?e=';
            for ($i=0; $i<$n; $i++) {
               if ($expand[$i]==1 xor $cnt==$i) {
                  if ($params != '?e=') $params .= ',';
                  $params .= $i;}}
            if ($crit_node[$cnt] && $expand[$cnt]) {
               // collapsable node on path to active page
               // [-] image must link to node rather than to active page
               $lnk=$cnt;
               while (!$tree_link[$lnk] && $lnk > 0) {
                  // this node has no link. find next higher node
                  $lastlevel = $tree_level[$lnk];
                  $lnk--;
                  while ($tree_level[$lnk]>=$lastlevel && $lnk > 0) {
                     $lnk--;} // find node
                  $lastlevel = $tree_level[$lnk];}
               $tlnk = $tree_link[$lnk]; if (!$tlnk) $tlnk = './';
               echo '<td><a href="' . $tlnk;
               if ($tree_target[$lnk] == '+') {
                  echo $params . '#0';}
               echo '"><img src="' . $img_collapse . '" border="0" alt="collapse"></a></td>';}
            else {

               // node not critical
               if ($expand[$cnt]==0) { // [+]
                  echo '<td><a href="' . $myself . $params .
                  '"><img src="' . $img_expand . '" border="0" alt="expand"></a></td>';}
               else { // [-]
                  echo '<td><a href="' . $myself . $params .
                  '"><img src="' . $img_collapse . '" border="0" alt="collapse"></a></td>';}}}
         else {
            // Tree Leaf  -O
            echo '<td><img src="' . $img_leaf . '" alt=""></td>';}

         // output item text
         if ($tree_link[$cnt]=='') {
            // text with no link
            echo "<td class='$class1' colspan=" . ($maxlevel-$tree_level[$cnt]) .
            '>' . $tree_text[$cnt] . '</td>';}
         elseif ($tree_link[$cnt] == $myself || $tree_link[$cnt].$default_index == $myself || $tree_link[$cnt].'/'.$default_index == $myself) {
            // currently selected link
            echo "<td class='$class2' colspan=" . ($maxlevel-$tree_level[$cnt]) .
            '>' . $tree_text[$cnt] . '</td>';}
         else {
            // normal link
            echo '<td colspan=' . ($maxlevel-$tree_level[$cnt]) .
            '><a href="' . $tree_link[$cnt];
            if ($tree_target[$cnt] == '+') {
               echo '?e=' . $e;}
            echo $tree_bookm[$cnt] . '"';
            if ($tree_target[$cnt] && $tree_target[$cnt] != '+') {
               echo ' target="' . $tree_target[$cnt] . '"';}
            echo " class='$class1'>" . $tree_text[$cnt] . '</a></td>';}

         // end row
         echo "</tr>\n";}}
   echo "</table>\n";}
?>
