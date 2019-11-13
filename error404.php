<!--<?php
// $Log: error404.php,v $
// Revision 1.7  2002/08/06 02:15:19  mavcunha
// Changed email
//
// Revision 1.6  2002/06/28 02:49:58  mavcunha
// Added some filters
//
// Revision 1.5  2002/06/11 14:42:06  mavcunha
// Added message about CTC
//
// Revision 1.4  2002/06/11 14:20:17  mavcunha
// Added remote address, help to verify
//
// Revision 1.3  2002/06/11 13:58:46  mavcunha
// Cosmetic
//
// Revision 1.2  2002/06/11 13:28:03  mavcunha
// Added error 500 handler
//
// Revision 1.1  2002/06/11 13:19:37  mavcunha
// Error handler
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("includes/main.inc"); ?>
<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Error 404 Page not found</p>
      <p class="newsbox">
      
	Sorry but the page <b><?php echo($HTTP_REFERER);  ?></b> does not exists on this server.
	A notification was sended to webmaster for verify this error. If you known that
        the page you requested exists please <?php echo ilink("contact"); ?>.

	<br>
	<h3><font color="red">Please note, if you are looking for CTC related information, you should point your
	browser to <a href='http://ctc.fmrp.usp.br/'>http://ctc.fmrp.usp.br</a></font></h3>
	<br>

	<?php
	if(! preg_match("/watson/i",$HTTP_REFERER) and $HTTP_REFERER!="" and !preg_match("/143\.107\.223/",$REMOTE_ADDR) ) {
		mail("mavcunha@bit.fmrp.usp.br","HP_BIT Error 404","Error 404\nURL: $HTTP_REFERER\nREMOTE_ADDR: $REMOTE_ADDR");
	}
	?>
      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
