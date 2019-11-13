</div>
<table border="0" cellspacing="0" cellpadding="0" class="menu" width="100%">
  <tr>
    <td>
      <center>
        <table border="0" cellspacing="0" cellpadding="6" class="menu">
          <tr>

<?PHP     // This makes small menu at bottom of page

// get parameter
$f = $e ? "?e=$e" : '';

// detect browser version
if ((eregi('MSIE ?([0-9]+)', $HTTP_USER_AGENT, $ver) || eregi('zilla[\/ ]?([0-9]+)', $HTTP_USER_AGENT, $ver)) && $ver[1] > 4) {
  // browser v. 5+
  $leftarrow = '&#8592;';  $uparrow = '&#8593;';  $rightarrow = '&#8594;';}
else { // other browser, use old font method
  $leftarrow = '<font face="symbol">¬</font>';  $uparrow = '<font face="symbol">­</font>';  $rightarrow = '<font face="symbol">®</font>';}

// make links to previous and next
if ($previous) {
  echo '<td><a href="' . $previous . $f . '#0" accesskey="p" rev="previous" class="menu" style="text-decoration:none">' . $leftarrow . ' <u>P</u>revious</a></td>';}
echo '<td><a href="#i" accesskey="i" class="menu" style="text-decoration:none">' . $uparrow . ' <u>I</u>ndex</a></td>';
if ($next) {
  echo '<td><a href="' . $next . $f . '#0" accesskey="n" rel="next" class="menu" style="text-decoration:none"><u>N</u>ext ' . $rightarrow . '</a></td>';}
?>
          </tr>
        </table>
      </center>
    </td>
  </tr>
</table>