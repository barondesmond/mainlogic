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
		$gpb = get_period_bounds();
		$StartTime = $gpb[0];
		$StopTime = $gpb[1];
		$period = date("Y-m-d", $StartTime) . ' ' . date("Y-m-d", $StopTime);;

		$timesheet = timesheet();
		$timesheet->period['period'] = $period;
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