<div class="topcontainer">
<div class="lefttopnav" id="leftcolumn"><?php if (isset($TimeClock))
{
	echo	period_check($TimeClock);
}
else 
{ 
	echo '{PERIOD}'; 
} 
?>
</div>
<div class="buttonmain" id="centercolumn"><form method=post action=/timesheet/><input type=submit class="buttonmain" value="UPDATE"></form></div>
<div class="buttonmain" id="rightcolumn">{INPUT}</div>
</div>


