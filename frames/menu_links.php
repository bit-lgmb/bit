<!--<?php
// $Log: menu_links.php,v $
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
<?php include("../includes/main_frames.inc"); ?>
<!-- BEGIN menu_links -->

<?php  
	/* isto n�o � HTML correto segundo a w3c, infelizmente n�o h� maneira 
	de manter a tabela corretamente em browsers antigos. */
	$t->set_var("TD_HEIGHT","height='100%'");
?>

<?php $tmenu->set_var("Menu",$t->subst("FMenu")); 
	$tmenu->pparse("out","Menu");
?>

<!-- END menu_links -->
