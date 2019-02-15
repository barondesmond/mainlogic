<?php 
	$db = timeclock_employee($TimeClock);
	$Job = $db['Job'];
	$Save = $db['Save'];
if (isset($_REQUEST['EmpNo']))
{
	echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
	if (isset($Job[$_REQUEST['EmpNo']]))
	{
		foreach ($Job[$_REQUEST['EmpNo']] as $Name => $LocName)
		{
			echo '<p>' . $LocName . "<BR>\r\n";
			echo "Adjusted<BR>\r\n";
			echo $Save[$_REQUEST['EmpNo']][$Name];
			echo '</p>';
		}
	}
}
?>