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