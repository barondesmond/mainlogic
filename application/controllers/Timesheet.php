<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timesheet extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        verify_session(); 
	}


	public function addjobgroup()
	{
		//print_r($_REQUEST);
		$resp = add_job_group();
		redirect('/timesheet/assign/?' . http_build_query($resp), 'refresh');
	}

	public function deletejobgroup()
	{
		//print_r($_REQUEST);
		$resp = delete_job_group();
		redirect('/timesheet/assigned/?' . http_build_query($resp), 'refresh');
	}

	public function addjge()
	{
		$resp = add_job_group_employee();
		redirect('/timesheet/assigned/?' . http_build_query($resp), 'refresh');

	}

	public function jobgroup()
	{
		if (isset($_REQUEST['submit']))
		{
			if ($_REQUEST['submit'] == 'Assign Jobs' || $_REQUEST['submit'] == 'Assign Employees')
			{
				$resp = add_job_group_employee();
			}
			elseif ($_REQUEST['submit'] == 'Remove Jobs' || $_REQUEST['submit'] == 'Remove Employees')
			{
				$resp = delete_job_group();
			}
			else
			{
				$resp = $_REQUEST;
			}
		}
		else
		{
						$resp = $_REQUEST;
		}
		redirect('/timesheet/assign/?' . http_build_query($resp), 'refresh');
	}
 
	public function assigned()
	{
		$data = assign();
	
		$data = $this->navigation($data);
		$data->content = $this->load->view('assigned', $data, true);
		$this->load->view('main', $data);

	}


	
	public function assign()
	{
		$data = assign();
	
		$data = $this->navigation($data);
		$data->content = $this->load->view('assigngroup', $data, true);
		$this->load->view('main', $data);
	}
 
	public function review_add()
	{
		
		$timeclock = timeclock_add();
		redirect('/timesheet/review/?EmpNo=' . $_REQUEST['EmpNo'] . '&Offset=' . $_REQUEST['Offset'], 'refresh');

	}

	public function save()
	{
		$data = timeclock();
		$data = $this->navigation($data);
		$data->content = $this->load->view('save', $data, true);
		$this->load->view('main', $data);

	}

	public function view()
	{
		return $this->index();
	}
	
	public function review_update()
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
		redirect('/timesheet/save/?EmpNo=' . $_REQUEST['EmpNo'] . '&Offset=' . $_REQUEST['Offset'] . $rep , 'refresh');
	}

	public function timepost()
	{
		//print_r($_REQUEST);
		if (isset($_REQUEST['review_timesheet']))
		{
			redirect('/timesheet/index/?EmpNo=' . $_REQUEST['EmpNo'] . '&Offset=' . $_REQUEST['Offset'], 'refresh');
		}
		elseif (isset($_REQUEST['update_hours']))
		{
			//update hours
			//print_r($_REQUEST);
			//exit;
			$atu = http_build_query($_REQUEST);
			redirect('/timesheet/timesheet/?' . $atu , 'refresh');
		}
		elseif (isset($_REQUEST['post_timesheet']))
		{
			//post timesheet
			//print_r($_REQUEST);
			$res = timesheet_post($_REQUEST);
			//exit;
			
			redirect('/timesheet/timesheet/?' . http_build_query($res) , 'refresh');

		}
		else
		{
			redirect('/timesheet/timesheet/?Error=error');	
		}

	}
	public function timesheet()
	{
		if (!isset($_REQUEST['Offset']))
		{
			$_REQUEST['Offset'] = -1;
		}
	

		$data = timesheet();
		$data = $this->navigation($data);
		$data->content = $this->load->view('timesheet', $data, true);
		$this->load->view('main', $data);
	}


	public function navigation()
	{

		$this->controller = $this->uri->segment(1);	
		$this->func = $this->uri->segment(2);
		$this->push = $this->load->view('push', $this, true);
		$this->widget = $this->load->view('widget', $this, true);
		$this->widget2 = $this->load->view('widget2', $this, true);
		$this->mainnav = $this->load->view('mainnav', $this, true);
		$this->period = $this->load->view('period', $this, true);
		$this->input = $this->load->view('input', $this, true);
		$this->topnav = $this->load->view('topnav', $this, true);


	}

	public function nonbillable()
	{

				$data = $this->navigation();
				$data->content = $this->load->view('nonbillable', $data, true);
				$this->load->view('main', $data);
	}


	public function reports()
	{

				$data = $this->navigation();
				$data->content = $this->load->view('reports', $data, true);
				$this->load->view('main', $data);
	}
	public function pto()
	{

				$data = $this->navigation();
				$data->content = $this->load->view('pto', $data, true);
				$this->load->view('main', $data);
	}
	public function rules()
	{

				$data = $this->navigation();
				$data->content = $this->load->view('rules', $data, true);
				$this->load->view('main', $data);
	}
	public function gps()
	{
				$data = gps();
				$data = $this->navigation($data);

				$data->content = $this->load->view('gps', $data, true);
				$this->load->view('main', $data);
	}

	public function gps_update()
	{
		$gps = gps_update();

		redirect('/timesheet/gps/?update=1&' . http_build_query($gps), 'refresh');
	}

	public function review()
	{
		if (!isset($_REQUEST['Offset']))
		{
			$_REQUEST['Offset'] = -1;
		}		
		if (isset($_REQUEST['submit']))
		{
			$fu = 'review_' . strtolower($_REQUEST['submit']) . '()';
			unset($_REQUEST['submit']);
			$this->$fu;

			return false;
		}
		$this->TimeClock = timeclock();

		$this->navigation();


		if (isset($_REQUEST['EmpNo']) && isset($_REQUEST['Offset']) && isset($this->TimeClock->Post->$_REQUEST['EmpNo']))
		{
				$this->content = $this->load->view('save', $this, true);
		}
		else
		{

				$this->content = $this->load->view('review', $this, true);

		}
		$this->load->view('main', $this);
	}

	public function index()
	{
		redirect('/timesheet/review/');

	}
}