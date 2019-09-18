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
	$array = array('EmpNo', 'reference', 'location', 'Desc', 'latitude', 'longitude',  'file');
	$desc = array('Add1', 'City', 'State', 'Zip');
	foreach ($array as $id => $v)
	{
		$value = '';
		if (isset($row->$v))
		{
			if ($v == 'file')
			{
				$value = '<A HREF="?file=' . urlencode($row->$v) . '"><img src="' . APPURL . 'upload/?show=1&file=' . urlencode($row->$v) . '" width=100></A>';
			}
			else
			{
				$value = $row->$v;
			}
		}
		if (!isset($row->$v) && $v == 'location')
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
	$array = array('EmpNo', 'reference', 'location', 'Desc', 'latitude', 'longitude',  'file');

	foreach ($array as $id => $key)
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
	
	$table = '<td><input type=hidden name=file[' . $id . '] value="' . $row->file . '" width="100"></td>';
	$id++;
return $table;
}
if (isset($error))
{
	echo "<P>$error";
}

if (!isset($_REQUEST['key']))
{
	$_REQUEST['key'] = 'reference';
}
$table = '<table border=1>';
foreach(${$_REQUEST['key']} as $id=>$lc)
{

	//$table .= '<tr>' . table_head();
	$table .= '<tr>' . location_row($lc) . '</tr>';
	$table .= '';
	/*
	foreach ($locrow->$lid as $id=>$row)
	{
		$tablerow = location_row($row) . table_form($row);
		$table .= '<tr>' . $tablerow . '</tr>';
	}
	*/
	unset($tablehead);

	
}
$table .= '</table>';
echo $table;


?>