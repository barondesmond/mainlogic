<?php 

if (isset($this->timeclock_review))
{
	foreach ($this->timeclock_review as $TimeClockID => $event)
	{
		echo '<p>';
		echo 'Adjusted<br>';
				$exp = explode(' ' , $event->StartDate);
				$event->StartDay = $exp[0];
				$event->StartHour = $exp[1];
				$exp2 = explode(' ',$event->StopDate);
				$event->StopDay = $exp2[0];
				$event->StopHour = $exp2[1];

		echo $TimeClockID . ' ' . $event->StartDay . ' Start: ' . $event->StartHour . ' Stop: ' . $event->StopHour;
		echo '<br>';
	}
}

if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '' && isset($Job[$_REQUEST['EmpNo']]))
{
	$db = timeclock_employee($TimeClock);
	$Job = $db['Job'];
	$Save = $db['Save'];
	echo '<input type=hidden name="Offset" value="' . $_REQUEST['Offset'] . '">';		

	echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
		foreach ($Job[$_REQUEST['EmpNo']] as $screen=>$jd)
		{
			foreach ($jd as $key=>$JobDisp)
			{
				echo '<p><b>' . $screen . '</b> ' . $JobDisp .  "</p>";
				echo 'Adjusted<br>';
				echo $Save[$_REQUEST['EmpNo']][$screen][$key];
				echo '<br>';
			}
		}
}

?>