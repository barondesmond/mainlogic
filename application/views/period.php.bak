<?php



if (isset($TimeSheet))
{
	
period_select($controller . $function);


$db = timesheet_employee($TimeSheet);
$Employee['EmpNo'] = '<option value="">Select Employee</option>';
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