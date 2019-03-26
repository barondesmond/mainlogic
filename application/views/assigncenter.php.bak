<?php 
if (!isset($_REQUEST['JobGroup']))
{
	return false;
}


if (isset($employees) && isset($jobgroups) && isset($jobgroupemployees) && count($employees) > 0 && count($jobgroups) > 0 && count($jobgroupemployees)>0)
{
	$e=0;
	foreach ($employees as $employee)
	{

		if (is_selected('EmpNo', $employee->EmpNo, $jobgroupemployees, $_REQUEST['JobGroup']))
		{
			$e++;
		}
	}
	$j=0;
	foreach ($jobs as $job)
	{

		if (is_selected('Job', $job->Name, $jobgroupemployees, $_REQUEST['JobGroup']))
		{
			$j++;
		}
	}
	if ($e>0 && $j>0)
	{
		$remove_valid = true;
	}
	else
	{
		$assign = true;

	}
}
if (isset($assign) || (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'SWITCH' && isset($_REQUEST['Assign'])))
{
	echo '<input type=submit class="buttonmain" name="submit" value="ASSIGN">';
}
elseif ($remove_valid)
{
	echo '<input type=submit class="buttonmain" name="submit" value="REMOVE">';
}
else
{
  echo '<input type=submit class="buttonmain" name="submit" value="REMOVE">';
	
}
