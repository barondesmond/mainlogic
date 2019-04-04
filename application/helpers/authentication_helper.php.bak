 <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function app_api($uri, $empauth='')
	{
		static $auth;
		if (!$auth)
		{
			$auth = '';
		}
		$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  



  		$url = APPURL . $uri . $auth;
		$api = file_get_contents($url,false, stream_context_create($arrContextOptions));
		$json = json_decode($api);
		if ($empauth == 'auth' && $auth == '' && isset($json->EmpNo) && isset($json->authorized) && $json->authorized == 1)
		{
			$auth = '&EmpNo=' .  $json->EmpNo . '&installationId=' . $json->installationId;
		}

	return $json;
	}

	function empauth($db)
	{
		$uri = 'empauth_json.php?EmpName=' . urlencode($db['EmpName']) . '&Email='  . urlencode($db['Email']) . '&installationId=' . $db['installationId'];
		$auth = app_api($uri, 'auth');
	return $auth;
	}

	function admin($db)
	{
		$uri = 'admin_json.php?EmpName=' . urlencode($db['EmpName']) . '&Email='  . urlencode($db['Email']) . '&username=' . urlencode($db['username']) . '&password=' . md5($db['password']);
		$auth = app_api($uri, 'auth');
	return $auth;
	}

	function delete_job_group_employee()
	{
		$uri = 'assign_json.php?delete_job_group_employee=1&' . http_build_query($_REQUEST);
		return app_api($uri);
	}

	function delete_job_group()
	{
		$uri = 'assign_json.php?delete_job_group=1&' . http_build_query($_REQUEST);
		return app_api($uri);
	}

	function add_job_group()
	{
		$uri = 'assign_json.php?add_job_group=1&' . http_build_query($_REQUEST);
		return app_api($uri);
	}

	function add_job_group_employee()
	{
		$uri = 'assign_json.php?add_job_group_employee=1&' . http_build_query($_REQUEST);
		return app_api($uri);
	}

	function assign()
	{
		$uri = 'assign_json.php?latitude=34.253725&longitude=-88.6843';
		return app_api($uri);

	}

	function jobs()
	{
		$uri = 'jobs_json.php?latitude=34.253725&longitude=-88.6843&ServiceMan=' . $_REQUEST['EmpNo'];
		return app_api($uri);

	}

	function dispatchs()
	{
		$uri = 'dispatchs_json.php?latitude=34.253725&longitude=-88.6843&ServiceMan=' . $_REQUEST['EmpNo'] . '&Dev=' . __DEV__;
		return app_api($uri);

	}
	function gps_details()
	{
		$ur = http_build_query($_REQUEST);
		$uri = 'location_details_json.php?location_details=1&' . $ur . '&Dev=' . __DEV__;
		return app_api($uri);
	}

	function gps_update()
	{
		$ur = http_build_query($_REQUEST);
		$uri = 'location_json.php?location_update=1&' . $ur . '&Dev=' . __DEV__;
		return app_api($uri);
	}
	function gps()
	{
		$uri = 'location_json.php?location_query=1&Dev=' . __DEV__;
		return app_api($uri);

	}

function is_selected($key, $id, $jobgroupemployees='', $JobGroup)
{
	if (!isset($jobgroupemployees) || $jobgroupemployees == '')
	{
		return ;
	}
	foreach ($jobgroupemployees as $jobgroupemployee)
	{
		if (!isset($jobgroupemployee->$key))
		{
			return;
		}
		if ($jobgroupemployee->$key==$id && select_group($key, $jobgroupemployee->JobGroupID, $JobGroup) == 'selected')
		{
			return 'selected';
		}
	
	}
}

