<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assign extends CI_Controller {

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

	public function addjobgroup()
	{
		//print_r($_REQUEST);
		$resp = add_job_group();
		redirect('/assign/index/?' . http_build_query($resp), 'refresh');
	}

	public function deletejobgroup()
	{
		//print_r($_REQUEST);
		$resp = delete_job_group();
		redirect('/assign/assigned/?' . http_build_query($resp), 'refresh');
	}

	public function add()
	{
		$resp = add_job_group_employee();
		redirect('/assign/assigned/?' . http_build_query($resp), 'refresh');

	}
 
	public function assigned()
	{

		$this->load->view('header');
		$assign = assign();
		$this->load->view('assigned', $assign);
		$this->load->view('footer');

	}
	public function view()
	{
		return index();
	}

	
	public function index()
	{
		
		$this->load->view('header');
		$assign = assign();
		$this->load->view('assign', $assign);
		$this->load->view('footer');
	}
}
