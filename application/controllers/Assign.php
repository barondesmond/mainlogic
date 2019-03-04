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
		print_r($_REQUEST);

	}

	public function add()
	{
		print_r($_REQUEST);
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
