<?php
function form_button($get, $value)
{
	return '<p><form method=get action="'. base_url() . $get . '"><input type=submit value="' . $value . '" class="my-button"></form>';

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ServIQ</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

.footer {
   text-align: right;
}


.column1 {
  width: 10.00%;
  padding: 15px;
  background-color: #4fade0;
}

.column2 {
  width: 90.00%;
  padding: 15px;
  background-color: #f1f1f1;

}
.table {
  border: 1;
}

.my-button{
min-width: 100px; /*not necessary if the button has text on it*/
height: 30px;
border: 0;
background: white;
/*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#73bbe9', endColorstr='#17567f',GradientType=0 ); IE6-9 */
filter: none; /*IE6-9 */
-moz-box-shadow:
0px -1px 3px rgba(190,255,255,0.5), /*top external highlight*/
2px 3px 3px rgba(0,0,0,0.2), /*bottom external shadow*/
inset 0 -1px 1px rgba(0,0,0,0.5), /*bottom internal shadow*/
inset 0 1px 1px rgba(255,255,255,1); /*top internal highlight*/
-webkit-box-shadow:
0px -1px 3px rgba(190,255,255,0.5), /*top external highlight*/
2px 3px 3px rgba(0,0,0,0.2), /*bottom external shadow*/
inset 0 -1px 1px rgba(0,0,0,0.5), /*bottom internal shadow*/
inset 0 1px 1px rgba(255,255,255,1); /*top internal highlight*/
box-shadow:
0px -1px 3px rgba(190,255,255,0.5), /*top external highlight*/
2px 3px 3px rgba(0,0,0,0.2), /*bottom external shadow*/
inset 0 -1px 1px rgba(0,0,0,0.5), /*bottom internal shadow*/
inset 0 1px 1px rgba(255,255,255,1); /*top internal highlight*/
}

</style>

</head>
<body class="body">
<table class="table"><tr><td class="column1">
<?php
$head = array("Employee Time" => "review", "TimeSheet" => "review/timesheet", "GPS Review" => "gps", "Job Assignment" => "assign", "Rules"=> "rules", "Non-Billable Report" => "nonbillable", "Process Employee Reports" => "reports");

foreach ($head as $desc => $link)
{
	echo form_button($link, $desc);
}
?>
<p><img src="/assets/images/serviq.png" width="50%"></p>
<?php echo form_button('reports', 'Process Employee reports');

if ($this->session->userdata('EmpNo'))
{
	echo form_button('login/logout', 'Logout');
}
?>
</td>
<td class="column2">

