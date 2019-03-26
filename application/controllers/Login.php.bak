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
		elseif ($auth->authorized == '0' && isset($auth->Email))
		{
			$this->load->view('header');	
			$this->load->view('notauthorized', $auth);
			$this->load->view('footer');
		}
		else
		{
			$this->load->view('header');	
			$this->load->view('notauthorized');
			$this->load->view('footer');
		}
	}


public function navigation()
	{

		$this->controller = $this->uri->segment(1);	
		$this->func = $this->uri->segment(2);
		$this->push = $this->load->view('push', $this, true);
		$this->widget = $this->load->view('widget', $this, true);
		$this->widget2 = $this->load->view('widget2', $this, true);
		$this->mainnav = $this->load->view('mainnav', $this, true);
		$this->period = $this->load->view('login_form', $this, true);
	
		$this->topnav = $this->load->view('topnav', $this, true);


	}

	public function index()
	{
		$this->navigation();



		$this->load->view('main', $this);
	}
}
