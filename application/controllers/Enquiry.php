<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

	
	function __construct() {
        parent::__construct();
		error_reporting(0);
		$this->load->model('enquiry_model');
    }
	
	public function index()
	{
		if($this->session->userdata('adm_logged_in') == true)
		{
			$parentid = $this->uri->segment(4);
			
			$data['parentid'] = $parentid;
			$data['module'] = 'enquiry';
			$data['result'] = $this->enquiry_model->viewrecord('','',$parentid);
			
			$data['main_content'] = 'enquiry/index';
			$this->load->view('common/template.php',$data);
		}
		else
		{
			redirect(base_url().'siteadmin');
		}
	}
	
	public function deleteenquiry()
	{
		if($this->session->userdata('adm_logged_in') == true)
		{
			$enquiryid = $this->uri->segment(4);
			
			$result = $this->enquiry_model->deleteenquiry($enquiryid);
			if($result>0)
			{
				$this->session->set_userdata('alert_type', 'success');
				$this->session->set_userdata('msg', 'Enquiry Info. Deleted Successfully');
				redirect(base_url().'enquiry');
			}
			else
			{
				$this->session->set_userdata('alert_type', 'danger');
				$this->session->set_userdata('msg', 'Enquiry Info. Not Deleted !');
				redirect(base_url().'enquiry');
			}
		}
		else
		{
			redirect(base_url().'siteadmin');
		}
	}
}
