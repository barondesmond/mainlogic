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
			//return 'selected';
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
	echo "<option value='/assign/groupselected/?JobGroupID=" . $jobgroup->JobGroupID . "'" . is_selected('JobGroupID', $jobgroup->JobGroupID, $jobgroupemployees) . " >$jobgroup->JobGroup</option>\r\n";
}
?>
</select>
