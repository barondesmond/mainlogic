<div id="leftcolumn"><?php if (isset($TimeClock))
{
	echo '<form method=post action="/' . $controller . '/' . $func . '/">';

	echo	period_check($TimeClock);
}
else 
{ 

	echo '{PERIOD}'; 
} 
?>
</div>
<div class="buttonmain" id="centercolumn"><input type=submit class="buttonmain" value="UPDATE"></form></div>
<div class="buttonmain" id="rightcolumn">{INPUT}</div>



