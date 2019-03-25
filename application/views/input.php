<?php
//input select
if (!isset($_REQUEST['EmpNo']) || $_REQUEST['EmpNo'] == '')
{
	return false;
}
	if (!isset($_REQUEST['Screen']))
	{
		$_REQUEST['Screen'] = 'Employee';
	}
	$arraytype = array('Employee', 'Job', 'Dispatch');

	if (!isset($_REQUEST['StartDay']) || $_REQUEST['StartDay'] == '')
	{
		$gpb = get_period_bounds($_REQUEST['Offset']);
		$Start = $gpb[0];
		$Stop = $gpb[1];
		$time = $Stop-$Start;
		$days = $time / 86400;
		echo 'Date <select name=StartDay value=""><OPTION>Select Date</OPTION>';
		for ($i=0; $i < $days; $i++)
		{
			echo '<OPTION value="' . '?Offset=' . $_REQUEST['Offset'] . '&EmpNo=' . $_REQUEST['EmpNo'] . '">' . date("Y:m:d", $Start + $i*86400) . "</OPTION>";
		}
		echo "</select>";
		
	}
	else
	{

		echo 'Type<select name="ScreenType" onchange="javascript:location.href = this.value;"><OPTION>Select Type</OPTION>';
		foreach ($arraytype as $type)
		{
			echo '<OPTION value="' . '?Offset=' . $_REQUEST['Offset'] . '&EmpNo=' . $_REQUEST['EmpNo'] . '&Screen=' . $type . '&StartDay=' . $_REQUEST['StartDay'] . '"';
			if ($_REQUEST['Screen'] == $type)
			{
				echo ' selected ' ;
			}
			echo '>' . $type . '</OPTION>';
		}
		echo '</select>';
		echo '<input type=hidden name=StartDay value="' . $_REQUEST['StartDay'] . '">';
	}

	echo '<input type=hidden name="Screen" value="'  .$_REQUEST['Screen'] . '" >';
	echo 'Event<select name="event"><OPTION>Traveling</OPTION><OPTION>Working</OPTION></SELECT>';

	if (isset(${$_REQUEST['Screen']}))
	{
		echo ${$_REQUEST['Screen']};
	}
		


?>