<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

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
		$timesheet->TimeClock  = $timeclock->TimeClock;
	

		$this->load->view('header');
		$this->load->view('timesheet', $timesheet);
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