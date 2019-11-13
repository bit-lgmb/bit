<!--<?php
// $Log: bitlayout.php,v $
// Revision 1.9  2002/04/19 18:24:27  mavcunha
// Moved from madhatter to gordon
//
// Revision 1.8  2002/02/08 20:56:56  mavcunha
// Added a complete search engine unsing htdig. Fixed a lot of things, links and etc.
// Added the FTP site, and moved some files around to a better place in the site.
//
// Revision 1.7  2002/02/06 13:35:57  mavcunha
// Spell check, i really need to learn Portuguese. And fix some links
//
// Revision 1.6  2002/02/05 22:01:47  mavcunha
// Added about and seminar. Fixed more links and update Docs. Added one more function to easy_site.inc, and minor changes on layout
//
// Revision 1.5  2002/02/05 18:08:50  mavcunha
// Fixing some links and anchors
//
// Revision 1.4  2002/02/05 17:38:52  mavcunha
// Fixed style path
//
// Revision 1.3  2002/02/05 17:25:40  mavcunha
// Spell check.
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
<?php require_once("../includes/main.inc"); ?>

<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
     
	<p class="newsboxtitle">Como inserir documentos no site do BiT</p>
	
	<ul>	
		<li><b><a href="#update">Atualizações</a></b></li>
		<li><b><a href="#introducao">Introdução</a></b></li>
		<li><b><a href="#mainpage">Criando uma Página Central</a></b></li>
		<li><b><a href="#modmenu">Modificação do Menu</a></b></li>
		<li><b><a href="#modheader">Modificação do Cabeçalho</a></b></li>
		<li><b><a href="#dynlink">Links Dinâmicos</a></b></li>
		<li><b><a href="#more">Mais do que você realmente precisa saber</a></b></li>
	</ul>
	<br><br>
	
	<p class="newsbox">

	 <ul><li><b>Atualizações</b></li></ul><a name="update">

	 <p>Mais uma função foi adicionada para a criação de links. <b>clink</b> recebe como argumento dois parâmetros o primeiro sendo um apelido de link interno (ver <a href="#dynlink">Links Dinâmicos</a>) e o segundo o nome que você quer que seja retornado. Exemplo:

	 <pre>&lt;?php echo clink('staff','Marco Valtas'); ?&gt;</pre>

	 <p>resultado: <?php echo clink('staff','Marco Valtas'); ?></p> 

	 <p>Isto cria um link para a página <?php echo ilink('staff'); ?> porém com a linha 'Marco Valtas' como link. Se houver a necessidade de criar um link com target basta adicionar mais um argumento a função:

	 <pre>&lt;?php echo clink('staff','Marco Valtas','_blank'); ?&gt;</pre>

	 <p>resultado: <?php echo clink('staff','Marco Valtas','_blank'); ?></p>
	
	<ul><li><b>Introdução</b></li></ul><a name="introducao">
	<p>O novo site do BiT foi construído em PHP e CSS, com essas tecnologias foi possível criar um ambiente
	no qual a adição de novas páginas e a modificação de links  &eacute;  menos trabalhosa possível, mantendo em
	mente a liberdade dos programadores num grau adequado.</p>
	<ul><li><b>Estrutura</b></li></ul><a name="estrutura">
	<p>A estrutura do site consiste em três elementos básicos e um opcional. Os elementos básicos sempre deverão fazer
	parte da estrutura de qualquer página criada segundo o layout do site. 
	</p>
	<p>São os elementos básico o Menu, o Cabeçalho (onde está presente o nome e logo do laboratório) e a Página Central. O Menu 
	apesar de ser mandatório ele não precisa ser idêntico em cada página. Por exemplo o site do <?php echo ilink('go'); ?>, note que
	o menu se altera quando você entra nele. Isto é possível devido um argumento passado juntamente 
	com a URL, veja <a href="#modmenu">Modificação do Menu</a>.
	</p>
	<p>O Cabeçalho é o componente superior na página e determina a área em que o visitante está, se assim você desejar, caso contrário 
	ele mostrará o nome do laboratório. Para modificá-lo o procedimento é o mesmo do menu, um argumento junto a URL. Abordarei isto em
	<a href="#modheader">Modificação do cabeçalho</a>.
	</p>
	<p>
	A página central é o pricipal componente do site pois ela contém o assunto, ferramenta e etc. No entanto não há qualquer segredo em
	criar uma página central. Existe também uma pequena caixa de <i>Fast Links</i> que pode ser adicionada à página central, este procedimento
	será abordado em <a href="#mainpage">Criando uma Página Central</a>.
	</p>
	<ul><li><b>Criando uma Página Central</b></li></ul><a name="mainpage">
	<p>
	Existem dois tipos principais de Página Central, uma sem frames e outra com frames. Isto foi feito porque em alguns casos as páginas precisam
	ter controle total sobre o que devem apresentar por exemplo JavaScript e Frames. A ferramenta <?php echo ilink('go'); ?> está em frames porque ela necessita
	criar mais frames.</p>
	<p>A Página Central sem frames chama-se <i>in-line</i>, que 
	na verdade é uma página comum apenas com a adição de bibliotecas em PHP.
	Para criar uma página <i>in-line</i> apenas importe duas bibliotecas como no exemplo:<br>
	</p>
