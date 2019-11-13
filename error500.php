<!--<?php
// $Log: error500.php,v $
// Revision 1.5  2002/08/06 02:15:19  mavcunha
// Changed email
//
// Revision 1.4  2002/06/28 02:49:58  mavcunha
// Added some filters
//
// Revision 1.3  2002/06/11 14:20:17  mavcunha
// Added remote address, help to verify
//
// Revision 1.2  2002/06/11 13:58:46  mavcunha
// Cosmetic
//
// Revision 1.1  2002/06/11 13:28:03  mavcunha
// Added error 500 handler
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("includes/main.inc"); ?>
<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Error 500 Server error</p>
      <p class="newsbox">
      
        There was a server error, a notification was sended to the webmaster. Please
	come back to this page later or <?php echo ilink("contact"); ?>.

	<?php
		if(! preg_match("/143\.107\.223/",$REMOTE_ADDR)){
		mail("mavcunha@bit.fmrp.usp.br","HP_BIT Error 500","Error 500\nURL: $HTTP_REFERER\nREMOTE_ADDR: $REMOTE_ADDR");
		}
	?>
      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
