<!--<?php
// $Log: changelog.php,v $
// Revision 1.1  2002/02/06 13:34:15  mavcunha
// Added changelog so now changes on site will be available to all visitors
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("includes/main.inc"); ?>
<!-- BEGIN localfile -->
<p class="newsboxtitle">BiT ChangeLog - last updated on <?php echo date("F j Y h:i:s A",filemtime("ChangeLog"))?></p>

<pre>
<?php
   	readfile("ChangeLog");
?>
</pre>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
