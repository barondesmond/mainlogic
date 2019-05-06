<?php
if (!isset($jobs))
{
	return false;
}
?>
Job Continuation <select name=job onchange="javascript:location.href = this.value;"><option value=''>Select Job Continuation</option>
<?php
if (!isset($_REQUEST['sheet']))
{
	$_REQUEST['sheet'] = array();
}
foreach ($jobs as $job)
{
	echo "<option value='?sheet[JobID]=" . $job->JobID . "'" . select_key('JobID', $job->JobID, $_REQUEST['sheet']) . " >$job->Name $job->LocName</option>\r\n";
}
?>
</select>