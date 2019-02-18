<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

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
 
	public function add()
	{

		$timeclock = timeclock_add();
		redirect('review/index/?EmpNo=' . $_REQUEST['EmpNo'], 'refresh');

	}

	public function save()
	{
		$timeclock = timeclock();
		$this->load->view('header');	
		$this->load->view('save', $timeclock);
		$this->load->view('footer');

	}

	public function view()
	{
		return $this->index();
	}
	
	public function update()
	{
		$auth = timeclock_update();
		redirect('review/save/?EmpNo=' . $_REQUEST['EmpNo'], 'refresh');
	}

	public function timesheet()
	{
		$timeclock = timeclock();
		$timesheet = timesheet();
		$tt = array_merge($timeclock['TimeClock'], $timesheet);
		var_dump($tt);

		$this->load->view('header');
		$this->load->view('timesheet', $tt);
		$this->load->view('footer');
	}

	public function index()
	{
		
		$timeclock = timeclock();	
		$this->load->view('header');
		$this->load->view('review', $timeclock);
		$this->load->view('footer');
	}
}