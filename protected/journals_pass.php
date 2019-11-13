<?php
        // validation stuff
        include('http://lbc2.fmrp.usp.br/BIP/biti_soap.inc');
        include('http://lbc2.fmrp.usp.br/BIP/biti_auth.inc');
        $inter = new BiTInterface;
        $auth = new BiTAuth('bit_intranet',$inter);
        $auth->check();
?>
<!--<?php
// $Author: mavcunha $
// $Id: journals_pass.php,v 1.1 2003/09/17 20:39:26 mavcunha Exp $
?> -->
<?php require_once("../includes/main.inc"); ?>
<!-- BEGIN localfile -->
<style>
	p.title { font-weight: bold; }
</style>
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Journals Passwords</p>
      <p class="newsbox">

		<p class='title'><a href='http://www.journals.cup.org'>ANNALS OF HUMAN GENETICS</a></p>
		<ul><li>Username: BCRP </li>
		<li>Password: 1234</li></ul>

		<p class='title'><a href='http://bioinformatics.oupjournals.org'>BIOINFORMATICS</a></p>
		<ul>
		<li>Username: faculdade</li>
		<li>Password: bcrp2000</li>
		</ul>

		<p class='title'><a href='http://www.bloodjournal.org'>BLOOD</a></p>
		<ul>
		<li>Username: JCVOLTAR</li>
		<li>Password: juliano</li>
		</ul>

		<p class='title'><a href='http://www.blackwell-synergy.com'>CLINICAL & LAB. HAEMATOLOGY</a></p>
		<ul>
		<li>Username: 000102438239</li>
		<li>Password: opinion</li>
		</ul>

		<p class='title'><a href='http://www.interscience.wiley.com'>CYTOMETRY</a></p>
		<ul>
		<li>Username: dimas1</li>
		<li>Password: wiley</li>
		</ul>

		<p class='title'><a href='http://www.catchword.com'>CYTOTHERAPY</a></p>
		<ul>
		<li>Username: fundherp</li>
		<li>Password: cytokines</li>
		</ul>

		<p class='title'><a href='http://www.sciencedirect.com'>EXPERIMENTAL HEMATOLOGY</a></p>
		<ul>
		<li>Username: dimascovas3</li>
		<li>Password: hematology</li>
		</ul>
     
		<p class='title'><a href='http://www.blackwell-synergy.com'>HAEMOPHILIA</a></p>
		<ul>
		<li>Username: fundherp</li>
		<li>Password: clinical</li>
		</ul>
		
		<p class='title'><a href='http://www.liebertpub.com'>JOURNAL HEMATOTHERAPY</a></p>
		<ul>
		<li>Username: therapy</li>
		<li>Password: fundacao</li>
		</ul>

		<p class='title'><a href='http://www.nature.com'>Nature (Biotechnology/Genetics/Medicine/Reviews Cancer)</a></p>
		<ul>
		<li>Username: fundherp</li>
		<li>Password: nature</li>
		</ul>

		<p class='title'><a href='http://www.jpharmacogenetics.com'>PHARMACOGENETICS</a></p>
		<ul>
		<li>Username: DICOVAS</li>
		<li>Password: 000102829304</li>
		</ul>

		<p class='title'><a href='http://www.aventisbehring.com.br'>ROUND-UP</a></p>
		<ul>
		<li>Username: hemofilia</li>
		<li>Password: roundup</li>
		</ul>


		<p class='title'><a href='http://www.schattauer.de'>THROMBOSIS  HAEMOSTASIS</a></p>
	 	<ul>
		<li>Password: 9156</li>
		</ul>

	<p class='title'><a href='http://www.blackwell-synergy.com'>TRANSFUSION MEDICINE</a></p>
	<ul>
	<li>Username: fundherp</li>
	<li>Password: clinical</li>
	</ul>

	<p class='title'><a href='http://www.bmn.com'>TRENDS IN IMMUNOLOGY</a></p>
	<ul>
	<li>Username: fundherp</li>
	<li>Password: immuno</li>
	</ul>

	<p class='title'><a href='http://www.blackwell-synergy.com'>VOX SANGUINIS</a></p>
	<ul>
	<li>Username: fundherp</li>
	<li>Password: clinical</li>
	</ul>

      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
