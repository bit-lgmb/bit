<!--<?php
// $Log: services.php,v $
// Revision 1.9  2003/02/28 12:56:54  mavcunha
// Backup propose.
//
// Revision 1.8  2002/10/24 20:08:39  mavcunha
// Regular backup
//
// Revision 1.7  2002/08/06 02:15:56  mavcunha
// added odds ration
//
// Revision 1.6  2002/02/28 19:30:19  mavcunha
// Added officialy the SMS tool
//
// Revision 1.5  2002/02/20 14:00:31  mavcunha
// Removed cleanseq
//
// Revision 1.4  2002/02/11 14:00:12  mavcunha
// Added Pfam link, README now has the htdig conf. And wrapper.php has Powered by ht://Dig.
//
// Revision 1.3  2002/02/05 16:54:14  mavcunha
// All files have now relative paths and it's not necessary put any
// external menus or styles to change the aspect of the site.
//
// Revision 1.2  2002/02/04 22:29:44  mavcunha
// Added staff page and index.php on tools. Add more ilinks too.
//
// Revision 1.1.1.1  2002/02/04 18:55:03  mavcunha
// First import on CVS
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("includes/main.inc"); ?>

<!-- BEGIN localfile -->

<p class="newsboxtitle">Services at BiT or developed by BiT members</p>

<p>Here you can find on-line tools at BiT, if want to download 
these or read more information about some tool please
refer to <?php echo ilink('bittools'); ?>.</p><br>

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
    	<td class="boxtitleblue" width="50%" valign="middle" >Other tools</td>
    	<td class="boxtitleblue" width="50%" valign="middle" >Other services</td>
</tr>
<tr>
      <td valign="top">
      <p class="newsboxsmall" style="text-indent: 0px;" >

      <?php echo ilink("sms"); ?> - Multi analysis tool.<br><br>
      <a href='/bit/frames/?url=/trace&title=Trace_Viewer'>Trace Viewer</a> -
      A tool to visualize your chromatogram on-line.<BR><br>
	  <a href='http://yanomami.fmrp.usp.br/acewebview/'>AceWebView</a> -
      Visualize our ACE files in a graphic way.<br><br>
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
