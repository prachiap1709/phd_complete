<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Model {

	public function insertpayment($data_payment)
	{
		$query = $this->db->insert('tbl_payment_history',$data_payment);
		$insertid = $this->db->insert_id();
		return $insertid;
	}

	public function updatepayment($data_payment,$paymentid)
	{
		if($paymentid!="")
		{
			$this->db->where('id',$paymentid);	
			$query = $this->db->update('tbl_payment_history',$data_payment);
			return true;
		}
		else
		{
			return false;
		}
	}
}


