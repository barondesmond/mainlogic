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

	echo 'Type<select name="ScreenType" onchange="javascript:location.href = this.value;>';
	foreach ($arraytype as $type)
	{
		echo '<OPTION value="' . '?Offset=' . $_REQUEST['Offset'] . '&EmpNo=' . $_REQUEST['EmpNo'] . '&Screen=' . $type  '"';
		if ($_REQUEST['Screen'] == $type)
		{
			echo ' selected ' ;
		}
		echo '>' . $type . '</OPTION>';
	}
	echo '<input type=hidden name="Screen" value="'  .$_REQUEST['Screen'] . '" >';
	echo 'Event<select name="event"><OPTION>Traveling</OPTION><OPTION>Working</OPTION></SELECT>';
	if (isset(${$_REQUEST['Screen']}))
	{
		echo ${$_REQUEST['Screen']};
	}


?>