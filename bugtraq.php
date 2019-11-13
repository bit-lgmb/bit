<!--<?php
// $Log$
// $Name$
// $Author$
?> -->
<?php require_once("includes/main.inc"); ?>
<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">BiT Bugtraq</p>
      <p class="newsbox">
		O BiT possui um sistema de <a href='http://lbc2.fmrp.usp.br/mantis/'>bugtraq</a> que � utilizado
		para acompanhar o desenvolvimento dos software e projetos, e tamb�m para ajudar na solu��o
		de problemas nestes mesmos softwares. Saber utilizar o sistema para informar problemas
		encontrados � de muita ajuda para a solu��o dos mesmos.
      
		<ol>
			<li><a href='#oqueebug'>O que � um <b>bug</b>?</a></li>
		 	<li><a href='#oquee'>O que � um <b>bugtraq</b>?</a></li>
			<li><a href='#quandoreportar'>Quando devo reportar um bug?</a></li>
			<li><a href='#comoreportar'>Como devo reportar um bug?</a></li>
		</ol>

		<p><b><a name='oqueebug'></a>O que � um bug?</b></p>
		<p><b>Bug</b> � o termo utilizado pelos programadores de computador
		para se referir � um problema no computador ou no software. Geralmente
		os <b>bugs</b> aparecem quando um usu�rio est� utilizando um software e 
		percebe que h� algo de errado, assim ele informa o programador do problema
		e este tenta resolv�-lo. Como os <b>bugs</b> s�o pequenos problemas a serem
		resolvidos eles passaram a ser os guias para o desenvolvimento de um software.
		Hoje � muito comum utilizar <b>bugs</b> como 'tarefas a fazer', e hoje <b>bugs</b>
		podem n�o ser somente problemas e sim requisi��es, como um novo layout para um programa
		e assim por diante.
		</p>

		<p><b><a name='oquee'></a>O que � um bugtraq?</b></p>
		<p>O bugtraq � um programa que os desenvolvedores utilizam para acompanhar
		a solu��o de um bug. Nele � poss�vel saber todo o hist�rico de um bug
        e tamb�m relacion�-lo a outros bugs do sistema.
		</p>

		<p><b><a name='quandoreportar'></a>Quando devo reportar um bug?</b></p>

		<p>Sempre que voc� achar que encontrou um bug. Se o software n�o
		est� fazendo o que deveria fazer, se ele termina inesperadamente ou 
		se voc� acha que ele deve melhorar em um certo aspecto, essas j� s�o raz�es
		suficientes para reportar um bug.
		</p>
	
		<p><b><a name='comoreportar'></a>Como devo reportar um bug?</b></p>

		<p>Reportar um bug consiste em alguns passos:<br>
			<ul>
				<li>Reconhecer o bug</li>
				<li>Entrar no sistema de bugtraq</li>
				<li>Acompanhar as bugnotes</li>
			</ul>
		</p>

		<p>Reconhecer o bug</p>
		<p>Nesse momento voc� deve reconhecer o bug, ou seja, al�m de ter alguma
		certeza de que encontrou um problema, voc� deve tantar coletar o maior n�mero
		de informa��es sobre o bug. Por exemplo, qual software que voc� est� trabalhando?
		Em que sistema voc� est� utilizando Windows, Linux,...? Voc� est� utilizando
		algum navegador para acessar o projeto? Qual? E assim por diante. Principalmente
		os 'passos para a reprodu��o' s�o as informa��es mais valiosas, pois com elas
		o programador poder� reproduzir o problema e assim ficar� muito mais f�cil
		de solucion�-lo.
		</p>

		<p>Entrar no sistema de bugtraq</p>
		<p>
		O sistema � <a href='http://lbc2.fmrp.usp.br/mantis/'>online</a> se voc� n�o possui uma conta
		no sistema dever� criar uma. Depois de criar voc� deve encontrar o projeto que refere-se ao
		software onde voc� encontrou o bug (veja a caixa de sele��o no canto superior direito da tela).
		Normalmente o erro apresentado no software ir� indicar isso
		para voc�. Mas caso contr�rio � f�cil reconhecer os projetos e etc. <br>
		Depois de selecionar o projeto, basta clicar em '<b>Report Bug</b>' e come�ar a preencher o formul�rio. 
		Nem todas as informa��es
		s�o obrigat�rias, mas quanto mais informa��es voc� conseguir preencher mais r�pido o bug poder� 
		ser solucionado.
		Note que para cada projeto existem um conjunto de <b>Categorias</b>, ou seja, que parte 
		do projeto est� apresentando o bug, essa � uma informa��o importante para a solu��o de um bug.
		Sempre utilize t�tulos esclarecedores e n�o t�tulos obscuros como 'Problemas', 'Defeito' e etc. Prefira
		algo como 'Upload n�o funciona para arquivos ZIP'.<br>
		Sobre '<b>Severidade</b>' e '<b>Prioridade</b>' existem links
		que lhe ajudar�o a decidir qual escolher.
		Ap�s preencher um bug, a ele ser� associado um n�mero, este n�mero � �nico e � 
		bom que voc� o anote para poder encontrar seu bug mais rapidamente.
		</p>

		<p>Acompanhar as bugnotes</p>
		<p>
		Ao longo do processo de solu��o de um bug, os desenvolvedores podem conversar sobre ele, isso �
		feito por interm�dio de <b>bugnotes</b>, ou seja, pequenas notas que os desenvolvedores e voc�
		podem acrescentar ao hist�rico do bug. Nas bugnotes poder�o ser feitas mais perguntas sobre
		como o bug ocorreu e etc. Portanto � muito importante que voc� acompanhe a "vida" de seu bug.
		</p>

		<p>
		Para saber mais sobre Bug report visite <a href='http://www.chiark.greenend.org.uk/~sgtatham/bugs.html'>http://www.chiark.greenend.org.uk/~sgtatham/bugs.html</a>
		</p>
     
      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
