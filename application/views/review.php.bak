Review what?

<div class="review">
<?php

$db = timeclock_employee($TimeClock);

$Time = $db['Time'];
$Job = $db['Job'];


$Employee['EmpNo'] = '<option value="/review/index/">Select Employee</option>';
$Employee = array_merge($Employee, $db['Employee']);

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
	echo '<form method=post action="' . base_url() .  'review/add/">';
	echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
	echo 'Add Type<select name="Screen"><OPTION>Job</OPTION><OPTION>Dispatch</OPTION><OPTION>Employee</OPTION></SELECT>';
	echo 'Job/Dispatch#<input type=text name="JD">';
	echo '<input type=submit value="Add"></form>';
	if (isset($Job[$_REQUEST['EmpNo']]))
	{
		if (!isset($form))
		{
			$form =  '<form method=post action="' .  base_url()  . 'review/update/">';
			echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
			echo $form;
		}

		foreach ($Job[$_REQUEST['EmpNo']] as $Name => $LocName)
		{
			echo '<p>' . $LocName . "<BR>\r\n";
			echo "Employee Input<BR>\r\n";
			echo $Time[$_REQUEST['EmpNo']][$Name];
			echo '</p>';
		}
		echo '<input type=submit value="Update"> </form>';

	}
}
if (isset($_REQUEST['TimeClockID']) && is_array($_REQUEST['TimeClockID']))
{
	var_dump($_REQUEST['TimeClockID']);
}
//var_dump($_REQUEST);
?>

</div>