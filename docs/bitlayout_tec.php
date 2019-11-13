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
      <p class="newsboxtitle">Informações técnicas</p>
      <p>
      	<ul>
		<li type="circle"><a href="#intro">Introdução</a></li><br>
		<li type="circle"><a href="#dirs">Esquema de diretórios arquivos principais</a></li><br>
		<li type="circle"><a href="#cvs">CVS</a></li><br>
    	</ul> 
       
       </p>
       <a name="intro">
       <p><b>Introdução</b></p>
	<p>O site foi construído utilizando <?php echo locallink('php','PHP'); ?> e a biblioteca <?php echo locallink('phplib','PHPLib'); ?>. Com esta biblioteca foi possível separar o <?php echo locallink('w3c','HTML'); ?>  do <?php echo locallink('php','PHP'); ?> mantendo o site administrável. Também foi utilizada a linguagem <?php echo locallink('w3c','CSS'); ?> para manter o layout do site controlado através do mínimo de arquivos possível. Quanto a conformidade com as recomendações da <?php echo locallink('w3c','W3C'); ?> podemos dizer que 98% (estimativa) do site é validada, no entanto alterações foram necessárias para manter a integridade do site em navegadores mais antigos e muito utilizados como o <?php echo locallink('netscape','Netscape 4.x'); ?>.</p>

	<a name="dirs">
	<p><b>Esquema de diretórios e arquivos principais</b></p>
	<p>Aqui estão discriminados os principais arquivos e sua localização no site:</p>
	
	<ul>
	<li><b>includes/</b> - diretório onde estão as principais bibliotecas, reponsáveis pela consistência do site.</li>
	<li><b>includes/easy_site.inc</b> - gera os links dinâmicos e altera o cabeçalho se necessário. Ela é importada por <b>main.inc</b> e <b>main_frames.inc</b></li>
	<li><b>includes/main.inc</b> - importa a <b>template.inc</b> ( componente da <?php echo locallink('phplib','PHPLib'); ?> ) e faz as substituições de variáveis (ex: Menu) utilizando os links declarados em <b>easy_site.inc</b>, importando os modelos em <?php echo locallink('w3c','HTML'); ?> presentes no diretório <b>templates/</b>. Também é capaz de importar arquivos diferentes como modelos para o Menu (menufile).</li>
	<li><b>includes/main_frames.inc</b> - atua exatamente como a <b>main.inc</b> utilizando outros modelos em <?php echo locallink('w3c','HTML'); ?> mais adequados para o uso de frames. Também é capaz de importar arquivos diferentes como modelos (menufile). É importada pelos arquivos presentes em <b>frames/</b>.</li>
	<li><b>frames/</b> - diretório com os arquivos reponsáveis pelo esquema de frames.</li>
	<li><b>frames/index.php</b> - arquivo responsável pelo frameset e mapeamento (wrapper) das requisições title e menufile. Não importa qualquer biblioteca.</li>
	<li><b>frames/header.php</b> - importa <b>main_frame.inc</b> e repassa através da URL qualquer argumento para a construção do cabeçalho. Ex: title</li>
	<li><b>frames/menu_links.php</b> - importa <b>main_frame.inc</b> e repassa através da URL qualquer argumento para a contrução do menu. Ex: menufile</li>
	<li><b>menus/</b> - diretórios onde estão os modelos em <?php echo locallink('w3c','HTML'); ?> para a contrução dos menus. As bibliotecas <b>main.inc</b> e <b>main_frames.inc</b> são capazes de importar diferentes modelos de Menus.</li>
	<li><b>menus/main_menu.html</b> - arquivo modelo para o Menu padrão, caso menufile não esteja declarada este será o modelo utilizado por <b>main.inc</b> e <b>main_frames.inc</b>.</li>
	<li><b>menus/template_menu.html</b> - arquivo modelo em <?php echo locallink('w3c','HTML'); ?> para a criação de novos Menus. Não atua diretamente no site. </li>
	<li><b>styles/</b> - diretório onde estão os estilos em <?php echo locallink('w3c','CSS'); ?> utilizados pelo site. Padrão default.css</li>
	<li><b>templates/</b> - diretório com arquivos em <?php echo locallink('w3c','HTML'); ?> que são utilizados como modelos para as páginas.</li>
	<li><b>templates/little_box.html</b> - arquivo responsável pela caixa "Fasta Links", está neste diretório por razões culturais (não sei).</li>
	<li><b>source.php</b> - arquivo que mostra a fonte dos arquivos <?php echo locallink('php','PHP'); ?>. As fontes dos arquivos só poderão ser visualizadas se estiverem dentro do site BiT ( /bit/ ) e possuirem extensões terminadas em .php, .inc ou .html.
	</ul>

	<a name="cvs">
	<p><b>CVS</b></p>
	<p>O site está armazenado e suas versões serão mantidas através de <?php echo locallink('cvs','CVS'); ?>, utilizando o "view source" será possível identificar quaisquer mudanças nas páginas.
	</p>
	
		
	
	<p><a href="/bit/staff.php#valtas">Autor Marco Aurélio Valtas Cunha - 05/02/2002</a></p>
	<p>
	$Revision: 1.4 $
	</p>
	
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
