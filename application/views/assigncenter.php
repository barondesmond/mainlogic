<?php 
if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'ASSIGN')
{
	echo '<input type=submit class="buttonmain" name="submit" value="ASSIGN">';
}
if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'REMOVE')
{
	echo '<input type=submit class="buttonmain" name="submit" value="REMOVE">';
}