Review what?

<div class="review">
<?php
date_default_timezone_set('America/Chicago');

period_select('/review/index/');
if (!isset($TimeClock))
{
	return false;
}



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
echo "<BR><p>\r\n";

if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '')
{
	echo '<form method=post action="' . base_url() .  'review/add/">';
	echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
	echo 'Add Type<select name="Screen"><OPTION>Job</OPTION><OPTION>Employee</OPTION></SELECT>';
	echo '<input type=hidden name="Offset" value="' . $_REQUEST['Offset'] . '" >';		

	echo 'Event<select name="event"><OPTION>Traveling</OPTION><OPTION>Working</OPTION></select> Job#<input type=text name="JD">';
	echo "<BR>\r\n" . 'Start Date <input type=text name="StartDate" value="' . date("Y:m:d H:i:s", time()) . '"> Stop Date <input type=text name="StopDate" value="' . date("Y:m:d H:i:s", time()) . '">';
	echo ' <input type=submit value="Add" class="my-button"></form>';
	echo '<table class="table">';
	if (isset($Job[$_REQUEST['EmpNo']]))
	{

		echo  '<form method=post action="' .  base_url()  . 'review/update/">';
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
		echo '<tr><td><input type=submit value="Update"> </form></td></tr>';

	}
	echo '</table>';
}

//var_dump($_REQUEST);
?>

</div>