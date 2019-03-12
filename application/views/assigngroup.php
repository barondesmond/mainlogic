<?php
if (isset($error))
{
	foreach ($error as $err)
	{
		echo "<p>$err\r\n";
	}
}

function is_selected($key, $id, $jobgroupemployees='', $JobGroup)
{
	foreach ($jobgroupemployees as $jobgroupemployee)
	{

		if ($jobgroupemployee->$key==$id && select_group($key, $jobgroupemployee->JobGroupID, $JobGroup) == 'selected')
		{
			return 'selected';
		}
	
	}
}

function select_group($key, $id, $JobGroup)
{

	if (!isset($JobGroup))
	{
		
	}
	elseif ($id == $JobGroup['0'])
	{
		return 'selected';
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
	echo "<option value='/assign/?JobGroup[]=" . $jobgroup->JobGroupID . "'" . select_group('JobGroupID', $jobgroup->JobGroupID, $_REQUEST['JobGroup']) . " >$jobgroup->JobGroup</option>\r\n";
}
?>
</select>
<?php

if (!isset($_REQUEST['JobGroup']))
{
	return false;
}

?>
<P>
<form method=get action=/assign/jobgroup/>
<input type=hidden name=JobGroup[] value="<?php echo $_REQUEST['JobGroup'][0]; ?>">

<?php
$joboptions = '';
$i=0;

foreach ($jobs as $job)
{

	if (is_selected('Job', $job->Name, $jobgroupemployees, $_REQUEST['JobGroup']))
	{
		$joboptions .= "<option value=$job->Name >$job->Name $job->LocName</option>\r\n";
		$i++;
	}
}
if ($i > 0)
{
	echo "Job<P> <select multiple name=Job[] size=$i >";

	echo $joboptions;
	echo "</select><p><input type=submit name='submit' value='Remove Jobs' class='my-button'>";
}