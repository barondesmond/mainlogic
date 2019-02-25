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
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login', 'refresh');
	}
	public function auth()
	{
		$auth = empauth($_REQUEST);

		if ($auth->authorized == '1')
		{

				$newdata = array(
				  'EmpName'  => $auth->EmpName,
				   'Email'     => $auth->Email,
					'EmpNo' => $auth->EmpNo,
				   'authorized' => $auth->authorized
				);
				$this->session->set_userdata($newdata);
				redirect('/', 'refresh');
		
		}
		else
		{
			$this->load->view('header');	
			$this->load->view('notauthorized');
			$this->load->view('footer');

		}
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('login_form');
		$this->load->view('footer');

	}
}
