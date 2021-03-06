<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dispatch extends CI_Controller {

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
        verify_session('dispatch'); 
	}
	public function active_navigation()
	{
		$start = false;
		$this->periodnav = $this->load->view('clock_employee', $this, true);
		if (isset($_REQUEST['EmpNo']) && $_REQUEST['EmpNo'] != '' && !isset($this->Post->$_REQUEST['EmpNo']))
		{
				if (isset($this->centercolumn1) && $this->centercolumn1 == 'START')
				{
					$start = true;
				}
				$this->centercolumn1 = $this->load->view('centercolumn1', $this, true);

		}

			$this->inputnav = $this->load->view('clockinput', $this, true);

	}

	public function active()
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
		$active = dispatch_active();
		if ((isset($_REQUEST['submit']) || isset($_REQUEST['checkinStatus'])) && isset($_REQUEST['EmpNo']))
		{
			$this->users = users_active();
			if (isset($active->$_REQUEST['EmpNo']))
			{
				$db = array_merge((array) $active->$_REQUEST['EmpNo'], $_REQUEST);
			}
			else
			{
				$db = array_merge((array) $this->users->$_REQUEST['EmpNo'], $_REQUEST);
			}
			if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'START')
			{

					$db['checkinStatus'] = 'Start';

			}
			if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'STOP')
			{
		
					$db['checkinStatus'] = 'Stop';
	
			}
			if (isset($_REQUEST['JD']))
			{
				$jd=	explode(':', $_REQUEST['JD']);
				
				if ($_REQUEST['Screen'] == 'Dispatch')
				{
					$db['Dispatch'] = $jd['0'];
					$db['Counter'] = $jd['1'];
				}
				if ($_REQUEST['Screen'] == 'Job')
				{
					$db['Name'] = $jd['0'];
					$db['JobID'] = $jd['1'];
				}
			}
			unset($db['Employee']);
			unset($db['ScreenType']);
			//print_r($db);
			error_log(json_encode($db));
			$authemp = timeclock_authemp($db);
			//print_r($authemp);
			error_log(json_encode($authemp));
			redirect('/dispatch/active/' , 'refresh');

		}			

		if (isset($_REQUEST['EmpNo']) && isset($active->$_REQUEST['EmpNo']))
		{
				$this->centercolumn1 = 'STOP';
		}
		elseif (isset($_REQUEST['EmpNo']) && isset($_REQUEST['Screen']))
		{
				$this->centercolumn1 = 'START';
		}
		else
		{
			$this->centercolumn1 = '';
		}
	
		
		$TimeClock = timeclock();
		if (isset($TimeClock->TimeClock))
		{
			$this->TimeClock = $TimeClock->TimeClock;
		}
		else
		{
			$this->TimeClock = $TimeClock;
		}
		$this->query = $active;
		$this->content = $this->load->view('table', $this, true);

		$this->active_navigation();
		$this->navigation();
	
		$this->load->view('main', $this);
	}
	public function viewer()
	{

				if (isset($_REQUEST['file']))
				{
					$this->navigation_viewer();
					$gps = viewer_details($_REQUEST['file']);
					$this->content = $this->load->view('viewerdetails', $gps, true);
				}
				else
				{
					$viewer = viewer();
	
					$this->content = $this->load->view('viewer', $viewer, true);
				}

				$this->navigation();
	
				$this->load->view('main', $this);
	}
 
	public function navigation()
	{

		$this->controller = $this->uri->segment(1);	
		$this->func = $this->uri->segment(2);
		$this->push = $this->load->view('push', $this, true);
		$this->widget = $this->load->view('widget', $this, true);
		$this->widget2 = $this->load->view('widget2', $this, true);
		$this->mainnav = $this->load->view('mainnav', $this, true);
		if (!isset($this->periodnav))
		{
			$this->periodnav = '';
			$this->inputnav = '';
			$this->centercolumn1 = '';
			$this->centercolumn2 = '';
		}
		$this->topnav = $this->load->view('topnav', $this, true);


	}


	public function index()
	{
		if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'LOGIN')
		{
			$this->auth();
		}
		$this->active();
	}

}