<!--<?php
// $Log: ftp.php,v $
// Revision 1.3  2002/06/13 17:40:05  mavcunha
// O Login para o FTP anonimo nao funciona
//
// Revision 1.2  2002/02/11 21:32:37  mavcunha
// End of a working day, little changes.
//
// Revision 1.1  2002/02/08 20:56:56  mavcunha
// Added a complete search engine unsing htdig. Fixed a lot of things, links and etc.
// Added the FTP site, and moved some files around to a better place in the site.
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("includes/main.inc"); ?>
<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">FTP at BiT</p>
      <p class="newsbox">
	  Browse our FTP server for software, data and documents of 
	Bioinformatics and related information.
	<ul><li><a href='ftp://scarecrow.fmrp.usp.br'>ftp://scacrecrow.fmrp.usp.br</a></li></ul>
      </p>
	</td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
