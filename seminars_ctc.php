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

  Copyright (C) 2002  Fundação Hemocentro de Ribeirão Preto

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
/* $Id: seminars_ctc.php,v 1.1 2003/09/17 20:39:25 mavcunha Exp $ */
?>
<?php require_once("includes/main.inc"); ?>
<?php include('includes/seminars.inc'); ?>

<?php

// Seminars data!

$seminars = array (
"11/11/2004" => "Profa. Adriana C. Bonomo#Médica -  Doutora em Ciências/ Líder do Grupo de Linfócitos T e Hematopoiese/ Pesquisadora Especial do Instituto Nacional do Câncer-INCA/ Profa. Adjunta do Depto de Imunologia do Instituto de  Microbiologia - UFRJ#Influência do G-CSF no GVHD pós-TMO", 
"02/09/2004" => "Dra.Érika de Meirelles Kalill#Doutora em Traumatologia e Ortopedia - USP - SP, Coordenadora da linha de pesquisa de célula tronco em lesão medular ,Departamento de Ortopedia e Traumatologia - USP#Neuroregeneração por celulas Tronco",
"16/09/2004" => "Dra.Daniela M.Ushizima Sabino#Doctorate - Cybernetic Vision Research Group Institute of Physics in Sao Carlos, University of Sao Paulo#Diagnóstico de leucemia linfóide auxiliado por computador",
"30/09/2004" => "Dra Dannielle Fernandes Godoi#Doutoranda do Depto de Clínica Médica-FMRP-USP, Unidade de Transplante de Medula Óssea HCFMRP-USP#Modelos Experimentais de Transplante de Células Tronco em doenças autoimunes e inflamatórias",
"07/10/2004" => "Prof. Igor Polikarpov#Laboratório de Cristalografia de Proteínas Instituto de Física de São Carlos-USP# Estudos Estruturais de Receptores Nucleares e Suas Aplicações para Desenvolvimento de Novos Fármacos",
"14/10/2004" => "Profa.Belinda P. Simões#Docente do Depto de Clínica Médica -HC-FMRP-USP#Imunidade Inata e o Câncer ",
"21/10/2004" => "Profa. Clarisse Martins Machado#Pesquisadora do Laboratório de Virologia do Instituto de Medicina Tropical de São Paulo , - USP#Vacinação em pacientes imunossuprimidos",
"16/09/2004" => "Daniela M.Ushizima Sabino, MSc#Doctorate - Cybernetic Vision Research Group - Institute of Physics in Sao Carlos, University of Sao Paulo#Diagnóstico de leucemia linfóide auxiliado por computador",
"12/08/2004" => "Paulo Lee Ho# # Vacina de HPV em Lactobacilus e levedura",
"05/08/2004" => "Paul Travers#Anthony Nolan Research Institute-London - Uk#Immunoreconstitution after hematopoietic  stem cell transplantation: relevance for basic immunology and for clinical outcome",
"24/06/2004" => "Prof. Acary Oliveira#Professor de Neurologia da UNIFESP-SP e Diretor científico da Assoc. Brasileira de Esclerose Lateral Amiotrófica-ABRELA#Esclerose lateral amiotrófica: classificação, patogênese, diagnóstico e perspectivas terapêuticas",
"17/06/2004" => "Prof. Dr.Rommel Burbano#Professor Adjunto da Universidade Federal do Pará/Laboratório de Genética Humana # Genética do Câncer de  Estômago",
"03/06/2004" => "Luis Eduardo Coelho de Andrade#Universidade Federal de São Paulo, Departamento de Medicina - UNIFESP/EPM<br>Apoio: INOVA Scientific #Auto-anticorpos em doenças reumáticas: atualização e revisão de paradigmas",
"27/05/2004" => "Prof. Eduardo Antonio Donadi#Professor Associado do Departamento de Clínica Médica - Divisão de Imunologia Clíinica -FMRP-USP#Expressão de moléculas sinalizatórias em pacientes com lupus eritematoso sistêmico",
"20/05/2004" => "Guilherme Rodrigues Vilela#Depto Física Matemática e Estatística#Avaliação volumétrica de órgãos a partir de Imagens por Ressonância Magnética.",
"29/04/2004" =>  "# #<font color='red'>Cancelada</font>",
"22/04/2004" => "Hamilton Luiz Gimenes Teixeira#Pós-Graduando do Depto de Clínica Médica Lab Hemato-HCFMRP-USP#Estudo por Técnica de Macroarray da Expressão Gênica Induzida pelo Ácido All-/<i>trans</i>/ Retinóico, pela Tricostatina A e pela Associação entre Destas em Células da Leucemia Promielocítica Aguda",
"15/04/2004" => "Prof. Dr.Iuri Drumond Louro#UFES -Universidade Federal do Espírito Santo<br>Apoio: INOVA Scientific#Análise da Sensibilidade Tumoral ao Imunosupressor Rapamicina",
"01/04/2004" => "Prof. Dr.Oswaldo Keith Okamoto#Pesquisador do Instituto de Ensino e Pesquisa Albert Einstein - Pós-doutorado em genômica pela Harvard University#Genômica funcional e aplicação terapêutica de células-tronco",
"04/03/2004" => "Prof. Dr Lewis Joel Greene#Prof. Titular do depto de biologia celular e molecular e agentes patogênicos FMRP-USP#Proteomica - Nova Abordagem Experimental na Pesquisa Biomedica",
"11/03/2004" => "Dra. Karen Lima Prata#Médica Hematologista e Hemoterapêuta, Pós-graduanda do Depto de Clínica Médica-FMRP-USP#Mobilização de Células Tronco Hematopoéticas - Revisão da literatura e análise dos resultados do Serviço",
"18/03/2004" => "Prof. Dr.Marcio Nucci#Professor Adjunto da Disciplina de Hematologia Depto de Clínica Médica, Faculdade de Medicina - Universidade Federal do Rio de Janeiro#Infecções Fungicas em pacientes imunossuprimidos",
"25/03/2004" => "Profa.Belinda P. Simões#Docente Depto de Clínica Médica, HC-FMRP-USP#Bi20 (CD20XCD3) Um novo anticorpo Biespecífico no tratamento de doenças linfóides B",
"27/11/2003" => "Dr. Luiz Fernando Bouzas#INCA#Transplante de sangue de cordão umbilical no Brasil",
"20/11/2003" => "Profa. Rita Zorzenon#Doutora em Física do Departamento de Física da UFPE - Pós-Doutorado na Ecole Normale Supérieure de Paris-França#Modelagem matemática da dinâmica de infecção pelo HIV",
"13/11/2003" => "Prof.Richard Burt#Director, Division of Immunotherapy, Northwestern University Chicago- USA#Mechanisms of stem cell therapy for AID - Immune reconstitution after hematopoietic stem cell transplantation (HSCT) for AID",
//"06/11/2003" => "Dra. Karen Lima Prata##Mobilização de Células Precursoras Hematopoéticas - Revisão",
"09/10/2003"  =>"Prof.Leolpoldo Meis#Depto de Bioquímica Médica/Instit. De Ciênicas Biomédicas-Centro de Ciências da Saúde -UFRJ-#Estresses x produtividade científica no Brasil",
//"11/12/2003"  =>"Prof. Marco Segre#IML-USP#Aspectos éticos do início da vida",
"04/12/2003"  =>"Profa. Mari Sogayar#IQ-USP#A caminho da terapia celular do diabetes mellitus tipo I",
"09/10/2003"  =>"Prof. Dr. Leopoldo de Meis#Departamento de Bioquímica Médica - Instituto de Ciências Biomédicas - UFRJ#Estresse x produtividade científica no Brasil",
"26/06/2003"   => "Prof. Celso Massumoto#Hospital Sírio-Libanês#Imunoterapia celular em neoplasias sólidas Unidade de TMO",
"05/06/2003" => "Prof. Dr. José Eduardo Tanus dos Santos#Docente do Depto de Farmacologia - FMRP - USP#Possíveis implicações clínicas e funcionais de polimorfismos genéticos da sintetase endotelial do óxido nítrico",
"07/08/2003" => "Carlos Henrique Tomish de Paula da Silva#Pró-Doc da Faculdade de Ciências Farmacêuticas de Ribeirão Preto - USP#Planejamento racional de fármacos em terapia de câncer",
"22/05/2003" => "Dra. Magda M. Carneiro Sampaio#Instituto de Ciências Biomédicas USP-SP#Proteção Mediada pela IgA do leite humano contra  diarréias por <i>E.coli</i>",
"29/05/2003" => "Dra. Margarida Maria da Silveira#Presidente Prudente#Anemia no doador de sangue",
"15/05/2003" => "Dr. Armando Vallada Vercezi#Doutorando USP - Gerente Geral Farmacêutico; JP - Indústria Farmacêutica - Rib. Preto#Tecnologia de polímeros para bolsas de sangue",
"24/04/2003" => "Prof. Dr. Mauricio Zaparolli#Professor da Faculdade de Medicina de Marília#Aprendizagem baseada em problemas (PBL); experiência da Faculdade de Medicina de Marília",
"03/04/2003" => "Camillo Del Cistia Andrade#Mestre em Genética pela UFSCar e Doutorando da Genética-FMRP-USP#Expressão heteróloga, purificação ensaios de cristalização da DSCR1; Uma proteína envolvida com a Síndrome de Down",
"13/03/2003" => "Prof. Antonio Adilton Oliveira Carneiro#Doutor em ciências pela  USP e pós-doutorando junto ao Depto de Clínica Médica-FMRP-USP#Métodos não invasivos de quantificar o nível de ferro hepático",
"10/04/2003" => "Dr. Luiz Carlos de Mattos#Faculdade de Medicina de S. J. Rio Preto#Sistema de grupo sangüíneo Lewis e infecção pelo H. Pylory",
"20/03/2003" => "Prof. Geraldo Passos#Prof. Associado (Genética)-  Grupo de Imunogenética Molecular -  Departamento de Genética FMRP e FORP#Perfís de Expressão Gênica de Linfócitos T de Pacientes com Lúpus Eritematoso Sistêmico",
"27/03/2003" => "Prof. Eduardo Magalhães Rego#Médico Assistente - Depto de Clínica Médica- FMRP e Pesquisador CTC/CEPID/FAPESP#Anormalidades da gênese de ribossomos e câncer- lições do modelo animal de desceratose congênita"
);

?>

<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Seminars</p>
      <p>All CTC seminars are at 12:30 in the <span style="color: #990000">red room</span>.</p>
      <p>You can see all <a href='/bit/seminars_ctc.php?title=CTC_Seminars&dpast=1'>Past Seminars here.</a></p> 
	
	<!-- Processando seminários -->
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



