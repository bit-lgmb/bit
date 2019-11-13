<!--<?php
// $Log: manuals.php,v $
// Revision 1.5  2002/08/06 14:04:16  mavcunha
// Removed privileges of bioinformatic articles, just showing Manuals.
//
// Revision 1.4  2002/08/06 14:01:16  mavcunha
// Cosmetic
//
// Revision 1.3  2002/06/28 02:50:31  mavcunha
// Fixed papers address
//
// Revision 1.2  2002/02/07 02:44:02  mavcunha
// Fixed size on source.php removing extras tabs in file
//
// Revision 1.1  2002/02/06 19:53:14  mavcunha
// Use CTC Papers DB to retrieve manuals or docs
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("../includes/main.inc"); ?>
<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Software Manuals or Bioinformatic References</p>
      <p class="newsbox">
     <!-- Estamos indentificando com o IP, pois a madhatter não está
     resolvendo nomes -->
<?php 
	//testando a existência do papers database e funcionalidade
@$papersScript=fopen("http://bit.fmrp.usp.br/papers/noheader.php",r);
if(!$papersScript) {
	echo "<h3 style=\"color: #F00;\" >Sorry it seems CTC Papers Database it's not reponding.</h3>";
}
else {
	include_once("http://bit.fmrp.usp.br/papers/noheader.php?area_id=901"); 
}
?>
     
      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
