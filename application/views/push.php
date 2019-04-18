<?php

$push_element = '
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
  }';





$nav['timesheet'] = array("Employee Time" => base_url() . "/timesheet/", "TimeSheet" => base_url() . "/timesheet/timesheet/", "GPS Review" => base_url() . "/timesheet/gps/", 'PTO BY EMPLOYEE' => base_url() . "/timesheet/pto/", 'EMPLOYEE REPORT'=>base_url() . '/timesheet/reports/', "Job Assignment" => base_url() . "/timesheet/assign/", "Rules"=> base_url() . "/timesheet/rules/", "Non-Billable Report" => base_url() . "/timesheet/nonbillable/", "Process Employee Reports" => base_url() . "/timesheet/reports/", "LOGOUT" => base_url() . "/login/logout/");

$nav['accounting'] = array("Billing" => base_url() . "/accounting/billing/",  "LOGOUT" => base_url() . "/login/logout/");

if (isset($controller) && isset($nav[$controller]))
{
	$push = $nav[$controller];
}
else
{
	$push = $nav['timesheet'];
}

if (isset($push))
{
	echo " function push_element(){
    navMenu = [];
    var originalCount = navMenu.length;";
	foreach ($push as $label => $url)
	{
		echo 'navMenu.push({label: "' . $label . '", url: "' . $url . '", target: "_self"});';
	}
	echo 'navMenu = navMenu.splice(0,originalCount+8+0);
    return navMenu;  
	}';
}
else
{
	
}



?>
