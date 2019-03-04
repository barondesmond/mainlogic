<form method=post action=/assign/add/>

Employee <select multiple name=Employee[] size=20>
<?php
foreach ($employees as $employee)
{
	echo "<option value=$employee->EmpNo>$employee->EmpName $employee->Email</option>\r\n";
}
?>
</select>

Group <select multiple name=Group[] size=20>
<option>Group1</option>
<option>Group2</option>
</select>

Job <select multiple name=Job[] size=20>
<?php

foreach ($jobs as $job)
{
	echo "<option value=$job->Name>$job->Name $job->LocName</option>\r\n";
}
?>
</select>

<input type=submit value="Assign"></form>


