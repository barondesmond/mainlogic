<?php 


if (isset($error) && __DEV__== 'Dev')
{
	foreach ($error as $id=> $e)
	{
		echo "$e<BR>\r\n";
	}
}

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
				echo '<p>' . $screen . ' ' . $JobDisp .  "</p><BR>\r\n";
				echo $Save[$_REQUEST['EmpNo']][$screen][$key];

			}
		}
}

?>