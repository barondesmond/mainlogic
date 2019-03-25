<?php
//input select

	echo '<input type=hidden name="EmpNo" value="' . $_REQUEST['EmpNo'] . '">';
	echo 'Add Type<select name="Screen"><OPTION>Job</OPTION><OPTION>Employee</OPTION></SELECT>';
	echo '<input type=hidden name="Offset" value="' . $_REQUEST['Offset'] . '" >';		

	echo 'Event<select name="event"><OPTION>Traveling</OPTION><OPTION>Working</OPTION></select> Job#<input type=text name="JD">';


?>