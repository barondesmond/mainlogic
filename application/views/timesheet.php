TimeSheet and TimeClock Together Again
<p>
<?php

if (isset($_REQUEST['error']) && is_array($_REQUEST['error']))
{
	foreach ($_REQUEST['error'] as $id=>$err)
	{
		echo "<p>$err<BR>\r\n";;
	}
}
	
	
	$head = array('ID'=>'ID', 'EmpNo'=>'EmpName', 'PayItemID' => 'ItemID', 'JobID'=>'Name', 'JobClassID' => 'JobClassID', 'DeptID'=>'DeptID', 'WorkmansCompCode'=>'WorkComp');
	$hour = array('Date'=>'Date', 'Hours'=>'Hours');
	$select = array('PayItemID'=>'PRPayItem', 'JobClassID'=>'JobClass', 'DeptID'=>'SlDept', 'WorkmansCompCode'=>'PRWorkComp');
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
	if (isset($db->Hours) && $db->Hours > 0)
	{
		$row = "<td><input type=hidden name=" . $db->ID . "[" . urlencode($db->Date) . "] value=" . $db->Hours . '>' . $db->Hours . '</td>';
	}
	else
	{
		$row = '<td></td>';
	}
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
	$select =  "<select name=" . $id . "[$key]>";
	foreach ($keydb as $k=>$v)
	{
		if ((!isset($_REQUEST[$id][$key]) && $k == $selected) || (isset($_REQUEST[$id][$key]) && $_REQUEST[$id][$key] == $k))
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
	$row = '';

	foreach ($head as $key=>$display)
	{
		$row .= '<td>';
		if (isset($db->$key) && isset($db->$display) && !isset($select[$key]))
		{
	
				$row .=  '<input type=hidden name=' . $db->ID . '[' . $key . '] value=' . $db->$key . '>';
				$row .= $db->$display;
			
		}
		elseif (isset($select[$key]) && isset($db->$select[$key]) && isset($db->$display))
		{
				$row .= timesheet_select_key($db->ID, $key, $db->$select[$key], $db->$display);
				if (isset($db->$display) && $display != $select[$key])
				{
					//echo $db->$display;
				}		
		}
		else
		{
			//no entry
		}
		$row .=  '</td>';
	}

return $row;
}

function timesheet_prhours($PRHours, &$max)
{
$rows = '';
	foreach ($PRHours as $id=> $db)
	{
		
		$row = '';
		
		if (isset($db->Hours))
		{
			$max = $max + $db->Hours;
			
			//$db->Hours = '';
		}
		elseif (isset($_REQUEST['PRHours'][$db->ItemID]))
		{
			$db->Hours = $_REQUEST['PRHours'][$db->ItemID];
			$max = $max + $db->Hours;
		}
		else
		{
			$db->Hours = '';
		}
		$row .= '<tr>';
		$row .= '<td>' . $db->Name . '</td>';
		$row .= '<td><input type=text name=PRHours[' . $db->ItemID . '] value=' . $db->Hours . '></td>';
		$row .= '</tr>';
		$rows .= $row;
	}

return $rows;
}


period_select();



if (!isset($TimeSheet))
{
	return false;
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
	$max = 0;
	echo '<form method=post action=/review/timepost/>';
	echo '<input type=hidden name=EmpNo value=' . $_REQUEST['EmpNo'] . '><input type=hidden name=Offset value=' . $_REQUEST['Offset'] . '>';
	echo '<table border=1>';
	foreach ($Time[$_REQUEST['EmpNo']] as $key=>$date)
	{
		$table[$key]['timehead'] = timesheet_head($head);
		$table[$key]['head'] = '';
		$table[$key]['row'] = '';
		$gpb = get_period_bounds($_REQUEST['Offset']);
		$Start = $gpb[0];
		$Stop = $gpb[1];
		$days = ($Stop-$Start)/86400;
		$day = date("Y-m-d", $Start);
		$total = 0;

		for ($i=0; $i <= $days; $i++)
		{
			$day = date("Y-m-d", $Start + 86400*$i);
			if (isset($date[$day]))
			{
				$row = $date[$day];
				$row->ID = trim($row->EmpNo . '-' . $key);
				echo "<input type=hidden name=ids[] value='" . $row->ID . "'>";
				echo "<input type=hidden name=Dates[] value='" . $row->Date . "'>";

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
					$table[$key]['row'] .= hour_row($row, $row->Date);
					$total = $total + $row->Hours;
			}			
			else
			{
				$table[$key]['row'] .= hour_head();
			}
			unset($row);
			
		}
			echo '<tr>';
			echo $table[$key]['timehead'];
			echo $table[$key]['head'];
			echo "<td>Total</td>";

			echo '</tr>';
			$hdr = 1;
		
		echo '<tr>';
		echo $table[$key]['timerow'];
		echo $table[$key]['row'];
		echo "<td>$total</td>";
		echo '</tr>';
		$max = $max + $total;

	}
	if (isset($PRHours))
	{
		$tchours = $max;
		echo timesheet_prhours($PRHours, $max);
	}
	echo '<tr><td>Total Hours</td><td><input type=hidden name=PRHours[TCHours] value=' . $tchours . '> ' . $max . '</td></tr>';
	if (!isset($Post))
	{
		echo '<tr align="center"><td><img src="/assets/images/serviq.png" width="100%"></td><td><input type=submit name="update_hours" value="Update Hours"></td><td><input type=submit name="review_timesheet", value="Review"></td><td><input type=submit name="post_timesheet" value="Post"></td></tr>';
	}
	echo '</table>';

}
