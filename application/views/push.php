<?php

/*
 function push_element(){
    navMenu = [];
    var originalCount = navMenu.length;
    navMenu.push({label: "EMPLOYEE TIME", url: "employee_time.html", target: "_self"});
    navMenu.push({label: "TIME SHEET", url: "time_sheet.html", target: "_self"});
    navMenu.push({label: "GPS REVIEW", url: "gps_report.html", target: "_self"});
    navMenu.push({label: "PTO BY EMPLOYEE", url: "pto_by_employee.html", target: "_self"});
    navMenu.push({label: "EMPLOYEE REPORT", url: "employee_report.html", target: "_self"});
    navMenu.push({label: "NON-BILLABLE REPORT", url: "non_billable_report.html", target: "_self"});
    navMenu.push({label: "RULES", url: "rules.html", target: "_self"});
    navMenu.push({label: "JOB ASSIGNMENT", url: "job_assignment.html", target: "_self"});
    navMenu.push({label: "LOGOUT", url: "index.html", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu.push({label: "", url: "http://", target: "_self"});
    navMenu = navMenu.splice(0,originalCount+8+0);
    return navMenu;
  }
*/



$nav['review'] = array("Employee Time" => "review", "TimeSheet" => "review/timesheet", "GPS Review" => "gps", "Job Assignment" => "assign", "Rules"=> "rules", "Non-Billable Report" => "nonbillable", "Process Employee Reports" => "reports");
if (isset($controller))
{
	$push = $nav[$controller];
}

if (isset($push))
{
	echo " function push_element(){
    navMenu = [];
    var originalCount = navMenu.length;";
	foreach ($push as $label => $url)
	{
		echo 'navMenu.push({label: "' . $desc . '", url: "' . $url . '", target: "_self"});';
	}
	echo 'navMenu = navMenu.splice(0,originalCount+8+0);';
    echo 'return navMenu;';
}



?>
