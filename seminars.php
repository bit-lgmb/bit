<!--<?php
// $Log: seminars.php,v $
// Revision 1.16  2003/09/17 20:39:25  mavcunha
// Backing up the stuff....
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("includes/main.inc"); ?>
<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Seminars</p>
      <p class="newsbox">
      <ul>
		<li><a href='seminars_ctc.php?title=CTC_Seminars'>CTC Seminars</a></li>
		<li><a href='seminars_mbl.php?title=Molecular_Biology_Laboratory_Seminars'>Laboratory of Molecular Genetics and Bioinformatics</a></li>
		<li><a href='seminars_bioinfo.php?title=Bioinformatics_Seminars'>Bioinformatics Seminars</a></li>
	  </ul>
      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
