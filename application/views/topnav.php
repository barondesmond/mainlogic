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
<div  id="centercolumn1"><input type=submit class="buttonmain" name="submit" value="UPDATE"></div>
<div  id="centercolumn2"><input type=submit class="buttonmain" name="submit" value="ADD"></div>

<div id="rightcolumn"><?php if (isset($inputnav)){echo $inputnav;}else{ }?></div>



