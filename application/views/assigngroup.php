<?php
if (isset($error))
{
	foreach ($error as $err)
	{
		echo "<p>$err\r\n";
	}
}




?>



<p>



<?php

if (!isset($_REQUEST['JobGroup']))
{
	return false;
}
if (!isset($jobgroupemployees))
{
	$jobgroupemployees = '';
}
?>

<form method=get action=/assign/jobgroup/>
<input type=hidden name=JobGroup[] value="<?php echo $_REQUEST['JobGroup'][0]; ?>">
<input type=submit name="<?php echo $_REQUEST['AD']; ?>" value="SWITCH" class="buttonmain">

<?php


echo '<div id="assigncolumn1">';
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
if ($e > 0 && !isset($_REQUEST['ASSIGN']))
{
	echo "<P>Employees<P> <select multiple name=Employee[] size=$e >";

	echo $employeeoptions;
	echo "</select>";
}
else
	{
		echo "<p>Employee <p><select multiple name=Employee[] size=" . count($employees)  . ";
<option></option>";

	foreach ($employees as $employee)
	{
		echo "<option value=$employee->EmpNo >$employee->EmpName $employee->Email</option>\r\n";
	}
	echo "</select>";
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
	echo "</select>";
}
echo '</div><div id="assigncolumn2">';
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
if ($j > 0 && $_REQUEST['AD'] == 'REMOVE')
{
	echo "<P>Job<P> <select multiple name=Job[] size=$j >";

	echo $joboptions;
	echo "</select>";
}
else
{
	echo "<p>Job <p><select multiple name=Job[] size=" . count($jobs)  . ">
	";

	foreach ($jobs as $job)
	{
		echo "<option value=$job->Name  >$job->Name $job->LocName</option>\r\n";
	}
	echo "</select>";

}
}

echo '</div>';



