<?php


function monthPullDown($month, $montharray)
{
	echo "<select name=\"month\">\n";

	$selected[$month - 1] = ' selected="selected"';

	for($i=0;$i < 12; $i++) {
		$val = $i + 1;
		$sel = (isset($selected[$i])) ? $selected[$i] : "";
		echo "	<option value=\"$val\"$sel>$montharray[$i]</option>\n";
	}
	echo "</select>\n\n";
}

# ###################################################################

function yearPullDown($year)
{
	echo "<select name=\"year\">\n";

	$selected[$year] = ' selected="selected"';
	$years_before_and_after = 3;
	$start_year = $year - $years_before_and_after;
	$end_year   = $year + $years_before_and_after;

	for($i=$start_year;$i <= $end_year; $i++) {
		$sel = (isset($selected[$i])) ? $selected[$i] : "";
		echo "	<option value=\"$i\"$sel>$i</option>\n";
	}
	echo "</select>\n\n";
}

# ###################################################################

function dayPullDown($day)
{
	echo "<select name=\"day\">\n";

	$selected[$day] = ' selected="selected"';

	for($i=1;$i <= 31; $i++) {
		$sel = (isset($selected[$i])) ? $selected[$i] : "";
		echo "	<option value=\"$i\"$sel>$i</option>\n";
	}
	echo "</select>\n\n";
}

# ###################################################################

function hourPullDown($hour, $namepre)
{
	echo "\n<select name=\"" . $namepre . "_hour\">\n";
	
	$selected[$hour] = ' selected="selected"';

	for($i=0;$i <= 12; $i++) {
		$sel = (isset($selected[$i])) ? $selected[$i] : "";
		echo "	<option value=\"$i\"$sel>$i</option>\n";
	}
	echo "</select>\n\n";
}

# ###################################################################

function minPullDown($min, $namepre)
{
	echo "\n<select name=\"" . $namepre . "_min\">\n";
	
	$selected[$min] = ' selected="selected"';

	for($i=0;$i < 60; $i+=5) {
		$disp_min = sprintf("%02d", $i);
		$sel = (isset($selected[$i])) ? $selected[$i] : "";
		echo "\t<option value=\"$i\"$sel>$disp_min</option>\n";
	}

	echo "</select>\n\n";
}

# ###################################################################

function amPmPullDown($pm, $namepre)
{
	$sel = ' selected="selected"';
	$am  = null;
	if ($pm) { $pm = $sel; } else { $am = $sel; }

	echo "\n<select name=\"" . $namepre . "_am_pm\">\n";
	echo "	<option value=\"0\"$am>am</option>\n";
	echo "	<option value=\"1\"$pm>pm</option>\n";
	echo "</select>\n\n";
}

function javaScript()
{
?>
	<script language="javascript">
	function submitMonthYear() {
		document.monthYear.method = "post";
		document.monthYear.action = 
			"teremfoglalas.php?month=" + document.monthYear.month.value + 
			"&year=" + document.monthYear.year.value;
		document.monthYear.submit();
	}
	
	function postMessage(day, month, year) {
		eval(
		"page" + day + " = window.open('eventform.php?d=" + day + "&m=" + 
		month + "&y=" + year + "', 'postScreen', 'toolbar=0,scrollbars=1," +
		"location=0,statusbar=0,menubar=0,resizable=1,width=340,height=400');"
		);
	}
	
	function openPosting(pId) {
		eval(
		"page" + pId + " = window.open('eventdisplay.php?id=" + pId + 
		"', 'mssgDisplay', 'toolbar=0,scrollbars=1,location=0,statusbar=0," +
		"menubar=0,resizable=1,width=340,height=400');"
		);
	}
	
	function loginPop(month, year) {
		eval("logpage = window.open('login.php?month=" + month + "&year=" + 
		year + "', 'mssgDisplay', 'toolbar=0,scrollbars=1,location=0," +
		"statusbar=0,menubar=0,resizable=1,width=340,height=400');"
		);
	}
	</script>
<?php
}




# ###################################################################

function scrollArrows($m, $y)
{
	// set variables for month scrolling
	$nextyear  = ($m != 12) ? $y : $y + 1;
	$prevyear  = ($m != 1)  ? $y : $y - 1;
	$prevmonth = ($m == 1)  ? 12 : $m - 1;
	$nextmonth = ($m == 12) ? 1  : $m + 1;

	return "<div style='display: none;'>
	<a href=\"?month=" . $prevmonth . "&year=" . $prevyear . "\">
	<img src=\"images/leftArrow.gif\" border=\"0\"></a>
	<a href=\"?month=" . $nextmonth . "&year=" . $nextyear . "\">
	<img src=\"images/rightArrow.gif\" border=\"0\"></a></div>
	";
}

# ###################################################################

