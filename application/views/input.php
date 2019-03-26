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

	if (!isset($_REQUEST['StartDay']) || $_REQUEST['StartDay'] == '')
	{
		$gpb = get_period_bounds($_REQUEST['Offset']);
		$Start = $gpb[0];
		$Stop = $gpb[1];
		$time = $Stop-$Start;
		$days = $time / 86400;
		echo 'Date <select name=StartDay  onchange="javascript:location.href = this.value;"><OPTION value="">Select Date</OPTION>';
		for ($i=0; $i < $days+1; $i++)
		{
			if ($Start+$i*86400 < time())
			{
				$StartDay = date("Y:m:d", $Start + $i*86400);

				echo '<OPTION value="' . '?Offset=' . $_REQUEST['Offset'] . '&EmpNo=' . $_REQUEST['EmpNo'] . '&StartDay=' . $StartDay . '">' . $StartDay . '</OPTION>';
			}
		}
		echo "</select>";
		
	}
	else
	{
		$arraytype = array('Employee', 'Job', 'Dispatch');
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

		echo '<input type=hidden name="Screen" value="'  .$_REQUEST['Screen'] . '" >';
		echo 'Event<select name="event"><OPTION>Traveling</OPTION><OPTION>Working</OPTION></SELECT>';
		if (isset($Job))
		{
			echo 'Job#<select name="Name"><OPTION>Select Job</OPTION>';
			foreach ($Job->jobs as $job)
			{
				echo '<OPTION value="' . $job->Name . '">' . $job->Name . ' ' . $job->LocName . '</OPTION>';
			}
			echo '</select>';
		}
	

	}





?>