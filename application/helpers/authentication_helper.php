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
	function timeclock()
	{
		$uri = 'timeclock_json.php?timeclock=1';
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

		foreach ($TimeClock as $event)
		{
	
			if (isset($event->Screen) && isset($screen[$event->Screen]))
			{
				$eva = $screen[$event->Screen];
			}
		if (isset(${$eva}))
		{
		//echo '<p>Job: ' . $event->Name . ' Dispatch: ' . $event->Dispatch . ' Start: ' . $event->StartDate . ' StopDate: ' . $event->StopDate . ' event: ' .$event->event . '</p>';

		echo ${$eva};
		if (!isset($Time[$event->EmpNo][${$eva}]) )
		{
			$Time[$event->EmpNo][${$eva}] = '';
			$Save[$event->EmpNo][${$eva}] = '';
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

		$Job[$event->EmpNo][${$eva}] = ${$eva} .  ' ' . $event->LocName;
		$Save[$event->EmpNo][${$eva}] .= 'Start: ' . $event->StartDate . ' ';
		$Save[$event->EmpNo][${$eva}] .= 'Stop: ' . $event->StopDate . ' ';
		$Save[$event->EmpNo][${$eva}] .= 'Event: ' . $event->event . "<BR>\r\n"  ;

		$Time[$event->EmpNo][${$eva}] .= 'Start: <input type=text name="TimeClockID' . '[' . $event->TimeClockID . ']' . '[StartDate]" value="' . $event->StartDate . '">' ;
		$Time[$event->EmpNo][${$eva}] .= 'Stop: <input type=text name="TimeClockID' . '[' . $event->TimeClockID . ']' . '[StopDate]" value="' . $event->StopDate . '">' ;
		$Time[$event->EmpNo][${$eva}] .= 'Event: ' . $event->event . "<BR>\r\n"  ;

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