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
		$_REQUEST['Remove'] = 'Remove';
	}
	else
	{
		$_REQUEST['Assign'] = 'Assign';

	}
}
if (isset($_REQUEST['switch']))
{

	if (isset($_REQUEST['Remove']))
	{
		unset($_REQUEST['Remove']);
		$_REQUEST['Assign'] = 'Assign';
		unset($_REQUEST['switch']);
	}
	if (isset($_REQUEST['Assign']))
	{
		unset($_REQUEST['Assign']);
		$_REQUEST['Assign'] = 'Assign';
		unset($_REQUEST['switch']);
	}
if (isset($_REQUEST['Assign']))
{
	echo '<input type=submit class="buttonmain" name="submit" value="ASSIGN">';
}
elseif (isset($_REQUEST['Remove']))
{
	echo '<input type=submit class="buttonmain" name="submit" value="REMOVE">';
}
else
{
  echo '<input type=submit class="buttonmain" name="submit" value="REMOVE">';
	
}
