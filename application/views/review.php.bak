Review what?
<form method=post action="<?php echo base_url(); ?>review/update/">

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
	echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
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
if (isset($_REQUEST['TimeClockID']) && is_array($_REQUEST['TimeClockID']))
{
	var_dump($_REQUEST['TimeClockID']);
}
//var_dump($_REQUEST);
?>
<input type=submit value=Next>
</form>

</div>