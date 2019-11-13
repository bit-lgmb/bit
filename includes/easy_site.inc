<!--<?php
// $Log: easy_site.inc,v $
// Revision 1.22  2003/09/17 20:39:26  mavcunha
// Backing up the stuff....
//
// Revision 1.21  2003/02/28 12:56:55  mavcunha
// Backup propose.
//
// Revision 1.20  2002/10/24 20:08:39  mavcunha
// Regular backup
//
// Revision 1.19  2002/06/11 14:21:06  mavcunha
// Added Regional Blood Center on fundherp name
//
// Revision 1.18  2002/06/03 17:11:00  mavcunha
// Backup
//
// Revision 1.17  2002/04/19 18:24:27  mavcunha
// Moved from madhatter to gordon
//
// Revision 1.16  2002/03/27 18:26:55  mavcunha
// Regular update
//
// Revision 1.15  2002/03/05 14:22:09  mavcunha
// Added edit to projects page and fixed counter problems
//
// Revision 1.14  2002/03/01 18:08:26  mavcunha
// Fixed counter problems
//
// Revision 1.13  2002/02/28 19:30:19  mavcunha
// Added officialy the SMS tool
//
// Revision 1.12  2002/02/21 15:32:10  mavcunha
// Counter is checked if exists and is writable
//
// Revision 1.11  2002/02/20 21:25:01  mavcunha
// added counter
//
// Revision 1.10  2002/02/20 13:57:55  mavcunha
// Update some styles, links and logos
//
// Revision 1.9  2002/02/12 19:54:26  mavcunha
// Added protect stuff, source.php had to adapt to not show protected sources. Menu has now intranet link to the protected area. Easy_site has an new links 'intranet'.
//
// Revision 1.8  2002/02/11 21:32:37  mavcunha
// End of a working day, little changes.
//
// Revision 1.7  2002/02/11 14:00:12  mavcunha
// Added Pfam link, README now has the htdig conf. And wrapper.php has Powered by ht://Dig.
//
// Revision 1.6  2002/02/08 20:56:57  mavcunha
// Added a complete search engine unsing htdig. Fixed a lot of things, links and etc.
// Added the FTP site, and moved some files around to a better place in the site.
//
// Revision 1.5  2002/02/05 22:01:47  mavcunha
// Added about and seminar. Fixed more links and update Docs. Added one more function to easy_site.inc, and minor changes on layout
//
// Revision 1.4  2002/02/05 16:54:14  mavcunha
// All files have now relative paths and it's not necessary put any
// external menus or styles to change the aspect of the site.
//
// Revision 1.3  2002/02/05 14:21:35  mavcunha
// transfering working copy to localhost
//
// Revision 1.2  2002/02/04 22:29:44  mavcunha
// Added staff page and index.php on tools. Add more ilinks too.
//
// Revision 1.1.1.1  2002/02/04 18:55:03  mavcunha
// First import on CVS
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php

/* Apache Root */




/* Recebendo alguns parâmetros mutáveis */

// definição do título do banner
if(IsSet($title) ){

	$title=str_replace("_"," ",$title);
	$title="BiT - ".$title;
}
else {
	$title="BiT - Bioinformatic Team";
}

// definição do menu
if(!IsSet($menufile) ) {
	$menufile="/bit/menus/main_menu.html";
}

/* Contador para o site */
/* apenas contando quando o browser deriva de um 
outro web site, assim evitamos contar quem navega */

function bit_counter() {

global $HTTP_REFERER;
global $DOCUMENT_ROOT;

$file_counter="$DOCUMENT_ROOT/bit/counter";


if(is_writable($file_counter)) {

	$counter = @fopen("$file_counter","r+");
	flock($counter,2);
	$oldCount = @fgets ($counter, 4096);
	
	/* apenas contamos quando o visitante vem
	de outro web site
	*/
	if(! preg_match("/bit/",$HTTP_REFERER)) {
		rewind($counter);
		fwrite($counter,$oldCount + 1);
		flock($counter,3);
		fclose($counter);
		return($oldCount+1);
	}
	else {
		flock($counter,3);
		fclose($counter);
		return($oldCount);
	}
}//end of is_writable

else {
	return("Can't write on counter");
}

} //end of counter

/* Esta função permite criar links rápidos, os mais comuns */

/* elink refere-se a links externos e ilink refere-se a links internos
esta função permite a troca da localização de um projeto sem que isto
torne-se um transtorno para o webmaster. Evitar links colocados em cada
página pode ajudar a manter as páginas. */

