<?php
if (isset($error))
{
	foreach ($error as $err)
	{
		echo "<p>$err\r\n";
	}
}
?>

<form method=post action=/assign/addjobgroup/>
Job Group<input type=text name=JobGroup><input type=submit value="Add Job Group"></form>
<p>

<form method=post action=/assign/add/>

Employee <select multiple name=Employee[] size=<?php echo count($employees) ?>>
<?php
foreach ($employees as $employee)
{
	echo "<option value=$employee->EmpNo>$employee->EmpName $employee->Email</option>\r\n";
}
?>
</select>

JobGroup <select multiple name=JobGroup[] size=<?php echo count($jobgroups) ?>>
<?php
foreach ($jobgroups as $jobgroup)
{
	echo "<option value=$jobgroup->JobGroupID>$jobgroup->JobGroup</option>\r\n";
}
?>
</select>
Job <select multiple name=Job[] size=<?php echo count($jobs) ?>>
<?php

foreach ($jobs as $job)
{
	echo "<option value=$job->Name>$job->Name $job->LocName</option>\r\n";
}
?>
</select>

<input type=submit value="Assign"></form>


