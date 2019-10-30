<?php 


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

function table_head($array)
{
	$table = '';

	foreach ($array as $key => $value)
	{
		$table .= '<td>' . $key . '</td>';
	}
return $table;
}
function table_form($row)
{
	static $id;
	if (!isset($id))
	{
		$id = 0;
	}
	if (isset($row->file))
	{
	$table = '<td><input type=hidden name=file[' . $id . '] value="' . $row->file . '" width="100"></td>';
	$id++;
	}
return $table;
}
if (isset($error))
{
	echo "<P>$error";
}
if (!isset($query))
{
	echo "<P>No Data Found";
	return false;
}
$table = '<table border=1>';
foreach($query as $id=>$row)
{
	if (!isset($head))
	{
		$table .= '<tr>' . table_head($row);
		$table .= '';
		$head = true;
	}

		$tablerow = table_row($row) . table_form($row);
		$table .= '<tr>' . $tablerow . '</tr>';	
}
$table .= '</table>';
echo $table;


?>