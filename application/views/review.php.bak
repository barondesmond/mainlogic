


<div id="reviewcolumn">

<?php
if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '')
{
	$db = timeclock_employee($TimeClock);
	$Job = $db['Job'];
	$Time = $db['Time'];
	if (isset($Job[$_REQUEST['EmpNo']]))
	{


		echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
		echo '<input type=hidden name="Offset" value="' . $_REQUEST['Offset'] . '">';		
		foreach ($Job[$_REQUEST['EmpNo']] as $screen=>$jd)
		{

			foreach ($jd as $key=>$JobDisp)
			{
				echo '<p>' . $screen . ' ' . $JobDisp . '</p>';
				echo 'Employee Input<br>';
				echo $Time[$_REQUEST['EmpNo']][$screen][$key];
				echo '<br>';
			}

		}
	

	}

}


?>
</div>
<div id="savecolumn">
<?php if (isset($save)) { echo $save; } ?>
</div>

