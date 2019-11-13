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
		<li><b><a href="#update">Atualiza��es</a></b></li>
		<li><b><a href="#introducao">Introdu��o</a></b></li>
		<li><b><a href="#mainpage">Criando uma P�gina Central</a></b></li>
		<li><b><a href="#modmenu">Modifica��o do Menu</a></b></li>
		<li><b><a href="#modheader">Modifica��o do Cabe�alho</a></b></li>
		<li><b><a href="#dynlink">Links Din�micos</a></b></li>
		<li><b><a href="#more">Mais do que voc� realmente precisa saber</a></b></li>
	</ul>
	<br><br>
	
	<p class="newsbox">

	 <ul><li><b>Atualiza��es</b></li></ul><a name="update">

	 <p>Mais uma fun��o foi adicionada para a cria��o de links. <b>clink</b> recebe como argumento dois par�metros o primeiro sendo um apelido de link interno (ver <a href="#dynlink">Links Din�micos</a>) e o segundo o nome que voc� quer que seja retornado. Exemplo:

	 <pre>&lt;?php echo clink('staff','Marco Valtas'); ?&gt;</pre>

	 <p>resultado: <?php echo clink('staff','Marco Valtas'); ?></p> 

	 <p>Isto cria um link para a p�gina <?php echo ilink('staff'); ?> por�m com a linha 'Marco Valtas' como link. Se houver a necessidade de criar um link com target basta adicionar mais um argumento a fun��o:

	 <pre>&lt;?php echo clink('staff','Marco Valtas','_blank'); ?&gt;</pre>

	 <p>resultado: <?php echo clink('staff','Marco Valtas','_blank'); ?></p>
	
	<ul><li><b>Introdu��o</b></li></ul><a name="introducao">
	<p>O novo site do BiT foi constru�do em PHP e CSS, com essas tecnologias foi poss�vel criar um ambiente
	no qual a adi��o de novas p�ginas e a modifica��o de links  &eacute;  menos trabalhosa poss�vel, mantendo em
	mente a liberdade dos programadores num grau adequado.</p>
	<ul><li><b>Estrutura</b></li></ul><a name="estrutura">
	<p>A estrutura do site consiste em tr�s elementos b�sicos e um opcional. Os elementos b�sicos sempre dever�o fazer
	parte da estrutura de qualquer p�gina criada segundo o layout do site. 
	</p>
	<p>S�o os elementos b�sico o Menu, o Cabe�alho (onde est� presente o nome e logo do laborat�rio) e a P�gina Central. O Menu 
	apesar de ser mandat�rio ele n�o precisa ser id�ntico em cada p�gina. Por exemplo o site do <?php echo ilink('go'); ?>, note que
	o menu se altera quando voc� entra nele. Isto � poss�vel devido um argumento passado juntamente 
	com a URL, veja <a href="#modmenu">Modifica��o do Menu</a>.
	</p>
	<p>O Cabe�alho � o componente superior na p�gina e determina a �rea em que o visitante est�, se assim voc� desejar, caso contr�rio 
	ele mostrar� o nome do laborat�rio. Para modific�-lo o procedimento � o mesmo do menu, um argumento junto a URL. Abordarei isto em
	<a href="#modheader">Modifica��o do cabe�alho</a>.
	</p>
	<p>
	A p�gina central � o pricipal componente do site pois ela cont�m o assunto, ferramenta e etc. No entanto n�o h� qualquer segredo em
	criar uma p�gina central. Existe tamb�m uma pequena caixa de <i>Fast Links</i> que pode ser adicionada � p�gina central, este procedimento
	ser� abordado em <a href="#mainpage">Criando uma P�gina Central</a>.
	</p>
	<ul><li><b>Criando uma P�gina Central</b></li></ul><a name="mainpage">
	<p>
	Existem dois tipos principais de P�gina Central, uma sem frames e outra com frames. Isto foi feito porque em alguns casos as p�ginas precisam
	ter controle total sobre o que devem apresentar por exemplo JavaScript e Frames. A ferramenta <?php echo ilink('go'); ?> est� em frames porque ela necessita
	criar mais frames.</p>
	<p>A P�gina Central sem frames chama-se <i>in-line</i>, que 
	na verdade � uma p�gina comum apenas com a adi��o de bibliotecas em PHP.
	Para criar uma p�gina <i>in-line</i> apenas importe duas bibliotecas como no exemplo:<br>
	</p>
<a name="ex1">
<pre>
&lt;!-- inicio do exemplo --&gt;
&lt;?php require_once("/var/apache/html/bit/includes/main.inc"); ?&gt;
	Esta � a minha p�gina em HTML