function writeCalendar($month, $year)
{
	$str = getDayNameHeader();
	$eventdata = getEventDataArray($month, $year);

	# get first row position of first day of month.
	$weekpos = getFirstDayOfMonthPosition($month, $year);

	# get user permission level
	$auth = (isset($_SESSION['authdata'])) 
		? $_SESSION['authdata']['userlevel'] 
		: false;

	# get number of days in month
	$days = cal_days_in_month(CAL_GREGORIAN,$month,$year);
	//echo 'days of ' . $month . ' ' . $days;

	# initialize day variable to zero, unless $weekpos is zero
	if ($weekpos == 0){
		$day = 1;
	} 
	else {
		$day = 0;
	}
	
	# initialize today's date variables for color change
	$timestamp = time() + CURR_TIME_OFFSET * 3600;
	$d = date('j', $timestamp); 
	$m = date('n', $timestamp); 
	$y = date('Y', $timestamp);

	# lookup for testing whether day is today
	$today["$y-$m-$d"] = 1;

	# loop writes empty cells until it reaches position of 1st day of 
	# month ($wPos).  It writes the days, then fills the last row with empty 
	# cells after last day
	while($day <= $days) {

		# write row
		for($i=0;$i < 7; $i++) {

			# if cell is a day of month
			if($day > 0 && $day <= $days) {
				# set css class today if cell represents current date
				$class = (isset($today["$year-$month-$day"])) ? 'today' : 'day';

				if ($i == 0){
					$str .= "<div class=\"calendar-day-cell-first\"> 
							<div class=\"calendar-day-number\">\n"; $str .= "$day";	$str .= "</div>";
				}
				else {
					$str .= "<div class=\"calendar-day-cell\"> 
							<div class=\"calendar-day-number\">\n"; $str .= "$day";	$str .= "</div>";
				}


				
				
				if (isset($eventdata[$day]["title"])) {
					// enforce title limit
					$eventcount = count($eventdata[$day]["title"]);
	
					if (MAX_TITLES_DISPLAYED < $eventcount) {
						$eventcount = MAX_TITLES_DISPLAYED;
					}
					
					// write title link if day's postings 
					for($j=0;$j < $eventcount;$j++) {
						$str .= '
						<div class="calendar-event-title" title="'. $eventdata[$day]["terem"] . '">#'
						. $eventdata[$day]["id"][$j] . " " . $eventdata[$day]["terem"] . "</div>"
						. $eventdata[$day]["timestr"][$j];
					}
				}

				$str .= "</div>\n";
				$day++;
			} elseif($day == 0)  {
				if ($i == 0){
					$str .= "<div class=\"calendar-first\" >&nbsp;</div>\n";
				}

     			else $str .= "<div class=\"calendar-day-cell-empty\" >&nbsp;</div>\n";
				$weekpos--;
				if ($weekpos == 0) $day++;
     		} else {
				$str .= "
				<div class=\"calendar-day-cell-empty\" >&nbsp;</div>\n";
			}
     	}
	}
	return $str;
}

# ###################################################################

function getDayNameHeader()
{
	global $lang;

	// adjust day name order if weekstart not Sunday
	if (WEEK_START != 0) {
		for($i=0; $i < WEEK_START; $i++) {
			$tempday = array_shift($lang['abrvdays']);
			array_push($lang['abrvdays'], $tempday);
		}
	}

	$s = "<div>";

	foreach($lang['abrvdays'] as $day) {
		$s .= "<div class='calendar-day-name'>$day</div>";
	}

	$s .= "</div>";
	return $s;
}

# ###################################################################

function getEventDataArray($month, $year)
{
	$eventdata = null;
	
	$sql = "SELECT id, elfogadva, terem, d, title, start_time, end_time, ";
	
	if (TIME_DISPLAY_FORMAT == "12hr") {
		$sql .= "TIME_FORMAT(start_time, '%l:%i%p') AS stime, ";
		$sql .= "TIME_FORMAT(end_time, '%l:%i%p') AS etime ";
	} elseif (TIME_DISPLAY_FORMAT == "24hr") {
		$sql .= "TIME_FORMAT(start_time, '%H:%i') AS stime, ";
		$sql .= "TIME_FORMAT(end_time, '%H:%i') AS etime ";
	} else {
		echo "Bad time display format, check your configuration file.";
	}
	
	$sql .= "
		FROM jelentkezesek WHERE m = $month AND y = $year AND elfogadva = '1'
		ORDER BY start_time";
	
	$result = mysql_query($sql) or die(mysql_error());
	
	while($row = mysql_fetch_assoc($result)) {
		$day = $row["d"];
		$eventdata[$day]["id"][] = $row["id"];
		$eventdata[$day]["terem"] = $row["terem"];


		# set title string; limit char length and append ellipsis if necessary
		$title = stripslashes($row["title"]);
		$eventdata[$day]["title"][] = (strlen($title) > TITLE_CHAR_LIMIT)
			? substr($title, 0, TITLE_CHAR_LIMIT) . '...'
			: $title; 
		
		# set time string
		if (!($row["start_time"] == "55:55:55" 
			&& $row["end_time"] == "55:55:55")) {
			$starttime 
				= ($row["start_time"] == "55:55:55") ? "- -" : $row["stime"];
			$endtime 
				= ($row["end_time"] == "55:55:55") ? "- -" : $row["etime"];
			
			$timestr = "
			<div class=\"calendar-event-time\">
			($starttime - $endtime)</div>\n";
		} else {
			$timestr = "<br />";
		}
		$eventdata[$day]["timestr"][] = $timestr;
	}
	return $eventdata;
}

# ###################################################################

	function getFirstDayOfMonthPosition($month, $year)
	{
		//$month = "2";
		//$year = "2016";
		$dd = date("Y d M", mktime(0, 0, 0, $month, 1, $year));
		$string = "first day of " . str_replace(" 01 ", " ", $dd);

		//echo $string . "<br>";
		
		$weekpos = date(('N'), strtotime("$string")) - 1;

		return $weekpos;
	}

# ###################################################################

?>
