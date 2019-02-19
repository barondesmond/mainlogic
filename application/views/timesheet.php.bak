TimeSheet and TimeClock Together Again
<p>
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
print_r($TimeClock[$_REQUEST['EmpNo']);

}
