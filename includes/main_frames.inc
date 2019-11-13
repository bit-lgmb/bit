<!--<?php
// $Log: main_frames.inc,v $
// Revision 1.7  2002/03/11 18:38:46  mavcunha
// added counter
//
// Revision 1.6  2002/02/20 21:25:01  mavcunha
// added counter
//
// Revision 1.5  2002/02/05 17:38:04  mavcunha
// Fixed style path
//
// Revision 1.4  2002/02/05 17:07:31  mavcunha
// Minor ajustements.
//
// Revision 1.3  2002/02/05 16:54:14  mavcunha
// All files have now relative paths and it's not necessary put any
// external menus or styles to change the aspect of the site.
//
// Revision 1.2  2002/02/05 14:21:35  mavcunha
// transfering working copy to localhost
//
// Revision 1.1.1.1  2002/02/04 18:55:03  mavcunha
// First import on CVS
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php include("$DOCUMENT_ROOT/bit/includes/template.inc"); ?>
<?php include("$DOCUMENT_ROOT/bit/includes/easy_site.inc"); ?>
<?php 
	/* Working with template PHPlib */
	
	// ajustando o diretorio dos templates
	$t=new Template("$DOCUMENT_ROOT/bit/templates/","remove");

	// acertando os meus handles dos modelos
	$t->set_file(array( 
			"Header" => "fheader.html", 
			"Footer" => "ffooter.html",
			"FMenu"  => "fmenu_links.html"
			));

/* Configurações não regionais */

// definindo o estila padrao
if(!IsSet($style)) { $style="/bit/styles/default.css"; }

$t->set_var("STYLE","$style");


/* configurações regionais */
	
//trabalhando com o header
$t->set_var(array("PAGETITLE" => "BIT - Bioinformatic Team",
		  "LAB_TITLE" => $title ));



/* definindo os links no menu */
preg_match("/^(\S+)\/(\S+\.html)$/",$menufile,$menulocation);
$tmenu=new Template("$DOCUMENT_ROOT/$menulocation[1]","remove");
$tmenu->set_file("Menu",$menulocation[2]);

/* desreferenciando o contador do menu */
$tmenu->set_var("COUNTER",bit_counter());

/* definindo os links no menu */
//$tmenu=new Template("/var/apache/html/bit/menus/","remove");
//$tmenu->set_file("Menu",$menufile);
//$tmenu->set_file("FMenu","fmenu_links.html");

//Definindo o estilo do menu
$tmenu->set_var("STYLE","/bit/styles/$style");

/* todas as variáveis que não pertecerem ao menu diretamente
devem ser declaradas antes desta rotina!! */
foreach ( $tmenu->get_undefined("Menu") as $link_alias ) {

	preg_match("(ml_(\S+))",$link_alias,$link_key);
	$tmenu->set_var($link_alias,mlink($link_key[1],"_top"));

}


$tmenu->parse("MAIN_MENU","Menu");


// show source thing
preg_match("(\w+\.php)",$PHP_SELF,$realfile);
$t->set_var("SHOWSOURCE","$PHP_SELF");

//$t->pparse("out","Header");
//$t->pparse("out","Menu");

?>
