<?php 




if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '' && isset($TimeClockHist))
{
	$db = timeclock_employee($TimeClockHist, 'readyonly');
	$Job = $db['Job'];
	$Time = $db['Time'];
	$Chron = $db['Chron'];
	if (isset($Job[$_REQUEST['EmpNo']]) && ((isset($_REQUEST['switch']) && $_REQUEST['switch'] == 'GROUP') || (isset($_REQUEST['current']) && $_REQUEST['current'] == 'GROUP')))
	{

		echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
		echo '<input type=hidden name="Offset" value="' . $_REQUEST['Offset'] . '">';	
	
		foreach ($Job[$_REQUEST['EmpNo']] as $screen=>$jd)
		{

			foreach ($jd as $key=>$JobDisp)
			{
				echo '<p><b>' . $screen . '</b> ' . $JobDisp . '</p>';
				echo 'HIstory<br>';
				echo $Time[$_REQUEST['EmpNo']][$screen][$key];
				echo '<br>';
			}

		}
	

	}
	if (((isset($_REQUEST['switch']) && $_REQUEST['switch'] == 'CHRON') || (isset($_REQUEST['current']) && $_REQUEST['current'] == 'CHRON')) && isset($Chron) &&  isset($Chron[$_REQUEST['EmpNo']]))
	{
		echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
		echo '<input type=hidden name="Offset" value="' . $_REQUEST['Offset'] . '">';	
			echo '<p><b>' . 'Chronological' . '</b></p>';
			echo 'History<br>';
			echo '<table border=0>';
		foreach ($Chron[$_REQUEST['EmpNo']]['Chron'] as $key=>$out)
		{

			echo $out;
		}
		echo '</table>';
	}
}


?>