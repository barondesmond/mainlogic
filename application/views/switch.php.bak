<?php

if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '')
{


if (!isset($_REQUEST['switch']) && !isset($_REQUEST['current']))
{
   $_REQUEST['switch'] = 'GROUP';
   $_REQUEST['current'] = 'CHRON';

   echo '<input type=hidden name="current" value="' . $_REQUEST['current'] . '">';
   echo '<input type=submit name="switch" value="' . $_REQUEST['switch'] . '" class="buttonmain">';
}
elseif (isset($_REQUEST['switch']) && isset($_REQUEST['current']))
	{
		echo '<input type=hidden name="current" value="' . $_REQUEST['switch'] . '">';
		echo '<input type=submit name="switch" value="' . $_REQUEST['current'] . '" class="buttonmain">';
		if ($_REQUEST['switch'] == 'GROUP')
		{
			$_REQUEST['current'] == 'GROUP';
			$_REQUEST['switch'] == 'CHRON';
		} elseif ($_REQUEST['switch'] == 'CHRON')
		{
			$_REQUEST['current'] = 'CHRON';
			$_REQUEST['switch'] = 'GROUP';
		}
	}		
elseif (isset($_REQUEST['current']) && !isset($_REQUEST['switch']))
{
	if ($_REQUEST['current'] == 'CHRON')
	{
		$_REQUEST['switch'] = 'GROUP';
	}
	elseif ($_REQUEST['current'] == 'GROUP')
	{
		$_REQUEST['switch'] = 'CHRON';
	}
   echo '<input type=hidden name="current" value="' . $_REQUEST['current'] . '">';
	echo '<input type=submit name="switch" value="' . $_REQUEST['switch'] . '" class="buttonmain">';
}


}

?>