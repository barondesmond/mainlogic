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
	echo 'Type<select name="Screen"><OPTION>Employee</OPTION><OPTION>Job</OPTION><OPTION>Dispatch</OPTION></SELECT>';	
	echo '<input type=hidden name="Screen" value="'  .$_REQUEST['Screen'] . '" >';
	echo 'Event<select name="event"><OPTION>Traveling</OPTION><OPTION>Working</OPTION></SELECT>';
	if (isset(${$_REQUEST['Screen']}))
	{
		echo ${$_REQUEST['Screen']};
	}


?>