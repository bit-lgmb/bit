<?php
// $Log: contact.php,v $
// Revision 1.6  2002/06/28 15:00:39  mavcunha
// Changed e-mail address
//
// Revision 1.5  2002/02/26 13:16:44  mavcunha
// misspelling
//
// Revision 1.4  2002/02/20 14:02:08  mavcunha
// changed the size of the boxes, more space to write
//
// Revision 1.3  2002/02/15 17:00:20  mavcunha
// Working now
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
<?php include("includes/main.inc"); ?>

<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Contact us</p>
      <p class="newsbox">

	<?php if(!IsSet($sended)) {
	?>
        To contact us please fill up the form and we'll reply as soon as possible.
	<form action="<?php echo $PHP_SELF; ?>" method="post" >
	<div style="text-indent: 0px;" >
		Your name:<br>
		<input type="text" size="40" maxlength="50" name="name" ><br>
		Your e-mail:<br>
		<input type="text" size="40" maxlength="50" name="email" ><br>
		Subject:<br>
		<input type="text" size="40" maxlength="100" name="subject" ><br>
		Your message:<br>
		<textarea cols="48" rows="10" name="message" wrap="hard" ></textarea><br>
		<input type="submit" value="Submit"><input type="reset" value="Clear">
		<input type="hidden" name="sended" value="1">
	</div>
	</form>

	
	<?php
	}
else {

	if($message=="") {
			echo "<br><br>Fail: Empty message.";
	}
	else {
		//Processando e enviando a menssagem
		$subject="HP_BIT - ".$subject;
		$message="Name: $name \n".$message;
	
		//if( mail("bit@bit.fmrp.usp.br",$subject,$message,"From: $email\r\n".
		//	"Reply-To: $email\r\n") ) {
			echo "<br><br>Thank you, your message was sended with sucess.";
		//}
		//else {
		//	echo "<br><br>Sorry can't send your e-mail there's a problem with the server";
		//}
	}
}
?>
      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
