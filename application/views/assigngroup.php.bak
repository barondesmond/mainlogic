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
	foreach ($jobgroupemployees as $jobgroupemployee)
	{

		if ($jobgroupemployee->$key==$id)
		{
			return 'selected';
		}
	
	}
}

?>

<form method=post action=/assign/addjobgroup/>


Job Group<input type=text name=JobGroup><input type=submit value="Add Job Group"></form>
<p>


JobGroup <select name=JobGroup onchange="javascript:location.href = this.value;">
<?php
foreach ($jobgroups as $jobgroup)
{
	echo "<option value='/assign/?JobGroup[]=" . $jobgroup->JobGroupID . "'" . is_selected('JobGroupID', $jobgroup->JobGroupID, $jobgroupemployees) . " >$jobgroup->JobGroup</option>\r\n";
}
?>
</select>
<?php

if (!isset($_REQUEST['JobGroup']))
{
	return false;
}

?>

Job <select multiple name=Job[] size=<?php echo count($jobs)+2 ?>>
<option></option>

<?php
foreach ($jobs as $job)
{
	echo "<option value=$job->Name " . is_selected('Job', $job->Name, $jobgroupemployees) . " >$job->Name $job->LocName</option>\r\n";
}
?>
</select>