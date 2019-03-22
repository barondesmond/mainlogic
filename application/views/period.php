<?php
echo 'controller ' . $controller . ' func ' . $func;
if (isset($TimeClock) && isset($controller) && isset($func))
{
	echo 'controller = ' . $controller . ' func = ' . $func;
	echo 'entering period check';
	period_check($TimeClock, $controller, $func);
	echo 'exiting period check';
}
?>