<a name="ex1">
<pre>
&lt;!-- inicio do exemplo --&gt;
&lt;?php require_once("/var/apache/html/bit/includes/main.inc"); ?&gt;
	Esta é a minha página em HTML
&lt;?php $t-&gt;pparse("out","Footer"); ?&gt;
&lt;!-- fim do exemplo --&gt;
</pre>
     	<p><a href="bitlayout_ex1.php">exemplo 1</a></p>
	
	<p>
	Você pode colocar qualquer HTML ou PHP dentro desta página, no entanto lembre-se que todos os tags de abertura de página como
	&lt;BODY&gt; já estão definidos e você na verdade está dentro de uma célula numa tabela. Volte ao <a href="#ex1">exemplo 1</a> e peça
	para o seu Browser mostrar a fonte da página, você notará que existe muito mais código dentro dela do que você havia escrito. 
	Por estar dentro de uma célula você está sujeito a algumas limitações como largura de sua página. Apesar de
	não ter que definir a largura de sua página, não ultrapasse o limite de 650 pixels de largura. Isso acontece porque o site
	tem no máximo 800 pixels de largura para que não cause nenhum transtorno ao nosso visitante que possui um resolução de vídeo menor que
	a mais utilizada no BiT, 1024x768. 
    	</p> 
	<p>
	Caso você queira uma página com a caixa de Fast Links você deve criar uma tabela e colocar esta informação:<br>
   	&lt;?php $t-&gt;pparse("out","LittleBox"); ?&gt; <br>
	na coluna da direita, veja o exemplo abaixo:
	</p>
<a name="ex2">
<pre>
&lt;!-- inicio do exemplo --&gt;
&lt;?php require_once("/var/apache/html/bit/includes/main.inc"); ?&gt;
&lt;!-- BEGIN localfile --&gt;
&lt;table cellpadding="2" cellspacing="2" border="0" width="680"&gt;
   &lt;tr&gt;
      &lt;td class="content" valign="top"&gt;
      Esta é a página com a caixa de Fast Links habilitada.
      &lt;/td&gt;
   <span style="color: #FF0000;" >&lt;?php $t-&gt;pparse("out","LittleBox"); ?&gt;</span>
   &lt;/tr&gt;
