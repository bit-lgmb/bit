<?php
// $Log: index.php,v $
// Revision 1.6  2002/06/03 17:11:00  mavcunha
// Backup
//
// Revision 1.5  2002/02/27 14:49:51  mavcunha
// Added edit to BiT Tools and more minor changes.
//
// Revision 1.4  2002/02/26 21:50:03  mavcunha
// Edit is now more flexible and all results of projects are now in intranet. end of the day work minor changes as well
//
// Revision 1.3  2002/02/25 19:17:26  mavcunha
// moved banco de amostra to current work on.
//
// Revision 1.2  2002/02/21 15:35:15  mavcunha
// added several links
//
// Revision 1.1  2002/02/12 19:45:42  mavcunha
// Added protected area.
//
// $Name:  $
// $Author: mavcunha $
?>
<?php
	// validation stuff
//	include('http://lbc2.fmrp.usp.br/BIP/biti_soap.inc');
//	include('http://lbc2.fmrp.usp.br/BIP/biti_auth.inc');
//	$inter = new BiTInterface;
//	$auth = new BiTAuth('bit_intranet',$inter);
//	$auth->check();
?>
<?php require_once("../includes/main.inc"); ?>
<!-- BEGIN localfile -->
<table border="0" width="660">
   <tr>
      <td valign="top">
      <p class="newsboxtitle">Intranet</p>
      <p class="newsbox">
	  <b>Atenção usuários da BiT-Intranet, logo o login bituser irá 
ser desativado. Por favor envie um email para <a href='mailto:mavcunha@bit.fmrp.usp.br'>
mavcunha@bit.fmrp.usp.br</a> solicitando acesso à BiT-Intranet.</b>
      </p>
      <!-- edited content -->
<!--
Menu created using Expandable hierarchical menu (PHP)
http://www.agner.org/software/phpmenu/?e=0,23,24#0
-->
<?PHP
$treefile = $DOCUMENT_ROOT . "/bit/protected/menu/menu.txt";  // Set file with menu structure
include     $DOCUMENT_ROOT . "/bit/protected/menu/menu.php";  // Include code to generate menu
?>
      <!-- end of edited -->	
      </td>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
