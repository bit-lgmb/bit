<?php
/*
              INGLÊS/ENGLISH
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
  http://www.gnu.org/copyleft/gpl.html


             PORTUGUÊS/PORTUGUESE
  Este programa é distribuído na expectativa de ser útil aos seus
  usuários, porém NÃO TEM NENHUMA GARANTIA, EXPLÍCITAS OU IMPLÍCITAS,
  COMERCIAIS OU DE ATENDIMENTO A UMA DETERMINADA FINALIDADE.  Consulte
  a Licença Pública Geral GNU para maiores detalhes.
  http://www.gnu.org/copyleft/gpl.html

  Copyright (C) 2003  Fundação Hemocentro de Ribeirão Preto

  Laboratório de Bioinformática
  BiT -  Bioinformatic Team
  Fundação Hemocentro de Ribeirão Preto
  Rua Tenente Catão Roxo, 2501
  Ribeirão Preto - São Paulo
  Brasil
  CEP 14051-140
  Fone: 55 16 39639300 Ramal 9603

  Marco Aurélio Valtas Cunha 
  mavcunha@bit.fmrp.usp.br
  http://bit.fmrp.usp.br
*/
?>
<?php
/* $Id$ */
include('http://lbc2.fmrp.usp.br/BIP/biti_soap.inc');
include('http://lbc2.fmrp.usp.br/BIP/biti_auth.inc');

$inter = new BiTInterface();
$auth  = new BiTAuth('auth_test',$inter);

$auth->check();

echo "Login validated<br><br>";
echo $inter->issue('auth_session')."<br>";
echo $inter->issue('auth_domain')."<br>";
echo $inter->issue('auth_username')."<br>";

echo "<br><a href=''>Reload</a>";

?>

