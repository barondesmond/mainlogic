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


<P><form method=post action=/assign/add/>
JobGroup 
<?php
foreach ($jobgroups as $jobgroup)
{
	if ($jobgroup->JobGroupID == $_REQUEST['JobGroupID'])
	{
		echo "JobGroupID " . is_selected('JobGroupID', $jobgroup->JobGroupID, $jobgroupemployees) . ">$jobgroup->JobGroup\r\n";
	}
}
?>
</select>




Employee <select multiple name=Employee[] size=<?php echo count($employees)+2 ?>>
<option></option>

<?php
foreach ($employees as $employee)
{
	echo "<option value=$employee->EmpNo " . is_selected('EmpNo', $employee->EmpNo, $jobgroupemployees) . ">$employee->EmpName $employee->Email</option>\r\n";
}
?>
</select>




<input type=submit value="Assign Job/Employee"></form>
