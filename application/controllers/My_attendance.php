<?php

class My_attendance extends HR_Controller
{

	protected $active_nav = NAV_MY_ATTENDANCE;
	protected $tab_title = 'My Attendance';

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['Employee_model' => 'employee', 'Payslip_model' => 'payslip']);
	}

	public function index()
	{
		$data = [];
		$range = elements(['start_date', 'end_date'], $this->input->get(), NULL);

		$start_date = is_valid_date($range['start_date'], 'm/d/Y') ? date_create($range['start_date'])->format('Y-m-d') : date('Y-m-d');
		$end_date = is_valid_date($range['end_date'], 'm/d/Y') ? date_create($range['end_date'])->format('Y-m-d') : date('Y-m-d');

		$test = $this->payslip->calculate(user_id(), $start_date, $end_date, TRUE);
		$data = $this->employee->attendance(user_id(), $start_date, $end_date);
		$this->import_plugin_script(['bootstrap-datepicker/js/bootstrap-datepicker.min.js']);
		$this->import_page_script(['view-attendance.js']);
		$this->generate_page('attendance/view', compact(['data', 'test']));
	}


}