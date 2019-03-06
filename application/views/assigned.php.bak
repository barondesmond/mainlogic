<?php

function delete_jobgroup_employee($key, $id, $JobGroup)
{
	$form = '<form method=post action=/assign/delete/jobgroup/><input type=hidden name=' . $key . '[] value=' . $id . '><input type=hidden name=JobGroup[] value=$JobGroup><input type=submit value="Delete ' . $key . ' ' . $id . '"></form>';
	
return $form;
}

foreach ($jobgroupemployees as $jobgroupemployee)
{
	$head = '';
	$row = '';
	foreach ($jobgroupemployee as $key => $value)
	{
	  $head .= '<td>' . $key . '</td>';
	  if ($key == 'id')
	  {
		  $row .= '<td>' . delete_jobgroup_employee('Employee', $jobgroupemployee->EmpNo, $jobgroupemployee->JobGroupID) . delete_jobgroup_employee('Job', $jobgroupemployee->Job, $jobgroupemployee->JobGroupID) . '</td>';
	  }
	  else
	  {
		  $row .= '<td>' . $value . '</td>';
	  }
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