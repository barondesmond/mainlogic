Review what?
<form method=post action="<?php echo base_url(); ?>review/index/">

<div class="review">
<?php
$Employee['EmpNo'] = '<option value="/review/index/">Select Employee</option>';
foreach ($TimeClock as $event)
{
		if (!isset($Job[$event->EmpNo]))
		{
			//$Job[$event->EmpNo] = '';

		}

	if ($event->Screen == 'Job')
	{
		//echo '<p>Job: ' . $event->Name . ' Dispatch: ' . $event->Dispatch . ' Start: ' . $event->StartDate . ' StopDate: ' . $event->StopDate . ' event: ' .$event->event . '</p>';
		if (!isset($Time[$event->EmpNo][$event->Name]) )
		{
			$Time[$event->EmpNo][$event->Name] = '';
		}
		if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] == $event->EmpNo)
		{
			$selected = 'selected';
		}
		else
		{
			$selected = '';
		}

		$Employee[$event->EmpNo] = '<option value="/review/index/?EmpNo=' . $event->EmpNo . '" ' . $selected . ' >' . $event->EmpName . ' ' . $event->EmpNo . '</option>';

		$Job[$event->EmpNo][$event->Name] = $event->Name .  ' ' . $event->LocName;
		$Time[$event->EmpNo][$event->Name] .= 'Start: <input type=text name="' . $event->TimeClockID . '[]" value="' . $event->StartDate . '">' ;
		$Time[$event->EmpNo][$event->Name] .= 'Stop: <input type=text name="' . $event->TimeClockID . '[]" value="' . $event->StopDate . '">'  ;
		$Time[$event->EmpNo][$event->Name] .= 'Event: ' . $event->event . "<BR>\r\n"  ;
	
	}
}
//Employee Select
echo 'Employee <select name="EmpNo" onchange="javascript:location.href = this.value;">';
foreach ($Employee as $Emp)
{
	echo $Emp;
}
echo '</select>';
echo "<BR>\r\n";

if (isset($_REQUEST['EmpNo']))
{
    if (isset($Job[$_REQUEST['EmpNo']]))
	{
		foreach ($Job[$_REQUEST['EmpNo']] as $Name => $LocName)
		{
			echo '<p>' . $LocName . "<BR>\r\n";
			echo "Employee Input<BR>\r\n";
			echo $Time[$_REQUEST['EmpNo']][$Name];
			echo '</p>';
		}
	}
}

?>
<input type=submit value=Next>
</form>

</div>