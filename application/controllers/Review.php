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
		$this->load->view('header', $timeclock);
		$this->load->view('save', $timeclock);
		$this->load->view('footer');

	}

	public function view()
	{
		return $this->index();
	}
	
	public function update()
	{
		if (isset($_REQUEST['TimeClockID']))
		{

		foreach ($_REQUEST['TimeClockID'] as $TimeClockID => $td)
		{
			if (!isset($td['StartDate']) && isset($td['StartDay']) && isset($td['StartHour']))
			{
				$_REQUEST['TimeClockID'][$TimeClockID]['StartDate'] = $td['StartDay'] . ' ' . $td['StartHour'];
				unset($_REQUEST['TimeClockID'][$TimeClockID]['StartDay']);
				unset($_REQUEST['TimeClockID'][$TimeClockID]['StartHour']);

			}
			if (!isset($td['StopDate']) && isset($td['StopDay']) && isset($td['StopHour']))
			{
				$_REQUEST['TimeClockID'][$TimeClockID]['StopDate'] = $td['StopDay'] . ' ' . $td['StopHour'];
				unset($_REQUEST['TimeClockID'][$TimeClockID]['StopDay']);
				unset($_REQUEST['TimeClockID'][$TimeClockID]['StopHour']);
			}
		}

		$auth = timeclock_update();
		$rep = '&' . http_build_query($auth);
		}
		else
		{
			$rep = '';	
		}
		redirect('/review/save/?EmpNo=' . $_REQUEST['EmpNo'] . '&Offset=' . $_REQUEST['Offset'] . $rep , 'refresh');
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
		elseif (isset($_REQUEST['post_timesheet']))
		{
			//post timesheet
			//print_r($_REQUEST);
			$res = timesheet_post($_REQUEST);
			//exit;
			
			redirect('/review/timesheet/?' . http_build_query($res) , 'refresh');

		}
		else
		{
			redirect('/review/timesheet/?Error=error');	
		}

	}
	public function timesheet()
	{
		if (!isset($_REQUEST['Offset']))
		{
			$_REQUEST['Offset'] = -1;
		}
	

		$timesheet = timesheet();
				$this->load->view('header', $timeclock);
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
		//print_r($timeclock);
		if (isset($_REQUEST['EmpNo']) && isset($_REQUEST['Offset']) && isset($timeclock->Post->$_REQUEST['EmpNo']))
		{
				$this->load->view('header', $timeclock);
				$this->load->view('save', $timeclock);
				$this->load->view('footer');
		}
		else
		{
				$this->load->view('header', $timeclock);
				$this->load->view('review', $timeclock);
				$this->load->view('footer');
		}
	}
}