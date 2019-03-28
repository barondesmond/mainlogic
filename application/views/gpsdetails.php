Big Brother has found You.

<?php 
//files, location, locationapi
//print_r($location);

print_r($Details);
if (isset($error))
{
	echo "<P>$error";
}
if (!isset($locationapi))
{
	echo "<P>No GPS Updates Found";
	return false;
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