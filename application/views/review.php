Review what?


<div id="reviewcolumn">

<?php
if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '')
{
	$db = timeclock_employee($TimeClock);
	$Job = $db['Job'];
	$Time = $db['Time'];
	if (isset($Job[$_REQUEST['EmpNo']]))
	{
		echo '<table>';

		echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
		echo '<input type=hidden name="Offset" value="' . $_REQUEST['Offset'] . '">';		
		foreach ($Job[$_REQUEST['EmpNo']] as $screen=>$jd)
		{
			foreach ($jd as $key=>$JobDisp)
			{
				echo '<tr><td>' . $screen . ' ' . $JobDisp .  '</td></tr>';
				echo '<tr><td class="cell">Employee Input</td></tr>';
				echo '<tr><td class="cell">';
				echo $Time[$_REQUEST['EmpNo']][$screen][$key];
				echo '</td></tr>';
			}
		}
	
	echo '</table>';
	}

}


?>
</div>
<div id="savecolumn">
<?php if (isset($save)) { echo $save }?>
</div>

