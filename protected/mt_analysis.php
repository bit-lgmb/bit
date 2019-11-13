<?php
        // validation stuff
        include('http://lbc2.fmrp.usp.br/BIP/biti_soap.inc');
        include('http://lbc2.fmrp.usp.br/BIP/biti_auth.inc');
        $inter = new BiTInterface;
        $auth = new BiTAuth('bit_intranet',$inter);
        $auth->check();
?>
<?php
// $Log: mt_analysis.php,v $
// Revision 1.1  2002/04/11 14:26:59  mavcunha
// Added MT information
//
// Revision 1.1  2002/04/11 14:10:18  mavcunha
// Link change
//
// $Name:  $
// $Author: mavcunha $ 
?>
<?php require_once("../includes/main.inc"); ?>

<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">
      MT analysis
      <?php 
      	    if($mayEdit){
	    	echo "<a href='/bit/edit/?file=mt_analysis' style='color: #FFF;'>[edit]</a>";
	    }
      ?>
      </p>
      <p class="newsbox">
      <br>
      <br>
      <?php 
      		//arquivo mutavel
      		$fp = fopen("../edit/mt_analysis.cache","r");
		$current = fread ($fp, filesize ("../edit/mt_analysis.cache")); 
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
