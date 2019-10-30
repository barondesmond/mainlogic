<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dispatch extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();
        verify_session('dispatch'); 
	}


 
	public function navigation()
	{

		$this->controller = $this->uri->segment(1);	
		$this->func = $this->uri->segment(2);
		$this->push = $this->load->view('push', $this, true);
		$this->widget = $this->load->view('widget', $this, true);
		$this->widget2 = $this->load->view('widget2', $this, true);
		$this->mainnav = $this->load->view('mainnav', $this, true);

		$this->periodnav = '';

		$this->inputnav = '';
		$this->centercolumn1 = '';
		$this->centercolumn2 = '';
		$this->topnav = $this->load->view('topnav', $this, true);


	}

	public function index()
	{
		if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'LOGIN')
		{
			$this->auth();
		}
		$this->navigation();
		$this->content = 'Dispatch Level Access';


		$this->load->view('main', $this);
	}

}