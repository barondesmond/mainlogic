TimeSheet and TimeClock Together Again
<p>
<?php
$db = timesheet_employee($TimeSheet);
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

//Wage Item, Job, JobClass, Date1-Date7, Total, Department, Dispatch, Memo, WorkmansCompCode, Processed
if (isset($_REQUEST['EmpNo']))
{
	echo '<form method=post action=/review/timepost/>';
	echo '<table>';
	echo '	<tr border=1>';
	echo ' <td>Wage Item</td><td>Job</td><td>JobClass</td>';
	echo '<td>Date1-?</td>';
	echo '<td>Total</td><td>Department</td><td>Dispatch</td><td>Memo</td><td>WorkmansCompCode</td><td>Processed</td>';

	echo '</tr></table>';

}
