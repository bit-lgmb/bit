<?php

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

	$v = split("#",$name);

	if (count($v)!=3) return -1;

	$myname = "<b>$v[2]</b><br>$v[0]<br><i>$v[1]</i>";

	return $myname;

}

function render_line ($date,$val) {

        $today = date( "d/m/Y", time() );
        if($today == date("d/m/Y",$date)){
            $msg="<br><br><center>Today</center>";
        }
        
		// Redering a TR line.
		$line.= "<tr>";
		$line.= "<td style='text-align: left; border: 1px solid  #3366CC; vertical-align: top; color: #FF0000;'>".date("d/m/Y", $date)."$msg</td>";
		$line.=	"<td style='text-align: left; border: 1px solid  #3366CC;' width='100%'>$val</td>";
		$line.= "</tr>";

		return $line;
}


function display_papers ($seminar_array){

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

	}
	$seminars_array = array($next_seminars, $future_seminars, $past_seminars);
	return $seminars_array;
}

// The titles os each seminars time.
$s_time = array('Next Seminar','Future Seminars','Past Seminars');


?>
