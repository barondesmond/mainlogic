<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        verify_session(); 
	}


 
	public function view()
	{
		return index();
	}

	public function navigation()
	{
		$data->controller = $this->uri->segment(1);	
		$data->push = $this->load->view('push', $data, true);
		$data->widget = $this->load->view('widget', $data, true);
		$data->widget2 = $this->load->view('widget2', $data, true);
		$data->mainnav = $this->load->view('mainnav', $data, true);
		$data->content = $this->load->view('topnav', $data, true);

	return $data;
	}
	
	public function index()
	{	
		$data = $this;
		$data = $this->navigation($data);

		$this->load->view('main', $data);

	}
}
