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
		if ($empauth == '' && $auth == '' && isset($json->EmpNo) && isset($json->authorized) && $json->authorized == 1)
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
			$uri .= '&' . http_build_query($_REQUEST['TimeClockID']);
		}
		return app_api($uri);
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