<?php
// $Log: file_edit_template.php,v $
// Revision 1.1  2002/04/11 14:10:18  mavcunha
// Link change
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
      Edit template
      <?php 
      	    if($mayEdit){
	    	echo "<a href='/bit/edit/?file=' style='color: #FFF;'>[edit]</a>";
	    }
      ?>
      </p>
      <p class="newsbox">
      <br>
      <br>
      <?php 
      		//arquivo mutavel
      		$fp = fopen("edit/file.cache","r");
		$current = fread ($fp, filesize ("edit/file.cache")); 
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
