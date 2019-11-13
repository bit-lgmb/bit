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

  Copyright (C) 2002  Funda��o Hemocentro de Ribeir�o Preto

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
/* $Id: seminars_ctc.php,v 1.1 2003/09/17 20:39:25 mavcunha Exp $ */
?>
<?php require_once("includes/main.inc"); ?>
<?php include('includes/seminars.inc'); ?>

<?php

// Seminars data!

$seminars = array (
"11/11/2004" => "Profa. Adriana C. Bonomo#M�dica -  Doutora em Ci�ncias/ L�der do Grupo de Linf�citos T e Hematopoiese/ Pesquisadora Especial do Instituto Nacional do C�ncer-INCA/ Profa. Adjunta do Depto de Imunologia do Instituto de  Microbiologia - UFRJ#Influ�ncia do G-CSF no GVHD p�s-TMO", 
"02/09/2004" => "Dra.�rika de Meirelles Kalill#Doutora em Traumatologia e Ortopedia - USP - SP, Coordenadora da linha de pesquisa de c�lula tronco em les�o medular ,Departamento de Ortopedia e Traumatologia - USP#Neuroregenera��o por celulas Tronco",
"16/09/2004" => "Dra.Daniela M.Ushizima Sabino#Doctorate - Cybernetic Vision Research Group Institute of Physics in Sao Carlos, University of Sao Paulo#Diagn�stico de leucemia linf�ide auxiliado por computador",
"30/09/2004" => "Dra Dannielle Fernandes Godoi#Doutoranda do Depto de Cl�nica M�dica-FMRP-USP, Unidade de Transplante de Medula �ssea HCFMRP-USP#Modelos Experimentais de Transplante de C�lulas Tronco em doen�as autoimunes e inflamat�rias",
"07/10/2004" => "Prof. Igor Polikarpov#Laborat�rio de Cristalografia de Prote�nas Instituto de F�sica de S�o Carlos-USP# Estudos Estruturais de Receptores Nucleares e Suas Aplica��es para Desenvolvimento de Novos F�rmacos",
"14/10/2004" => "Profa.Belinda P. Sim�es#Docente do Depto de Cl�nica M�dica -HC-FMRP-USP#Imunidade Inata e o C�ncer ",
"21/10/2004" => "Profa. Clarisse Martins Machado#Pesquisadora do Laborat�rio de Virologia do Instituto de Medicina Tropical de S�o Paulo , - USP#Vacina��o em pacientes imunossuprimidos",
"16/09/2004" => "Daniela M.Ushizima Sabino, MSc#Doctorate - Cybernetic Vision Research Group - Institute of Physics in Sao Carlos, University of Sao Paulo#Diagn�stico de leucemia linf�ide auxiliado por computador",
"12/08/2004" => "Paulo Lee Ho# # Vacina de HPV em Lactobacilus e levedura",
"05/08/2004" => "Paul Travers#Anthony Nolan Research Institute-London - Uk#Immunoreconstitution after hematopoietic  stem cell transplantation: relevance for basic immunology and for clinical outcome",
"24/06/2004" => "Prof. Acary Oliveira#Professor de Neurologia da UNIFESP-SP e Diretor cient�fico da Assoc. Brasileira de Esclerose Lateral Amiotr�fica-ABRELA#Esclerose lateral amiotr�fica: classifica��o, patog�nese, diagn�stico e perspectivas terap�uticas",
"17/06/2004" => "Prof. Dr.Rommel Burbano#Professor Adjunto da Universidade Federal do Par�/Laborat�rio de Gen�tica Humana # Gen�tica do C�ncer de  Est�mago",
"03/06/2004" => "Luis Eduardo Coelho de Andrade#Universidade Federal de S�o Paulo, Departamento de Medicina - UNIFESP/EPM<br>Apoio: INOVA Scientific #Auto-anticorpos em doen�as reum�ticas: atualiza��o e revis�o de paradigmas",
"27/05/2004" => "Prof. Eduardo Antonio Donadi#Professor Associado do Departamento de Cl�nica M�dica - Divis�o de Imunologia Cl�inica -FMRP-USP#Express�o de mol�culas sinalizat�rias em pacientes com lupus eritematoso sist�mico",
"20/05/2004" => "Guilherme Rodrigues Vilela#Depto F�sica Matem�tica e Estat�stica#Avalia��o volum�trica de �rg�os a partir de Imagens por Resson�ncia Magn�tica.",
"29/04/2004" =>  "# #<font color='red'>Cancelada</font>",
"22/04/2004" => "Hamilton Luiz Gimenes Teixeira#P�s-Graduando do Depto de Cl�nica M�dica Lab Hemato-HCFMRP-USP#Estudo por T�cnica de Macroarray da Express�o G�nica Induzida pelo �cido All-/<i>trans</i>/ Retin�ico, pela Tricostatina A e pela Associa��o entre Destas em C�lulas da Leucemia Promieloc�tica Aguda",
"15/04/2004" => "Prof. Dr.Iuri Drumond Louro#UFES -Universidade Federal do Esp�rito Santo<br>Apoio: INOVA Scientific#An�lise da Sensibilidade Tumoral ao Imunosupressor Rapamicina",
"01/04/2004" => "Prof. Dr.Oswaldo Keith Okamoto#Pesquisador do Instituto de Ensino e Pesquisa Albert Einstein - P�s-doutorado em gen�mica pela Harvard University#Gen�mica funcional e aplica��o terap�utica de c�lulas-tronco",
"04/03/2004" => "Prof. Dr Lewis Joel Greene#Prof. Titular do depto de biologia celular e molecular e agentes patog�nicos FMRP-USP#Proteomica - Nova Abordagem Experimental na Pesquisa Biomedica",
"11/03/2004" => "Dra. Karen Lima Prata#M�dica Hematologista e Hemoterap�uta, P�s-graduanda do Depto de Cl�nica M�dica-FMRP-USP#Mobiliza��o de C�lulas Tronco Hematopo�ticas - Revis�o da literatura e an�lise dos resultados do Servi�o",
"18/03/2004" => "Prof. Dr.Marcio Nucci#Professor Adjunto da Disciplina de Hematologia Depto de Cl�nica M�dica, Faculdade de Medicina - Universidade Federal do Rio de Janeiro#Infec��es Fungicas em pacientes imunossuprimidos",
"25/03/2004" => "Profa.Belinda P. Sim�es#Docente Depto de Cl�nica M�dica, HC-FMRP-USP#Bi20 (CD20XCD3) Um novo anticorpo Biespec�fico no tratamento de doen�as linf�ides B",
"27/11/2003" => "Dr. Luiz Fernando Bouzas#INCA#Transplante de sangue de cord�o umbilical no Brasil",
"20/11/2003" => "Profa. Rita Zorzenon#Doutora em F�sica do Departamento de F�sica da UFPE - P�s-Doutorado na Ecole Normale Sup�rieure de Paris-Fran�a#Modelagem matem�tica da din�mica de infec��o pelo HIV",
"13/11/2003" => "Prof.Richard Burt#Director, Division of Immunotherapy, Northwestern University Chicago- USA#Mechanisms of stem cell therapy for AID - Immune reconstitution after hematopoietic stem cell transplantation (HSCT) for AID",
//"06/11/2003" => "Dra. Karen Lima Prata##Mobiliza��o de C�lulas Precursoras Hematopo�ticas - Revis�o",
"09/10/2003"  =>"Prof.Leolpoldo Meis#Depto de Bioqu�mica M�dica/Instit. De Ci�nicas Biom�dicas-Centro de Ci�ncias da Sa�de -UFRJ-#Estresses x produtividade cient�fica no Brasil",
//"11/12/2003"  =>"Prof. Marco Segre#IML-USP#Aspectos �ticos do in�cio da vida",
"04/12/2003"  =>"Profa. Mari Sogayar#IQ-USP#A caminho da terapia celular do diabetes mellitus tipo I",
"09/10/2003"  =>"Prof. Dr. Leopoldo de Meis#Departamento de Bioqu�mica M�dica - Instituto de Ci�ncias Biom�dicas - UFRJ#Estresse x produtividade cient�fica no Brasil",
"26/06/2003"   => "Prof. Celso Massumoto#Hospital S�rio-Liban�s#Imunoterapia celular em neoplasias s�lidas Unidade de TMO",
"05/06/2003" => "Prof. Dr. Jos� Eduardo Tanus dos Santos#Docente do Depto de Farmacologia - FMRP - USP#Poss�veis implica��es cl�nicas e funcionais de polimorfismos gen�ticos da sintetase endotelial do �xido n�trico",
"07/08/2003" => "Carlos Henrique Tomish de Paula da Silva#Pr�-Doc da Faculdade de Ci�ncias Farmac�uticas de Ribeir�o Preto - USP#Planejamento racional de f�rmacos em terapia de c�ncer",
"22/05/2003" => "Dra. Magda M. Carneiro Sampaio#Instituto de Ci�ncias Biom�dicas USP-SP#Prote��o Mediada pela IgA do leite humano contra  diarr�ias por <i>E.coli</i>",
"29/05/2003" => "Dra. Margarida Maria da Silveira#Presidente Prudente#Anemia no doador de sangue",
"15/05/2003" => "Dr. Armando Vallada Vercezi#Doutorando USP - Gerente Geral Farmac�utico; JP - Ind�stria Farmac�utica - Rib. Preto#Tecnologia de pol�meros para bolsas de sangue",
"24/04/2003" => "Prof. Dr. Mauricio Zaparolli#Professor da Faculdade de Medicina de Mar�lia#Aprendizagem baseada em problemas (PBL); experi�ncia da Faculdade de Medicina de Mar�lia",
"03/04/2003" => "Camillo Del Cistia Andrade#Mestre em Gen�tica pela UFSCar e Doutorando da Gen�tica-FMRP-USP#Express�o heter�loga, purifica��o ensaios de cristaliza��o da DSCR1; Uma prote�na envolvida com a S�ndrome de Down",
"13/03/2003" => "Prof. Antonio Adilton Oliveira Carneiro#Doutor em ci�ncias pela  USP e p�s-doutorando junto ao Depto de Cl�nica M�dica-FMRP-USP#M�todos n�o invasivos de quantificar o n�vel de ferro hep�tico",
"10/04/2003" => "Dr. Luiz Carlos de Mattos#Faculdade de Medicina de S. J. Rio Preto#Sistema de grupo sang��neo Lewis e infec��o pelo H. Pylory",
"20/03/2003" => "Prof. Geraldo Passos#Prof. Associado (Gen�tica)-  Grupo de Imunogen�tica Molecular -  Departamento de Gen�tica FMRP e FORP#Perf�s de Express�o G�nica de Linf�citos T de Pacientes com L�pus Eritematoso Sist�mico",
"27/03/2003" => "Prof. Eduardo Magalh�es Rego#M�dico Assistente - Depto de Cl�nica M�dica- FMRP e Pesquisador CTC/CEPID/FAPESP#Anormalidades da g�nese de ribossomos e c�ncer- li��es do modelo animal de desceratose cong�nita"
);

?>

<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Seminars</p>
      <p>All CTC seminars are at 12:30 in the <span style="color: #990000">red room</span>.</p>
      <p>You can see all <a href='/bit/seminars_ctc.php?title=CTC_Seminars&dpast=1'>Past Seminars here.</a></p> 
	
	<!-- Processando semin�rios -->
	<?php 
		$seminars_array = display_papers($seminars); 
		

		$counter=0;
		foreach($seminars_array as $current_seminars){
			if(IsSet($current_seminars)){

                ksort($current_seminars);
                reset($current_seminars);

				if($counter==2 and !IsSet($dpast)) { continue; }//skipping past seminars.

				echo "<p class='newsboxtitleblue'>$s_time[$counter]</p>";
				echo "<table border='0' cellspacing='5' style='font-family: Verdana, Arial, Helvetica, sans; font-size: 10px;' width='100%'>";
				while(list($key,$val) = @each($current_seminars)){
					print render_line($key,name_convert($val));
				}

				echo '</table>';
				echo '<br>';
			}
			$counter++;	
		}

	?>
	</td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>



