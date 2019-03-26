<?php 
if (!isset($_REQUEST['JobGroup']))
{
	return false;
}
if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'ASSIGN')
{
	echo '<input type=submit class="buttonmain" name="submit" value="ASSIGN">';
}
elseif (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'REMOVE')
{
	echo '<input type=submit class="buttonmain" name="submit" value="REMOVE">';
}
else
{
	if (isset($employees) && isset($jobgroups) && isset($jobgroupemployees) && count($employees) > 0 && count($jobgroups) > 0 && count($jobgroupemployees)>0)
	{
		echo '<input type=submit class="buttonmain" name="submit" value="REMOVE">';
	}
	else
	{
		echo '<input type=submit class="buttonmain" name="submit" value="ASSIGN">';
	}
}
