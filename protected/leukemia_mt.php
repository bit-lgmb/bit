<?php
        // validation stuff
        include('http://lbc2.fmrp.usp.br/BIP/biti_soap.inc');
        include('http://lbc2.fmrp.usp.br/BIP/biti_auth.inc');
        $inter = new BiTInterface;
        $auth = new BiTAuth('bit_intranet',$inter);
        $auth->check();
?>
<!--<?php
// $Log: leukemia_mt.php,v $
// Revision 1.1  2002/03/27 18:25:20  mavcunha
// Various analysis
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("../includes/main.inc"); ?>
<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">
      Leukemia and MT analysis
      <?php 
      	    if($mayEdit){
	    	echo "<a href='/bit/edit/?file=leukemia_mt' style='color: #FFF;'>[edit]</a>";
	    }
      ?>
      </p>
      <p class="newsbox">

      <?php 
      		//arquivo mutavel
      		$fp = fopen("../edit/leukemia_mt.cache","r");
		$current = fread ($fp, filesize ("../edit/leukemia_mt.cache")); 
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