function select_group($key, $id, $JobGroup)
{

	if (!isset($JobGroup))
	{
		
	}
	elseif ($id == $JobGroup['0'])
	{
		return 'selected';
	}

}

	function get_period_bounds($offset = -1) 
	{

	  $secondhalf  = ($offset % 2) == 0 xor (int) date('j') >= 15;
	 $monthnumber = ceil((int) date('n') + $offset / 2);;

	    $period_begin = mktime(0, 0, 0, // 00:00:00
                           $monthnumber,
                           $secondhalf ? 16 : 1);
	  $period_end   = mktime(0, 0, 0, // 00:00:00
                           $secondhalf ? $monthnumber + 1 : $monthnumber,
                           $secondhalf ? 0 : 15);

		return array($period_begin, $period_end);
	}
		

	function timesheet()
	{
		if (!isset($_REQUEST['StartTime']) || !isset($_REQUEST['StopTime']))
		{
			$gpb = get_period_bounds($_REQUEST['Offset']);
			$StartTime = $gpb[0];
			$StopTime = $gpb[1];
		}
		else
		{
			$StartTime = $_REQUEST['StartTime'];
			$StopTime = $_REQUEST['StopTime'];
		}
		if (isset($_REQUEST['EmpNo']))
		{
			$ts = '&TSEmpNo=' . $_REQUEST['EmpNo'];
		}
		else
		{
			$ts = '';
		}
		$uri = "timesheet_json.php?timesheet=1&StartTime=$StartTime&StopTime=$StopTime$ts";
		return app_api($uri);
	}
	
	function timesheet_post($db)
	{
	if (!isset($db['StartTime']) || !isset($db['StopTime']))
		{
			$gpb = get_period_bounds($_REQUEST['Offset']);
			$db['StartTime'] = $gpb[0];
			$db['StopTime'] = $gpb[1];
		}
		$db['TSEmpNo'] = $db['EmpNo'];
		unset($db['EmpNo']);
		$uri = "timesheet_post_json.php?timesheet_post=1&". http_build_query($db) . '&Dev=' . __DEV__;
		return app_api($uri);
	}

	function timeclock_row($event, $input = '')
	{
		$row = '';
		if (isset($event->updated))
		{
			$input = '!';
			$exp = explode(' ' , $event->updated->StartDate);
			$event->updated->StartHour = $exp[1];
			$exp2 = explode(' ' , $event->updated->StopDate);
			$event->updated->StopHour = $exp2[1];
			$row .= '<font color="red">';
		}
		$row .= '<' . $input . 'input type=hidden name="TimeClockID' . '[' . $event->TimeClockID . ']' . '[StartDay]" value="' . $event->StartDay . '"><b>' . $event->StartDay . '</b>';
		if ($input == '')
		{	
			$row .= ' Start: <' . $input . 'input type=Text name="TimeClockID' . '[' . $event->TimeClockID . ']' . '[StartHour]" value="' . $event->StartHour . '" size="8" maxlength="8">';
		}
		else
		{
			$row .= ' Start: ' . $event->StartHour;
		}
		$row .= '<' . $input . 'input type=hidden name="TimeClockID' . '[' . $event->TimeClockID . ']' . '[StopDay]" value="' . $event->StopDay . '">';
		if ($input == '')
		{
			$row .= ' Stop: <' . $input . 'input type=text name="TimeClockID' . '[' . $event->TimeClockID . ']' . '[StopHour]" value="' . $event->StopHour . '" size="8" maxlength="8">' ;
		}
		else
		{
			$row .= ' Stop: ' . $event->StopHour;
		}
		$row .= ' Event: ' . $event->event ;
		if (isset($event->updated))
		{
			$row .= '</font>';
		}
		$row .=  "<BR>\r\n";
	return $row;
	}




	function timeclock_employee($TimeClock)
	{
		$screen = array('Job' => '$event->Name', 'Dispatch' => '$event->Dispatch', 'Employee' => '');
		$Time = array();
		$Save = array();
		$Job = array();
		$Employee = array();
		$Chron = array();

		foreach ($TimeClock as $id=>$event)
		{

		if (isset($event->StartTime) && isset($event->StopTime))
		{


		//echo '<p>Job: ' . $event->Name . ' Dispatch: ' . $event->Dispatch . ' Start: ' . $event->StartDate . ' StopDate: ' . $event->StopDate . ' event: ' .$event->event . '</p>';
		$key = $event->Name . $event->Dispatch;
		if ($key == '')
		{
			$key = $event->EmpNo;
		}
		if (!isset($Time[$event->EmpNo][$event->Screen][$key]) )
		{
			$Time[$event->EmpNo][$event->Screen][$key] = '';
			$Save[$event->EmpNo][$event->Screen][$key] = '';
			$Job[$event->EmpNo][$event->Screen][$key] = '';
			$Chron[$event->EmpNo]['Chron'][$key] = '';

		}
		if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] == $event->EmpNo)
		{
			$selected = 'selected';
		}
		else
		{
			$selected = '';
		}

		$Employee[$event->EmpNo] = '<option value="/timesheet/review/?EmpNo=' . $event->EmpNo . '&Offset=' . $_REQUEST['Offset'] . '" ' . $selected . ' >' . $event->EmpName . ' ' . $event->EmpNo . '</option>';
		$Job[$event->EmpNo][$event->Screen][$key] = '<b>' . $event->Name . $event->Dispatch .  ' ' . $event->LocName . '</b>';

			//if ($event->Screen != 'Dispatch')
			//{
				$exp = explode(' ' , $event->StartDate);
				$event->StartDay = $exp[0];
				$event->StartHour = $exp[1];
				$exp2 = explode(' ',$event->StopDate);
				$event->StopDay = $exp2[0];
				$event->StopHour = $exp2[1];
				if ($event->StartDay == $event->StopDay)
				{
					$Save[$event->EmpNo][$event->Screen][$key] .= timeclock_row($event, '!');
					$Time[$event->EmpNo][$event->Screen][$key] .= timeclock_row($event);
					$str = $event->Screen . ' ' . $key . ' ';
					$Chron[$event->EmpNo]['Chron'][$key] .= '<tr><td><b>' . $str. '</b> </td><td> ' . timeclock_row($event) . ' </td></tr>';
				}
	
		}
		}
	
	$db['Time'] = $Time;
	$db['Job']  = $Job;
	$db['Employee'] = $Employee;
	$db['Save'] = $Save;
	$db['Chron'] = $Chron;

