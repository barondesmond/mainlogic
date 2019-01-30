Got a J.O.B.?
<?php
//assumed jobs json array passed

foreach ($jobs as $job)
{
	echo "<p><b>" . $job->Name . ' ' . $job->LocName . "</b></p>";
	echo "<p>   " . $job ->JobNotes . '</p>'; 
}
?>