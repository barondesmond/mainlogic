<p>
<div id="reviewcolumn">

<?php

if (isset($switchnav)) { echo $switchnav;} 

if (isset($review)) { echo $review;} 


?>
</div>
<div id="savecolumn">

<?php 
if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '')
{
	echo '<input type=submit name="history" value="HISTORY" class="buttonmain">';
}
if (isset($save)) { echo $save; } ?>
</div>
</p>