&lt;?php $t-&gt;pparse("out","Footer"); ?&gt;
&lt;!-- fim do exemplo --&gt;
</pre>
     	<p><a href="bitlayout_ex1.php">exemplo 1</a></p>
	
	<p>
	Voc� pode colocar qualquer HTML ou PHP dentro desta p�gina, no entanto lembre-se que todos os tags de abertura de p�gina como
	&lt;BODY&gt; j� est�o definidos e voc� na verdade est� dentro de uma c�lula numa tabela. Volte ao <a href="#ex1">exemplo 1</a> e pe�a
	para o seu Browser mostrar a fonte da p�gina, voc� notar� que existe muito mais c�digo dentro dela do que voc� havia escrito. 
	Por estar dentro de uma c�lula voc� est� sujeito a algumas limita��es como largura de sua p�gina. Apesar de
	n�o ter que definir a largura de sua p�gina, n�o ultrapasse o limite de 650 pixels de largura. Isso acontece porque o site
	tem no m�ximo 800 pixels de largura para que n�o cause nenhum transtorno ao nosso visitante que possui um resolu��o de v�deo menor que
	a mais utilizada no BiT, 1024x768. 
    	</p> 
	<p>
	Caso voc� queira uma p�gina com a caixa de Fast Links voc� deve criar uma tabela e colocar esta informa��o:<br>
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
      Esta � a p�gina com a caixa de Fast Links habilitada.
      &lt;/td&gt;
   <span style="color: #FF0000;" >&lt;?php $t-&gt;pparse("out","LittleBox"); ?&gt;</span>
   &lt;/tr&gt;
