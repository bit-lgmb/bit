<!--<?php
// $Log: index.php,v $
// Revision 1.2  2002/02/26 21:50:03  mavcunha
// Edit is now more flexible and all results of projects are now in intranet. end of the day work minor changes as well
//
// Revision 1.1  2002/02/26 14:25:58  mavcunha
// formed edit_current
//
// Revision 1.2  2002/02/25 13:44:10  mavcunha
// Now we can delete the lock file
//
// Revision 1.1  2002/02/23 01:41:31  mavcunha
// New feature to edit the current work on area
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php 
//validation stuff
require_once("../protected/validation/auth.inc"); 
if(! val_by_ip($REMOTE_ADDR) ) {
	echo "<html><body><h3>You can't use this feature from this computer.</h3></body></html>";
	exit;
}
?>
<?php require_once("../includes/main.inc"); ?>
<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Editing <?php echo "$file"; ?> file</p>
     
      <br>
      
<?php
if(!IsSet($submited)) {
	if(! is_writable(".") ) {
		echo "<br><br>Can't write, permission problems";
	}
      	else if(file_exists("$file.lock")){
	if($rmlock==1) {
		echo "<h4>Lock <font color='red'>";
		readfile("$file.lock");
		unlink("$file.lock");
		echo "</font> removed, click <a href=\"$PHP_SELF?file=$file\">here to proceed.</a></h4>";
	}
	else {
		echo "<h4>Sorry someone is already editing this file, please check if the IP <font color='red'>";
		readfile("$file.lock");
		echo " </font> is editing this file, otherwise <a href=\"$PHP_SELF?rmlock=1&file=$file\">
		remove the lock file.</a></h4>";
	}
}
else {
	//criando o lockfile
	$fp = fopen("$file.lock","w");
	fwrite($fp,$REMOTE_ADDR);
	fclose($fp);
	echo "<ul>";
	echo "<li>Lock on IP $REMOTE_ADDR</li>";
	echo "</ul>";
?>

<span style="color: #F00;">
Please press "Save File" even if don't edit anything, <b>otherwise you will lock this file.</b>
</span>
<br>
<form action="<?php echo $PHP_SELF; ?>" method="POST" >
<div style="text-indent: 0em;" >
<input type="submit" value="Save File  "><br>
<textarea cols="70" rows="30" name="cache_content" wrap="none" >
<?php 
// abrindo o atual cache
$fp = fopen("$file.cache","r");
$current = fread ($fp, filesize("$file.cache"));
fclose($fp);
echo stripslashes($current); 
?>
</textarea>
</div><br>
<input type="submit" value="Save File  "><br>

<input type="hidden" name="submited" >
<input type="hidden" name="file" value="<?php echo $file; ?>" >
<?php
	} //end of else
}//end if !IsSet(submited)
else {
	/*** processando a modificação ***/
	
	//checando se não existe um spool
	if (file_exists("$file.spool")) {
		echo "<br><br><h4>Sorry there's a spool file I can't continue.</h4>";
	}
	else {
		//novo spool
		$fp = fopen("$file.spool","w");
		fwrite($fp,$cache_content);
		fclose($fp);
		
		/*** sobrescrevendo o cache ****/
		unlink("$file.cache");
		copy("$file.spool","$file.cache");
		unlink("$file.spool");
		
		//All ok?
		// removing the lock
		unlink("$file.lock");
		echo "<ul><li>File unlocked</li></ul>";
		echo "<b>File saved, please check the result</b>";
	}
}
	?>
      </td>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
