<?php 




if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '' && isset($_REQUEST['history']) && isset($TimeClocHist))
{
	$db = timeclock_employee($TimeClockHist);
	$Job = $db['Job'];
	$Save = $db['Save'];
	echo '<input type=hidden name="Offset" value="' . $_REQUEST['Offset'] . '">';		

	echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
		foreach ($Job[$_REQUEST['EmpNo']] as $screen=>$jd)
		{

			foreach ($jd as $key=>$JobDisp)
			{
				echo '<p><b>' . $screen . '</b> ' . $JobDisp . '</p>';
				echo 'History<br>';
				echo $Save[$_REQUEST['EmpNo']][$screen][$key];
				echo '<br>';
			}

		}
}

?>