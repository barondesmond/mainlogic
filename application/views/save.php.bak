<?php 




if (isset($_REQUEST['EmpNo']))
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
				echo '<p>' . $screen . ' ' . $JobDisp .  "</p>";
				echo 'Adjusted<br>';
				echo $Save[$_REQUEST['EmpNo']][$screen][$key];
				echo '<br>';
			}
		}
}

?>