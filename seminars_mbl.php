<!--<?php
// $Id: seminars_mbl.php,v 1.1 2003/09/17 20:39:25 mavcunha Exp $
?> -->
<?php require_once("includes/main.inc"); ?>
<!-- BEGIN localfile -->
<?php

function paper_id2link ($paper_id,$title) {
	if($paper_id =="") {
		return "$title";
	}
	else {
		return "<a href='http://lgmb.fmrp.usp.br/papers/results.php?area_id=%&paper_id=$paper_id'>$title</a>";
	}
}//end function papers.

// support date format as : 23 1 2003, 23-01-2003, 23/01/2003,
// return timestamp
// Tip from PHP manual.
function str2date($in){

	$t = split("/",$in);

	if (count($t)!=3) return -1;

	if (!is_numeric($t[0])) return -1;
	if (!is_numeric($t[1])) return -2;
	if (!is_numeric($t[2])) return -3;

	if ($t[2]<1902 || $t[2]>2037) return -3;

	return mktime (0,0,0, $t[1], $t[0], $t[2]);
}


function name_convert ($name) {

	$v = split(":",$name);

	if (count($v)!=3) return -1;

	$myname = "<b>$v[0]</b><br>".paper_id2link($v[1],$v[2]);

	return $myname;

}


function display_papers ($seminar_array){

	global $dpast;

	// First changing the keys to a timestamp key.
	while(list ($key, $val) = each ($seminar_array)) {
		$seminars_timestamp[str2date($key)] = $val;
	}

	krsort($seminars_timestamp);
	reset($seminars_timestamp);

	//These will be our reference point
	$yesterday_timestamp = strtotime("-1 day");
	$nextweek_timestamp  = strtotime("+6 days");
	$today_timestamp     = time();

	while(list($key, $val) = each($seminars_timestamp)){
		//echo "$key => $val<br>";

		if($key < $yesterday_timestamp){
			$past_seminars[$key] = $val;
		}
		elseif($key >= $yesterday_timestamp and $key <$nextweek_timestamp){
			$next_seminars[$key] = $val;
		}
		else {
			$future_seminars[$key] = $val;
		}
	


//                if($key >= $yesterday_timestamp and $key <= $today_timestamp){
//                        $next_seminars[$key] = $val;
//                }
//                elseif ($key > $today_timestamp and $key <= $nextweek_timestamp){
//                        $future_seminars[$key] = $val;
//                }
//                else {
//                        $past_seminars[$key] = $val;
//                }

	}//end while.


	if(IsSet($next_seminars)){
		// If next seminar is in a interval smaller than a week, we 
		// will fix the order like future seminars.
		ksort($next_seminars);
		reset($next_seminars);

		// I know this is lazy, but I have not time left to spend on this page.

		// Errors in each function are omited by '@' feature.

		echo '<p class="newsboxtitleblue">Next Seminar</p>';
		echo "<table border='0' cellspacing='5' style='font-family: Verdana, Arial, Helvetica, sans; font-size: 10px;' width='100%'>";

		while(list($key,$val) = @each($next_seminars)){

			echo "<tr>";
			
			//if(date("d/m/Y",$key) == date("d/m/Y",$today_timestamp)){
				//echo "<td style='text-align: left; border: 1px solid  #3366CC; vertical-align: top; color: #FF0000;'>Today</td>";
				//echo "<td style='text-align: left; border: 1px solid  #3366CC;' >".name_convert($val)."</td>";

				//echo "<p><font color='red'>Today</font> - ".name_convert($val)."</p>";
			//}
			//else{
				echo "<td style='text-align: left; border: 1px solid  #3366CC; vertical-align: top; color: #FF0000;'>".date("d/m/Y", $key)."</td>";
				echo "<td style='text-align: left; border: 1px solid  #3366CC;' width='100%'>".name_convert($val)."</td>";

				//echo "<p><font color='red'>".date("d/m/Y", $key)."</font> - ".name_convert($val)."</p>";
			//}
			echo '</tr>';
		}
		echo '</table>';
		echo '<br>';
	}

	if(IsSet($future_seminars)){

		// Future seminars are diplayed in reverse order from
		// the reverse, what??
		ksort($future_seminars);
		reset($future_seminars);


		echo '<p class="newsboxtitleblue">Future Seminars</p>';
		echo "<table border='0' cellspacing='5' style='font-family: Verdana, Arial, Helvetica, sans; font-size: 10px;' width='100%'>";

		while(list($key,$val) = @each($future_seminars)){

			echo "<tr>";
			echo "<td style='text-align: left; border: 1px solid  #3366CC; vertical-align: top; color: #FF0000;'>".date("d/m/Y", $key)."</td>";
			echo "<td style='text-align: left; border: 1px solid  #3366CC;' width='100%'>".name_convert($val)."</td>";
			echo '</tr>';
			
			//echo "<p><font color='red'>".date("d/m/Y", $key)."</font> - ".name_convert($val)."</p>";


		}
		echo '</table>';
		echo '<br>';

	}

	
	if(IsSet($dpast) and IsSet($past_seminars)){

		echo '<p class="newsboxtitleblue">Past Seminars</p>';
		echo "<table border='0' cellspacing='5' style='font-family: Verdana, Arial, Helvetica, sans; font-size: 10px;' width='100%'>";
		while(list($key,$val) = @each($past_seminars)){

			echo "<tr>";
			echo "<td style='text-align: left; border: 1px solid  #3366CC; vertical-align: top; color: #FF0000;'>".date("d/m/Y", $key)."</td>";
			echo "<td style='text-align: left; border: 1px solid  #3366CC;' width='100%'>".name_convert($val)."</td>";
			echo '</tr>';
			//echo "<p><font color='red'>".date("d/m/Y", $key)."</font> - ".name_convert($val)."</p>";

		}
		echo '</table>';
		echo '<br>';
	}
	


}


