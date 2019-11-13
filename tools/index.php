<!--<?php
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("../includes/main.inc"); ?>

<!-- BEGIN localfile -->

<p class="newsboxtitle">Tools developed or changed by BiT</p>

<p>Here you can find on-line tools that we developed or changed some
tools to fit our needs.</p><br>

<table cellpadding="2" cellspacing="2" border="0" width="660">

<tr>
    	<td class="boxtitleblue" width="50%" valign="middle" >Database searchs</td>
    	<td class="boxtitleblue" width="50%" valign="middle" >Information tools</td>
</tr>

    <tr>
      <td valign="top">
      <p class="newsboxsmall" style="text-indent: 0px;" >
      <?php echo ilink('pfam'); ?> - Search against Pfam database.<br>
      </p>
      
      <br><br>
      </td>

      <td valign="top" >
      <p class="newsboxsmall" style="text-indent: 0px;" >
      <?php echo ilink('go'); ?> - Gene Ontology Browser Tool.<br></p>
      
      <br><br>
      </td>
   </tr>
<tr> 
    	<td class="boxtitleblue" width="50%" valign="middle" >Tools</td>
    	<td class="boxtitleblue" width="50%" valign="middle" >Other services</td>
</tr>
<tr>
      <td valign="top">
      <p class="newsboxsmall" style="text-indent: 0px;" >

      <?php echo ilink("sms"); ?> - Multi analysis tool.<br><br>
      <a href='/bit/frames/?url=http://lbc3.fmrp.usp.br/trace/&title=Trace_Viewer'>Trace Viewer</a> -
      A tool to visualize your chromatogram on-line.<BR><br>
	  <a href='http://yanomami.fmrp.usp.br/acewebview/'>AceWebView</a> -
      Visualize our ACE files in a graphic way.<br><br>

	  <a href='http://bit.fmrp.usp.br/bit/frames/?title=BesTags&url=http://lbc3.fmrp.usp.br/cgi-bin/bestags/main.cgi/&menufile=/bestags/menu.html&style=/bestags/btags.css'>BesTags</a> -  A Bioinformatic approach to select gene stretches as tags for microarray spotting<br><br>

	  <a href='http://bit.fmrp.usp.br/bit/frames/?title=BestPrimer&url=http://lbc3.fmrp.usp.br/cgi-bin/bestprimers/FindPrimer.cgi'>BestPrimer</a> - Find primers on sequence<br><br>

		
	  <a href='http://bit.fmrp.usp.br/bit/frames/?title=H2G&url=http://guarani.fmrp.usp.br/cgi-bin/h2g/index.cgi/h2g_response?project_id=1&menufile=h2g_menu/menu_1.html&style=/h2g_menu/h2g.css'>H2G - CGAP</a> - Hyper and Hypoexpressed Genes<br><br>
		

      </p>
      </td>

      <td valign="top" >
      <p class="newsboxsmall" style="text-indent: 0px;" >
      <a href="/papers/">CTC Papers Database</a> - Share your PDF articles (internal only).<br></p>
      <br><br>
      </td>
</tr>
<tr> 
    	<td class="boxtitleblue" width="50%" valign="middle" >Statistics</td>
    	<td  width="50%" valign="middle" ></td>
</tr>
<tr>
      <td valign="top">
      <p class="newsboxsmall" style="text-indent: 0px;" >
      <a href='/bit/frames?url=/or/&ptitle=Odds_Ratio&title=Odds_ratio'>Odds ratio </a> - Calculates odd ratio.<br></p>
      </td>

      <td valign="top" >
      <p class="newsboxsmall" style="text-indent: 0px;" >      </p>
      </td>
</tr>

</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
