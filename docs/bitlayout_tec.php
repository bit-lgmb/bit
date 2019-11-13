<!--<?php
// $Log: bitlayout_tec.php,v $
// Revision 1.4  2002/02/05 22:01:47  mavcunha
// Added about and seminar. Fixed more links and update Docs. Added one more function to easy_site.inc, and minor changes on layout
//
// Revision 1.3  2002/02/05 18:08:50  mavcunha
// Fixing some links and anchors
//
// Revision 1.2  2002/02/05 16:54:14  mavcunha
// All files have now relative paths and it's not necessary put any
// external menus or styles to change the aspect of the site.
//
// Revision 1.1  2002/02/05 14:21:35  mavcunha
// transfering working copy to localhost
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("../includes/main.inc"); ?>
<!-- BEGIN localfile -->
<?php
	// Pequena rotina para ajudar a criar links
	function locallink ($index,$name) {

		$pageLinks=array( "w3c"     =>"http://www.w3c.org",
				"netscape"=>"http://www.netscape.com",
				"vim"     =>"http://www.vim.org",
				"php"     =>"http://www.php.net",
				"phplib"  =>"http://www.phpslash.org");
		
		return "<a href=\"$pageLinks[$index]\">$name</a>";
	}
?>
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Informa��es t�cnicas</p>
      <p>
      	<ul>
		<li type="circle"><a href="#intro">Introdu��o</a></li><br>
		<li type="circle"><a href="#dirs">Esquema de diret�rios arquivos principais</a></li><br>
		<li type="circle"><a href="#cvs">CVS</a></li><br>
    	</ul> 
       
       </p>
       <a name="intro">
       <p><b>Introdu��o</b></p>
	<p>O site foi constru�do utilizando <?php echo locallink('php','PHP'); ?> e a biblioteca <?php echo locallink('phplib','PHPLib'); ?>. Com esta biblioteca foi poss�vel separar o <?php echo locallink('w3c','HTML'); ?>  do <?php echo locallink('php','PHP'); ?> mantendo o site administr�vel. Tamb�m foi utilizada a linguagem <?php echo locallink('w3c','CSS'); ?> para manter o layout do site controlado atrav�s do m�nimo de arquivos poss�vel. Quanto a conformidade com as recomenda��es da <?php echo locallink('w3c','W3C'); ?> podemos dizer que 98% (estimativa) do site � validada, no entanto altera��es foram necess�rias para manter a integridade do site em navegadores mais antigos e muito utilizados como o <?php echo locallink('netscape','Netscape 4.x'); ?>.</p>

	<a name="dirs">
	<p><b>Esquema de diret�rios e arquivos principais</b></p>
	<p>Aqui est�o discriminados os principais arquivos e sua localiza��o no site:</p>
	
	<ul>
	<li><b>includes/</b> - diret�rio onde est�o as principais bibliotecas, repons�veis pela consist�ncia do site.</li>
	<li><b>includes/easy_site.inc</b> - gera os links din�micos e altera o cabe�alho se necess�rio. Ela � importada por <b>main.inc</b> e <b>main_frames.inc</b></li>
	<li><b>includes/main.inc</b> - importa a <b>template.inc</b> ( componente da <?php echo locallink('phplib','PHPLib'); ?> ) e faz as substitui��es de vari�veis (ex: Menu) utilizando os links declarados em <b>easy_site.inc</b>, importando os modelos em <?php echo locallink('w3c','HTML'); ?> presentes no diret�rio <b>templates/</b>. Tamb�m � capaz de importar arquivos diferentes como modelos para o Menu (menufile).</li>
	<li><b>includes/main_frames.inc</b> - atua exatamente como a <b>main.inc</b> utilizando outros modelos em <?php echo locallink('w3c','HTML'); ?> mais adequados para o uso de frames. Tamb�m � capaz de importar arquivos diferentes como modelos (menufile). � importada pelos arquivos presentes em <b>frames/</b>.</li>
	<li><b>frames/</b> - diret�rio com os arquivos repons�veis pelo esquema de frames.</li>
	<li><b>frames/index.php</b> - arquivo respons�vel pelo frameset e mapeamento (wrapper) das requisi��es title e menufile. N�o importa qualquer biblioteca.</li>
	<li><b>frames/header.php</b> - importa <b>main_frame.inc</b> e repassa atrav�s da URL qualquer argumento para a constru��o do cabe�alho. Ex: title</li>
	<li><b>frames/menu_links.php</b> - importa <b>main_frame.inc</b> e repassa atrav�s da URL qualquer argumento para a contru��o do menu. Ex: menufile</li>
	<li><b>menus/</b> - diret�rios onde est�o os modelos em <?php echo locallink('w3c','HTML'); ?> para a contru��o dos menus. As bibliotecas <b>main.inc</b> e <b>main_frames.inc</b> s�o capazes de importar diferentes modelos de Menus.</li>
	<li><b>menus/main_menu.html</b> - arquivo modelo para o Menu padr�o, caso menufile n�o esteja declarada este ser� o modelo utilizado por <b>main.inc</b> e <b>main_frames.inc</b>.</li>
	<li><b>menus/template_menu.html</b> - arquivo modelo em <?php echo locallink('w3c','HTML'); ?> para a cria��o de novos Menus. N�o atua diretamente no site. </li>
	<li><b>styles/</b> - diret�rio onde est�o os estilos em <?php echo locallink('w3c','CSS'); ?> utilizados pelo site. Padr�o default.css</li>
	<li><b>templates/</b> - diret�rio com arquivos em <?php echo locallink('w3c','HTML'); ?> que s�o utilizados como modelos para as p�ginas.</li>
	<li><b>templates/little_box.html</b> - arquivo respons�vel pela caixa "Fasta Links", est� neste diret�rio por raz�es culturais (n�o sei).</li>
	<li><b>source.php</b> - arquivo que mostra a fonte dos arquivos <?php echo locallink('php','PHP'); ?>. As fontes dos arquivos s� poder�o ser visualizadas se estiverem dentro do site BiT ( /bit/ ) e possuirem extens�es terminadas em .php, .inc ou .html.
	</ul>

	<a name="cvs">
	<p><b>CVS</b></p>
	<p>O site est� armazenado e suas vers�es ser�o mantidas atrav�s de <?php echo locallink('cvs','CVS'); ?>, utilizando o "view source" ser� poss�vel identificar quaisquer mudan�as nas p�ginas.
	</p>
	
		
	
	<p><a href="/bit/staff.php#valtas">Autor Marco Aur�lio Valtas Cunha - 05/02/2002</a></p>
	<p>
	$Revision: 1.4 $
	</p>
	
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
