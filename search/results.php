<!--<?php
// $Log: results.php,v $
// Revision 1.2  2002/02/11 21:32:37  mavcunha
// End of a working day, little changes.
//
// Revision 1.1  2002/02/08 20:56:57  mavcunha
// Added a complete search engine unsing htdig. Fixed a lot of things, links and etc.
// Added the FTP site, and moved some files around to a better place in the site.
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("../includes/main.inc"); ?>
<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Search results for <?php echo ($words); ?></p>
      <p class="newsbox">
      
     	<!-- php com o resultado -->
<?php
	$searchURL = sprintf("http://143.107.223.178/cgi-bin/htsearch?words=%s&format=%s&method=%s",
	urlencode($words), $format, $method);
	if($page != "") {
	       $searchURL = sprintf("%s&page=%s&START=1", $cmd, $page);
	} 
	include_once($searchURL);
	if($matches == 0) {
		echo "Sorry nothing found.<br>";
	}
?>

      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
