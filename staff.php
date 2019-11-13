<!--<?php
// $Log: staff.php,v $
// Revision 1.18  2003/09/26 18:37:21  mavcunha
// Tirando o Santista da lista
//
// Revision 1.17  2003/02/28 12:56:54  mavcunha
// Backup propose.
//
// Revision 1.16  2002/12/16 17:20:49  mavcunha
// Added Brown and Daniel, removed Marlus and Thiago.
//
// Revision 1.15  2002/09/11 21:16:44  mavcunha
// Added Thiago Page, insted of email
//
// Revision 1.14  2002/08/06 13:19:54  mavcunha
// Changed Mavcunha information
//
// Revision 1.13  2002/08/06 02:16:45  mavcunha
//  Changed email
//
// Revision 1.12  2002/06/11 21:59:16  mavcunha
// Removido o link para Gislaine
//
// Revision 1.11  2002/02/25 19:18:53  mavcunha
// updated Roberto
//
// Revision 1.10  2002/02/20 21:34:59  mavcunha
// added marlus
//
// Revision 1.9  2002/02/12 19:54:26  mavcunha
// Added protect stuff, source.php had to adapt to not show protected sources. Menu has now intranet link to the protected area. Easy_site has an new links 'intranet'.
//
// Revision 1.8  2002/02/08 20:56:56  mavcunha
// Added a complete search engine unsing htdig. Fixed a lot of things, links and etc.
// Added the FTP site, and moved some files around to a better place in the site.
//
// Revision 1.7  2002/02/07 16:22:45  mavcunha
// Added Rodrigo, Roberto - Changed Marco
//
// Revision 1.6  2002/02/06 20:52:45  mavcunha
// Added Gislaine and Thiago profiles
//
// Revision 1.5  2002/02/05 22:01:47  mavcunha
// Added about and seminar. Fixed more links and update Docs. Added one more function to easy_site.inc, and minor changes on layout
//
// Revision 1.4  2002/02/05 18:08:50  mavcunha
// Fixing some links and anchors
//
// Revision 1.3  2002/02/05 16:54:14  mavcunha
// All files have now relative paths and it's not necessary put any
// external menus or styles to change the aspect of the site.
//
// Revision 1.2  2002/02/05 14:20:01  mavcunha
// Working ok, waiting for more info to add
//
// Revision 1.1  2002/02/04 22:29:44  mavcunha
// Added staff page and index.php on tools. Add more ilinks too.
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("includes/main.inc"); ?>
<!-- BEGIN localfile -->
<p class="newsboxtitle">People who work at BiT</p>
<p>
	If you want contact us,  please use the <?php echo ilink('contact'); ?> form. The e-mail
	addresses aren't available to avoid spam.
</p>
<table cellpadding="2" cellspacing="2" border="1" width="660">
   <tr>
      <td class="boxtitleblue" valign="middle" width="40%">Name</td>
      <td class="boxtitleblue" valign="middle" width="60%">Guilt for..</td>
   </tr>
   <tr><a name="valtas">
   	<td><a href="/bit/frames/?url=http://scarecrow.fmrp.usp.br/~mavcunha/public/&title=Marco_Valtas">Marco Aur&eacute;lio Valtas Cunha</a></td>
	<td>
	<ul>
		<li>All stuff I'm guilt for, it's in  my <a href='/bit/frames/?url=http://scarecrow.fmrp.usp.br/~mavcunha/public/&title=Marco_Valtas'>
		Work Page</a></li>
	</ul>
	</td>
	
   </tr>
	<tr><td><a href='/bit/frames/?url=http://scarecrow.fmrp.usp.br/~daniel/'>Daniel Pinheiro</a></td>
	<td>
	<ul><li>Check my web page.</li></ul>
</td>
</tr>
<tr><td><a href="/bit/frames/?url=http://scarecrow.fmrp.usp.br/~brown/">Rodrigo Brandão</a></td>
<td>
	<ul><li>Check my web page.</li></ul>
</td>
</tr>	
	<tr><td><a href="/bit/frames/?url=http://scarecrow.fmrp.usp.br/~tojal/">Israel Tojal</a></td>
	<td>
		<ul><li>Check my web page.</li></ul>
	</td>
	</tr>

   <tr><a name="gislaine">
   	<td><a href="/bit/frames/?url=http://scarecrow.fmrp.usp.br/~gislaine/">Gislaine S. P. Pereira</a></td>
	<td>
	<ul>
		<li><?php echo ilink('go'); ?> - You can search for a GO term and view all gene products annotated to it, or search for a gene product (symbol) and view all its associations. You can also browse the ontologies to view relationships between terms as well as the number of gene products  annotated to a given term. </li>
		<li><?php echo ilink('pfam'); ?> - Pfam is a large collection of multiple sequence alignments and hidden Markov models covering many common protein domains. You can search for a nucleotide sequence in the Pfam database or a protein sequence . You can also use the translate tool ESTScan by translate to protein sequence or the translate tool Six(DNA/RNA) to view the six frames of  protein sequence.</li>

	</ul>
    	</td>
   </tr>
   <tr><a name="roberto">
   	<td><a href="/bit/frames/?url=http://scarecrow.fmrp.usp.br/~philber/">Roberto Focosi Junior</a></td>
	<td>
	<ul>
		<li>DNA sample database</li>
		<li><?php echo ilink('go'); ?></li>
	</ul>
    	</td>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
