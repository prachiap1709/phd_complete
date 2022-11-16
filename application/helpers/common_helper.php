<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if ( ! function_exists('preTagdata'))

{

    function preTagdata($var)

    {

		echo "<pre>";

		print_r($var);

		echo "</pre>";

    }   

}



if ( ! function_exists('convertdate'))

{

    function convertdate($currdate,$formatdate)

    {

		$cnvrtdate = date($formatdate,strtotime($currdate));

		return $cnvrtdate;

    }   

}



if ( ! function_exists('generatePermaLink'))

{

    function generatePermaLink($title)

	{
		$array=array('[',']','(',')');

		$title1= str_replace($array,"",$title);

		$array=array('(',')','/','%','#','&',',',' ','--','---','----','|','||','.',':','$','`','~','@',"'");
		
		$title1= str_replace($array,"-",$title1);
		
		

		return strtolower(str_replace($array,"-",$title1));

	}   

}


if ( ! function_exists('getadmincode'))
{
    function getadmincode($type='')
    {
		$obj =& get_instance();
		$obj->db->select('fld_client_code');
		$obj->db->where('fld_client_code!=','');
		$obj->db->order_by('id','desc');
		$obj->db->limit(1);
		$query = $obj->db->get('tbl_admin');
		//echo $obj->db->last_query();
		$result = $query->row();
		//echo $result->fld_order_no;
		$order_no =  explode("#",$result->fld_client_code);		
		$order_no = (int)$order_no[1]+1;
		$order_no = $type."".rand(111,999)."#".str_pad($order_no, 3, '0', STR_PAD_LEFT);
		
		return $order_no;
    }   
}

if ( ! function_exists('getusercode'))
{
    function getusercode()
    {
		$obj =& get_instance();
		$obj->db->select('fld_user_code');
		$obj->db->where('fld_user_code!=','');
		$obj->db->order_by('id','desc');
		$obj->db->limit(1);
		$query = $obj->db->get('tbl_user');
		//echo $obj->db->last_query();
		$result = $query->row();
		//echo $result->fld_order_no;
		$order_no =  explode("#",$result->fld_user_code);		
		$order_no = (int)$order_no[1]+1;
		$order_no = "PHD-NET-".rand(111,999)."#".str_pad($order_no, 3, '0', STR_PAD_LEFT);
		
		return $order_no;
    }   
}

if ( ! function_exists('getschoolid'))
{
    function getschoolid()
    {
		$obj =& get_instance();
		$obj->db->select('fld_code');
		$obj->db->where('fld_code!=','');
		$obj->db->order_by('id','desc');
		$obj->db->limit(1);
		$query = $obj->db->get('tbl_school');
		//echo $obj->db->last_query();
		$result = $query->row();
		//echo $result->fld_order_no;
		$order_no =  explode("#",$result->fld_code);		
		$order_no = (int)$order_no[1]+1;
		$order_no = "DSD#SCHL".rand(111,999)."#".str_pad($order_no, 3, '0', STR_PAD_LEFT);
		
		return $order_no;
    }   
}

if ( ! function_exists('getschoollist'))
{
    function getschoollist($id="",$userid="",$viewtype="")
    {	
		$obj =& get_instance();
		$obj->db->select('*');
		$obj->db->from('tbl_school');
		if($id!="")
		{	
			$obj->db->group_start();
			$obj->db->where('id',$id);
			//$obj->db->or_where('iso',$id);
			$obj->db->group_end();
		}
		if($userid!="")
		{
			$obj->db->where('fld_userid',$userid);
		}
		$obj->db->order_by('id','desc');
		$query = $obj->db->get();
		//echo $obj->db->last_query();
		if($id!="" || $viewtype=='SINGLE')
		{
			return $query->row();
		}
		else
		{
			return $query->result();
		}
    }
}

if ( ! function_exists('getAdmin'))

