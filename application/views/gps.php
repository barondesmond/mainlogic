Big Brother is Gpsing You.

<?php 
//files, location, locationapi
//print_r($location);

function table_row($row)
{
	$table = '';
	foreach ($row as $key=> $value)
	{
		$table .= '<td>' . $value . '</td>';
	}
return $table;
}


function table_head($row)
{
	$table = '';
	foreach ($row as $key=> $value)
	{
		$table .= '<td>' . $value . '</td>';
	}
return $table;
}
function table_form($row)
{
	$table = '<td><form method=post action=/gps/update/><input type=hidden name=file value="' . $row->file . '"><input type=submit name="Accept" value="Accept"><input type=submit name="Deny" value="Deny"></form>';
return $table;
}
foreach($location as $lid=>$lc)
{
	foreach ($locrow->$lid as $id=>$row)
	{
		if (!isset($tablehead))
		{
			$tablehead = table_head($row);
			$table = '<table border=1><tr>' . $tablehead . '<td>Accept/Deny Override</td></tr>';
		}
		$heablerow = table_row($row) . table_form($row);
		$table .= '<tr>' . $tablerow . '</tr>';
	}

	
}
$table .= '</table>';
echo $table;


?>