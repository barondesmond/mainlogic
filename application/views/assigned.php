<?php
foreach ($jobgroupemployees as $jobgroupemployee)
{
	$head = '';
	$row = '';
	foreach ($jobgroupemployee as $key => $value)
	{
	  $head .= '<td>' . $key . '</td>';
	  $row .= '<td>' . $value . '</td>';
	}
	if (!isset($hd))
	{
		$hd = '<table border=1><tr>' . $head . '</tr>';
		echo $hd;
	}
	$rw = '<tr>' . $row . '</tr>';
	echo $rw;

}
echo '</table>';