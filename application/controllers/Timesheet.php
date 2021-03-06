<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timesheet extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        verify_session('timesheet'); 
	}


	
	
	public function assign()
	{
		if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'REMOVE' )
		{
			delete_job_group_employee();
		}
		if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'ASSIGN')
		{
			add_job_group_employee();
		}
		if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'DELETE')
		{
			delete_job_group();
		}
		$assign = assign();

		$this->jobgroups = $assign->jobgroups;
		$this->employees = $assign->employees;
		$this->jobs = $assign->jobs;
		if (isset($assign->jobgroupemployees))
		{
			$this->jobgroupemployees = $assign->jobgroupemployees;
		}

		$this->navigation_assign();
		$this->navigation();
		$this->content = $this->load->view('assigngroup', $this, true);

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
		$this->timeclock_add = timeclock_add();

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
		}
		if (isset($_REQUEST['TimeClockID']))
		{
		foreach ($this->TimeClock as $tc)
		{
			$tcid = $tc->TimeClockID;
			if (isset($_REQUEST['TimeClockID'][$tcid]) && strtotime($_REQUEST['TimeClockID'][$tcid]['StartDate']) == $tc->StartTime && strtotime($_REQUEST['TimeClockID'][$tcid]['StopDate']) == $tc->StopTime)
			{
				unset($_REQUEST['TimeClockID'][$tcid]);
			}
		}
		}
		if (isset($_REQUEST['TimeClockID']))
		{
			$this->timeclock_update = timeclock_update();
		}

	}


	public function timepost()
	{
		//print_r($_REQUEST);
	
		if ($_REQUEST['submit']=='UPDATE')
		{
			//update hours
			//print_r($_REQUEST);
			//exit;
			unset($_REQUEST['submit']);

		}
		elseif ($_REQUEST['submit']=='POST')
		{
			//post timesheet
			//print_r($_REQUEST);
			unset($_REQUEST['submit']);
			$res = timesheet_post($_REQUEST);
			redirect('/timesheet/timesheet/?' . http_build_query($res) , 'refresh');

		}
		

	}
	public function timesheet()
	{
		if (!isset($_REQUEST['Offset']))
		{
			$_REQUEST['Offset'] = -1;
		}
		if (isset($_REQUEST['submit']))
		{
			$this->timepost();
		}

		$TimeSheet = timesheet();
		$this->TimeSheet = $TimeSheet->TimeSheet;
		if (isset($TimeSheet->Post))
		{
			$this->Post = $TimeSheet->Post;
		}
		if (!isset($_REQUEST['print']))
		{
			$this->navigation_timesheet();
			$this->navigation();
		}
		if (isset($_REQUEST['print']))
		{
			$print = false;
		}
		else
		{
			$print = true;
		}
		$this->content = $this->load->view('timesheet', $TimeSheet, $print);
		
		if (!isset($_REQUEST['print']))
		{
			$this->load->view('main', $this);
		}
	}

	public function navigation_timesheet()
	{
		$this->periodnav = $this->load->view('period', $this, true);
		if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '' && !isset($this->Post->$_REQUEST['EmpNo']))
		{
			$this->centercolumn1 = $this->load->view('centercolumn1', $this, true);
			$this->centercolumn2 = $this->load->view('centerpost', $this, true);
		}
		//$this->inputnav = $this->load->view('input', $this, true);
	}

	public function navigation_review()
	{	
		$this->periodnav = $this->load->view('periodreview', $this, true);
		if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '' && !isset($this->Post->$_REQUEST['EmpNo']))
		{
			$this->centercolumn1 = $this->load->view('centercolumn1', $this, true);
			$this->centercolumn2 = $this->load->view('centercolumn2', $this, true);
		}
		$this->inputnav = $this->load->view('input', $this, true);
	}

	public function navigation_assign()
	{
		$this->periodnav = $this->load->view('assignperiod', $this, true);
	
			$this->centercolumn1 = $this->load->view('assigncenter', $this, true);
			$this->centercolumn2 = $this->load->view('assigncenter2', $this, true);

		$this->inputnav = $this->load->view('assigninput', $this, true);

	}

	public function navigation_gps()
	{
		//$this->period = $this->load->view('period', $this, true);
		$this->centercolumn1 = $this->load->view('gpscenter1', $this, true);
		$this->centercolumn2 = $this->load->view('gpscenter2', $this, true);
		$this->inputnav = $this->load->view('input', $this, true);
	}
	public function navigation_viewer()
	{
		//$this->period = $this->load->view('period', $this, true);
		//$this->centercolumn1 = $this->load->view('gpscenter1', $this, true);
		//$this->centercolumn2 = $this->load->view('gpscenter2', $this, true);
		$this->inputnav = $this->load->view('input', $this, true);
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
				if (isset($_REQUEST['submit']))
				{
					if ($_REQUEST['submit'] == 'APPROVE')
					{
										$_REQUEST['Accept'] = 'Accept';
					}
					if ($_REQUEST['submit'] == 'DENY')
					{
										$_REQUEST['Deny'] = 'Deny';
					}
					unset($_REQUEST['submit']);
				}
				if (isset($_REQUEST['Accept']) || isset($_REQUEST['Deny']))
				{
					$gps = gps_update();
					unset($_REQUEST['file']);
				}
				if (isset($_REQUEST['file']))
				{
					$this->navigation_gps();
					$gps = gps_details($_REQUEST['file']);
					$this->content = $this->load->view('gpsdetails', $gps, true);
				}
				else
				{
					$gps = gps();
					$this->content = $this->load->view('gps', $gps, true);
				}

				$this->navigation();
	
				$this->load->view('main', $this);
	}

	public function review()
	{
		if (!isset($_REQUEST['Offset']))
		{
			$_REQUEST['Offset'] = -1;
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
	
		$TimeClock = timeclock();

		if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'ADD')
		{
			$this->review_add();
			$TimeClock = timeclock();
			if (isset($this->timeclock_add))
			{
			foreach ($this->timeclock_add  as $tid=> $db)
			{
				if (isset($TimeClock->TimeClock->$tid))
				{
					$TimeClock->TimeClock->$tid->added = true;
				}
			}

			}
		}
		if (isset($_REQUEST['history']) && isset($TimeClock->TimeClockHist))
		{
			$this->save = $this->load->view('hist', $TimeClock, true);

		}
		if (isset($TimeClock->TimeClock))
		{
			$this->TimeClock = $TimeClock->TimeClock;
		}
		if (isset($TimeClock->Post))
		{
			$this->Post = $TimeClock->Post;
		}
		$this->navigation_review();
		$this->switchnav = $this->load->view('switch', $this, true);
		
		$this->navigation();
	
		if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'UPDATE')
		{

			$this->review_update();

			$TimeClock = timeclock();
	
			foreach ($this->timeclock_update as $tid => $db)
			{
				if (isset($TimeClock->TimeClock->$tid))
				{
					$TimeClock->TimeClock->$tid->updated = true;
				}
				if (isset($TimeClock->TimeClockHist->$tid))
				{
					$TimeClock->TimeClockHist->$tid->updated = true;
				}
			}
			$this->save = $this->load->view('hist', $TimeClock, true);
			$this->TimeClock = $TimeClock->TimeClock;
	

	
		}
		$this->review = $this->load->view('time', $TimeClock, true);

		$this->content = $this->load->view('review', $this, true);

		$this->load->view('main', $this);
	}

	public function index()
	{
		redirect('/timesheet/review/');

	}
}