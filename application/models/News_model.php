<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class News_model extends CI_Model {



	public function viewrecord($newsid = "",$status='',$orderby='')
	{
		
		$this->db->select('*');
		$this->db->from('tbl_news');
		if($newsid!="")
		{
			$this->db->where('id',$newsid);
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
			if($newsid!="")
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
		

	public function insertnews($data,$title)
	{

		$this->db->select('*');
		$this->db->from('tbl_news');
		$this->db->where('fld_title',$title);
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()==0 && $title!="")
		{
			$query = $this->db->insert('tbl_news',$data);
			$insertid = $this->db->insert_id();
			return $insertid;
		}
		else
		{
			return false;
		}
	}

	

	public function updatenews($data,$newsid)
	{
		if($newsid!="")
		{
			$this->db->where('id',$newsid);	
			$query = $this->db->update('tbl_news',$data);
			return true;
		}
		else
		{
			return false;
		}
	}

	

	public function deletenews($newsid)
	{
		if($newsid!="")
		{
			$this->db->where('id',$newsid);	
			$query = $this->db->delete('tbl_news');
			return true;
		}
		else
		{
			return false;
		}
	}
}