return $db;

}
function period_check($TimeClock='', $controller='', $function='')
{
date_default_timezone_set('America/Chicago');


if (!isset($TimeClock) || $TimeClock=='')
{
	return false;
}



$db = timeclock_employee($TimeClock);

$Time = $db['Time'];
$Job = $db['Job'];


$Employee['EmpNo'] = '<option value="">Select Employee</option>';
$Employee = array_merge($Employee, $db['Employee']);

if (isset($Employee))
{
//Employee Select
echo 'Employee <select name="EmpNo" onchange="javascript:location.href = this.value;">';

foreach ($Employee as $Emp)
{
	echo $Emp;
}
echo '</select>';
echo "<BR><p>\r\n";
}

}

function period_select($action='')
{

	echo "Pay Period ";

			if (!isset($_REQUEST['EmpNo']))
			{
				$_REQUEST['EmpNo'] = '';
			}

	echo '<select name=Offset onchange="javascript:location.href = this.value;">';
		for ($i=0; $i>-24; $i--)
		{
			$gpb = get_period_bounds($i);
			$StartTime = $gpb[0];
			$StopTime = $gpb[1];
			
			$period = date("Y-m-d", $StartTime) . ' ' . date("Y-m-d", $StopTime);
			if ($_REQUEST['Offset'] == $i)
			{
				$offsel = ' selected ';
			}
			else
			{
				$offsel = '';
			}

			echo "<option value=$action?Offset=$i $offsel>$period</option>";
		}
	echo "</select>";

}

	function timesheet_employee($TimeClock)
	{
		$screen = array('Job' => '$event->Name', 'Dispatch' => '$event->Dispatch', 'Employee' => '');
		$Employee = array();
		foreach ($TimeClock as $event)
		{
	

		if (isset($event->StartTime) && isset($event->StopTime))
		{
		//echo '<p>Job: ' . $event->Name . ' Dispatch: ' . $event->Dispatch . ' Start: ' . $event->StartDate . ' StopDate: ' . $event->StopDate . ' event: ' .$event->event . '</p>';
		$key = $event->Name . $event->Dispatch;
		if ($key == '')
		{
			$key = $event->EmpNo;
		}
		$date = date("Y-m-d", $event->StartTime);
		$event->Hours = round(($event->StopTime - $event->StartTime) / (60*60), 2);
		$event->Date = date("M d Y", $event->StartTime) . ' 12:00:00:00 AM';
		if ($event->Screen != 'Dispatch')
		{
			if (!isset($Time[$event->EmpNo][$key][$date]))
			{
				$Time[$event->EmpNo][$key][$date] = $event;
			
			}
			else
			{
				$rec = $Time[$event->EmpNo][$key][$date];
				$event->Hours = $event->Hours + $rec->Hours;
				$Time[$event->EmpNo][$key][$date] = $event;
			}
		}

		if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] == $event->EmpNo)
		{
			$selected = 'selected';
		}
		else
		{
			$selected = '';
		}

		$Employee[$event->EmpNo] = '<option value="?EmpNo=' . $event->EmpNo . '&Offset=' . $_REQUEST['Offset'] . '" '   . $selected . ' >' . $event->EmpName . ' ' . $event->EmpNo . '</option>';

		
		}
		}
	$db['Employee'] = $Employee;
	if (isset($Time))
	{
		$db['Time'] = $Time;
	}
	$db['TimeClock'] = $TimeClock;

return $db;

}
	
	
	function timeclock()
	{
		if (!isset($_REQUEST['StartTime']) || !isset($_REQUEST['StopTime']))
		{
			$gpb = get_period_bounds($_REQUEST['Offset']);
			$StartTime = $gpb[0];
			$StopTime = $gpb[1];
		}
		else
		{
			$StartTime = $_REQUEST['StartTime'];
			$StopTime = $_REQUEST['StopTime'];
		}
		$uri = "timeclock_json.php?timeclock=1&StartTime=$StartTime&StopTime=$StopTime&Dev=" . __DEV__;
		return app_api($uri);
	}

	function timeclock_add()
	{

		$uri = 'timeclock_json.php?timeclock_add=1';
		if ($_REQUEST['StartDate'] && $_REQUEST['StopDate'] && $_REQUEST['EmpNo'])
		{
			$uri .= '&' . http_build_query($_REQUEST) . '&Dev=' . __DEV__;
		}
		return app_api($uri);
	}

	function timeclock_update()
	{
		$uri = 'timeclock_json.php?timeclock_update=1';
		if ($_REQUEST['TimeClockID'])
		{
			$uri .= '&' . http_build_query($_REQUEST) . '&Dev=' . __DEV__;
		}
		return app_api($uri);
	}



    function verify_session(){
       $CI = &get_instance();

       $db['EmpName'] = $CI->session->userdata('EmpName');
	   $db['Email'] = $CI->session->userdata('Email');
	   $db['installationId'] = $CI->session->userdata('installationId'); 
	   $auth = empauth($db);

       if($auth->authorized  !=  '1') {
		  
          redirect('login');
       }

   }

   ?>  