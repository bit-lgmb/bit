<html><head>
  <title>Put title here!</title>
  <link rel="stylesheet" href="/BASEDIR/screen.css" type="text/css">
  <link rel="stylesheet" href="/BASEDIR/print.css" type="text/css" media="print">
  <meta name="robots" value="noindex,follow">
</head>
<body>
<table border="0" width="100%" class="menu">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<div class="main"><a name="0"></a>

<h1>Menu</h1>

<?PHP
  /****************************************************
  *  Make special menu primarily for search engines   *
  ****************************************************/

  $treefile = 'menu.txt';    // Set file with menu structure
  $class1       = 'main';    // style class for menu text
  $level0bullet = 1;         // 1 if you want a bullet on first text

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
  if ($fd==0) die("menuindex.php : Unable to open file ".$treefile);
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

  for ($i=0; $i<$n; $i++) {
     $expand[$i]=0; $visible[$i]=0;
     $last_node[$i]=0; $crit_node[$i]=0;}

  for ($i=0; $i<$maxlevels; $i++) {
     $levels[$i]=0;}

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
  /*  Output nicely formatted tree             */
  /*********************************************/

  for ($i=0; $i<$maxlevel; $i++) $levels[$i]=1;
  $maxlevel++;

  echo "<div class='$class1'>\n";

  if ($level0bullet) {echo "<ul>\n";}
  $ilevel = 0;
  for ($cnt=0; $cnt<$n; $cnt++) {

     // start new link item
     // adjust level
     for ($i=$ilevel; $i<$tree_level[$cnt]; $i++) {
        echo "<ul>\n";}
     for ($i=$tree_level[$cnt]; $i<$ilevel; $i++) {
        echo "</ul>\n";}
     $ilevel = $tree_level[$cnt];

     // output item text
     if ($ilevel > 0 || $level0bullet) {echo "<li>";}
     if ($tree_link[$cnt]=='') {
        // text with no link
        echo "$tree_text[$cnt]\n";}
     else {
        // normal link
        echo '<a href="' . $tree_link[$cnt] . '"';
        if ($tree_target[$cnt] && $tree_target[$cnt] != '+') {
           echo ' target="' . $tree_target[$cnt] . '"';}
        echo " class='$class1'>" . $tree_text[$cnt] . "</a>\n";}}
  for ($i=0; $i<$ilevel; $i++) {
     echo "</ul>\n";}
  if ($level0bullet) {echo "</ul>\n";}
  echo "</div>\n";

?>

</div>
&nbsp;
<table border="0" width="100%" class="menu">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
