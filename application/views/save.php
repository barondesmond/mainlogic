<?php 
	$db = timeclock_employee($TimeClock);
	$Job = $db['Job'];
	$Save = $db['Save'];

$Employee['EmpNo'] = '<option value="/review/index/">Select Employee</option>';
$Employee = array_merge($Employee, $db['Employee']);

//Employee Select
echo 'Employee <select name="EmpNo" onchange="javascript:location.href = this.value;">';

foreach ($Employee as $Emp)
{
	echo $Emp;
}
echo '</select>';
echo "<BR><p>\r\n";
if (isset($_REQUEST['EmpNo']))
{
	echo '<form method=get action=/review/timesheet/>';

	echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
		foreach ($Job[$_REQUEST['EmpNo']] as $screen=>$jd)
		{
			foreach ($jd as $key=>$JobDisp)
			{
				echo '<p>' . $screen . ' ' . $JobDisp .  "<BR>\r\n";
				echo $Save[$_REQUEST['EmpNo']][$screen][$key];
				echo '</p>';
			}
		}
    echo '<input type=submit value="Next"></form>';
}

?>