TimeSheet and TimeClock Together Again
<p>
<?php
date_default_timezone_set('America/Chicago');

function hour_head()
{
		echo '	<tr>';
	echo '<td>Employee</td>';
	echo ' <td>Wage Item</td><td>Job</td><td>JobClass</td>';
	echo '<td>Date</td>';
	echo '<td>Hours</td><td>Department</td><td>Dispatch</td><td>Memo</td><td>WorkmansCompCode</td><td>Processed</td>';
	echo '</tr>';
}

function hour_row($db)
{
	$array = array('EmpNo', 'PRPayItem', 'JobID', 'JobClassId', 'Date', 'Hours', 'DeptID', 'Dispatch', 'Desc', 'WorkcompID', 'Processed');
	echo '<tr>';

	foreach ($array as $key)
	{
		echo '<td>';
		if (isset($db->$key))
		{
			echo $db->$key;
		}
		if (isset($db[$key]))
		{
			echo $db[$key];
		}
		echo '</td>';
	}
	echo '</tr>';
}

$db = timesheet_employee($TimeSheet);
$Employee['EmpNo'] = '<option value="/review/index/">Select Employee</option>';
$Employee = array_merge($Employee, $db['Employee']);
if ($db['Time'])
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

//Wage Item, Job, JobClass, Date1-Date7, Total, Department, Dispatch, Memo, WorkmansCompCode, Processed
if (isset($_REQUEST['EmpNo']) && isset($Time[$_REQUEST['EmpNo']]))
{
	echo '<form method=post action=/review/timepost/>';
	echo '<table border=1>';
	hour_head();
	foreach ($Time[$_REQUEST['EmpNo']] as $key)
	{
		foreach ($key as $date)
		{
			foreach ($date as $row)
			{
					//print_r($row);
				echo "Hours : " . $row->Hours;
				echo "Date : " . $row->Date;
				if (isset($row->Hours) && isset($row->Date))
				{
					hour_row($row);
				}			
			}
		}
	}
	echo '</table>';

}
