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
		if (isset($_REQUEST['password']))
		{

		$auth = admin($_REQUEST);
		
		if ($auth->authorized == '1')
		{

				$newdata = array(
				  'EmpName'  => $auth->EmpName,
				   'Email'     => $auth->Email,
					'EmpNo' => $auth->EmpNo,
				   'authorized' => $auth->authorized,
					'installationId' => $auth->installationId
				);
				$arr = array('admin', 'timesheet', 'estimating', 'accounting', 'dispatch');
				foreach ($arr as $access)
				{
					if (isset($auth->$access) && $auth->$access == '1')
					{
						$newdata[$access] = $auth->$access;
					}
				}
				$this->session->set_userdata($newdata);
				redirect('/', 'refresh');
		
		}
		}
	
	
	}

	public function login_access($access)
	{
		if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'LOGIN')
		{
			$this->auth();
			if (isset($this->auth->authorized) && $this->auth->authorized == '1')
			{
				redirect(base_url() . $access);
			}
		}
		$this->navigation();
		$this->content = $access . ' level access required';
		$this->load->view('main', $this);
	}
	public function dispatch()
	{
		$this->login_access('dispatch');
	}
	public function timesheet()
	{
		$this->login_access('timesheet');
	}
	public function accounting()
	{
		$this->login_access('accounting');
	}
	public function admin()
	{
		$this->login_access('admin');
	}
	public function estimating()
	{
		$this->login_access('estimating');
	}
	public function navigation()
	{

		$this->controller = $this->uri->segment(1);	
		$this->func = $this->uri->segment(2);
		$this->push = $this->load->view('push', $this, true);
		$this->widget = $this->load->view('widget', $this, true);
		$this->widget2 = $this->load->view('widget2', $this, true);
		$this->mainnav = $this->load->view('mainnav', $this, true);
		$this->inputnav = $this->load->view('login_form', $this, true);
		$this->periodnav = $this->load->view('login_form_period', $this, true);
		$this->centercolumn2 = $this->load->view('centerlogin', $this,true);
		$this->topnav = $this->load->view('topnav', $this, true);


	}

	public function index()
	{
		if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'LOGIN')
		{
			$this->auth();
			if (isset($this->auth->authorized) && $this->auth->authorized != '1')
			{
				$this->content = 'Login failed, not authorized';
			}
		}
		$this->navigation();



		$this->load->view('main', $this);
	}
}
