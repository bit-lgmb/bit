<?php
/*
              INGL�S/ENGLISH
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
  http://www.gnu.org/copyleft/gpl.html


             PORTUGU�S/PORTUGUESE
  Este programa � distribu�do na expectativa de ser �til aos seus
  usu�rios, por�m N�O TEM NENHUMA GARANTIA, EXPL�CITAS OU IMPL�CITAS,
  COMERCIAIS OU DE ATENDIMENTO A UMA DETERMINADA FINALIDADE.  Consulte
  a Licen�a P�blica Geral GNU para maiores detalhes.
  http://www.gnu.org/copyleft/gpl.html

  Copyright (C) 2003  Funda��o Hemocentro de Ribeir�o Preto

  Laborat�rio de Bioinform�tica
  BiT -  Bioinformatic Team
  Funda��o Hemocentro de Ribeir�o Preto
  Rua Tenente Cat�o Roxo, 2501
  Ribeir�o Preto - S�o Paulo
  Brasil
  CEP 14051-140
  Fone: 55 16 39639300 Ramal 9603

  Marco Aur�lio Valtas Cunha 
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

