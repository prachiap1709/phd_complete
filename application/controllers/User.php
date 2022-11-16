<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {

        parent::__construct();

		error_reporting(0);

		$this->load->model('user_model');
		$this->load->library('Mandrill_Api');

    }

	

	public function index()

	{

		if($this->session->userdata('adm_logged_in') == true && $this->session->userdata('adm_admin_type') == 'SUPERADMIN')

		{

			$data['module'] = 'user';

			$data['result'] = $this->user_model->viewrecord('');

			
			$data['mtitle'] =  'Manage User - '.WEBNAME;
			$data['main_content'] = 'user/index';

			$this->load->view('common/template.php',$data);

		}

		else

		{

			redirect(base_url());

		}

	}

	

	public function add()

	{

		if($this->session->userdata('adm_logged_in') == true && $this->session->userdata('adm_admin_type') == 'SUPERADMIN')

		{

			$data['module'] = 'user';

			
			$data['mtitle'] =  'Add User - '.WEBNAME;
			
			$user_type = $this->uri->segment(3);
			$data['user_type'] =  $user_type;
			
			$data['main_content'] = 'user/add';

			$this->load->view('common/template.php',$data);

		}

		else

		{

			redirect(base_url());

		}

	}

	

	public function insertuser()

	{

		if($this->session->userdata('adm_logged_in') == true && $this->session->userdata('adm_admin_type') == 'SUPERADMIN')

		{
			
			
			$user_type 			= $this->input->post('user_type');
			$name 		        = ucwords(strtolower($this->input->post('name')));
			$email 	            = $this->input->post('email');
			$phone 	            = $this->input->post('phone');
			$password 	        = $this->input->post('password');

			$data = array(
				'fld_user_code'			=>	getusercode(),
				'fld_type'	        	=>	$user_type,
				'fld_name'	            =>	$name,
				'fld_email'	            =>	$email,
				'fld_phone'	            =>	$phone,
				'fld_password'			=>	md5($password),
				'fld_decrypt_password'	=>	$password,
				'fld_addedon'			=>	date('Y-m-d H:i:s')
			);

			

			$insertid = $this->user_model->insertuser($data,$email);

			if($insertid>0)
			{
				
				$this->session->set_userdata('alert_type', 'success');

				$this->session->set_userdata('msg', 'User Info. Added Successfully');
				
				redirect(base_url().'user');

			}
			else
			{
				
				$this->session->set_userdata('alert_type', 'danger');

				$this->session->set_userdata('msg', 'User Already Exist!');

				redirect(base_url().'user');

			}

		}

		else

		{

			redirect(base_url());

		}

	}

	

	public function edit()

	{

		if($this->session->userdata('adm_logged_in') == true && $this->session->userdata('adm_admin_type') == 'SUPERADMIN')

		{

			$userid = $this->uri->segment(3);

			

			$data['module'] = 'user';

			$data['userid'] = $userid;

			$data['result'] = $this->user_model->viewrecord($userid);

			$data['mtitle'] =  'Edit User - '.WEBNAME;

			$data['main_content'] = 'user/edit';

			$this->load->view('common/template.php',$data);

		}

		else

		{

			redirect(base_url());

		}

	}

	

	public function updateuser()

	{

		if($this->session->userdata('adm_logged_in') == true && $this->session->userdata('adm_admin_type') == 'SUPERADMIN')

		{

			$userid 		= $this->input->post('userid');

		    $user_type 			= $this->input->post('user_type');
			$name 		        = ucwords(strtolower($this->input->post('name')));
			$email 	            = $this->input->post('email');
			$phone 	            = $this->input->post('phone');
			$password 	        = $this->input->post('password');

			$data = array(
			    'fld_type'	        	=>	$user_type,
				'fld_name'	            =>	$name,
				'fld_email'	            =>	$email,
				'fld_phone'	            =>	$phone,
				'fld_password'			=>	md5($password),
				'fld_decrypt_password'	=>	$password,
				'fld_addedon'			=>	date('Y-m-d H:i:s')
			);

			$result = $this->user_model->updateuser($data,$userid);

			

			if($result>0)

			{
				
				$this->session->set_userdata('alert_type', 'success');

				$this->session->set_userdata('msg', 'User Updated Successfully');

				redirect(base_url().'user');

			}

			else

			{

				$this->session->set_userdata('alert_type', 'danger');

				$this->session->set_userdata('msg', 'User Not Updated!');

				redirect(base_url().'user');

			}

		}

		else

		{

			redirect(base_url());

		}

	}


	public function deleteuser()

	{

		if($this->session->userdata('adm_logged_in') == true && $this->session->userdata('adm_admin_type') == 'SUPERADMIN')

		{

			$userid = $this->uri->segment(3);

			

			$result = $this->user_model->deleteuser($userid);

			if($result>0)

			{

				$this->session->set_userdata('alert_type', 'success');

				$this->session->set_userdata('msg', 'User Deleted Successfully');

				redirect(base_url().'user');

			}

			else

			{

				$this->session->set_userdata('alert_type', 'danger');

				$this->session->set_userdata('msg', 'User Not Deleted !');

				redirect(base_url().'user');

			}

		}

		else

		{

			redirect(base_url());

		}

	}
}
