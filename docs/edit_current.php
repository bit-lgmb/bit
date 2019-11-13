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
      	<p>Em algumas páginas é possível editar o seu conteúdo. A figura 1 mostra um link "[ edit ]" na 
	página <?php echo ilink('current'); ?>.</p>
	<p><img src="../images/edit_current.png" alt="Edit link current" >
	<br><small>Figura 1: Link para a edição do arquivo</small></p>
	<p>Ao clicar neste link uma textarea será aberta com o conteúdo da página, lá você poderá alterar, 
	adicionar ou remover um  link. Edite o conteúdo de interesse e pressione "Salve File" e então o novo
	link estará disponível.</p>
	<p style='color: #C00;'>Atenção: mesmo que não haja alteração da página sempre pressione "Salve File" para sair 
	da página de edição.</p>
	<p>Caso você encontre o arquivo travado através de um "lock" certifique-se que ninguém esteja realmente editando o 
	arquivo, se houver alguém editando o arquivo espere a pessoa terminar e então comece a editar o arquivo. Se não 
	houver ninguém editando o arquivo clique no link da mensagem de erro e então o "lock" será removido e edite normalmente 
	o arquivo.</p>

	
     
      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
