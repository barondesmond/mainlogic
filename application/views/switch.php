<?php

if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '')
{
	if (isset($_REQUEST['current']) && $_REQUEST['current'] != '' && !isset($_REQUEST['switch']))
	{
		$_REQUEST['switch'] = $_REQUEST['current'];
	}

if (!isset($_REQUEST['switch']))
{
   $_REQUEST['switch'] = 'GROUP';
   echo '<input type=hidden name="current" value="' . $_REQUEST['switch'] . '">';
   echo '<input type=submit name="switch" value="CHRON" class="buttonmain">';
}
else
{
   echo '<input type=hidden name="current" value="' . $_REQUEST['switch'] . '">';
	echo '<input type=submit name="switch" value="GROUP" class="buttonmain">';
}


}

?>