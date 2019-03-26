<?php


if (isset($_REQUEST['JobGroup']))
{


if (isset($_REQUEST['Assign']) && isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'SWITCH')
{
	$switch = 'Remove';
}
if (isset($_REQUEST['Remove']) && isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'SWITCH')
{
	$switch = 'Assign';
}
	if (isset($_REQUEST['submit']) &&$_REQUEST['submit'] == 'ASSIGN')
	{
		$switch = 'Assign';
	}
	if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'REMOVE')
	{
		$switch = 'Remove';
	}
	if (!isset($switch))
	{
		$switch = 'Assign';
	}	
	echo '<input type=hidden name="' . $switch . '" value="' . $switch . '">';


	echo '<input type=submit class="buttonmain" name="submit" value="SWITCH">';
}
else
{
	echo '<input type=submit class="buttonmain" name="submit" value="ADD">';
}

