<!--<?php
// $Log: ltable.php,v $
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
<p class="newsboxtitle">Tabela de conversão de links</p>

<table cellpadding="2" cellspacing="2" border="1" width="660">
<tr>
	<td colspan="3" style="text-align: center; background-color:3366cc;color: #FFFFFF;">Links internos</td>
</tr>
<tr>
	<div style="text-align: center;" >
	<td>Apelido</td>
	<td width="200" >URL</td>
	<td>Nome retornado</td>
</tr>
	</div>
<?php
//Temos que desreferenciar todas as variáveis em links.
function print_links ($ilink) {

$mylinks=get_links($ilink);

	while(list($apelido) =  each($mylinks) ) {
		echo "<tr>"; // começando nossa linha
		echo "<td>$apelido</td>";
		while (list($indice,$nome) = each ($mylinks[$apelido]) ) {
			echo "<td>$nome</td>";
		}
		echo "</tr>";
	}
}

?>
<?php print_links(true); ?>
<tr>
	<td colspan="3" style="text-align: center;background-color: #3366cc; color: #FFFFFF;">Links Externos</td>
</tr>
<tr>
	<div style="text-align: center;" >
	<td>Apelido</td>
	<td width="200" >URL</td>
	<td>Nome retornado</td>
</tr>
	</div>
<?php print_links(false); ?>

</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
