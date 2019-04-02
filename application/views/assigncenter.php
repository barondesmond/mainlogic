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
		$_REQUEST['AD'] = 'REMOVE';
	}
	else
	{
		$_REQUEST['AD'] = 'ASSIGN';

	}
}
if (!isset($_REQUEST['submit']) && isset($_REQUEST['AD']) && isset($_REQUEST[$_REQUEST['AD']]))
{
	if ($_REQUEST[$_REQUEST['AD']] == 'SWITCH')
	{
		if ($_REQUEST['AD'] == 'REMOVE')
		{
			$_REQUEST['AD'] = 'ASSIGN';
		}
	}
}
if (isset($_REQUEST['AD']))
{

	echo '<input type=submit class="buttonmain" name="submit" value="' . $_REQUEST['AD'] . '">';

}
