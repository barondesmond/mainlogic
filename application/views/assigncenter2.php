<?php 
if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'ASSIGN')
{
	echo '<input type=submit class="buttonmain" name="submit" value="SWITCH">';
}
elseif (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'REMOVE')
{
	echo '<input type=submit class="buttonmain" name="submit" value="SWITCH">';
}
else
{
	echo '<input type=submit class="buttonmain" name="submit" value="ADD">';
}

