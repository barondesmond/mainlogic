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
<div  id="centercolumn1"><input type=submit class="buttonmain" value="UPDATE"></div>
<div  id="centercolumn2"><input type=submit class="buttonmain" value="ADD"></div>

<div id="rightcolumn">{INPUT}</div>