{

    function getAdmin($adminid="",$admin_type='',$status='',$referrerid='',$templateid="")

    {	
		$obj =& get_instance();

		$obj->db->select('*');

		$obj->db->from('tbl_admin');

		if($adminid!="")

		{

			$obj->db->where('id',$adminid);

		}
		
		if($referrerid>0)
		{

			$obj->db->where('fld_referrerid',$referrerid);

		}
		
		if($templateid>0)
		{
		
			$obj->db->where('fld_templateid',$templateid);
		
		}
		
		if($admin_type != "")
		{

			$obj->db->where('fld_admin_type',$admin_type);

		}
		
		if($status != "")
		{

			$obj->db->where('status',$status);

		}
		$obj->db->order_by('fld_name','asc');

		$query = $obj->db->get();

		//echo $obj->db->last_query();

		if($adminid!="")

		{

			return $query->row();

		}

		else

		{

			return $query->result();

		}

    }

}

if ( ! function_exists('getUserInfo'))
{
    function getUserInfo($userid="",$verifycode='')
    {	
		$obj =& get_instance();
		$obj->db->select('tbl_user.*');
		$obj->db->from('tbl_user');		
		$obj->db->group_start();
		$obj->db->where('tbl_user.id',$userid);
		$obj->db->or_where('tbl_user.fld_email',$userid);
		$obj->db->or_where('tbl_user.fld_phone',$userid);
		$obj->db->group_end();
		if($verifycode!="")
		{
			$obj->db->where('tbl_user.fld_verify',$verifycode);
		}
		$obj->db->order_by('tbl_user.id','desc');
		$obj->db->limit(1);
		$query = $obj->db->get();
		//echo $obj->db->last_query();
		
		$result = $query->row();
		
		return $result;		
    }
}

if ( ! function_exists('getCountrylist'))
{
    function getCountrylist($id="")
    {	
		$obj =& get_instance();
		$obj->db->select('*');
		$obj->db->from('tbl_country');
		if($id!="")
		{	
			$obj->db->group_start();
			$obj->db->where('id',$id);
			$obj->db->or_where('iso',$id);
			$obj->db->group_end();
		}
		$obj->db->order_by('nicename','asc');
		$query = $obj->db->get();
		//echo $obj->db->last_query();
		if($id!="")
		{
			return $query->row();
		}
		else
		{
			return $query->result();
		}
    }
}


if ( ! function_exists('getSubAdminType'))

{

    function getSubAdminType()
    {
		$obj =& get_instance();
		
		$arrType[1] 	= 'SUBADMIN';
		$arrType[2] 	= 'EXECUTIVE';
		
		return $arrType;
	}

}

if ( ! function_exists('dateDiffInDays'))
{
	function dateDiffInDays($date1, $date2)  
	{ 
		// Calulating the difference in timestamps 
		$diff = strtotime($date2) - strtotime($date1); 
		  
		// 1 day = 24 hours 
		// 24 * 60 * 60 = 86400 seconds 
		return abs(round($diff / 86400)); 
	}
}


if ( ! function_exists('convertstring'))
{
    function convertstring($string,$strHalf="")
    {
		$stringLength = strlen($string);
		
		if($strHalf=="")
		{
			$strHalf = round($stringLength / 2);
		}
		
		$str = '';
		for($i=0; $i<=$stringLength; $i++)
		{
			if($i<$strHalf)
			{
				$str .= $string[$i];
			}
			else
			{
				$str .= '*';
			}
		}
		
		return $str;
	}
}

if ( ! function_exists('getprofilecompleteness'))
{

    function getprofilecompleteness($adminid="")

    {	
		$obj =& get_instance();

		$obj->db->select('*');
		$obj->db->from('tbl_user');
		$obj->db->where('id',$adminid);
		$obj->db->where('status','Active');
		$query = $obj->db->get();

		//echo $obj->db->last_query();
		$result = $query->row();
		
		$percent = 0;
		$passstep = 1;
		if($result->fld_name!="" && $result->fld_email!="" && $result->fld_phone!="" && $passstep==1)
		{
			$percent = 40;
			$passstep = 2;
		}
		
		if($result->fld_stageofresearch!="" && $result->fld_topicofresearch!="" && ($result->fld_areaofresearch!="" || $result->fld_otherareaofresearch) && $passstep == 2)
		{
			$percent = 70;
			$passstep = 3;
		}
		
		if($result->fld_state!="" && $result->fld_city!="" && $passstep==3)
		{
			$percent = 100;
		}
		
		return $percent;
    }

}
 

