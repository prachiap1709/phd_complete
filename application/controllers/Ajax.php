<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Ajax extends CI_Controller {


	function __construct() {

        parent::__construct();
        error_reporting(0);
		
		$this->load->model('ajax_model');
		$this->load->library('Mandrill_Api');
    }

	

	public function changestatus()

	{

		$this->ajax_model->changestatus();

	}

	public function changefeaturedsts()
	{

		$this->ajax_model->changefeaturedsts();

	}
	
	public function checkemail()
	{
		$this->ajax_model->checkemail();
	}
	
	public function resendPassword()
	{
		$this->ajax_model->resendPassword();
	}
	public function changepassword()
	{
		$this->ajax_model->changepassword();
	}
	
	public function loginuser()
	{
		$this->ajax_model->loginuser();
	}
	
	public function myprofileupdate()
	{
		$this->ajax_model->myprofileupdate();
	}
	
	public function udpatepassword()
	{
		$this->ajax_model->udpatepassword();
	}
	
	public function forgetpassword()
	{
		$this->ajax_model->forgetpassword();
	}
	
	public function registration()
	{
		$this->ajax_model->registration();
	}
	
	public function filterSearch()
	{
		$this->ajax_model->filterSearch();
	}
	
	public function sendEnquiry()
	{
		$this->ajax_model->sendEnquiry();
	}
	
	public function addnewjob()
	{
		$this->ajax_model->addnewjob();
	}
	
}

