<?php

function delete_jobgroup_employee($key, $id, $JobGroup)
{
	$form = '<form method=post action=/assign/deletejobgroup/><input type=hidden name=' . $key . '[] value=' . $id . '><input type=hidden name=JobGroup[] value=' . $JobGroup . '><input type=submit value="Delete ' . $key . ' ' . $id . ' from JobGroup ' . $JobGroup . '"></form>';
	
return $form;
}

function delete_jobgroup($type, $key, $id)
{
	$form = '<form method=post action/assign/deletejobgroup/><input type=hidden name=' . $type . '[] value=' . $key . '><input type=submit value="Delete ' $key . ' '. $id . '"></form>';
return $form;
}



foreach ($jobgroupemployees as $jobgroupemployee)
{
	$head = '';
	$row = '';
	$djg[$jobgroupemployee->JobGroupID] = delete_jobgroup('JobGroup', $jobgroupemployee->JobGroupID, $jobgroupemployee->JobGroup);
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
foreach ($djg as $deletejobgroup)
{
	echo $deletejobgroup;
}

?>