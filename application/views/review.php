


<div id="reviewcolumn">

<?php
if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '')
{
	$db = timeclock_employee($TimeClock);
	$Job = $db['Job'];
	$Time = $db['Time'];
	$Chron = $db['Chron'];
	if (isset($Job[$_REQUEST['EmpNo']]) && (!isset($_REQUEST['switch']) || $_REQUEST['switch'] == 'Group'))
	{


		echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
		echo '<input type=hidden name="Offset" value="' . $_REQUEST['Offset'] . '">';		
		foreach ($Job[$_REQUEST['EmpNo']] as $screen=>$jd)
		{

			foreach ($jd as $key=>$JobDisp)
			{
				echo '<p><b>' . $screen . '</b> ' . $JobDisp . '</p>';
				echo 'Employee Input<br>';
				echo $Time[$_REQUEST['EmpNo']][$screen][$key];
				echo '<br>';
			}

		}
	

	}
	if (isset($_REQUEST['switch']) && $_REQUEST['switch'] == 'Chron' && isset($Chron[$_REQUEST['EmpNo']]))
	{
			echo '<p><b>' . 'Chronological' . '</b></p>';
			echo 'Employee Input<br>';
		foreach ($Chron[$_REQUEST['EmpNo']]['Chron'] as $key=>$out)
		{

			echo $out;
		}
	}
}


?>
</div>
<div id="savecolumn">
<?php if (isset($save)) { echo $save; } ?>
</div>

