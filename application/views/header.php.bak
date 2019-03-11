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

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.column1 {
  float: left;
  width: 10.00%;
  padding: 15px;
  background-color: #4fade0;

}

.column2 {
  float: left;
  width: 90.00%;
  padding: 15px;
  background-color: #f1f1f1;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.review: {
  background-color: #808080;
  layer-background-color: gray;
  color: black;
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
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
</style>

</head>
<body>
<div id="header" class="header">
<p> <?php  echo $this->session->userdata('EmpNo') . ' ' . $this->session->userdata('EmpName') . ' ' . $this->session->userdata('Email'); ?> </p>
</div>
	<div class="row">
	<div class="column1">
<?php
$head = array("Employee Time" => "review", "TimeSheet" => "review/timesheet", "GPS Review" => "pto", "Job Assignment" => "assign", "Rules"=> "rules", "Non-Billable Report" => "nonbillable", "Process Employee Reports" => "reports");

foreach ($head as $desc => $link)
{
	echo '<p><form method=get action="'. base_url() . $link . '"><input type=submit value="' . $desc . '" class="my-button"></form>';
}
?>
<p><img src="/assets/images/serviq.png" width="50%"></p>
<p><A HREF="<?php echo base_url(); ?>reports">Process Employee Reports</A></P>
<?php 
if ($this->session->userdata('EmpNo'))
{
	echo '<P><A HREF="' . base_url() .  'login/logout">Logout</A></p>';
}
?>
</div>

<div class="column2">