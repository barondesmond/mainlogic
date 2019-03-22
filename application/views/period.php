<?php

if (isset($TimeClock) && isset($controller) && isset($func))
{
	echo 'controller = ' . $controller . ' func = ' . $func;
print_r($TimeClock);
	echo	period_check($TimeClock, $controller, $func);
}
?>