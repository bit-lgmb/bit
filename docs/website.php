<!--<?php
// $Log: website.php,v $
// Revision 1.9  2002/08/06 02:21:25  mavcunha
// added item
//
// Revision 1.8  2002/03/11 18:32:22  mavcunha
// *** empty log message ***
//
// Revision 1.7  2002/02/27 14:49:51  mavcunha
// Added edit to BiT Tools and more minor changes.
//
// Revision 1.6  2002/02/25 14:19:46  mavcunha
// More "edit" docs.
//
// Revision 1.5  2002/02/22 17:00:40  mavcunha
// add smal description about the counter
//
// Revision 1.4  2002/02/21 15:32:10  mavcunha
// Counter is checked if exists and is writable
//
// Revision 1.3  2002/02/12 20:18:42  mavcunha
// New changelog
//
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
      <p class="newsboxtitle">Web Site Release Notes</p>
     
     <br>
        05/08/2002 - Fixed layout, added menus and more, see changelog for more.<br>
     	28/02/2002 - Added edit capabilities to <?php echo ilink('projects'); ?><br>
     	27/02/2002 - Added edit capabilities to <?php echo ilink('bittools')." and ".ilink('intranet'); ?>
     	25/02/2002 - Added edit capabilities on <?php echo ilink('current'); ?>.<br>
     	21/02/2002 - Added counter on Main Menu (Only add if REFERER is different from /bit/).<br>
	20/02/2002 - Added <?php echo ilink('onsa'); ?>.<br>
        12/02/2002 - Added <?php echo ilink('intranet'); ?>.<br>
     	11/02/2002 - Added search engine.<br>
      	10/02/2002 - Added <?php echo ilink('ftp'); ?>  site.<br>
     	
     
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
