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
		O BiT possui um sistema de <a href='http://lbc2.fmrp.usp.br/mantis/'>bugtraq</a> que é utilizado
		para acompanhar o desenvolvimento dos software e projetos, e também para ajudar na solução
		de problemas nestes mesmos softwares. Saber utilizar o sistema para informar problemas
		encontrados é de muita ajuda para a solução dos mesmos.
      
		<ol>
			<li><a href='#oqueebug'>O que é um <b>bug</b>?</a></li>
		 	<li><a href='#oquee'>O que é um <b>bugtraq</b>?</a></li>
			<li><a href='#quandoreportar'>Quando devo reportar um bug?</a></li>
			<li><a href='#comoreportar'>Como devo reportar um bug?</a></li>
		</ol>

		<p><b><a name='oqueebug'></a>O que é um bug?</b></p>
		<p><b>Bug</b> é o termo utilizado pelos programadores de computador
		para se referir à um problema no computador ou no software. Geralmente
		os <b>bugs</b> aparecem quando um usuário está utilizando um software e 
		percebe que há algo de errado, assim ele informa o programador do problema
		e este tenta resolvê-lo. Como os <b>bugs</b> são pequenos problemas a serem
		resolvidos eles passaram a ser os guias para o desenvolvimento de um software.
		Hoje é muito comum utilizar <b>bugs</b> como 'tarefas a fazer', e hoje <b>bugs</b>
		podem não ser somente problemas e sim requisições, como um novo layout para um programa
		e assim por diante.
		</p>

		<p><b><a name='oquee'></a>O que é um bugtraq?</b></p>
		<p>O bugtraq é um programa que os desenvolvedores utilizam para acompanhar
		a solução de um bug. Nele é possível saber todo o histórico de um bug
        e também relacioná-lo a outros bugs do sistema.
		</p>

		<p><b><a name='quandoreportar'></a>Quando devo reportar um bug?</b></p>

		<p>Sempre que você achar que encontrou um bug. Se o software não
		está fazendo o que deveria fazer, se ele termina inesperadamente ou 
		se você acha que ele deve melhorar em um certo aspecto, essas já são razões
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
		<p>Nesse momento você deve reconhecer o bug, ou seja, além de ter alguma
		certeza de que encontrou um problema, você deve tantar coletar o maior número
		de informações sobre o bug. Por exemplo, qual software que você está trabalhando?
		Em que sistema você está utilizando Windows, Linux,...? Você está utilizando
		algum navegador para acessar o projeto? Qual? E assim por diante. Principalmente
		os 'passos para a reprodução' são as informações mais valiosas, pois com elas
		o programador poderá reproduzir o problema e assim ficará muito mais fácil
		de solucioná-lo.
		</p>

		<p>Entrar no sistema de bugtraq</p>
		<p>
		O sistema é <a href='http://lbc2.fmrp.usp.br/mantis/'>online</a> se você não possui uma conta
		no sistema deverá criar uma. Depois de criar você deve encontrar o projeto que refere-se ao
		software onde você encontrou o bug (veja a caixa de seleção no canto superior direito da tela).
		Normalmente o erro apresentado no software irá indicar isso
		para você. Mas caso contrário é fácil reconhecer os projetos e etc. <br>
		Depois de selecionar o projeto, basta clicar em '<b>Report Bug</b>' e começar a preencher o formulário. 
		Nem todas as informações
		são obrigatórias, mas quanto mais informações você conseguir preencher mais rápido o bug poderá 
		ser solucionado.
		Note que para cada projeto existem um conjunto de <b>Categorias</b>, ou seja, que parte 
		do projeto está apresentando o bug, essa é uma informação importante para a solução de um bug.
		Sempre utilize títulos esclarecedores e não títulos obscuros como 'Problemas', 'Defeito' e etc. Prefira
		algo como 'Upload não funciona para arquivos ZIP'.<br>
		Sobre '<b>Severidade</b>' e '<b>Prioridade</b>' existem links
		que lhe ajudarão a decidir qual escolher.
		Após preencher um bug, a ele será associado um número, este número é único e é 
		bom que você o anote para poder encontrar seu bug mais rapidamente.
		</p>

		<p>Acompanhar as bugnotes</p>
		<p>
		Ao longo do processo de solução de um bug, os desenvolvedores podem conversar sobre ele, isso é
		feito por intermédio de <b>bugnotes</b>, ou seja, pequenas notas que os desenvolvedores e você
		podem acrescentar ao histórico do bug. Nas bugnotes poderão ser feitas mais perguntas sobre
		como o bug ocorreu e etc. Portanto é muito importante que você acompanhe a "vida" de seu bug.
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
