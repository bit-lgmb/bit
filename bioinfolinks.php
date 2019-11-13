<!--<?php
//$Id: bioinfolinks.php,v 1.1 2003/09/17 20:39:25 mavcunha Exp $
?> -->
<?php require_once("includes/main.inc"); ?>
<!-- BEGIN localfile -->
	<?php
		$fp = fopen('links.php','r');
		fpassthru($fp);
	?>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
