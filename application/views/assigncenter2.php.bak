<?php
if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'ASSIGN')
{
	$switch = 'Remove';
}
else
{
	$switch = 'Assign';
}
echo '<input type=hidden name="' . $switch . '" value="' . $switch . '">';

if (isset($_REQUEST['JobGroup']))
{
		
	echo '<input type=submit class="buttonmain" name="submit" value="SWITCH">';
}
else
{
	echo '<input type=submit class="buttonmain" name="submit" value="ADD">';
}

