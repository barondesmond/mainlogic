<?php


if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '')
{

		echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
		echo '<input type=hidden name="Offset" value="' . $_REQUEST['Offset'] . '">';	

	if (isset($TimeClock))
	{
		$db = timeclock_employee($TimeClock);
		$Job = $db['Job'];
		$Time = $db['Time'];
		$Chron = $db['Chron'];
	}
	if (isset($Job[$_REQUEST['EmpNo']]) && (!isset($_REQUEST['switch']) || $_REQUEST['switch'] == 'GROUP'))
	{


	
		foreach ($Job[$_REQUEST['EmpNo']] as $screen=>$jd)
		{

			foreach ($jd as $key=>$JobDisp)
			{
				echo '<p><b>' . $screen . '</b> ' . $JobDisp . '</p>';
				echo 'Employee Input<br>';
				echo $Time[$_REQUEST['EmpNo']][$screen][$key];
				echo '<br>';
			}

		}
	

	}
	if (isset($_REQUEST['switch']) && $_REQUEST['switch'] == 'CHRON' && isset($Chron) &&  isset($Chron[$_REQUEST['EmpNo']]))
	{

			echo '<p><b>' . 'Chronological' . '</b></p>';
			echo 'Employee Input<br>';
			echo '<table border=0>';
		foreach ($Chron[$_REQUEST['EmpNo']]['Chron'] as $key=>$out)
		{

			echo $out;
		}
		echo '</table>';
	}
}

?>