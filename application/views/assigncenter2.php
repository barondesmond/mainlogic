<?php

if (!isset($_REQUEST['JobGroup']))
{
	echo '<input type=submit name="submit" value="ADD" class="buttonmain">';
}
else
{
	echo '<input type=submit name="submit" value="DELETE" class="buttonmain">';
}