if ( ! function_exists('getTotaldata'))
{
    function getTotaldata($module, $status="")
    {	
		$obj =& get_instance();
		$where = '';
		if($module == 'admin' && $status != '')
		{
			$where = 'where fld_admin_type = "'.$status.'"';
		}
		if($module == 'payment_history')
		{
			$where = 'where status = "Pending" and fld_admin_id > 0 ';
		}
		$query = $obj->db->query('SELECT count(*) as totalrcrd FROM tbl_'.$module.' '.$where);
		//echo $obj->db->last_query();
		$totalrcrd = $query->row()->totalrcrd;
		
		if($totalrcrd<10 && $totalrcrd>0)
		{
			$totalrcrd = '0'.$totalrcrd;
		}
		
		return $totalrcrd;
    }
}

if ( ! function_exists('getrating'))
{
    function getrating()
    {	
		$arrType[1] = '1';
		$arrType[] = '1.5';
		$arrType[] = '2';
		$arrType[] = '2.5';
		$arrType[] = '3';
		$arrType[] = '3.5';
		$arrType[] = '4';
		$arrType[] = '4.5';
		$arrType[] = '5';
		
		return $arrType;
	}
}

if ( ! function_exists('getstarRating'))
{
    function getstarRating($starRating)
    {
        $htmlStr = '';
        $starRating = floatval($starRating);
        
		for ($i = 1; $i <= 5; $i++) {
             if($starRating < $i ) {
                if(is_float($starRating) && (round($starRating) == $i)){
                    $htmlStr .= '<i class="fa fa-star-half-o star_rating text-warning"></i>';
                }else{
                    $htmlStr .= '<i class="fa fa-star-o star_rating text-warning"></i>';
                }
             }else {
                $htmlStr .= '<i class="fa fa-star star_rating text-warning"></i>';
             }
        }
        
        return $htmlStr;
    }   
}

if ( ! function_exists('convertedAmount'))
{
    function convertedAmount($amount,$unitamt)
    {
		$amount = ceil($amount*$unitamt);
		
		return $amount;
	}
}

if ( ! function_exists('base64url_encode'))
{
	function base64url_encode($data, $pad = null) {
		$data = str_replace(array('+', '/'), array('-', '_'), base64_encode($data));
		if (!$pad) {
			$data = rtrim($data, '=');
		}
		return $data;
	}
}

if ( ! function_exists('base64url_decode'))
{
	function base64url_decode($data) {
		return base64_decode(str_replace(array('-', '_'), array('+', '/'), $data));
	}
}


if ( ! function_exists('getschool_class'))
{
    function answer_options()
    {
		$arrType[1] = 'Nursery';
		$arrType[] 	= 'Pre-Preparatory';
		$arrType[] 	= 'Preparatory';
		$arrType[] 	= 'Senior';
		$arrType[] 	= 'Sixth From';
		
		return $arrType;
	}

}

if ( ! function_exists('getconsultquesettingdata'))
{
    function getconsultquesettingdata($consultantid="")
    {
    	$obj =& get_instance();

		$obj->db->select("*");
		$obj->db->from('tbl_consultant_question_data');
		if($consultantid>0)
		{
			$obj->db->where('tbl_consultant_question_data.fld_consultantid',$consultantid);
		}
		$obj->db->order_by('tbl_consultant_question_data.id','DESC');
		$result = $obj->db->get()->row();
		
		return $result;
    }
}

if ( ! function_exists('getclientsettingdata'))
{
    function getclientsettingdata($clientid)
    {
    	$obj =& get_instance();

		$obj->db->select("*");
		$obj->db->from('tbl_setting');
		$obj->db->where('tbl_setting.fld_adminid',$clientid);
		
		$obj->db->order_by('tbl_setting.id','DESC');
		$result = $obj->db->get()->row();
		
		return $result;
    }

}

