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
		redirect('review/index/?EmpNo=' . $_REQUEST['EmpNo'] . '&Offset=' . $_REQUEST['Offset'], 'refresh');

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
		redirect('review/save/?EmpNo=' . $_REQUEST['EmpNo'] . '&Offset=' . $_REQUEST['Offset'], 'refresh');
	}

	public function timepost()
	{
		//print_r($_REQUEST);
		if (isset($_REQUEST['review_timesheet']))
		{
			redirect('/review/index/?EmpNo=' . $_REQUEST['EmpNo'] . '&Offset=' . $_REQUEST['Offset'], 'refresh');
		}
		elseif (isset($_REQUEST['update_hours']))
		{
			//update hours
			//print_r($_REQUEST);
			//exit;
			$atu = http_build_query($_REQUEST);
			redirect('/review/timesheet/?' . $atu , 'refresh');
		}
		elseif (isset($_REQUEST['post_timehsset']))
		{
			//post timesheet
			$res = timesheet_post();
			redirect('/review/timesheet/?' . http_build_query($res) , 'refresh');

		}

	}
	public function timesheet()
	{
		if (!isset($_REQUEST['Offset']))
		{
			$_REQUEST['Offset'] = -1;
		}
	

		$timesheet = timesheet();
		$this->load->view('header');
		$this->load->view('timesheet', $timesheet);
		$this->load->view('footer');
	}

	public function index()
	{
		if (!isset($_REQUEST['Offset']))
		{
			$_REQUEST['Offset'] = -1;
		}		
		$timeclock = timeclock();	
		$this->load->view('header');
		$this->load->view('review', $timeclock);
		$this->load->view('footer');
	}
}