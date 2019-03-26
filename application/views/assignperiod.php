JobGroup <select name=JobGroup onchange="javascript:location.href = this.value;">
<?php
foreach ($jobgroups as $jobgroup)
{
	echo "<option value='?JobGroup[]=" . $jobgroup->JobGroupID . "'" . select_group('JobGroupID', $jobgroup->JobGroupID, $_REQUEST['JobGroup']) . " >$jobgroup->JobGroup</option>\r\n";
}
?>
</select>