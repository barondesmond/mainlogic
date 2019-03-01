Big Brother is Gpsing You.

<?php 
//files, location, locationapi
//print_r($location);

function table_row($row)
{
	$table = '';
	foreach ($row as $key=> $value)
	{
		if ($key == 'file')
		{
		}

		$table .= '<td>' . $value . '</td>';
	}
return $table;
}

function location_row($row)
{
	$table = '';
	$array = array('LocName', 'EmpNo', 'location', 'Desc', 'latitude', 'longitude', 'distance', 'file');
	$desc = array('Add1', 'City', 'State', 'Zip');
	foreach ($array as $id => $v)
	{
		$value = '';
		if (isset($row->$v))
		{
			if ($v == 'file')
			{
				$value = '<img src="' . APPURL . 'upload/' . str_replace(' ', '%20', $row->$v) . '" width=50>';
			}
			else
			{
				$value = $row->$v;
			}
		}
		if (!isset($row->$v) && $v == 'Desc')
		{
			
			foreach ($desc as $num=>$add)
			{
				if (isset($row->$add))
				{
					$value .= $row->$add . ' ';
				}
			}
			$value = trim($value);
		}
		$table .= '<td>' . $value . '</td>';

	}

return $table;
}

function table_head()
{
	$table = '';
	$array = array('LocName', 'EmpNo', 'location', 'Desc', 'latitude', 'longitude', 'distance', 'file');

	foreach ($array as $id => $key)
	{
		$table .= '<td>' . $key . '</td>';
	}
return $table;
}
function table_form($row)
{
	$table = '<td><form method=post action=/gps/update/><input type=hidden name=file value="' . $row->file . '"><input type=submit name="Accept" value="Accept"><input type=submit name="Deny" value="Deny"></form>';
return $table;
}
$table = '<table border=1>';
foreach($locationapi as $lid=>$lc)
{

	$table .= '<tr>' . table_head() . '<td>Accept/Deny</td></tr>';
	$table .= '<tr>' . location_row($lc) . '</tr>';
	$table .= '';
	foreach ($locrow->$lid as $id=>$row)
	{
		$tablerow = location_row($row) . table_form($row);
		$table .= '<tr>' . $tablerow . '</tr>';
	}
	unset($tablehead);

	
}
$table .= '</table>';
echo $table;


?>