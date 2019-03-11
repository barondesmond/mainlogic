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
}

.column2 {
  float: left;
  width: 90.00%;
  padding: 15px;
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
<p><A HREF="<?php echo base_url(); ?>review">Employee Time</A></p>
<p><A HREF="<?php echo base_url(); ?>review/timesheet">TimeSheet</A></p>
<p><A HREF="<?php echo base_url(); ?>gps">GPS Review</A></p>
<p><A href="<?php echo base_url(); ?>pto">PTO by employee</A></p>
<p><A HREF="<?php echo base_url(); ?>assign">Job Assignment</A></p>
<p><A HREF="<?php echo base_url(); ?>rules">Rules</A></p>
<p><A HREF="<?php echo base_url(); ?>nonbillable">Non-Billable Report</A></p>
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