if ( ! function_exists('checklastpasswordupdate'))
{
    function checklastpasswordupdate($clientid)
    {
    	$obj =& get_instance();

		$obj->db->select("*");
		$obj->db->from('tbl_setting');
		$obj->db->where('tbl_setting.fld_adminid',$clientid);
		$result = $obj->db->get()->row();

		//echo $obj->db->last_query();

		$pass_upd_days 			=  $result->fld_pass_upd_days;
		//$pass_upd_days 			=  1;
		$fld_pass_last_upd_day 	=  $result->fld_pass_last_upd_day;
		
		$time1 = date("Y-m-d H:i:s",strtotime($fld_pass_last_upd_day));
				
		$dayinpass = $time1;
		$today = time();
		$dayinpass= strtotime($dayinpass);

		$posted_hour = round(abs($today-$dayinpass)/60/60);
		
		//echo '<br/>POSTED DAYS:'.round(abs($posted_hour/24)).'<br/><br/>';
		
		$posted_days = round(abs($posted_hour/24));
		// After 1 days
		if($posted_days >= $pass_upd_days)
		{
			return true;
		}
		else
		{
			return false;
		}
		
		//return $totalrow;	
    }

}

if ( ! function_exists('getpackage'))
{

    function getpackage($type,$currency)
    {
		$obj =& get_instance();

		$obj->db->select("*");
		$obj->db->from('tbl_package');
		$obj->db->where('status','Active');
		$obj->db->where('id',1);
		$query = $obj->db->get();
		//echo $obj->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()>0)
		{
			$result = $query->row();
			
			if($type == 'Standard' && $currency == 'INR')
			{
				$arrType[1]['Name'] 		= $result->fld_name;
				$arrType[]['Main_amt'] 		= $result->fld_main_amt;
				$arrType[]['Discount_amt'] 	= $result->fld_discount_amt;
				$arrType[]['Timeline'] 		= $result->fld_timeline;
				$arrType[]['Zoom_call'] 	= $result->fld_zoom_call;
				$arrType[]['Call_time'] 	= $result->fld_call_time;
			}
		}	

		$obj->db->select("*");
		$obj->db->from('tbl_package');
		$obj->db->where('status','Active');
		$obj->db->where('id',2);
		$query = $obj->db->get();
		//echo $obj->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()>0)
		{
			$result = $query->row();
			
			if($type == 'Standard' && $currency == 'USD')
			{
				$arrType[1]['Name'] 		= $result->fld_name;
				$arrType[]['Main_amt'] 		= $result->fld_main_amt;
				$arrType[]['Discount_amt'] 	= $result->fld_discount_amt;
				$arrType[]['Timeline'] 		= $result->fld_timeline;
				$arrType[]['Zoom_call'] 	= $result->fld_zoom_call;
				$arrType[]['Call_time'] 	= $result->fld_call_time;
			}
		}	

		$obj->db->select("*");
		$obj->db->from('tbl_package');
		$obj->db->where('status','Active');
		$obj->db->where('id',3);
		$query = $obj->db->get();
		//echo $obj->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()>0)
		{
			$result = $query->row();
		
			if($type == 'Advanced' && $currency == 'INR')
			{
				$arrType[1]['Name'] 		= $result->fld_name;
				$arrType[]['Main_amt'] 		= $result->fld_main_amt;
				$arrType[]['Discount_amt'] 	= $result->fld_discount_amt;
				$arrType[]['Timeline'] 		= $result->fld_timeline;
				$arrType[]['Zoom_call'] 	= $result->fld_zoom_call;
				$arrType[]['Call_time'] 	= $result->fld_call_time;
			}
		}

		$obj->db->select("*");
		$obj->db->from('tbl_package');
		$obj->db->where('status','Active');
		$obj->db->where('id',4);
		$query = $obj->db->get();
		//echo $obj->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()>0)
		{
			$result = $query->row();
			
			if($type == 'Advanced' && $currency == 'USD')
			{
				$arrType[1]['Name'] 		= $result->fld_name;
				$arrType[]['Main_amt'] 		= $result->fld_main_amt;
				$arrType[]['Discount_amt'] 	= $result->fld_discount_amt;
				$arrType[]['Timeline'] 		= $result->fld_timeline;
				$arrType[]['Zoom_call'] 	= $result->fld_zoom_call;
				$arrType[]['Call_time'] 	= $result->fld_call_time;
			}
		}	
		
		
		
		return $arrType;
	}

}

