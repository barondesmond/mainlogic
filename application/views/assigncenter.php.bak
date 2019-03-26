<?php 
if (!isset($_REQUEST['JobGroup']))
{
	return false;
}
if (isset($employees) && isset($jobgroups) && isset($jobgroupemployees) && count($employees) > 0 && count($jobgroups) > 0 && count($jobgroupemployees)>0)
{
	$remove_valid = true;
}
if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'ASSIGN' || isset($_REQUEST['Assign']))
{
	echo '<input type=submit class="buttonmain" name="submit" value="ASSIGN">';
}
elseif ((isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'REMOVE' || isset($_REQUEST['Remove'])) && $remove_valid)
{
	echo '<input type=submit class="buttonmain" name="submit" value="REMOVE">';
}
else
{
  echo '<input type=submit class="buttonmain" name="submit" value="ASSIGN">';
	
}
