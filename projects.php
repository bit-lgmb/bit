<!--<?php
// $Log: projects.php,v $
// Revision 1.3  2002/03/05 14:22:09  mavcunha
// Added edit to projects page and fixed counter problems
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
<?php require_once("includes/main.inc"); ?>

<!-- BEGIN localfile -->

<p class="newsboxtitle">Projects at BiT
      <?php 
      	    if($mayEdit){
	    	echo "<a href='/bit/edit/?file=projects' style='color: #FFF;'>[edit]</a>";
	    }
      ?>
</p><br>

      <?php 
      		//arquivo mutavel
      		$fp = fopen("edit/projects.cache","r");
		$current = fread ($fp, filesize ("edit/projects.cache")); 
		fclose ($fp);
		echo stripslashes($current);
	?>

<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
