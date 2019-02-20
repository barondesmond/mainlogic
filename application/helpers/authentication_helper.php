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
			$auth = '&EmpNo=' .  $json->EmpNo . '&installationId=' . INSTID;
		}

	return $json;
	}

	function empauth($db)
	{
		$uri = 'empauth_json.php?EmpName=' . urlencode($db['EmpName']) . '&Email='  . urlencode($db['Email']) . '&installationId=' . INSTID;
		$auth = app_api($uri, 'auth');
	return $auth;
	}

	function jobs()
	{
		$uri = 'jobs_json.php?latitude=34.253725&longitude=-88.6843';
		return app_api($uri);

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
			$gpb = get_period_bounds();
			$StartTime = $gpb[0];
			$StopTime = $gpb[1];
		}
		else
		{
			$StartTime = $_REQUEST['StartTime'];
			$StopTime = $_REQUEST['StopTime'];
		}
		$uri = "timesheet_json.php?timesheet=1&StartTime=$StartTime&StopTime=$StopTime";
		return app_api($uri);
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
		$date = date("M d", $event->StartTime);
		$event->Hours = round(($event->StopTime - $event->StartTime) / (60*60), 2);
		$event->Date = date("M d Y", $event->StartTime) . ' 12:00:00:00 AM';
		if ($event->Screen == 'Job')
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

		$Employee[$event->EmpNo] = '<option value="/review/timesheet/?EmpNo=' . $event->EmpNo . '" ' . $selected . ' >' . $event->EmpName . ' ' . $event->EmpNo . '</option>';

		
		}
		}
	$db['Employee'] = $Employee;
	$db['Time'] = $Time;

return $db;

}
	
	
	function timeclock()
	{
		$uri = 'timeclock_json.php?timeclock=1';
		return app_api($uri);
	}

	function timeclock_add()
	{

		$uri = 'timeclock_json.php?timeclock_add=1';
		if ($_REQUEST['StartDate'] && $_REQUEST['StopDate'] && $_REQUEST['EmpNo'])
		{
			$uri .= '&' . http_build_query($_REQUEST);
		}
		return app_api($uri);
	}

	function timeclock_update()
	{
		$uri = 'timeclock_json.php?timeclock_update=1';
		if ($_REQUEST['TimeClockID'])
		{
			$uri .= '&' . http_build_query($_REQUEST);
		}
		return app_api($uri);
	}

	function timeclock_employee($TimeClock)
	{
		$screen = array('Job' => '$event->Name', 'Dispatch' => '$event->Dispatch', 'Employee' => '');
		$Time = array();
		$Save = array();
		$Job = array();
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
		if (!isset($Time[$event->EmpNo][$event->Screen][$key]) )
		{
			$Time[$event->EmpNo][$event->Screen][$key] = '';
			$Save[$event->EmpNo][$event->Screen][$key] = '';
			$Job[$event->EmpNo][$event->Screen][$key] = '';

		}
		if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] == $event->EmpNo)
		{
			$selected = 'selected';
		}
		else
		{
			$selected = '';
		}

		$Employee[$event->EmpNo] = '<option value="/review/index/?EmpNo=' . $event->EmpNo . '" ' . $selected . ' >' . $event->EmpName . ' ' . $event->EmpNo . '</option>';
		$Job[$event->EmpNo][$event->Screen][$key] = $event->Name . $event->Dispatch .  ' ' . $event->LocName;
		$Save[$event->EmpNo][$event->Screen][$key] .= 'Start: ' . $event->StartDate . ' ';
		$Save[$event->EmpNo][$event->Screen][$key] .= 'Stop: ' . $event->StopDate . ' ';
		$Save[$event->EmpNo][$event->Screen][$key] .= 'Event: ' . $event->event . "<BR>\r\n"  ;
			if ($event->Screen != 'Dispatch')
			{
				$Time[$event->EmpNo][$event->Screen][$key] .= 'Start: <input type=text name="TimeClockID' . '[' . $event->TimeClockID . ']' . '[StartDate]" value="' . $event->StartDate . '">' ;
				$Time[$event->EmpNo][$event->Screen][$key] .= 'Stop: <input type=text name="TimeClockID' . '[' . $event->TimeClockID . ']' . '[StopDate]" value="' . $event->StopDate . '">' ;
				$Time[$event->EmpNo][$event->Screen][$key] .= 'Event: ' . $event->event . "<BR>\r\n"  ;
			}
			else
			{
				$Time[$event->EmpNo][$event->Screen][$key] .= 'Start: ' . $event->StartDate . ' ';
				$Time[$event->EmpNo][$event->Screen][$key] .= 'Stop: ' . $event->StopDate . ' ';
				$Time[$event->EmpNo][$event->Screen][$key] .= 'Event: ' . $event->event . "<BR>\r\n"  ;
			}
		}
		}
	$db['Time'] = $Time;
	$db['Job']  = $Job;
	$db['Employee'] = $Employee;
	$db['Save'] = $Save;

return $db;

}

    function verify_session(){
       $CI = &get_instance();

       $db['EmpName'] = $CI->session->userdata('EmpName');
	   $db['Email'] = $CI->session->userdata('Email');
	   $auth = empauth($db);

       if($auth->authorized  !=  '1') {
		  
          redirect('login');
       }

   }

   ?>  