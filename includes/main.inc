<!--<?php
// $Log: main.inc,v $
// Revision 1.9  2002/03/01 18:08:26  mavcunha
// Fixed counter problems
//
// Revision 1.8  2002/02/26 21:50:03  mavcunha
// Edit is now more flexible and all results of projects are now in intranet. end of the day work minor changes as well
//
// Revision 1.7  2002/02/20 21:25:01  mavcunha
// added counter
//
// Revision 1.6  2002/02/11 21:32:37  mavcunha
// End of a working day, little changes.
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
<?php $DOCUMENT_ROOT="/var/www/lgmb/html"; ?>

<?php require_once("$DOCUMENT_ROOT/bit/includes/template.inc"); ?>
<?php require_once("$DOCUMENT_ROOT/bit/includes/easy_site.inc"); ?>
<?php require_once("$DOCUMENT_ROOT/bit/protected/validation/auth.inc"); ?>
<?php

/* Verificando se o usuário pode editar a página. */

if(val_by_ip($REMOTE_ADDR)){

	//out visitor may edit this page?
	$mayEdit=1;

}

/* Woring with template */
	// ajustando o diretorio dos templates
	$t=new Template("$DOCUMENT_ROOT/bit/templates/","remove");

	// acertando os meus handles dos modelos
	$t->set_file(array( 
			"Header" => "header.html", 
			"Footer" => "footer.html",
			"MenuA"  => "menu_append.html",
			"LittleBox" => "little_box.html"
			));

/* Configurações não regionais */

// definindo o estila padrao
if(!IsSet($style)) { $style="/bit/styles/default.css"; }

$t->set_var("STYLE","$style");

if(!IsSet($ptitle)) { $ptitle="Bioinformatic Team"; }

$t->set_var(array("PAGETITLE" => "BiT - $ptitle",
		  "LAB_TITLE" => $title ));


/* vamos trabalhar em nossa caixinha. */
foreach ( $t->get_undefined("LittleBox") as $link_box ) {
	preg_match("(lb_(\S+))",$link_box,$link_box_key);
	$t->set_var($link_box,llink($link_box_key[1]));
}



/* definindo os links no menu */
preg_match("/^(\S+)\/(\S+\.html)$/",$menufile,$menulocation);
$tmenu=new Template("$DOCUMENT_ROOT$menulocation[1]","remove");
$tmenu->set_file("Menu",$menulocation[2]);

/* desreferenciando o contador do menu */
$tmenu->set_var("COUNTER",bit_counter());

/* todas as variáveis que não pertecerem ao menu diretamente
devem ser declaradas antes desta rotina!! */
foreach ( $tmenu->get_undefined("Menu") as $link_alias ) {
	preg_match("(ml_(\S+))",$link_alias,$link_key);
	$tmenu->set_var($link_alias,mlink($link_key[1]));

}
			   
// Parsing stuff about the footer
preg_match("(\w+\.php)",$PHP_SELF,$realfile);
$t->set_var("SHOWSOURCE","$PHP_SELF");

// going out to play
$t->pparse("out","Header");
$tmenu->pparse("out","Menu");
$t->pparse("out","MenuA");

?>
