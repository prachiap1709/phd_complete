<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry_model extends CI_Model {

	public function viewrecord($enquiryid = "", $status="")
	{
		$this->db->select('*');
		$this->db->from('tbl_enquiry');
		if($enquiryid!="")
		{
			$this->db->where('id',$enquiryid);
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
			if($enquiryid!="")
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
	
	public function deleteenquiry($enquiryid)
	{
		if($enquiryid!="")
		{
			$this->db->where('id',$enquiryid);	
			$query = $this->db->delete('tbl_enquiry');
			
			return true;
		}
		else
		{
			return false;
		}
	}
	
}
