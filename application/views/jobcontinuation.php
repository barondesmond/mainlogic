<?php
if (!isset($jobs))
{
	return false;
}
?>
Job <select name=job onchange="javascript:location.href = this.value;"><option value=''>Select Job</option>
<?php

foreach ($jobs as $job)
{
	echo "<option value='?sheet[JobID]=" . $job->JobID . "'" . select_key('JobID', $job->JobID, $_REQUEST['sheet']) . " >$job->Name</option>\r\n";
}
?>
</select>