<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {

	function __construct() {
        parent::__construct();
		error_reporting(0);
		
		$this->load->model('school_model');
		
		$this->load->library('Mandrill_Api');
    }
	
	public function index()
	{
		if($this->session->userdata('adm_logged_in') == true && ($this->session->userdata('adm_admin_type') == 'SUPERADMIN'))
		{
			$data['keywords']			=	$this->input->post('keywords');
			$data['school_from_date']	=	$this->input->post('school_from_date');
			$data['school_to_date']		=	$this->input->post('school_to_date');
			$data['school_status']		=	$this->input->post('school_status');
			
			
			$data['module'] = 'school';
			$data['result'] = $this->school_model->viewrecord('');
			
			$data['mtitle'] 	  	=  'Manage School - '.WEBNAME;
			
			$data['main_content'] = 'school/index';
			$this->load->view('common/template.php',$data);
		}
		else
		{
			redirect(base_url());
		}
	}
	
	public function viewprof()
	{
		if($this->session->userdata('adm_logged_in') == true && ($this->session->userdata('adm_admin_type') == 'SUPERADMIN'))
		{
			$schoolid = $this->uri->segment(3);
			
			$data['module'] = 'school';
			$data['schoolid'] = $schoolid;
			$data['result'] = $this->school_model->viewrecord($schoolid);
			
			
			
			$data['mtitle'] 	  =  'View Profile - '.WEBNAME;
			
			$data['main_content'] = 'school/viewprof';
			$this->load->view('common/template.php',$data);
		}
		else
		{
			redirect(base_url());
		}
	}
	
}