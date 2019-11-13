<!--<?php
// $Log: source.php,v $
// Revision 1.4  2002/08/06 02:17:19  mavcunha
// fixed protected check
//
// Revision 1.3  2002/02/12 19:54:26  mavcunha
// Added protect stuff, source.php had to adapt to not show protected sources. Menu has now intranet link to the protected area. Easy_site has an new links 'intranet'.
//
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
<?php include("includes/main.inc"); ?>

<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" width="400" valign="top"  >
   
<?php
    
$name_ext = basename($file);
 
    if (preg_match("/\.php|\.inc|\.html/",$name_ext) && !preg_match("/protected/",$file) ) {
    	

    echo(" <span style='color: #CC0000;font-size: 12px;text-indent: 0px;'>/* if you're reading this, it isn't because you've found a security hole.<br>/* read and learn! */<br>/* Refer to www.php.net  */ </span><br><br>");
	    if(file_exists("$DOCUMENT_ROOT$file") ){
	    	highlight_file("$DOCUMENT_ROOT$file");
	    }
	    else {
	    	echo "<H3 style='color: #cc0000;' >Sorry, file not found</H3>";
	    }
    } 
    else {
  	 echo "<H3 style='color: #cc0000;' >You can only see HTML and PHP files.</H3>"; 
    }
    
?>
 
      </td>
   </tr>
</table>
<!-- END localfile -->
<?php $t->pparse("out","Footer"); ?>
