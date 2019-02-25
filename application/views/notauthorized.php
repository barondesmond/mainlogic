<?php 
if (isset($EmpName) && isset($Email))
{
	echo "Awaiting Email Authorization " . $EmpName  . ' ' . $Email ; 
}
else
{
	echo 'Not Authorized';
}