<?php

if (isset($TimeClock) && isset($controller) && isset($func))
{
	echo 'controller = ' . $controller . ' func = ' . $func;
	echo 'entering period check';
	period_check($TimeClock, $controller, $func);
	echo 'exiting period check';
}

if (isset($TimeSheet))
{
	


$db = timesheet_employee($TimeSheet);
$Employee['EmpNo'] = '<option value="/review/index/">Select Employee</option>';
$Employee = array_merge($Employee, $db['Employee']);
if (isset($db['Time']))
{
	$Time = $db['Time'];
}
//Employee Select

echo 'Employee <select name="EmpNo" onchange="javascript:location.href = this.value;">';

foreach ($Employee as $Emp)
{
	echo $Emp;
}
echo '</select>';
echo "<BR><p>\r\n";
}
?>