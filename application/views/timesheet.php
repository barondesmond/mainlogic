TimeSheet and TimeClock Together Again
<p>
<?php
date_default_timezone_set('America/Chicago');
	$head = array('ID'=>'ID', 'EmpNo'=>'EmpName', 'WageItem' => 'JobClass', 'JobID'=>'Name', 'JobClassID' => 'JobClassID', 'Date'=>'Date', 'Hours'=>'Hours', 'Department'=>'DeptID', 'WorkmansCompCode'=>'PRWorkComp');
	$select = array('WageItem'=>'PRPayItem', 'JobClassID'=>'JobClass', 'Department'=>'SlDept', 'WorkmansCompCode'=>'PRWorkComp');
	$timekey['PRPayItem']['ItemID'] = 'Name';
	$timekey['JobClass']['JobClassID'] = 'Name';
	$timekey['SlDept']['DeptID'] = 'Desc';
	$timekey['PRWorkComp']['ID'] = 'Desc';
/*
<input type=hidden name=timesheet[$id][$key]>$display
*/

function hour_head($head)
{
		echo '	<tr>';
		foreach ($head as $key=>$value)
		{
			echo '<td>' . $key . '</td>';
		}
	echo '</tr>';
}

function timesheet_select_key($id, $key, $keydb)
{

	echo "<select name=timesheet[$id][$key]>";
	foreach ($keydb as $k=>$v)
	{
		echo "<option value=$k>$v</option>";
	}
	echo "</select>";
}

function hour_row($db, $head, $select)
{
	echo '<tr>';

	foreach ($head as $key=>$display)
	{
		echo '<td>';
		if (isset($db->$key) && isset($db->$display) && !isset($select[$key]))
		{
	
				echo '<input type=hidden name=timesheet[' . $db->ID . '][' . $db->$key . ']>';
				echo $db->$display;
			
		}
		else
		{
				timesheet_select_key($db->ID, $key, $db->$select[$key]);
				if (isset($db->$display))
				{
					echo $db->$display;
				}		
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
	hour_head($head);
	foreach ($Time[$_REQUEST['EmpNo']] as $key)
	{
		foreach ($key as $date => $row)
		{
				$ID = md5($row->EmpNo . $row->JobID . $row->Date);
				$row->ID = $ID;
				foreach ($head as $k=>$v)
				{
					if (isset(${$v}) && !isset($row->$v))
					{
						$row->$v = ${$v};
					}
				}

				if (isset($row->Hours) && isset($row->Date))
				{
					hour_row($row, $head, $select);
				}			
			
		}
	}
	echo '</table>';

}
