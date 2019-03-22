<?php

if (isset($TimeClock) && isset($controller) && isset($func))
{

	echo	period_check($TimeClock, $controller, $func);
}
?>