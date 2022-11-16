<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class User_model extends CI_Model {



	public function viewrecord($userid = "",$status='',$orderby='')
	{
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		if($userid!="")
		{
			$this->db->where('id',$userid);
		}
		if($status!="")
		{
			$this->db->where('status',$status);
		}
		
		$this->db->order_by('id','desc');
		
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()>0)
		{
			if($userid!="")
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
		

	public function insertuser($data,$email)
	{

		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('fld_email',$email);
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()==0 && $email!="")
		{
			$query = $this->db->insert('tbl_user',$data);
			$insertid = $this->db->insert_id();
			return $insertid;
		}
		else
		{
			return false;
		}
	}

	

	public function updateuser($data,$userid)
	{
		if($userid!="")
		{
			$this->db->where('id',$userid);	
			$query = $this->db->update('tbl_user',$data);
			return true;
		}
		else
		{
			return false;
		}
	}

	

	public function deleteuser($userid)
	{
		if($userid!="")
		{
			$this->db->where('id',$userid);	
			$query = $this->db->delete('tbl_user');
			return true;
		}
		else
		{
			return false;
		}
	}
}
