TimeSheet and TimeClock Together Again
<p>
<?php
echo "Period $PayrollPeriod<p>";
	$head = array('ID'=>'ID', 'EmpNo'=>'EmpName', 'WageItem' => 'ItemID', 'JobID'=>'Name', 'JobClassID' => 'JobClass', 'Department'=>'DeptID', 'WorkmansCompCode'=>'WorkComp');
	$hour = array('Date'=>'Date', 'Hours'=>'Hours');
	$select = array('WageItem'=>'PRPayItem', 'JobClassID'=>'JobClass', 'Department'=>'SlDept', 'WorkmansCompCode'=>'PRWorkComp');
	$timekey['PRPayItem']['ItemID'] = 'Name';
	$timekey['JobClass']['JobClassID'] = 'Name';
	$timekey['SlDept']['DeptID'] = 'Desc';
	$timekey['PRWorkComp']['ID'] = 'Desc';
/*
<input type=hidden name=timesheet[$id][$key]>$display
*/

function hour_head($day='')
{
		
		$row = "<td>$day</td>";

return $row;
}

function hour_row($db, $key)
{
	$row = "<td><input type=hidden name=timesheet[$db->ID][$key] value=$db->Hours>$db->Hours</td>";

return $row;
}

function timesheet_head($head)
{
	$row = '';
		foreach ($head as $key=>$value)
		{
			$row .= '<td>' . $key . '</td>';
		}
return $row;

}

function timesheet_select_key($id, $key, $keydb, $selected='')
{

	$select =  "<select name=timesheet[$id][$key]>";
	foreach ($keydb as $k=>$v)
	{
		if ($k == $selected)
		{
			$sel = " selected ";
		}
		else
		{
			$sel = '';
		}
		$select .= "<option value='$k' $sel>$v</option>";

	}
	$select .= "</select>";
return $select;

}

function timesheet_row($db, $head, $select)
{


	foreach ($head as $key=>$display)
	{
		$row = '<td>';
		if (isset($db->$key) && isset($db->$display) && !isset($select[$key]))
		{
	
				$row .=  '<input type=hidden name=TimeSheet[' . $db->ID . '][' . $db->$key . ']>';
				$row .= $db->$display;
			
		}
		elseif (isset($db->$select[$key]))
		{
				$row .= timesheet_select_key($db->ID, $key, $db->$select[$key], $db->$display);
				if (isset($db->$display) && $display != $select[$key])
				{
					//echo $db->$display;
				}		
		}
		$row .=  '</td>';
	}

return $row;
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
	foreach ($Time[$_REQUEST['EmpNo']] as $key=>$date)
	{
		$table[$key]['timehead'] = timesheet_head($head);
		$table[$key]['row'] = '';
		$gpb = get_period_bounds();
		$Start = $gpb[0];
		$Stop = $gpb[1];
		$days = ($Stop-$Start)/86400;
		$day = date("Y-m-d", $Start);

		for ($i=0; $i < $days; $i++)
		{
			$day = date("Y-m-d", $Start + 86400*$i);
			if (isset($date[$day]))
			{
				$row = $date[$day];
				$row->ID = $row->EmpNo . '-' . $key;
				foreach ($select as $k=>$v)
				{
					if (isset(${$v}) && !isset($row->$v))
					{
						$row->$v = ${$v};
					}
				}
			if (!isset($table[$key]['timerow']))
			{
				$table[$key]['timerow'] = timesheet_row($row, $head, $select);
			}
			}
			$table[$key]['head'] .= hour_head(date("M d", $Start + 86400*$i));
			
			if (isset($row->Hours))
			{
					$table[$key]['row'] .= hour_row($row, $day);
			}			
			else
			{
				$table[$key]['row'] .= hour_head();
			}
			
		}
			echo '<tr>';
			echo $table[$key]['timehead'];
			echo $table[$key]['head'];
			echo '</tr>';
			$hdr = 1;
		
		echo '<tr>';
		echo $table[$key]['timerow'];
		echo $table[$key]['row'];
		echo '</tr>';
	}

	echo '</table>';

}
