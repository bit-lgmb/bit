<!--<?php
// $Log: edit_current.php,v $
// Revision 1.1  2002/02/25 14:09:27  mavcunha
// Added some docs about edit page
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("../includes/main.inc"); ?>
<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Utilizando o "edit"</p>
      <p class="newsbox">
      	<p>Em algumas p�ginas � poss�vel editar o seu conte�do. A figura 1 mostra um link "[ edit ]" na 
	p�gina <?php echo ilink('current'); ?>.</p>
	<p><img src="../images/edit_current.png" alt="Edit link current" >
	<br><small>Figura 1: Link para a edi��o do arquivo</small></p>
	<p>Ao clicar neste link uma textarea ser� aberta com o conte�do da p�gina, l� voc� poder� alterar, 
	adicionar ou remover um  link. Edite o conte�do de interesse e pressione "Salve File" e ent�o o novo
	link estar� dispon�vel.</p>
	<p style='color: #C00;'>Aten��o: mesmo que n�o haja altera��o da p�gina sempre pressione "Salve File" para sair 
	da p�gina de edi��o.</p>
	<p>Caso voc� encontre o arquivo travado atrav�s de um "lock" certifique-se que ningu�m esteja realmente editando o 
	arquivo, se houver algu�m editando o arquivo espere a pessoa terminar e ent�o comece a editar o arquivo. Se n�o 
	houver ningu�m editando o arquivo clique no link da mensagem de erro e ent�o o "lock" ser� removido e edite normalmente 
	o arquivo.</p>

	
     
      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
