<?php

if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '')
{


if (!isset($_REQUEST['switch']) && !isset($_REQUEST['current']))
{
	echo '1';
   $_REQUEST['switch'] = 'CHRON';
   $_REQUEST['current'] = 'GROUP';

   echo '<input type=hidden name="current" value="' . $_REQUEST['current'] . '">';
   echo '<input type=submit name="switch" value="' . $_REQUEST['switch'] . '" class="buttonmain">';
}
elseif (isset($_REQUEST['switch']) && isset($_REQUEST['current']))
	{
	echo '2';
		echo '<input type=hidden name="current" value="' . $_REQUEST['current'] . '">';
		echo '<input type=submit name="switch" value="' . $_REQUEST['switch'] . '" class="buttonmain">';
		if ($_REQUEST['switch'] == 'GROUP' && $_REQUEST['current'] == 'CHRON')
		{
			$_REQUEST['current'] == 'GROUP';
			$_REQUEST['switch'] == 'CHRON';
		} elseif ($_REQUEST['switch'] == 'CHRON' && $_REQUEST['current'] == 'GROUP')
		{
			$_REQUEST['current'] = 'CHRON';
			$_REQUEST['switch'] = 'GROUP';
		}


	}		
elseif (isset($_REQUEST['current']) && !isset($_REQUEST['switch']))
{
	echo '3';
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