function elink ($keyword, $target=false, $ilink=false, $getlinks=false ) {

//Adicione aqui os links internos e externos.

// Regras 
// 1. para links que referem-se a ferramentas eles devem ser precedidos de tool_


if($ilink) {
	$links=array(   "projects"  => array("/bit/projects.php?ptitle=Projects","Projects"),
			"docs"     => array("/bit/docs/index.php?ptitle=Docs","Docs"),
			"current"   => array("/bit/current.php?ptitle=Working","Current Working on..."),
			"home"	    => array("/bit/?ptitle=Home","Home"),
			"go"	    => array("/go/","GO Browser"),
			"contact"   => array("/bit/contact.php?ptitle=Contact","Contact"),
			"bioinfolinks" =>array("/bit/bioinfolinks.php?ptitle=BioInfoLinks","BioInfo Links"),
			"bittools"     => array("/bit/tools/?ptitle=Tools","BiT Tools"),
			"jamborestes" => array("/jamborestes/","Jamborestes"),
			"staff"	      => array("/bit/staff.php?ptitle=Staff","Staff"),
			"seminars"    => array("/bit/seminars.php?ptitle=Seminars","Seminars"),
			"about"       => array("/bit/about.php?ptitle=About","About BiT"),
			"manuals"     => array("/bit/docs/manuals.php?ptitle=Manuals","Manuals"),
			"tool_cleanseq" => array("/bit/tools/cleanseq.php?ptitle=CleanSeq","Clean Seq"),
			"ftp"	   => array("/bit/ftp.php?ptitle=FTP","FTP"),
			"pfam"     => array("/bit/frames/?url=/pfam/&title=Pfam","Pfam"),
			"intranet" => array("/bit/protected/?ptitle=Intranet&e=0","Intranet"),
			"pipe_leukemia" => array("http://143.107.223.190/pipelines-cgi/index.pl?project=leukemia","Leukemia"),
			"pipe_leukemiapaper" => array("http://143.107.223.190/pipelines-cgi/index.pl?project=leukemiaPaper","LeukemiaPaper"),
			"pipe_melanoma" => array("http://143.107.223.190/pipelines-cgi/index.pl?project=melanoma","Melanoma"),
			"pipe_mtpaper" => array("http://143.107.223.190/pipelines-cgi/index.pl?project=MTpaper","MT Paper"),
			"pipe_clusterannotation" => array("http://143.107.223.190/pipelines-cgi/index.pl?project=clusterAnnotation","Cluster Annotation"),
			"pipe_tissues" => array("http://143.107.223.190/pipelines-cgi/index.pl?project=tissues","Tissues"),
			"pipe_mito" => array("http://143.107.223.157/pipeline-cgi/index.pl?project=mitochondrial","Mitochondrial"),
			"pipe_apis" => array("http://143.107.223.183/pipelinesTest-cgi/index.pl?project=apis","Apis"),
			"pipe_array" => array("http://143.107.223.172/pipelineArray-cgi/index.pl?project=array","Array"),
			"onsa"      =>  array("/bit/onsa.php?ptitle=ONSA&title=ONSA_Network","ONSA"),
			"sms"       =>  array("http://lbc3.fmrp.usp.br/sms/","Sequence Manipulation Suite"),
                        "pictures"  =>  array("/bit/bitpics.php?ptitle=Pictures&title=BiT_Pics","BiT Pics"),
			);

}
else {
	$links=array(   "usp"      => array("http://www.usp.br","University of S&atilde;o Paulo"),
			"fmrp"     => array("http://www.fmrp.usp.br","School of Medicine of Ribeir&atilde;o Preto"),
			"fundherp" => array("http://pegasus.fmrp.usp.br","Hemocentro Foundation (Regional Blood Center)"),
			"ncbi"     => array("http://www.ncbi.nlm.nih.gov", "National Center for Biotechnology Information"),
			"fapesp"   => array("http://www.fapesp.br","The State of São Paulo Research Foundation"),
			"s_blast"  => array("http://www.ncbi.nlm.nih.gov/blast/","BLAST"),
			"blast"    => array("http://www.ncbi.nlm.nih.gov/blast/","Basic Alignment Search Tool"),
			"ftp"	   => array("ftp://scarecrow.fmrp.usp.br/","FTP")
			);

}

if($getlinks) { return $links; } // para apenas ver os links.

if(! IsSet($links[$keyword]) ) { 
	return sprintf ("%s","<b>Link not found</b>");
}
else {
	$url=$links[$keyword][0];
	$name=$links[$keyword][1];

	// grande saida dos criadores da php, www.php.net
	return sprintf ("<a href=\"%s\" %s >%s</a>", $url , $target ? ' target="'.$target.'"' : '', $name );
	
}

} // end of mlink


// internal addresses
function ilink ($keyword,$target=false) {

	return elink($keyword,$target,"true");
	
}

// internal address with style Menu Links
function mlink ($keyword,$target=false) {

	$mlink = elink($keyword,$target,"true");
	
	$out_link = preg_replace("/\s\>/","class=\"menucategory\" >",$mlink);
	
	return $out_link;

}
// links para a little box
function llink ($keyword,$target=false) {

	$mlink = elink($keyword,$target,"true");
	
	$out_link = preg_replace("/\s\>/","class=\"littleboxlink\" >",$mlink);
	
	return $out_link;

}
// return all links , internal or external
function get_links ($ilink=true,$taget=false) {

	$out_links = elink('none',$target,$ilink,"true");

	return $out_links;
}
// Cria links com o nome que você desejar clinks = custom links
function clink ($keyword,$myLinkName,$target=false) {
	
	$out_link = elink($keyword,$target,"true");
	$newNamedLink = preg_replace("/\>(\w+)\<\/a\>/",">$myLinkName</a>",$out_link);

	return $newNamedLink;
}
?>

