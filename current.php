<?php
// $Log: current.php,v $
// Revision 1.7  2002/02/26 21:50:03  mavcunha
// Edit is now more flexible and all results of projects are now in intranet. end of the day work minor changes as well
//
// Revision 1.6  2002/02/25 17:54:51  mavcunha
// added last edit timestamp
//
// Revision 1.5  2002/02/25 13:44:10  mavcunha
// Now we can delete the lock file
//
// Revision 1.4  2002/02/23 01:41:31  mavcunha
// New feature to edit the current work on area
//
// Revision 1.3  2002/02/05 17:44:06  mavcunha
// Added Israel's Chemokine link
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
?>
<?php require_once("includes/main.inc"); ?>

<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">
      Current work on BiT 
      <?php 
      	    if($mayEdit){
	    	echo "<a href='/bit/edit/?file=current' style='color: #FFF;'>[edit]</a>";
	    }
      ?>
      </p>
      <p class="newsbox">
      Some work that we are doing but it's not finished yet. You may find useful links or
      invalid links. Please don't bookmark these links cause they can be changed without
      any warning.
      <br>
      <br>
      <?php 
      		//arquivo mutavel
      		$fp = fopen("edit/current.cache","r");
		$current = fread ($fp, filesize ("edit/current.cache")); 
		fclose ($fp);
		echo stripslashes($current);
	?>
      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