&lt;/table&gt;
&lt;!-- END localfile --&gt; 
&lt;?php $t-&gt;pparse("out","Footer"); ?&gt;
&lt;!-- fim do exemplo --&gt;	
</pre>
	<p><a href="bitlayout_ex2.php">exemplo 2</a></p>

	<p>Para trabalhar no esquema de frames basta linkar a sua página para o endereço /bit/frames/?url=/path/to/dir/file.html . Observe
	a página do <?php echo ilink('go'); ?>, e preste atenção na URL. Ela deve ser algo como:</p>
	
	<pre>http://gordon.fmrp.usp.br/bit/frames/?url=/go/</pre>

	<p>Note que você pode criar qualquer página e adicioná-la ao nosso site sem mesmo importar uma biblioteca. No entanto eu acho recomendável
	que você sempre procure criar página <i>in-line</i> ao invés de páginas através de frames, pois com as frames não há controle algum sobre
	o conteúdo da página como os <a href="#dynlink">Links Dinâmicos</a> que veremos mais tarde.

	<ul><li><b>Modificação do Menu</b></li></ul><a name="modmenu">

	<p>Em alguns casos você gostaria de trocar o menu lateral por algo que corresponda melhor à sua página, isso é muito fácil de fazer.
	Você deve primeiro criar o menu baseado no modelo fornecido, veja abaixo:</p>

<pre>
&lt;!-- inicio do exemplo --&gt;
&lt;!-- BEGIN menu_links --&gt;
&lt;td  class="menu" width="130"  height="800" valign="top" &gt;

{ml_home}&lt;br&gt;&lt;br&gt;

&lt;a href=""&gt;Some personal Menu&lt;/a&gt;

