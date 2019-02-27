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
foreach($location as $lid=>$lc)
{

	if (!isset($tablehead))
	{
		$tablehead = table_head($lc);
		$table = '<table border=1><tr>' . $tablehead . '<td>Accept/Deny Override</td></tr>';
		
	}
	$table .= '<tr>' . table_row($lc) . '</tr>';

	foreach ($locrow->$lid as $id=>$row)
	{

		$tablerow = table_row($row) . table_form($row);
		$table .= '<tr>' . $tablerow . '</tr>';
	}

	
}
$table .= '</table>';
echo $table;


?>