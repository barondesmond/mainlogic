Review what?
<form method=post action="<?php echo base_url(); ?>review/post">

<div class="review">
<select name='Dispatch'>
<?php
$select['Job'] = '';
$select['Dispatch'] = '';
foreach ($TimeClock as $event)
{
	if ($event->Screen)
	{
		//echo '<p>Job: ' . $event->Name . ' Dispatch: ' . $event->Dispatch . ' Start: ' . $event->StartDate . ' StopDate: ' . $event->StopDate . ' event: ' .$event->event . '</p>';

		$select[$event->EmpNo][$event->Screen] .= '<option value="' . $event->{$event->Screen} . '>' . $event->{$event->Screen} . '</option>';
	}
}
echo $select[$this->session->userdata('EmpNo')]['Dispatch'];
echo '</SELECT>';
var_dump($select);
var_dump($TimeClock);
?>


</div>