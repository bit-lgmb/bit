<!--<?php
// $Log: index.php,v $
// Revision 1.3  2002/05/07 15:28:37  mavcunha
// Backup
//
// Revision 1.2  2002/02/05 16:54:14  mavcunha
// All files have now relative paths and it's not necessary put any
// external menus or styles to change the aspect of the site.
//
// Revision 1.1.1.1  2002/02/04 18:55:03  mavcunha
// First import on CVS
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php $DOCUMENT_ROOT="/var/www/lgmb/html"; ?>
<? require_once("$DOCUMENT_ROOT/bit/includes/main.inc"); ?>

<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Welcome to Bioinformatic Team WebSite</p>
      <p class="newsbox">
      
      <?php print "BIT is a Laboratory of ".elink('fundherp','_blank')." and is dedicated to Bioinformatics. In this
      Website you can explore all projects done at BiT. Please refer to ".ilink('projects')." to know more about our projects."; ?>

<br><br><br>
<center>
<a href="http://lgmb.fmrp.usp.br/cvbioinfo2007/"><font size="3"><b>3&ordm; Curso de Verão em Bioinformática - 2007</b></font></a>

</center>      
      
      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