&lt;/td&gt;
&lt;!-- END menu_links --&gt;
&lt;!-- fim do exemplo --&gt;
</pre>
	
	<p>Não preste atenção em {ml_home} isto será abordado em <a href="#dynlink">Links Dinâmicos</a>. Depois de criar o seu
	menu coloque ele no seu diretório de preferência  com algum nome válido para URL, pois este nome será colocado no endereço sua página. Agora
	Faça o link para a sua página adicionando o parâmetro <b>menufile</b>, exemplo:</p>

	<pre> http://gordon.fmrp.usp.br/path/to/my/file.php?menufile=/path/to/mymenu.html </pre>

	<p>No momento que sua página for carregada o menu será substituído por aquele que você criou, independentemente se a sua página é
	<i>in-line</i> ou frames. </p>

	<ul><li><b>Modificação do Cabeçalho</b></li></ul><a name="modheader">

	<p>Para modificar o que está escrito no cabeçalho apenas indique qual será o título na URL através do parâmetro <b>title</b>. 
	Por exemplo para adicionar o termo <i>meu_exemplo_3</i> no cabeçalho do <a href="#ex2">exemplo 2</a> eu posso criar um link para:</p>

	<pre>bitlayout_ex2.php?title=meu_exemplo_3</pre>

	<p><a href="bitlayout_ex2.php?title=meu_exemplo_3">exemplo 3</a></p>

	<p>Observe que eu coloquei "meu_exemplo_3"(underline) e foi mostrado "meu exemplo 3"(espaços), este é um pequeno truque para que os
	espaços sejam corretamente colocados em Browsers mais chatos como o Netscape 4.</p>

	<ul><li><b>Links Dinâmicos</b></li></ul><a name="dynlink">

	<p>Um dos maiores benefícios desta nova maneira de construir as páginas são os Links Dinâmicos. Suponha que você coloque em sua página um
	link para um outro projeto dentro do BiT, e por algum motivo este projeto tem que ser trocado de endereço. Qual seria o problema? Para começar
	eu deveria saber onde estão os velhos links e avisar o responsável (você) para modificá-los, ou eu poderia deixar sem modificar os links e ficar
	com uma página cheia de links quebrados. Como a segunda situação não é muito adequada então eu implementei uma maneira com a qual você 
	refere-se a um link pelo seu apelido e uma tabela de conversão de links faz todo o trabalho. </p>
	<p>Existem dois lugares onde os links dinâmicos funcionam no menu e nas páginas <i>in-line</i>. Nas páginas dentro de frames não há maneira
	pois você não importa a biblioteca <b>main.inc</b>, se você importá-la você terá acesso aos links dinâmicos. Os links dinâmicos são referenciados
	de duas maneiras diferentes uma para o Menu e outra para a página.</p>
	<p>Para o Menu você deve adicionar entre chaves o apelido do link, por exemplo <b>{ml_home}</b>, na verdade o apelido está depois do
	underline as letras "ml" significam "Menu Link" e são marcadores para que ocorra a troca correta. Lembra-se da <a href="#modmenu">Modificação do Menu</a>
	 onde eu disse para que você não prestasse atenção em <b>{ml_home}</b>, pois então este é o apelido para o
	 link <?php echo ilink('home') ?>. Quando você criar o seu Menu sempre coloque o <b>{ml_home}</b> para que o
	 visitante possa voltar a página inicial. Para saber quais são os apelidos veja a tabela de <a href="ltable.php">links</a>.</p>
	 
	 <p>Eu havia dito que existem duas maneiras de adicionar links dinâmicos, a segunda maneira é destinada para as páginas e não para o menu. 
	 Para adicionar um link chame a função <b>ilink()</b> dentro de uma página:</p>

	 <pre>&lt;?php echo ilink('home'); ?&gt;</pre>

	 <p>Este código retornará o link correto para a página que responder pelo apelido de home, no caso a página inicial. Se você <a href="#source">olhar o código</a>
	 desta página verá que eu não adicionei nenhum link estático todos são dinâmicos. Existe também a possibilidade de utilizar endereços comuns
	 ao nosso dia a dia e que escrevê-los pode ser um pouco trabalhoso, estes sâo os "external links". Para utilizá-los basta chamar a função <b>elink()</b>,
	 como no exemplo:</p>

	 <pre>&lt;?php echo elink('ncbi'); ?&gt;</pre>

	 <p>O que resultaria nisso: <?php echo elink('ncbi'); ?></p>

	 <p>E se você estiver trabalhando com frames ou quiser abrir uma nova janela? Apenas adicione o <b>target</b> após a chamada da função:</p>

	 <pre>&lt;?php echo elink('ncbi','_blank'); ?&gt;</pre>

	 <p>O que resultaria nisso: <?php echo elink('ncbi','_blank'); ?></p>

	 <p>Lembre-se de sempre que possível utilizar links dinâmicos, principalmente se você achar que eles pode acabar mudando. O critério para 
	 ser incluido na <a href="ltable.php">tabela de conversão</a> não é nada rígido, na verdade qualquer link pode ser incluido desde que ele
	 apareça mais de uma vez e em diferentes páginas dentro site. Os "external links" seguem a mesma regra.</p>

	 
	 
	 
	 
	 <ul><li><b>Mais do que você realmente precisa saber</b></li></ul><a name="more">

	 <p>1. O site também pode alternar em fontes <b>CSS (Cascade Style Sheet)</b>, se por algum motivo o estilo da página não
	 estiver colaborando você pode anulá-lo adicionando o parâmetro <b>style=nosyle.css</b> a URL. Veja esta página <a href="bitlayout.php?style=/bit/styles/nostyle.css">sem CSS.</a> E se você quiser utilizar o seu próprio estilo basta criar o arquivo em CSS  e colocar o nome e caminho  dele na URL. Como <a href="bitlayout.php?style=/bit/styles/example.css&title=Brazillian_Style">neste exemplo</a> que tornará a sua barra lateral amarela, as letras vermelhas e a barra de título verde (bonito pacas).</p>
	 <p>2. Mais informações (técnicas) podem ser vistas <a href="bitlayout_tec.php">aqui.</a></p>

	<p><a href="/bit/staff.php#valtas">Autor: Marco Aurélio Valtas Cunha - 01/02/2002</a></p>
	<p>
	$Revision: 1.9 $
	</p>

      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<a name="source" >
<?php $t->pparse("out","Footer"); ?>
