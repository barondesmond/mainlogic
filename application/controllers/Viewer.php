<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewer extends CI_Controller {


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
		$data['controller'] = $this->uri->segment(1);	
		$data['push'] = $this->load->view('push', $data, true);
		$data['widget'] = $this->load->view('widget', $data, true);
		$data['widget2'] = $this->load->view('widget2', $data, true);
		$data['mainnav'] = $this->load->view('mainnav', $data, true);

	return $data;
	}
	public function index()
	{
		$data = gps();

				$data = $this->navigation();
				$data['content'] = $this->load->view('viewer', $data, true);
				$this->load->view('main', $data);
	}
}