if ( ! function_exists('gettotalconsultations'))
{
    function gettotalconsultations($id='',$status='',$userid='',$booking_type='',$consultantid='')
    {
		$obj =& get_instance();
		$obj->db->select("count(*) as totalrow");
		if($id!="")
		{
			$obj->db->where('id',$id);
		}
		if($status!="")
		{
			$obj->db->where('fld_consultation_sts',$status);
		}
		if($booking_type!="")
		{
			$obj->db->where('fld_booking_type',$booking_type);
		}
		if($userid!="")
		{
			$obj->db->where('fld_userid',$userid);
		}
		if($consultantid!="")
		{
			$obj->db->where('fld_consultantid',$consultantid);
		}
		$query= $obj->db->get('tbl_booking');
		//echo $obj->db->last_query();
		//exit;
		$result = $query->row();
		$totalrow = $result->totalrow;
		
		return $totalrow;
	}
}

if ( ! function_exists('getbookingreminderdate'))
{
    function getbookingreminderdate($bookingid='',$consultantid='',$userid='')
    {
    	$obj =& get_instance();

		$obj->db->select("*");
		$obj->db->from('tbl_booking_reminder');
		$obj->db->where('tbl_booking_reminder.fld_bookingid',$bookingid);
		$obj->db->where('tbl_booking_reminder.fld_consultantid',$consultantid);
		$obj->db->where('tbl_booking_reminder.fld_userid',$userid);
		
		$obj->db->order_by('tbl_booking_reminder.id','DESC');
		$result = $obj->db->get()->row();
		
		return $result;
    }

}

