<!--<?php
// $Log: index.php,v $
// Revision 1.6  2003/02/28 12:56:54  mavcunha
// Backup propose.
//
// Revision 1.5  2002/02/25 14:19:46  mavcunha
// More "edit" docs.
//
// Revision 1.4  2002/02/21 15:33:14  mavcunha
// Better page identification
//
// Revision 1.3  2002/02/08 20:56:57  mavcunha
// Added a complete search engine unsing htdig. Fixed a lot of things, links and etc.
// Added the FTP site, and moved some files around to a better place in the site.
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
<?php require_once("../includes/main.inc"); ?>
<!-- BEGIN localfile -->
<p class="newsboxtitle">Documentation</p>
<table cellpadding="2" cellspacing="2" border="0" width="660">

<tr>
	
  <td class="boxtitleblue">Software Docs</td>
  
  <td class="boxtitleblue">Internal Docs</td>


</tr>
  <td class="content">
  <ul>
  <li><?php echo ilink('manuals'); ?></li>
  </ul>
  </td>

  <td class="content" valign="top">
   <ul>
	<p><b>Tech Docs</b></p>
	<li><a href='/bit/frames/?url=http://143.107.223.196/bitdocs/published/'>bitdocs</a></li>
	<li><a href='/bit/bugtraq.php'>Bugtraq</a></li>
    <p><b>Web Site Related</b></p>
    <li><a href="website.php">Modifications</a></li>
    <li><a href="/bit/changelog.php?ptitle=ChangeLog&title=ChangeLog">Changelog</a></li>
    <li><a href="bitlayout.php?ptitle=Make_pages&title=BiT_layout">How to make pages using the BiT layout. (Portuguese)</a><br></li>
    <li><a href="ltable.php?ptitle=Dynamic_Links&title=Dynamic_Links">Links conversion table. (Portuguese)</a><br></li>
    <li><a href="edit_current.php?ptitle=Edit_current">Edit link. (Portuguese)</a><br></li>
    <li><a href='/bit/revision/'>Procedimentos de revisão de código</a></li>
  </ul>
  </td>
</tr>
<tr>
	

</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
