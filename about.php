<!--<?php
// $Log: about.php,v $
// Revision 1.3  2002/10/24 20:08:39  mavcunha
// Regular backup
//
// Revision 1.2  2002/02/08 20:56:56  mavcunha
// Added a complete search engine unsing htdig. Fixed a lot of things, links and etc.
// Added the FTP site, and moved some files around to a better place in the site.
//
// Revision 1.1  2002/02/05 22:01:47  mavcunha
// Added about and seminar. Fixed more links and update Docs. Added one more function to easy_site.inc, and minor changes on layout
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("includes/main.inc"); ?>
<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">About BiT</p>
      <p class="newsbox">
      
      <ul>
    	<li><?php echo ilink('staff'); ?> - People at BiT</li>
        <li><?php echo ilink('pictures'); ?> - Random pictures of our lab</li>
	<li><?php echo ilink('seminars'); ?> - Laboratory seminars</li>
    	<li><?php echo ilink('docs'); ?> - Documents and manuals</li>
      </ul>
    
      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