if ( ! function_exists('getbookingdata'))
{
    function getbookingdata($bookingid='',$consultantid='',$userid='',$selectedDate='', $status='')
    {
    	$obj =& get_instance();

		$obj->db->select('tbl_booking.*, tbl_admin.fld_client_code as admin_code, tbl_admin.fld_name as admin_name, tbl_admin.fld_email as admin_email, tbl_admin.fld_profile_image as profile_image, tbl_admin.fld_client_code as consultant_code, tbl_user.fld_user_code as user_code, tbl_user.fld_name as user_name, tbl_user.fld_email as user_email, tbl_user.fld_decrypt_password as user_pass, tbl_user.fld_country_code as user_country_code, tbl_user.fld_phone as user_phone, tbl_user.fld_address, tbl_user.fld_city, tbl_user.fld_pincode, tbl_user.fld_country');
		$obj->db->from('tbl_booking');
		$obj->db->join('tbl_admin','tbl_booking.fld_consultantid = tbl_admin.id');
		$obj->db->join('tbl_user','tbl_booking.fld_userid = tbl_user.id');
		if($bookingid!="")
		{
			$obj->db->where('tbl_booking.id',$bookingid);
		}
		if($consultantid!="")
		{
			$obj->db->where('tbl_booking.fld_consultantid',$consultantid);
		}
		if($userid!="")
		{
			$obj->db->where('tbl_booking.fld_userid',$userid);
		}
		if($consultation_sts!="")
		{
			$obj->db->where('tbl_booking.fld_consultation_sts',$consultation_sts);
		}
		if($status!="")
		{
			$obj->db->where('tbl_booking.status',$status);
		}
		if($frm_now_data!="")
		{
			$obj->db->where('tbl_booking.fld_booking_date>=',$frm_now_data);
		}
		if($obj->session->userdata('adm_admin_type') == 'CONSULTANT')
		{	
			$obj->db->where('tbl_booking.fld_consultantid',$obj->session->userdata('adm_admin_id'));
		}
		if($selectedDate!="")
		{
			$obj->db->where('tbl_booking.fld_booking_date',$selectedDate);
		}
		$obj->db->order_by('tbl_booking.id','desc');
		$query = $obj->db->get();
		//echo $obj->db->last_query();
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

}

if ( ! function_exists('getexecutive_replies'))
{
    function getexecutive_replies($bookingid='',$consultantid='',$userid='')
    {
    	$obj =& get_instance();

		$obj->db->select("*");
		$obj->db->from('tbl_executive_replies');
		$obj->db->where('tbl_executive_replies.fld_bookingid',$bookingid);
		$obj->db->where('tbl_executive_replies.fld_consultantid',$consultantid);
		$obj->db->where('tbl_executive_replies.fld_userid',$userid);
		
		$obj->db->order_by('tbl_executive_replies.id','DESC');
		$result = $obj->db->get()->row();
		
		return $result;
    }

}

if ( ! function_exists('arrColorcodelist'))
{
    function arrColorcodelist()
    {	
		$arrcolorCode[1] = '#f44336'; 
		$arrcolorCode[] = '#e91e63'; 
		$arrcolorCode[] = '#9c27b0'; 
		$arrcolorCode[] = '#673ab7'; 
		$arrcolorCode[] = '#03a9f4'; 
		$arrcolorCode[] = '#ff5722'; 
		$arrcolorCode[] = '#ff9800'; 
		$arrcolorCode[] = '#4caf50'; 
		$arrcolorCode[] = '#3f51b5'; 
		$arrcolorCode[] = '#9e9e9e'; 
		
		return $arrcolorCode;
	}
}

if ( ! function_exists('getschool_class'))
{
    function getschool_class()
    {
		$arrType[1] = 'Nursery';
		$arrType[] 	= 'Pre-Preparatory';
		$arrType[] 	= 'Preparatory';
		$arrType[] 	= 'Senior';
		$arrType[] 	= 'Sixth From';
		
		return $arrType;
	}
}

if ( ! function_exists('getschool_category'))
{
    function getschool_category()
    {
		$arrType[1] = 'Gender';
		$arrType[] 	= 'Co-Education';
		$arrType[] 	= 'Boys';
		$arrType[] 	= 'Girls';
		$arrType[] 	= 'Boys with Co-ed Sixth From';
		$arrType[] 	= 'Co-ed Prep With Girls Senior School';
		
		return $arrType;
	}
}

if ( ! function_exists('getschool_type'))
{
    function getschool_type()
    {
		$arrType[1] = 'Boarding';
		$arrType[] 	= 'Day';
		$arrType[] 	= 'Boarding &amp; Day';
		
		return $arrType;
	}
}

if ( ! function_exists('getschool_location'))
{
    function getschool_location()
    {
		$arrType[1] = 'North Delhi Schools';
		$arrType[] 	= 'South Delhi Schools';
		$arrType[] 	= 'Central Delhi Schools';
		$arrType[] 	= 'West Delhi Schools';
		$arrType[] 	= 'East Delhi Schools';
		$arrType[] 	= 'Dwarka Schools';
		$arrType[] 	= 'Noida Schools';
		$arrType[] 	= 'Gurgaon Schools';
		$arrType[] 	= 'Faridabad Schools';
		$arrType[] 	= 'Ghaziabad Schools';
		$arrType[] 	= 'Rohini Schools';
		$arrType[] 	= 'Delhi &amp; NCR Schools';
		
		return $arrType;
	}
}

if ( ! function_exists('getschool_facilities'))
{
    function getschool_facilities()
    {
		$arrType[1] = 'AC';
		$arrType[] 	= '4 Water Cooler';
		$arrType[] 	= '5 Libraries';
		$arrType[] 	= 'Dance Studio';
		$arrType[] 	= 'Smart Class';
		$arrType[] 	= 'Play Ground';
		
		return $arrType;
	}
}


if ( ! function_exists('getPostedjobsofRecruiter'))
{
    function getPostedjobsofRecruiter($recruiterid='',$status='')
    {
    	$obj =& get_instance();

		$obj->db->select("*");
		$obj->db->from('tbl_jobs');
		$obj->db->where('tbl_jobs.fld_userid',$recruiterid);
		$obj->db->where('tbl_jobs.status',$status);
		$obj->db->order_by('tbl_jobs.id','DESC');
		$result = $obj->db->get()->result();
		
		return $result;
    }

}
