<?php
//input select
	if (!isset($_REQUEST['Screen']))
	{
		$_REQUEST['Screen'] = 'Employee';
	}
	echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
	echo 'Add Type<select name="Screen"><OPTION>Employee</OPTION><OPTION>Job</OPTION><OPTION>Dispatch</OPTION></SELECT>';
	echo '<input type=hidden name="Offset" value="' . $_REQUEST['Offset'] . '" >';		
	echo '<input type=hidden name="Screen" value="'  .$_REQUEST['Screen'] . '" >';
	if (isset(${$_REQUEST['Screen']}))
	{
		echo ${$_REQUEST['Screen']};
	}


?>