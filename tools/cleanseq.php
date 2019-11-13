<!--<?php
// $Log: cleanseq.php,v $
// Revision 1.3  2002/02/11 21:32:37  mavcunha
// End of a working day, little changes.
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
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">CleanSeq</p>
      <p class="newsbox">
    	This is the CleanSeq tool, you can process you sequence here to use in another
	softwares like <?php echo elink('s_blast'); ?>.

<?php
	//standard screen
	if(!IsSet($sended)) {
?>	
<form action="<?php echo $PHP_SELF; ?>" method="post" name="cleanseq" >
<p style="text-indent: 0px;" >
<textarea cols="60" rows="20" name="sequence" wrap="soft" ></textarea>
</p>

<input type="hidden" name="sended">
<input type="submit">
</form>
	
<?php 
	}
	else {
		$result=preg_replace("/[0-9]+|\s+/","",$sequence);
		
	
		for 
		
		echo "<br><hr>$result";
	}
?>
	
    	
      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
