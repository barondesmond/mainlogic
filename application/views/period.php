<?php
echo 'controller ' . $controller . ' func ' . $func;
if (isset($TimeClock) && isset($controller) && isset($func))
{
	echo 'controller = ' . $controller . ' func = ' . $func;

	period_check($TimeClock, $controller, $func);
}
?>