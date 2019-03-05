<?php
if (isset($error))
{
	foreach ($error as $err)
	{
		echo "<p>$err\r\n";
	}
}

function is_selected($key, $id, $jobgroupemployees='')
{
	foreach ($jobgroupemployeese as $jobgroupemployee)
	{
	if (isset($jobgroupemployee) && is_array($jobgroupemployee))
	{
		if ($jobgroupemployee[$key]==$id)
		{
			return 'selected';
		}
	}
	}
}

print_r($jobgroupemployees);
?>

<form method=post action=/assign/addjobgroup/>


Job Group<input type=text name=JobGroup><input type=submit value="Add Job Group"></form>
<p>



<form method=post action=/assign/add/>

Job <select multiple name=Job[] size=<?php echo count($jobs) ?>>
<?php

foreach ($jobs as $job)
{
	echo "<option value=$job->Name " . is_selected('Job', $job->Name, $jobgroupemployees) . " >$job->Name $job->LocName</option>\r\n";
}
?>
</select>

Employee <select multiple name=Employee[] size=<?php echo count($employees) ?>>
<?php
foreach ($employees as $employee)
{
	echo "<option value=$employee->EmpNo " . is_selected('EmpNo', $employee->EmpNo, $jobgroupemployees) . ">$employee->EmpName $employee->Email</option>\r\n";
}
?>
</select>

JobGroup <select multiple name=JobGroup[] size=<?php echo count($jobgroups) ?>>
<?php
foreach ($jobgroups as $jobgroup)
{
	echo "<option value=$jobgroup->JobGroupID " . is_selected('JobGroupID', $jobgroup->JobGroupID, $jobgroupemployees) . ">$jobgroup->JobGroup</option>\r\n";
}
?>
</select>


<input type=submit value="Assign"></form>


