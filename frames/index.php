<!--<?php
// $Log: index.php,v $
// Revision 1.7  2003/09/17 20:39:25  mavcunha
// Backing up the stuff....
//
// Revision 1.6  2002/02/23 01:40:38  mavcunha
// New ctc logo and Menu frame now has dynamic size
//
// Revision 1.5  2002/02/08 20:56:57  mavcunha
// Added a complete search engine unsing htdig. Fixed a lot of things, links and etc.
// Added the FTP site, and moved some files around to a better place in the site.
//
// Revision 1.4  2002/02/06 18:32:22  mavcunha
// Scrollbar it's now on auto mode
//
// Revision 1.3  2002/02/05 22:01:47  mavcunha
// Added about and seminar. Fixed more links and update Docs. Added one more function to easy_site.inc, and minor changes on layout
//
// Revision 1.2  2002/02/05 14:21:35  mavcunha
// transfering working copy to localhost
//
// Revision 1.1.1.1  2002/02/04 18:55:03  mavcunha
// First import on CVS
//
// $Name:  $
// $Author: mavcunha $
?> -->
<!-- BEGIN frameset -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
  <title>BiT - Bioinformatic Team</title>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
  <link REL="icon" HREF="/bit/images/logo_bit16.png" TYPE="image/png">

</head>
<?php
//Frames dinamicas
if (!IsSet($msize)) {
	$msize=150;
}
?>
		
<frameset cols="<?php echo $msize; ?>,*" style="background-color: #FFFFFF;color: #000000;" >
  	<frame name="menu" frameborder="0" scrolling="auto" src='/bit/frames/menu_links.php?<?php 
	if( IsSet($menufile) ) { echo "&menufile=$menufile";} if(IsSet($style)){ echo "&style=$style";}?>'>
	<frameset rows="110,*" style="background-color: #FFFFFF;color: #000000;" >
		<frame name="header" frameborder="0" scrolling="no"   src='/bit/frames/header.php?<?php 
		if( IsSet($title) ) { echo "&title=$title";} ?>' >
		<frame frameborder="0" scrolling="auto" name="main" src='<?php print "$url"; ?>' >
	</frameset>

	<noframes>
		This page has frames:<br>
		<a href="/bit/frames/menu_links.php" >Menu</a><br>
		<a href="/bit/frames/header.php">Header</a><br>
		<a href="<?php echo $url; ?>">Main</a><br>
	</noframes>
  </frameset>
</html>
<!-- END frameset -->
