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
"06/04/2004" => "Rodrigo Brandão:249:Detection and analysis of spliced chimeric mRNAs in sequence databanks",
"30/03/2004" => "Israel Tojal:250:GENE ANNOTATION - PREDICTION AND TESTING",
"16/03/2004" => "Gislaine:238:Who s your neighbor? New computational approaches for functional genomics"
);

?>
		
<table cellpadding="2" cellspacing="2" border="0" width="660">
   <tr>
      <td class="content" valign="top">
      <p class="newsboxtitle">Seminars</p>
      <p>All Bioinformatics seminars are 9:00am in the <span style="color: #3366CC">blue room</span>
or the <span style='color: red'>red room.</span></p>
      <p>You can see all <a href='/bit/seminars_bioinfo.php?title=Bioinformatics_Seminars&dpast=1'>Past Seminars here.</a></p>
      

<?php display_papers($all_seminars); ?>
    
      </td>
   <?php $t->pparse("out","LittleBox"); ?>
   </tr>
</table>
<!-- END localfile --> 
<?php $t->pparse("out","Footer"); ?>
