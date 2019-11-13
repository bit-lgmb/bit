<!--<?php
// $Log: bitpics.php,v $
// Revision 1.2  2003/02/28 12:56:54  mavcunha
// Backup propose.
//
// Revision 1.1  2002/10/24 20:08:18  mavcunha
// Added some random pictures of our laboratory.
//
// $Name:  $
// $Author: mavcunha $
?> -->
<?php require_once("includes/main.inc"); ?>
<?php 

function buffer_files ($dir) {
	$dir_o = dir($dir);
	while($file = $dir_o->read()){
		if($file != "." and $file != ".."){
	 		$pics[] = $file;
		}
	}
	$dir_o->close();
	return $pics;
}


?>
<!-- BEGIN localfile -->
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">BiT pictures</p>
      <p class="newsbox">
      
     	Here's some random pictures of our laboratory.
        <a href='/bit/bitpics/'>See all pictures.</a><br><br>
	<?php
	 	$files = buffer_files("bitpics");
		
		if(! IsSet($show_all)){
			$rand_file = $files[round(rand(0,count($files)-1))];
			echo "<a href='bitpics/$rand_file'>
				<img src='bitpics/$rand_file' border='0' width='500' height='300'></a>
                                <br>Click to enlarge<br><center>
				</center><br>
				";
		}
                else {
			 $number_files = count($files);
			 for ($id = 1; $id <= $number_files; $id++){
				 $idx=$id-1;
				 echo "<a href='bitpics/$files[$idx]'><img src='bitpics/$files[$idx]' border='0' width='80' height='80' alt='$files[$idx]' ></a>&nbsp;";

				 if($id%4==0){ echo "<br><br>"; }
			 }
                }
		 
	?>
      </p>
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
