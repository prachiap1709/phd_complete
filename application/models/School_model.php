<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class School_model extends CI_Model {

	public function viewrecord($adminid = "",$admin_type='',$status='',$orderby='')
	{
		
		$account_manager	=	trim($this->input->post('account_manager'));
		$keywords			=	trim($this->input->post('keywords'));
		$school_from_date	=	trim($this->input->post('school_from_date'));
		$school_to_date		=	trim($this->input->post('school_to_date'));		
		$school_status		=	trim($this->input->post('school_status'));		
		
		$this->db->select('*');
		$this->db->from('tbl_school');
		
		if($adminid!="")
		{
			$this->db->where('id',$adminid);
		}
		if($status!="")
		{
			$this->db->where('status',$status);
		}
		
	
		//START CUSTOM FILTRER SEARCH
		
		if($keywords!="")
		{
			$arrSearch  = explode(' ',$keywords);
			$i=0;
			$this->db->group_start();
			$this->db->like('fld_school_name',$arrSearch[0]);
			foreach($arrSearch as $srch)
			{
				$i++;
				$this->db->or_like('fld_school_name',$srch);
				$this->db->or_like('fld_principle_name',$srch);
				$this->db->or_like('fld_email',$srch);
			}
			$this->db->group_end();
		}
		
		if($school_from_date!="" && $school_to_date!="")
		{
			$this->db->group_start();
			$this->db->where("fld_addedon BETWEEN '".convertdate($school_from_date,'Y-m-d')."' AND '".convertdate($school_to_date,'Y-m-d')."'");
			$this->db->group_end();
		}
		
		
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
	
}

