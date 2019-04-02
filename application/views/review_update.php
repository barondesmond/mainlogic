<?php 

if (isset($TimeClockID))
{
	foreach ($TimeClockID as $tid => $event)
	{
		echo '<p>';
		echo 'Adjusted<br>';
				$exp = explode(' ' , $event->StartDate);
				$event->StartDay = $exp[0];
				$event->StartHour = $exp[1];
				$exp2 = explode(' ',$event->StopDate);
				$event->StopDay = $exp2[0];
				$event->StopHour = $exp2[1];

		echo $tid . ' ' . $event->StartDay . ' Start: ' . $event->StartHour . ' Stop: ' . $event->StopHour;
		echo '<br>';
	}
}



?>