/* Here we have a simple sintax, as key we use the date of the seminar,
then as value we use "Name:Paper ID or URL:Siminar Title Title",
all should be ordered as expected and the links, available or not.
*/
/* There's a limitation on this architeture if there are two seminars
on the same day, I'll be in trouble. */

$all_seminars = array (

"24/06/2004" => "Greice Andreotti Molfetta:232:The history of cancer epigenetics",
"17/06/2004" => "Kelson Roberto Kodama:235:The genetics and genomics of cancer",
"03/06/2004" => "Rodrigo Alexandre Panepucci:233:Priming of Naive T Cells inside tumors leads to eradication of established tumors",
"27/05/2004" => "Camillo Del Cistia Andrade:231:The Stats of Cancer - New Molecular Targets come of Age",
"20/05/2004" => "Paulo Peitl Junior:18:Molecular genetics and the assessment of human cancers",
"13/05/2004" => "Dalila Luciola Zanette:236:Nuclear Transport and Cancer - from Mechanism Tointervention",
"06/05/2004" => "France Keiko Nascimento Yoshioka:230:Basement Membranes-Structure Assembly and Role in Tumour Angiogenesis",
"29/04/2004" => "Rita de Cássia Viu Carrara:234:Mutant Stem Cells May Seed Cancer",
"15/04/2004" => "Beatriz Maria de Carvalho Paixão:41:Diverse functions of BRCA1 in the DNA damage response",
"08/04/2004" => "Eliana Nascimento:229:THE DEVELOPMENT AND REGULATION OF GENE REPAIR",
"01/04/2004" => "Ciane Oliveira:17:BRCA2 and predisposition to pancreatic and other cancers",
"25/03/2004" => "Paulo Henrique C. Godoi:237:The Structural Basis for Autoinhibition of FLT3 by the Juxtamembrane Domain",
"18/03/2004" => "Patrícia Santos Pereira Lima:208:Normal and leukemic hematopoiesis - Are leukemias a stem cell disorder or a reacquisition of stem cell characteristics?",
"11/03/2004" => "Marcus Vinícius Santos dos Passos:228:Evidence of increased angiogenesis in patients with acute myeloid leukemia",
"16/10/2003" => "Marcus Vinícius:213:Ras-induced serine phosphorylation of the focal adhesion protein paxillin is mediated by the Raf-MEK-ERK pathway",
"09/10/2003" => "Rodrigo Panepucci:212:Identification of genes responsible for osteoblast differentiation from human mesodermal progenitor cells",
"18/12/2003" => "Simone Cardoso Soares::",
"02/10/2003" => "Dalila::I - <a href='/papers/files/207.pdf'>Egr1 promotes growth and survival of prostate cancer cells. Identification of novel Egr1 target genes</a><br><br>II - <a href='/papers/files/206.pdf'>Impaired prostate tumorigenesis in Egr1-deficient mice.</a>",
"30/10/2003" => "Rita Carrara:216:Expressive genomic hybridisation; gene expression profiling at the cytogenetic level",
"06/11/2003" => "Paulo Peitl Junior::",
"13/11/2003" => "Patrícia S. P. Lima:208:Normal and leukemic hematopoiesis; Are leukemias a stem cell disorder or a reacquisition of stem cell characteristics?",
"20/11/2003" => "Keiko::",
"27/11/2003" => "Greice Molfetta::",
"04/12/2003" => "Giziane Fagundes::",
"11/12/2003" => "Beatriz Maria Paixão::",
"18/09/2003" => "Virgínia Picanço:205:A Unified Theory of Gene Expression",
"28/08/2003" => "Paulo H. C. Godoi:198:Processive DNA synthesis observed in a polymerase crystal suggests a mechanism for the prevention of frameshift mutations.",
"21/08/2003"  => "Paulo H. C. Godoi:199:Visualizing DNA replication in a catalytically active Bacillus DNA polymerase crystal.",
"11/09/2003" => "Camillo Del Cistia Andrade:200:Tollip, a new component of the IL-1RI pathway, links IRAK to the IL-1 receptor",
"10/07/2003" => "Virgínia Picanço:191:Transcription of antisense RNA leading to gene silencing and methylation as a novel cause of human genetic disease",
"17/07/2003" => "Kyioko Abbe Sandes:186:Molecular Staging of Prostatic Cancer with RT-PCR Assay for Prostate-Specific Antigen in Peripheral Blood and Lymph Nodes - Comparison with Standard Histological Staging and Immunohistochemical Assessment of Occult Regional Lymph Node Metastases.",
"03/07/2003" => "Camillo Del Cistia Andrade:185:RecQ helicases - caretakers of the genome.",
"26/06/2003" => "Beatriz Maria Paixão:184:In vivo characterization of regulatory polymorphisms by allele-specific quantification of RNA polymerase loading.",
"12/06/2003" => "Kelson Roberto Kodama:183:Validating survivin as a cancer therapeutic target",
"05/06/2003" => "Marcus Vinicius Santos dos Passos:182:Metastasis suppressors alter the signal transduction of cancer cells.",
"29/05/2003" => "Greice Molfetta:181:Genome imprinting regulated by the mouse Polycomb group protein Eed",
"15/05/2003" => "Paulo Peitl Junior:180:Localized mutations in the gene encoding the cytoskeletal protein filamin A cause diverse malformations in humans",
"24/04/2003" => "Simone Soares:187:Immune escape through C-type lectins on dendritic cells",
"17/04/2003" => "Patrícia S. P. Lima:178:The power and the promise of DNA methylation markers",
"03/04/2003" => "Paulo H. C. Godoi:170:BRCA2 function in DNA binding and recombination from a BRCA2-DSS1-ssDNA structure. ",
"27/03/2003" =>"Rodrigo Proto Siqueira:153:Differentiation plasticity of hematopoietic cells",
"20/03/2003" =>"Rodrigo Panepucci:152:Stemness - Transcriptional Proling of Embryonic and Adult Stem Cells",
"05/12/2002" => "Giziane Fagundes:150:Identification of polymorphisms in the 5'-untranslated region of the TAFI gene - relationship with plasma TAFI levels and risk of venous thrombosis.",
"28/11/2002" => "Paulo Peitl Junior:149:RaSH, a rapid subtraction hybridization approach for identifying and cloning differentially expressed genes", 
"21/11/2002" => "Paulo Peitl Junior:148:CENTROSOME ABERRATIONS - CAUSE OR CONSEQUENCE OF CANCER PROGRESSION?",
"14/11/2002" => "Virgínia:146:RNAi as Random Degradative PCR - siRNA Primers Convert mRNA into dsRNAs that Are Degraded to Generate New siRNAs",
"24/10/2002" => "Simone Cardoso Soares::The evolution and Genetics of innate immunity",
"17/10/2002" => "Rita Carrara::Chromosome territories, nuclear architecture and gene regulation in mammalian cells",
"31/10/2002" => "Paulo H. C. Godoi:147:A Polymorphism in Endostatin, an Angiogenesis Inhibitor, Predisposes for the Development of Prostatic Adenocarcinoma",
"07/11/2002" => "Anemari Ramos Dinarte:139:Gene Profiles in Normal and Cancer Cells",
"26/09/2002" => "Rodrigo Proto Siqueira::RealTime PCR",
"12/09/2002" => "Greice::To err (meiotically) is human; the genesis of human aneuploidy.",
"05/09/2002" => "Marcus Vinícius Santos dos Passos:142:New functions for the matrix metalloproteinases in cancer progression",
"04/09/2002" => "Marteen R. Leerkes:140:In Silico Comparison of the Transcriptome Derived from Purified Normal Breast Cells and Breast Tumor Cell Lines Reveals Candidate Upregulated Genes in Breast Tumor Cells",
"29/08/2002" => "Patrícia Lima:93:Aberrant DNA methylation in cancer potential clinical interventions.",
"22/08/2002" => "Beatriz Paixão:133:Involvement of chemokine receptors in breast cancer metastasis",
"15/08/2002" => "Rodrigo Panepucci:117:Gene expression analysis by massively parallel signature sequencing (MPSS) on microbead arrays",
"03/04/2002" => "Israel Tojal::Identification of Common Molecular Subsequences",
"20/03/2002" => "Daniel G.Pinheiro:12:CAP3; A DNA Sequence Assembly Program",
"13/03/2002" => "Wilson Junior:71:Computational identification of promoters and first exons in the human genome.",
"06/02/2002" => "Roberto Focosi:31:Gene Ontology.",
);

?>
		
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Seminars</p>
      <p>All Molecular Genetics and Bioinformatics seminars are Thursday's 8:00am in the <span style="color: #3366CC">blue room</span>
or the <span style='color: red'>red room.</span></p>
      <p>You can see all <a href='/bit/seminars_mbl.php?title=Seminars&dpast=1'>Past Seminars here.</a></p>
      

<?php display_papers($all_seminars); ?>
    
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
