<form method=post action=/assign/add/>

Employee <select multiple name=Employee[]>
<option value=0195>Baron Desmond</option>
<option value=0002>Shannon Dillon</option>
</select>

Group <select multiple name=Group[]>
<option>Group1</option>
<option>Group2</option>
</select>

Job <select multiple name=Job[]>
<?php

foreach ($jobs as $job)
{
	echo "<option value=$job->Name>$job->Name $job->LocName</option>\r\n";
}
?>
</select>

<input type=submit value="Assign"></form>


