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
			$value = '<img src="' . APPURL . 'upload/' . str_replace(' ', '%20', $value) . '" width=50>';
		}

		$table .= '<td>' . $value . '</td>';
	}
return $table;
}

function location_row($row)
{
	$array = array('CustNo', 'LocNo', 'LocName', 'Add1','City', 'State', 'Zip');
	foreach ($array as $id => $v)
	{
		$table .= '<td>' . $row->$v . '</td>';
	}
}

function table_head($row)
{
	$table = '';
	foreach ($row as $key=> $value)
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
foreach($location as $lid=>$lc)
{

	//$table = '<tr>' . table_head($lc) . '</tr>';
	$table .= '<tr>' . location_row($lc) . '</tr>';
	$table .= '</table>';
	foreach ($locrow->$lid as $id=>$row)
	{
		if (!isset($tablehead))
		{
			$tablehead = table_head($lc);
			$table .= '<table border=1><tr>' . $tablehead . '<td>Accept/Deny Override</td></tr>';
		
		}

		$tablerow = table_row($row) . table_form($row);
		$table .= '<tr>' . $tablerow . '</tr>';
	}
	unset($tablehead);

	
}
$table .= '</table>';
echo $table;


?>