&lt;/table&gt;
&lt;!-- END localfile --&gt; 
&lt;?php $t-&gt;pparse("out","Footer"); ?&gt;
&lt;!-- fim do exemplo --&gt;	
</pre>
	<p><a href="bitlayout_ex2.php">exemplo 2</a></p>

	<p>Para trabalhar no esquema de frames basta linkar a sua p�gina para o endere�o /bit/frames/?url=/path/to/dir/file.html . Observe
	a p�gina do <?php echo ilink('go'); ?>, e preste aten��o na URL. Ela deve ser algo como:</p>
	
	<pre>http://gordon.fmrp.usp.br/bit/frames/?url=/go/</pre>

	<p>Note que voc� pode criar qualquer p�gina e adicion�-la ao nosso site sem mesmo importar uma biblioteca. No entanto eu acho recomend�vel
	que voc� sempre procure criar p�gina <i>in-line</i> ao inv�s de p�ginas atrav�s de frames, pois com as frames n�o h� controle algum sobre
	o conte�do da p�gina como os <a href="#dynlink">Links Din�micos</a> que veremos mais tarde.

	<ul><li><b>Modifica��o do Menu</b></li></ul><a name="modmenu">

	<p>Em alguns casos voc� gostaria de trocar o menu lateral por algo que corresponda melhor � sua p�gina, isso � muito f�cil de fazer.
	Voc� deve primeiro criar o menu baseado no modelo fornecido, veja abaixo:</p>

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
	
	<p>N�o preste aten��o em {ml_home} isto ser� abordado em <a href="#dynlink">Links Din�micos</a>. Depois de criar o seu
	menu coloque ele no seu diret�rio de prefer�ncia  com algum nome v�lido para URL, pois este nome ser� colocado no endere�o sua p�gina. Agora
	Fa�a o link para a sua p�gina adicionando o par�metro <b>menufile</b>, exemplo:</p>

	<pre> http://gordon.fmrp.usp.br/path/to/my/file.php?menufile=/path/to/mymenu.html </pre>

	<p>No momento que sua p�gina for carregada o menu ser� substitu�do por aquele que voc� criou, independentemente se a sua p�gina �
	<i>in-line</i> ou frames. </p>

	<ul><li><b>Modifica��o do Cabe�alho</b></li></ul><a name="modheader">

	<p>Para modificar o que est� escrito no cabe�alho apenas indique qual ser� o t�tulo na URL atrav�s do par�metro <b>title</b>. 
	Por exemplo para adicionar o termo <i>meu_exemplo_3</i> no cabe�alho do <a href="#ex2">exemplo 2</a> eu posso criar um link para:</p>

	<pre>bitlayout_ex2.php?title=meu_exemplo_3</pre>

	<p><a href="bitlayout_ex2.php?title=meu_exemplo_3">exemplo 3</a></p>

	<p>Observe que eu coloquei "meu_exemplo_3"(underline) e foi mostrado "meu exemplo 3"(espa�os), este � um pequeno truque para que os
	espa�os sejam corretamente colocados em Browsers mais chatos como o Netscape 4.</p>

	<ul><li><b>Links Din�micos</b></li></ul><a name="dynlink">

	<p>Um dos maiores benef�cios desta nova maneira de construir as p�ginas s�o os Links Din�micos. Suponha que voc� coloque em sua p�gina um
	link para um outro projeto dentro do BiT, e por algum motivo este projeto tem que ser trocado de endere�o. Qual seria o problema? Para come�ar
	eu deveria saber onde est�o os velhos links e avisar o respons�vel (voc�) para modific�-los, ou eu poderia deixar sem modificar os links e ficar
	com uma p�gina cheia de links quebrados. Como a segunda situa��o n�o � muito adequada ent�o eu implementei uma maneira com a qual voc� 
	refere-se a um link pelo seu apelido e uma tabela de convers�o de links faz todo o trabalho. </p>
	<p>Existem dois lugares onde os links din�micos funcionam no menu e nas p�ginas <i>in-line</i>. Nas p�ginas dentro de frames n�o h� maneira
	pois voc� n�o importa a biblioteca <b>main.inc</b>, se voc� import�-la voc� ter� acesso aos links din�micos. Os links din�micos s�o referenciados
	de duas maneiras diferentes uma para o Menu e outra para a p�gina.</p>
	<p>Para o Menu voc� deve adicionar entre chaves o apelido do link, por exemplo <b>{ml_home}</b>, na verdade o apelido est� depois do
	underline as letras "ml" significam "Menu Link" e s�o marcadores para que ocorra a troca correta. Lembra-se da <a href="#modmenu">Modifica��o do Menu</a>
	 onde eu disse para que voc� n�o prestasse aten��o em <b>{ml_home}</b>, pois ent�o este � o apelido para o
	 link <?php echo ilink('home') ?>. Quando voc� criar o seu Menu sempre coloque o <b>{ml_home}</b> para que o
	 visitante possa voltar a p�gina inicial. Para saber quais s�o os apelidos veja a tabela de <a href="ltable.php">links</a>.</p>
	 
	 <p>Eu havia dito que existem duas maneiras de adicionar links din�micos, a segunda maneira � destinada para as p�ginas e n�o para o menu. 
	 Para adicionar um link chame a fun��o <b>ilink()</b> dentro de uma p�gina:</p>

	 <pre>&lt;?php echo ilink('home'); ?&gt;</pre>

	 <p>Este c�digo retornar� o link correto para a p�gina que responder pelo apelido de home, no caso a p�gina inicial. Se voc� <a href="#source">olhar o c�digo</a>
	 desta p�gina ver� que eu n�o adicionei nenhum link est�tico todos s�o din�micos. Existe tamb�m a possibilidade de utilizar endere�os comuns
	 ao nosso dia a dia e que escrev�-los pode ser um pouco trabalhoso, estes s�o os "external links". Para utiliz�-los basta chamar a fun��o <b>elink()</b>,
	 como no exemplo:</p>

	 <pre>&lt;?php echo elink('ncbi'); ?&gt;</pre>

	 <p>O que resultaria nisso: <?php echo elink('ncbi'); ?></p>

	 <p>E se voc� estiver trabalhando com frames ou quiser abrir uma nova janela? Apenas adicione o <b>target</b> ap�s a chamada da fun��o:</p>

	 <pre>&lt;?php echo elink('ncbi','_blank'); ?&gt;</pre>

	 <p>O que resultaria nisso: <?php echo elink('ncbi','_blank'); ?></p>

	 <p>Lembre-se de sempre que poss�vel utilizar links din�micos, principalmente se voc� achar que eles pode acabar mudando. O crit�rio para 
	 ser incluido na <a href="ltable.php">tabela de convers�o</a> n�o � nada r�gido, na verdade qualquer link pode ser incluido desde que ele
	 apare�a mais de uma vez e em diferentes p�ginas dentro site. Os "external links" seguem a mesma regra.</p>

	 
	 
	 
	 
	 <ul><li><b>Mais do que voc� realmente precisa saber</b></li></ul><a name="more">

	 <p>1. O site tamb�m pode alternar em fontes <b>CSS (Cascade Style Sheet)</b>, se por algum motivo o estilo da p�gina n�o
	 estiver colaborando voc� pode anul�-lo adicionando o par�metro <b>style=nosyle.css</b> a URL. Veja esta p�gina <a href="bitlayout.php?style=/bit/styles/nostyle.css">sem CSS.</a> E se voc� quiser utilizar o seu pr�prio estilo basta criar o arquivo em CSS  e colocar o nome e caminho  dele na URL. Como <a href="bitlayout.php?style=/bit/styles/example.css&title=Brazillian_Style">neste exemplo</a> que tornar� a sua barra lateral amarela, as letras vermelhas e a barra de t�tulo verde (bonito pacas).</p>
	 <p>2. Mais informa��es (t�cnicas) podem ser vistas <a href="bitlayout_tec.php">aqui.</a></p>

	<p><a href="/bit/staff.php#valtas">Autor: Marco Aur�lio Valtas Cunha - 01/02/2002</a></p>
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
