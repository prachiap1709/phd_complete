<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog_model extends CI_Model {

	public function insertuser($data,$email,$name,$verifycode)
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->group_start();
		$this->db->where('fld_email',$email);
		$this->db->group_end();
		$query = $this->db->get();
		$this->db->last_query();
		$query->num_rows();
		if($query->num_rows()==0 && $email!="")
		{
			$query = $this->db->insert('tbl_user',$data);
			$insertid = $this->db->insert_id();
			
			
			$mandrill = new Mandrill(MANDRILL_KEY);

			$Subject = "Welcome to ".WEBNAME;
			
			$body = 'Hi '.$name.', <br/><br/>

			Thank you for choosing PhD Guidance as your consultant for your doctoral research. <br/><br/>

			Your Account Login URL  - <a href="'.base_url().'sign-in">Login</a> <br/><br/>
			Your Account Login Email - '.$email.' (Created at '.date("H:i A, D - d M, Y").' <br/><br/>

			To secure your account please create a unique password using the link below - <br/><br/>
			
			Password Link - <a style="background: #f87f12 !important;border-color: #f87f12 !important;font-size: 14px !important;    color: #fff;text-decoration: none;border: 1px solid transparent; padding: .375rem .75rem; " href="'.base_url().'catalog/resetpassword/'.$verifycode.'/'.$insertid.'" target="_blank">Reset password link</a><br/><br/>';

			$body .="<br>Thanks & Regards <br/> ".WEBNAME."<br />";
			
			//echo $body;
			
			$message = array(
				'html' => $body,
				'subject' => $Subject,
				'from_email' => FROM_EMAIL,
				'from_name' => FROM_NAME,
				'to' => array(
					array(
						'email' => $email,
						'name' => $name,
						'type' => 'to'
					)
				)
			);
			$async = false;
			$ip_pool = '';

			if($_SERVER['HTTP_HOST']!="localhost")
			{
				$result = $mandrill->messages->send($message, $async, $ip_pool);
			}
			
			$userid 		= $insertid;
			$name 			= $name;
			$email 			= $email;
			
			$this->session->set_userdata('usr_logged_in',true);
			$this->session->set_userdata('usr_id',$userid);
			$this->session->set_userdata('usr_name',$name);
			$this->session->set_userdata('usr_email',$email);
			
			return $insertid;
		}
		else
		{	
			$result = $query->row();
			if($result->id>0)
			{
				return $result->id;
			}
			else
			{
				return false;
			}
		}
	}
	
	public function insertbooking($data)
	{
		$this->db->insert('tbl_booking',$data);
		$insertid = $this->db->insert_id();
		return $insertid;
	}
	
	public function verify($verifycode,$userid)
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('fld_verify',$verifycode);
		$this->db->where('id',$userid);
		$this->db->where('status','Active');
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		
		if($query->num_rows()>0)
		{
			return 'success';
		}
		else
		{
			return 'danger';
		}
	}
	
	public function viewpayments($id = "",$bookingid = "", $consultantid = "", $userid = "", $status='', $consultation_sts='', $frm_now_data='', $tranc_type='')
	{
		
		$this->db->select('tbl_payment_history.id as payid, tbl_payment_history.fld_ref_no, tbl_payment_history.fld_mode, tbl_payment_history.fld_invno, tbl_payment_history.fld_currency as paycurrency, tbl_payment_history.fld_amount as payamount, tbl_payment_history.fld_packageid as packageid, tbl_payment_history.fld_addedon as pay_addedon, tbl_payment_history.status as pay_status, tbl_payment_history.fld_tranc_type as pay_tranc_type, tbl_payment_history.fld_pack_part_sts as pay_pack_part_sts, tbl_payment_history.fld_bookingid as bookingid, tbl_booking.*, tbl_admin.fld_client_code as admin_code, tbl_admin.fld_name as admin_name, tbl_admin.fld_email as admin_email, tbl_admin.fld_profile_image as profile_image, tbl_admin.fld_client_code as consultant_code, tbl_user.fld_user_code as user_code, tbl_user.fld_name as user_name, tbl_user.fld_email as user_email, tbl_user.fld_decrypt_password as user_pass, tbl_user.fld_country_code as user_country_code, tbl_user.fld_phone as user_phone, tbl_user.fld_address, tbl_user.fld_city, tbl_user.fld_pincode, tbl_user.fld_country');
		$this->db->from('tbl_payment_history');
		$this->db->join('tbl_booking','tbl_payment_history.fld_bookingid = tbl_booking.id','left');
		$this->db->join('tbl_admin','tbl_payment_history.fld_consultantid = tbl_admin.id','left');
		$this->db->join('tbl_user','tbl_payment_history.fld_userid = tbl_user.id');
		if($id!="")
		{
			$this->db->where('tbl_payment_history.id',$id);
		}
		if($bookingid!="")
		{
			$this->db->where('tbl_booking.id',$bookingid);
		}
		if($tranc_type!="")
		{
			$this->db->where('tbl_payment_history.fld_tranc_type',$tranc_type);
		}
		if($consultantid!="")
		{
			$this->db->where('tbl_payment_history.fld_consultantid',$consultantid);
		}
		if($userid!="")
		{
			$this->db->where('tbl_payment_history.fld_userid',$userid);
		}
		if($consultation_sts!="")
		{
			$this->db->where('tbl_booking.fld_consultation_sts',$consultation_sts);
		}
		if($status!="")
		{
			$this->db->where('tbl_booking.status',$status);
		}
		if($frm_now_data!="")
		{
			$this->db->where('tbl_booking.fld_booking_date>=',$frm_now_data);
		}
		if($this->session->userdata('adm_admin_type') == 'CONSULTANT')
		{	
			$this->db->where('tbl_payment_history.fld_consultantid',$this->session->userdata('adm_admin_id'));
		}
		$this->db->order_by('tbl_payment_history.id','desc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()>0)
		{
			if($id!="")
			{
				return $query->row();
			}
			else
			{
				return $query->result();	
			}
		}
		else
		{
			return false;
		}
	}
}

