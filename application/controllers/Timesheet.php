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
		$assign = assign();

		$this->jobgroups = $assign->jobgroups;
		$this->employees = $assign->employees;
		$this->jobs = $assign->jobs;
		$this->content = $this->load->view('assigngroup', $this, true);
		$this->navigation_assign();
		$this->navigation();
		$this->load->view('main', $this);
	}
 
	public function review_add()
	{
		if (!isset($_REQUEST['StartDay']))
		{
			$gpb = get_period_bounds($_REQUEST['Offset']);
			$StopTime = $gpb[1]-60;
			$StartTime = $gpb[1] - 60*60-60;
		}
		else
		{
			$StartTime = strtotime($_REQUEST['StartDay'] . ' 01:00:00');
			$StopTime = strtotime($_REQUEST['StartDay'] . ' 02:00:00');
		}
		$_REQUEST['StartDate'] = date("Y:m:d H:i:s",$StartTime);
		$_REQUEST['StopDate'] = date("Y:m:d H:i:s", $StopTime);
		if (isset($_REQUEST['TimeClockID']))
		{
			unset($_REQUEST['TimeClockID']);
		}
		$timeclock = timeclock_add();

	}

	public function save()
	{

	

		$this->TimeClock = timeclock();
		$this->TimeClock = $this->TimeClock->TimeClock;
		$this->navigation();
		$this->content = $this->load->view('save', $this, true);
		$this->load->view('main', $this);

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
	

		$this->TimeSheet = timesheet();
		$this->TimeSheet = $this->TimeSheet->TimeSheet;
		$this->navigation();
		$this->content = $this->load->view('timesheet', $this, true);
		$this->load->view('main', $this);
	}
	public function navigation_review()
	{
		//$this->period = $this->load->view('period', $this, true);
		$this->centercolumn1 = $this->load->view('centercolumn1', $this, true);
		$this->centercolumn2 = $this->load->view('centercolumn2', $this, true);
		$this->inputnav = $this->load->view('input', $this, true);
	}

	public function navigation_assign()
	{
		$this->periodnav = $this->load->view('assignperiod', $this, true);
		//$this->centercolumn1 = $this->load->view('centercolumn1', $this, true);
		$this->centercolumn2 = $this->load->view('assigncenter', $this, true);
		$this->inputnav = $this->load->view('assigninput', $this, true);

	}
	public function navigation()
	{

		$this->controller = $this->uri->segment(1);	
		$this->func = $this->uri->segment(2);
		$this->push = $this->load->view('push', $this, true);
		$this->widget = $this->load->view('widget', $this, true);
		$this->widget2 = $this->load->view('widget2', $this, true);
		$this->mainnav = $this->load->view('mainnav', $this, true);

		$this->topnav = $this->load->view('topnav', $this, true);


	}

	public function nonbillable()
	{

				 $this->navigation();
				$this->content = $this->load->view('nonbillable', $this, true);
				$this->load->view('main', $this);
	}


	public function reports()
	{

				 $this->navigation();
				$this->content = $this->load->view('reports', $this, true);
				$this->load->view('main', $this);
	}
	public function pto()
	{

			 $this->navigation();
				$this->content = $this->load->view('pto', $this, true);
				$this->load->view('main', $this);
	}
	public function rules()
	{

			 $this->navigation();
				$this->content = $this->load->view('rules', $this, true);
				$this->load->view('main', $this);
	}
	public function gps()
	{
				
				$this->navigation();
				$this->content = $this->load->view('gps', $this, true);
				$this->load->view('main', $this);
	}

	public function gps_update()
	{
		$gps = gps_update();

		redirect('/timesheet/gps/?update=1&' . http_build_query($gps), 'refresh');
	}

	function timeclock_api()
	{
		if (!isset($_REQUEST['StartTime']) || !isset($_REQUEST['StopTime']))
		{
			$gpb = get_period_bounds($_REQUEST['Offset']);
			$StartTime = $gpb[0];
			$StopTime = $gpb[1];
		}
		else
		{
			$StartTime = $_REQUEST['StartTime'];
			$StopTime = $_REQUEST['StopTime'];
		}
		$uri = "timeclock_json.php?timeclock=1&StartTime=$StartTime&StopTime=$StopTime";
		$app =  app_api($uri);
		$this->TimeClock = $app->TimeClock;
	}


	public function review()
	{
		if (!isset($_REQUEST['Offset']))
		{
			$_REQUEST['Offset'] = -1;
		}	

		if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'ADD')
		{
			$this->review_add();

		}
		if (isset($_REQUEST['Screen']))
		{
			if ($_REQUEST['Screen'] == 'Job')
			{
				$this->Job = jobs();
			}
			if ($_REQUEST['Screen'] == 'Dispatch')
			{
				$this->Dispatch = dispatchs();
			}
		}
	
		$this->TimeClock = timeclock();
		$this->TimeClock = $this->TimeClock->TimeClock;
		$this->navigation_review();
		$this->navigation();

	
		if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'UPDATE')
		{

			$this->review_update();
			$save = timeclock();	
		}

		if (isset($_REQUEST['EmpNo']) && isset($_REQUEST['Offset']) && isset($save))
		{
				$this->save = $this->load->view('save', $save, true);
		}

	
		$this->content = $this->load->view('review', $this, true);

		$this->load->view('main', $this);
	}

	public function index()
	{
		redirect('/timesheet/review/');

	}
}