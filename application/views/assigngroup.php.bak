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
		if (!isset($jobgroupemployee->$key))
		{
			return;
		}
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


Job Group<input type=text name=JobGroup><input type=submit value="Add Job Group" class="my-button"></form>
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

<form method=get action=/assign/jobgroup/>
<input type=hidden name=JobGroup[] value="<?php echo $_REQUEST['JobGroup'][0]; ?>">

<?php
if (!isset($_REQUEST['Assign']))
{
	echo "<input type=submit name='Assign' value='Switch To Assign' class='my-button'>";
}
else
{
	echo "<input type=submit name='Remove' value='Switch to Remove' class='my-button'>";
}
echo '<table class="table"><tr><td class="column">';
//employees
$employeeoptions = '';
$e=0;
if (isset($employees))
{
foreach ($employees as $employee)
{

	if (is_selected('EmpNo', $employee->EmpNo, $jobgroupemployees, $_REQUEST['JobGroup']))
	{
		$employeeoptions .= "<option value=$employee->EmpNo >$employee->EmpNo $employee->EmpName</option>\r\n";
		$e++;
	}
}
if ($e > 0 && !isset($_REQUEST['Assign']))
{
	echo "<P>Employees<P> <select multiple name=Employee[] size=$e >";

	echo $employeeoptions;
	echo "</select><p><input type=submit name='submit' value='Remove Employees' class='my-button'>";
}
else
	{
		echo "<p>Employee <p><select multiple name=Employee[] size=" . count($employees)  . ";
<option></option>";

	foreach ($employees as $employee)
	{
		echo "<option value=$employee->EmpNo >$employee->EmpName $employee->Email</option>\r\n";
	}
	echo "</select><p><input type=submit name='submit' value='Assign Employees' class='my-button'>";
	}
}
else
{
	echo "<p>Employee <p><select multiple name=Employee[] size=" . count($employees)  . ">
<option></option>";

	foreach ($employees as $employee)
	{
		echo "<option value=$employee->EmpNo >$employee->EmpName $employee->Email</option>\r\n";
	}
	echo "</select><p><input type=submit name='submit' value='Assign Employees' class='my-button'>";
}
echo '</td><td class="column">';
//jobs
if (isset($jobs))
{
$joboptions = '';
$j=0;

foreach ($jobs as $job)
{

	if (is_selected('Job', $job->Name, $jobgroupemployees, $_REQUEST['JobGroup']))
	{
		$joboptions .= "<option value=$job->Name >$job->Name $job->LocName</option>\r\n";
		$j++;
	}
}
if ($j > 0 && !isset($_REQUEST['Assign']))
{
	echo "<P>Job<P> <select multiple name=Job[] size=$j >";

	echo $joboptions;
	echo "</select><p><input type=submit name='submit' value='Remove Jobs' class='my-button'>";
}
else
{
	echo "<p>Job <p><select multiple name=Job[] size=" . count($jobs)  . ">
	<option></option>";

	foreach ($jobs as $job)
	{
		echo "<option value=$job->Name  >$job->Name $job->LocName</option>\r\n";
	}
	echo "</select><p><input type=submit name='submit' value='Assign Jobs' class='my-button'>";

}

}
else
{
		echo "<p>Job <p><select multiple name=Job[] size=" . count($jobs)  . ">
	<option></option>";

	foreach ($jobs as $job)
	{
		echo "<option value=$job->Name  >$job->Name $job->LocName</option>\r\n";
	}
	echo "</select><p><input type=submit name='submit' value='Assign Jobs' class='my-button'>";
}
echo '</td></tr></table>';



