 <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	function empauth($db)
	{
		$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  


		$url = APPURL . 'empauth_json.php?EmpName=' . urlencode($db['EmpName']) . '&Email='  . urlencode($db['Email']) . '&installationId=' . INSTID;
		//echo $url;
		$auth = file_get_contents($url,false, stream_context_create($arrContextOptions));
		$auth = json_decode($auth);
	return $auth;
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