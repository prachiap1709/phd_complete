<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin_model extends CI_Model {



	public function viewrecord($adminid = "",$admin_type='',$status='',$orderby='')
	{
		
		$account_manager	=	trim($this->input->post('account_manager'));
		$keywords			=	trim($this->input->post('keywords'));
		$client_from_date	=	trim($this->input->post('client_from_date'));
		$client_to_date		=	trim($this->input->post('client_to_date'));		
		$client_status		=	trim($this->input->post('client_status'));		
		$crmid				=	trim($this->input->post('crmid'));		
		
		$this->db->select('*');
		$this->db->from('tbl_admin');
		if($this->uri->segment(3) > 0 && $this->uri->segment(4)=='template')
		{
			$this->db->where('fld_templateid',$this->uri->segment(3));
		}
		if($account_manager!="")
		{
			$this->db->where('fld_acnt_mngr_id',$account_manager);
		}
		if($accountmanageid!="" || $crmid!="")
		{
			$accountmanageid = $crmid;
			$this->db->where('fld_acnt_mngr_id',$accountmanageid);
		}
		if($adminid!="")
		{
			$this->db->where('id',$adminid);
		}
		if($status!="")
		{
			$this->db->where('status',$status);
		}
		
		if($admin_type == "ADMIN")
		{
			if($this->session->userdata('adm_admin_type') == 'SUPERADMIN')
			{	
				$this->db->group_start();
				$this->db->where('fld_admin_type','CONSULTANT');
				$this->db->or_where('fld_admin_type','EXECUTIVE');
				$this->db->group_end();
			}
		}
		if($admin_type == "consultant")
		{
			$this->db->where('fld_admin_type','CONSULTANT');
		}
		if($admin_type == "executive")
		{
			$this->db->where('fld_admin_type','EXECUTIVE');
		}
		if($admin_type == "CLIENT")
		{
			$this->db->where('fld_admin_type','CLIENT');
		}
		//START CUSTOM FILTRER SEARCH
		
		if($keywords!="")
		{
			$arrSearch  = explode(' ',$keywords);
			$i=0;
			$this->db->group_start();
			$this->db->like('fld_name',$arrSearch[0]);
			foreach($arrSearch as $srch)
			{
				$i++;
				$this->db->or_like('fld_name',$srch);
				$this->db->or_like('fld_email',$srch);
			}
			$this->db->group_end();
		}
		
		if($client_from_date!="" && $client_to_date!="")
		{
			$this->db->group_start();
			$this->db->where("fld_addedon BETWEEN '".convertdate($client_from_date,'Y-m-d')."' AND '".convertdate($client_to_date,'Y-m-d')."'");
			$this->db->group_end();
		}
		
		if($client_status!="")
		{
			$this->db->where('fld_client_ac_type',$client_status);
		}
		//END CUSTOM FILTRER SEARCH
		
		$this->db->where('fld_admin_type!=','SUPERADMIN');
		
		if($orderby!="" && $orderby=="name")
		{
			$this->db->order_by('fld_name','asc');
		}
		else
		{
			$this->db->order_by('id','desc');
		}
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()>0)
		{
			if($adminid!="")
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
		

	public function insertadmin($data,$email)
	{

		$this->db->select('*');
		$this->db->from('tbl_admin');
		$this->db->where('fld_email',$email);
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()==0 && $email!="")
		{
			$query = $this->db->insert('tbl_admin',$data);
			$insertid = $this->db->insert_id();
			return $insertid;
		}
		else
		{
			return false;
		}
	}

	

	public function updateadmin($data,$adminid)
	{
		if($adminid!="")
		{
			$this->db->where('id',$adminid);	
			$query = $this->db->update('tbl_admin',$data);
			return true;
		}
		else
		{
			return false;
		}
	}

	

	public function deleteadmin($adminid)
	{
		if($adminid!="" && $adminid!=1)
		{
			$this->db->where('id',$adminid);	
			$query = $this->db->delete('tbl_admin');
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function viewcurrency()
	{
		$this->db->select('tbl_currency.*');
		$this->db->from('tbl_currency');
		$this->db->where('status','Active');
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()>0)
		{
			if($adminid!="")
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
	
	public function viewbooking($bookingid = "", $consultantid = "", $userid = "", $status='', $consultation_sts='', $frm_now_data='')
	{
		if(trim($this->input->post('booking_status'))!="")
		{
			$consultation_sts	=	trim($this->input->post('booking_status'));
		}
		$filterdays 		=	trim($this->input->post('filterdays'));
		$client_from_date	=	trim($this->input->get_post('client_from_date'));
		$client_to_date		=	trim($this->input->get_post('client_to_date'));
		
		$this->db->select('tbl_booking.*, tbl_admin.fld_client_code as admin_code, tbl_admin.fld_name as admin_name, tbl_admin.fld_email as admin_email, tbl_admin.fld_profile_image as profile_image, tbl_admin.fld_client_code as consultant_code, tbl_user.fld_user_code as user_code, tbl_user.fld_name as user_name, tbl_user.fld_email as user_email, tbl_user.fld_decrypt_password as user_pass, tbl_user.fld_country_code as user_country_code, tbl_user.fld_phone as user_phone, tbl_user.fld_address, tbl_user.fld_city, tbl_user.fld_pincode, tbl_user.fld_country');
		$this->db->from('tbl_booking');
		$this->db->join('tbl_admin','tbl_booking.fld_consultantid = tbl_admin.id');
		$this->db->join('tbl_user','tbl_booking.fld_userid = tbl_user.id');
		if($bookingid!="")
		{
			$this->db->where('tbl_booking.id',$bookingid);
		}
		if($consultantid!="")
		{
			$this->db->where('tbl_booking.fld_consultantid',$consultantid);
		}
		if($userid!="")
		{
			$this->db->where('tbl_booking.fld_userid',$userid);
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
			$this->db->where('tbl_booking.fld_consultantid',$this->session->userdata('adm_admin_id'));
		}
		if($client_from_date!="" && $client_to_date!="")
		{
			$this->db->where("tbl_booking.fld_addedon BETWEEN '".convertdate($client_from_date,'Y-m-d')."' AND '".convertdate($client_to_date,'Y-m-d')."'");
		}
		elseif(is_numeric($filterdays) && $filterdays!="" && $fromdate=="" && $todate=="")
		{
			$this->db->where("tbl_booking.fld_addedon >= NOW() - INTERVAL ".$filterdays." DAY ");
		}
		$this->db->order_by('tbl_booking.id','desc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()>0)
		{
			if($bookingid!="")
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
	
	public function viewpackage()
	{
		$this->db->select('tbl_package.*');
		$this->db->from('tbl_package');
		//$this->db->where('status','Active');
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()>0)
		{
			if($adminid!="")
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

