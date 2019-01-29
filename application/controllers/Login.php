<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function _construct()
	{


 
	}

	public function auth()
	{
	
		$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  


		$url = APPURL . 'empauth_json.php?EmpName=' . urlencode($_REQUEST['EmpName']) . '&Email='  . urlencode($_REQUEST['Email']) . '&installationId=' . INSTID;
		//echo $url;
		$auth = file_get_contents($url,false, stream_context_create($arrContextOptions));
		$auth = json_decode($auth);
		if ($auth->authorized == '1')
		{

				$newdata = array(
				  'EmpName'  => $auth->EpmName,
				   'Email'     => $auth->Email,
					'EmpNo' => $auth->EmpNo,
				   'authorized' => $auth->authorized
				);
				$this->session->set_userdata($newdata);
				redirect('/');
		
		}
		else
		{
			$this->load->view('notauthorized', array('data'=>$auth));
		}
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('login_form');
		$this->load->view('footer');
	}
}
