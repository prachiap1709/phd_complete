<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Ajax_model extends CI_Model {



	public function changestatus()

	{

		$id = trim($this->input->post('id'));

		$status = trim($this->input->post('status'));

		$module = trim($this->input->post('module'));

		

		if($id!="")

		{

			if($status == 'Active')

			{

				$status = 'Inactive';

			}

			else

			{

				$status = 'Active';

			}

			

			if($module !="")

			{

				$module = "tbl_".$module;

			}

			

			$data = array('status'=> $status);

			$this->db->where('id',$id);	

			$query = $this->db->update($module,$data);

		}

		

		echo trim($status);

	}

	public function changefeaturedsts()
	{
		$id = trim($this->input->post('id'));
		$status = trim($this->input->post('status'));
		$module = trim($this->input->post('module'));
		
		if($module == 'service')
		{
			$counter =  count(array_filter(getserviceinfo("",'', 'Active')));
			if($counter>=6 && $status == 'Inactive')
			{
				echo 'limitexceed';
				exit;
			}
		}
		
		if($module == 'product')
		{
			$counter =  count(array_filter(getproduct('','','','','Active')));
			if($counter>=6 && $status == 'Inactive')
			{
				echo 'limitexceed';
				exit;
			}
		}
		
		if($id!="")
		{
			if($status == 'Active')
			{
				$status = 'Inactive';
			}
			else
			{
				$status = 'Active';
			}
			
			if($module !="")
			{
				$module = "tbl_".$module;
			}
			
			$data = array(
			    'fld_featured'=> $status
			);
			$this->db->where('id',$id);	
			$query = $this->db->update($module,$data);
		}
		
		echo trim($status);
	}
	
	
	
	public function checkemail()
	{
		$returnvar ='';
		$email = trim($this->input->post('email'));
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('fld_email',$email);
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()==0 && $email!="")
		{
			$returnvar = 'notfound';
		}
		else
		{
			$returnvar = 'found';
		}
		
		if($returnvar == 'found')
		{
			echo $returnvar;
			exit;
		}
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('fld_email',$email);
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()==0 && $email!="")
		{
			$returnvar = 'notfound';
		}
		else
		{
			$returnvar = 'found';
		}
		
		echo $returnvar;
		exit;
	}
	
	public function resendPassword()
	{
		$clientid 	= trim($this->input->post('clientid'));
		
		if($clientid!="")
		{
			$mandrill = new Mandrill(MANDRILL_KEY);
			
			$result1 = getAdmin($clientid,'CLIENT');
					
			$name 		= $result1->fld_name;
			$email 		= $result1->fld_email; 
			$alt_email	= $result->fld_alt_email;
			
			$password 	= $result1->fld_decrypt_password; 
			//exit;
			
			$Subject = "Updated Password - ". WEBNAME;
			
			$body = emailerDesign(1);
			$body .= "Hi ".$name.", <br/><br/> \n  You can login to your dashboard using the updated credentials as shared below and explore our PhD services, products and events.<br/><br/>";
			
			$body.='<strong>Your login credentials are as mentioned below :</strong><br/><br/>';
			
			$body.='<strong>URL : </strong>'.base_url().'<br/>';
			$body.='<strong>Email Id: </strong>'.$email.'<br/>';
			$body.='<strong>Password: </strong>'.$password.'<br/>';
			
			$body .="<br>Thanks & Regards,<br /> Team - ".WEBNAME;
			$body .= emailerDesign(2);
			// echo $body;
			// exit;
			
			$alt_email_client = '';
			if($alt_email!="")
			{
				$alt_email_client = array(
					'email' => $alt_email, 
					'name' => $name,
					'type' => 'cc'
				);
			}
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
					),$alt_email_client

				)
			);
			$async = false;
			$ip_pool = '';

			$result = $mandrill->messages->send($message, $async, $ip_pool);
			
			echo 'success';
			exit;
		}
		else
		{
			echo 'fail';
			exit;
		}	
	}
	
	public function changepassword()
	{
		$id 				= trim($this->input->post('userid'));
		$newpassword 		= trim($this->input->post('newpassword'));
		
		//echo preTagData($_POST);
		//exit;
		
		if($id>0 && $newpassword!="")
		{
			
			$data = array(
				'fld_password'         	=> md5($newpassword),
				'fld_decrypt_password' 	=> $newpassword,
				'fld_verify' 			=> '',
			);
			
			$this->db->where('id',$id);	
			$this->db->update('tbl_user',$data);
			
			/* $data_settting = array(
				'fld_pass_last_upd_day' => date('Y-m-d')
			);
			$this->db->where('fld_adminid',$id);	
			$this->db->update('tbl_setting',$data_settting); */
			
			$this->db->select('id,fld_name,fld_email');
			$this->db->from('tbl_user');
			$this->db->where('id',$id);
			$this->db->where('status','Active');
			$query = $this->db->get();
			//echo $this->db->last_query();
			//echo $query->num_rows();
			if($query->num_rows()>0)
			{
				$result1 = $query->row();
				//echo preTagdata($result);
				$userid 		= $result1->id;
				$name 			= $result1->fld_name;
				$email 			= $result1->fld_email;
				
				$this->session->set_userdata('usr_logged_in',true);
				$this->session->set_userdata('usr_id',$userid);
				$this->session->set_userdata('usr_name',$name);
				$this->session->set_userdata('usr_email',$email);
			}
			
			
			$array = array('status'=>'success');				
			echo json_encode($array);
			exit;
		}
		else
		{
			$array = array('status'=>'error');				
			echo json_encode($array);
			exit;
		}
		
	}
	
	public function loginuser()
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->group_start();
		$this->db->where('fld_email',trim($this->input->post('useremail')));
		$this->db->group_end();
		
		$this->db->where('fld_password',trim(md5($this->input->post('userpassword'))));
		$this->db->where('status','Active');
		$query1 = $this->db->get();
		//echo $this->db->last_query();
		//echo $query1->num_rows();
		//exit;
		if($query1->num_rows()>0)
		{
			$result1 = $query1->row();
			
			$userid 		= $result1->id;
			$name 			= $result1->fld_name;
			$email 			= $result1->fld_email;
			$user_type 		= $result1->fld_type;
			
			/* $passupdatests =  checklastpasswordupdate($userid);
			if($passupdatests>0)
			{
				$verifycode = rand('11111','99999');
				$data = array(
					'fld_verify' =>	$verifycode,						
				);
				$this->db->where('id',$userid);	
				$this->db->update('tbl_user',$data);
				$returnurl = base_url().'catalog/resetpassword/'.$verifycode.'/'.$userid.'/forcereset';
				
				echo $returnurl;
				exit;
			} */
			
			$this->session->set_userdata('usr_logged_in',true);
			$this->session->set_userdata('usr_id',$userid);
			$this->session->set_userdata('usr_name',$name);
			$this->session->set_userdata('usr_email',$email);
			$this->session->set_userdata('usr_type',$user_type);
			
			echo $user_type;
		}
		else
		{
			echo 'error';
		}
	}
	
	public function myprofileupdate()
	{
		$userid = $this->session->userdata('usr_id');
		//preTagData($_REQUEST);
		//exit;
		
		$name 						= $this->input->post('name');
		$phone 						= $this->input->post('phone');
		$address 					= $this->input->post('address');
		$areaofresearch 			= $this->input->post('areaofresearch');
		
		if($userid!="" && $userid>0)
		{
			$data = array(
				'fld_name'				=>	$name,
				'fld_address'			=>	$address,				
				'fld_phone'				=>	$phone,
				'fld_areaofresearch'	=>	$areaofresearch,
			);
			
			$this->db->where('id',$userid);	
			$query = $this->db->update('tbl_user',$data);
			
			if (isset ( $_FILES['profile_picture'] ) && $_FILES['profile_picture'] ['error'] == 0)
			{
				if($old_profile_picture!="")
				{
					unlink(UPLOADDIRPATH.'/assets/profileimg/'.$old_profile_picture);
				}
				
				$ext = end(explode('.',$_FILES ['profile_picture']['name']));
				
				$new_name = "PRFIMGUSR".rand('1000','9999').time() . '.' . $ext; 
				UPLOADDIRPATH.'/assets/profileimg/'.$new_name;
										
				$config['upload_path'] = UPLOADDIRPATH.'/assets/profileimg/';
				$config['allowed_types'] = 'jpg|jpeg|gif|png';
				$config['file_name'] = $new_name;
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ( ! $this->upload->do_upload('profile_picture'))
				{
					$error = array('error' => $this->upload->display_errors());
					echo preTagdata($error);
					exit;
				}
				else
				{
						$oldprofileimage = $this->input->post('oldprofileimage');

						if($oldprofileimage!="")
						{
							unlink(UPLOADDIRPATH.'/assets/profileimg/'.$oldprofileimage);
						}
					
						list($w, $h) = getimagesize(UPLOADDIRPATH.'/assets/profileimg/'.$new_name);
						
						// START SMALL IMG
						$n_w = 120; // destination image's width
						$n_h = 120; // destination image's height
						
						$source_ratio = $w / $h;
						$new_ratio = $n_w / $n_h;
						
						
						$config = array();
						
						// create resized image
						$config['image_library'] = 'GD2';
						$config['source_image']	= UPLOADDIRPATH.'/assets/profileimg/'.$new_name;
						$config['new_image'] = UPLOADDIRPATH.'/assets/profileimg/'.$new_name;
						$config['create_thumb'] = false;
						$config['maintain_ratio'] = true;
						
						if($new_ratio > $source_ratio || (($new_ratio == 1) && ($source_ratio < 1))){
							$config['width'] = $n_w;
							$config['height'] = round($w/$new_ratio);
							$config['y_axis'] = round(($h - $config['height'])/2);
							$config['x_axis'] = 0;
							
						} else {
							
							$config['width'] = round($h * $new_ratio);
							$config['height'] = $n_h;
							$size_config['x_axis'] = round(($w - $config['width'])/2);
							$size_config['y_axis'] = 0;

						}
						
						//$this->image_lib->clear();

						//$this->image_lib->initialize($config);

						//$this->image_lib->resize();
						
						// END SMALL IMG
					
					$data = array(
						'fld_profile_image' =>	$new_name,						
					);
					$this->db->where('id',$userid);	
					$this->db->update('tbl_user',$data);
				}
			}
			
			echo 'success';
			exit;
		}
		else
		{
			echo 'fail';
			exit;
		}
	}
	
	public function udpatepassword()
	{
		$oldpassword 		= trim($this->input->post('oldpassword'));
		$password	 		= trim($this->input->post('password'));
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('id',$this->session->userdata('usr_id'));
		$this->db->where('fld_password',md5($oldpassword));
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()>0 && $oldpassword!="" && $password!="")
		{
			$data2 = array('fld_password'=> md5($password), 'fld_decrypt_password'=> $password);
			$this->db->where('id',$this->session->userdata('usr_id'));	
			$query2 = $this->db->update('tbl_user',$data2);
		}
		else
		{
			echo 'invalid';
			exit;
		}
	}
	
	public function forgetpassword()
	{
		$email	= trim($this->input->post('email'));
		
		if($email!="")
		{
			$this->db->select('*');
			$this->db->from('tbl_user');
			$this->db->group_start();
			$this->db->where('fld_email',$email);
			$this->db->group_end();
			$query = $this->db->get();
			$this->db->last_query();
			$query->num_rows();
			if($query->num_rows()>0 && $email!="")
			{
				$result = $query->row();
				
				$userid	= $result->id;
				$name	= $result->fld_name;
				
				$verifycode = rand('11111','99999');
				$data = array(
					'fld_verify' =>	$verifycode,						
				);
				$this->db->where('id',$userid);	
				$this->db->update('tbl_user',$data);
				
				$mandrill = new Mandrill(MANDRILL_KEY);

				$Subject = "Reset Password - ".WEBNAME;
				
				$body = 'Hi '.$name.', <br/><br/>

				Thank you for choosing '.WEBNAME.' as your consultant for your doctoral research. <br/><br/>

				To secure your account please create a unique password using the link below - <br/><br/>
				
				Password Link - <a style="background: #f87f12 !important;border-color: #f87f12 !important;font-size: 14px !important;    color: #fff;text-decoration: none;border: 1px solid transparent; padding: .375rem .75rem; " href="'.base_url().'catalog/resetpassword/'.$verifycode.'/'.$userid.'" target="_blank">Reset password link</a><br/><br/>';

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
				
				echo 'success';
				exit;
			}
			else
			{	
				
				echo 'error';
				exit;
			}
		}
		else
		{
			echo 'error';
			exit;
		}
	}
	
	
	public function registration()
	{
		//echo preTagData($_REQUEST);
		//exit;
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('fld_email',trim($this->input->post('email')));
		$query1 = $this->db->get();
		//echo $this->db->last_query();
		//echo $query1->num_rows();
		//exit;
		if($query1->num_rows()>0)
		{
			$result1 = $query1->row();
			//echo preTagdata($result);
			$userid 		= $result1->id;
			$name 			= $result1->fld_name;
			$email 			= $result1->fld_email;
			
			echo 'exist';
			exit;
		}
		else
		{
			$verifycode = rand('11111','99999');
			//$password 		= chr(rand(65,90)).rand(111,999).chr(rand(65,90)).chr(rand(65,90)).rand(111,999);
			$password 		= $this->input->post('password');
			
			$data = array(
				'fld_user_code' 		=> 	getusercode(),
				'fld_type' 				=> 	$this->input->post('user_type'),
				'fld_name' 				=> 	ucwords(strtolower($this->input->post('name'))),
				'fld_email' 			=> 	$this->input->post('email'),
				'fld_phone' 			=>  $this->input->post('phone'),
				'fld_password'			=>	md5($password),
				'fld_decrypt_password'	=>	$password,
				'fld_addedon'			=>	date('Y-m-d H:i:s'),
			);
			$query 	= $this->db->insert('tbl_user',$data);
			$userid = $this->db->insert_id();
			
			echo 'success';
			exit;
		}
		
	}

	public function filterSearch()
	{
		//preTagData($_REQUEST);
		$keyword = $this->input->post('keyword');
		$sort_by = $this->input->post('sort_by');
		
		if(count(array_filter($this->input->post('categories'))))
		{
			$category 	= $this->input->post('categories');
		}
		
		if(count(array_filter($this->input->post('deployment'))))
		{
			$deployment = $this->input->post('deployment');
		}
		
		if(count(array_filter($this->input->post('device_and_os'))))
		{
			$device_and_os = $this->input->post('device_and_os');
		}
		
		if(count(array_filter($this->input->post('business_type'))))
		{
			$business_type = $this->input->post('business_type');
		}
		
		if(count(array_filter($this->input->post('lang_support'))))
		{
			$lang_support = $this->input->post('lang_support');
		}
		
		if($this->input->post('srch'))
		{
			$searchtxt = $this->input->post('srch');
		}
		
		$this->db->select('tbl_school.*');
		$this->db->from('tbl_school');
		$this->db->where('tbl_school.status','Active');
		if($searchtxt!="")
		{
			$this->db->group_start();
			$arrsrch = explode(' ',$searchtxt);
			$this->db->like('tbl_school.fld_name',$arrsrch[0]);
		    foreach($arrsrch as $srchtxt)
		    {
		        $this->db->or_like('tbl_school.fld_name',$srchtxt);
		    }
			$this->db->group_end();
		}
		
		if($this->input->post('category')!="")
		{
			/* $this->db->group_start();
			$i=0;
			foreach($category as $categoryid)
			{
				$i++;
				if($i ==1)
				{
					$this->db->where('tbl_school.fld_category',$categoryid);
				}
				else
				{
					$this->db->or_where('tbl_school.fld_category',$categoryid);
				}
			}
			$this->db->group_end(); */
			$this->db->where('tbl_school.fld_category',$this->input->post('category'));
		}
		
		if($this->input->post('class')!="")
		{
			/* $this->db->group_start();
			$i=0;
			foreach($deployment as $deploy)
			{
				$i++;
				if($i ==1)
				{
					$this->db->like('tbl_school.fld_accessible',$deploy);
				}
				else
				{
					$this->db->or_like('tbl_school.fld_accessible',$deploy);
				}
			}
			$this->db->group_end(); */
			$this->db->where('tbl_school.fld_class',$this->input->post('class'));
		}
		if($this->input->post('type')!="")
		{
			$this->db->where('tbl_school.fld_type',$this->input->post('type'));
		}
		if($this->input->post('location')!="")
		{
			$this->db->where('tbl_school.fld_location',$this->input->post('location'));
		}
		$this->db->order_by('tbl_school.id','desc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		//echo $query->num_rows();
		if($query->num_rows()>0)
		{
			
			$a = 1;
			if(count($query->result())>0)
			{
				foreach($query->result() as $row)
				{
				$a++;
				?>
					<div class="card overflow-hidden border-bottom mb-4"> 
						 <div class="row">
							<div class="col-sm-4 text-center location">
							 <div class="item-card7-img pt-2 px-2">
							<div class="item-card7-imgs">
							   
							    <?php if($row->fld_school_image!=""){?>
								<img src="<?php echo base_url();?>assets/upload/profileimg/<?php echo $row->fld_school_image;?>" class="cover-image br-7 border" alt="<?php echo $row->fld_school_name;?>" />
								<?php }?>
							
							</div>
								<a href="" target="blank"> <i class="fa fa-globe"></i> www.school.com</a>
								<a href="" target="blank"> <i class="fa fa-user"></i> <?php echo $row->fld_principle_name;?> (Principal)</a>
						 </div>
							</div>
							<div class="col-sm-8">
								<div class="card-body p-1 pt-2">
								<div class="item-card7-desc">
								   <div class="item-card7-text">
									  <a href="javascript:void(0)" class="text-dark">
										 <h4 class="font-weight-semibold mb-1"><?php echo $row->fld_school_name;?></h4>
									  </a>
								   </div>
								   <div class="d-flex mb-0">
									 <span class="location"><i class="fa fa-map-marker"></i> <?php echo $row->fld_location;?></span>
									  <span class="location ml-3"><i class="fa fa-users"></i> <?php echo $row->fld_noofstudents;?>+ Students</span>
								   </div>
								   <div class="pt-2 mb-3">
									<span class="location"><i class="fa fa-graduation-cap" aria-hidden="true"></i> CBSE Board</span>

									
								   </div>
								   
								   <div class="border-top pt-3">
								   <h6>Facilities</h6>
								   <?php $arrfacilities = explode(',',$row->fld_facilities);?>
									<?php foreach($arrfacilities as $value){?>
									<span class="tag"><?php echo $value;?></span>
									<?php }?>
								   </div>
								   <p class="mb-0"><a href="<?php echo base_url();?>school-detail/<?php echo $row->id;?>/<?php echo generatePermaLink($row->fld_school_name);?>" class="btn btn-primary view-det">View Details <i class="fa fa-angle-double-right"></i></a></p>
								</div>
							 </div>
						 </div>
						</div>
					</div>
					<?php
				}
			}
		
		} 
	}

	public function sendEnquiry()
	{
		//echo preTagData($_FILES);
		//exit;
		$userip         = trim($this->input->post('send_userip'));
		$schoolid     	= trim($this->input->post('send_schoolid'));
		$send_name      = trim($this->input->post('send_name'));
		$send_email_id  = trim($this->input->post('send_email_id'));
		$send_mobile    = trim($this->input->post('send_mobile'));
		$send_message   = trim($this->input->post('send_message'));
		
		
		if($schoolid!="" && $send_email_id!="") 
		{
			$this->db->select('*');
			$this->db->from('tbl_enquiry');
			$this->db->where('fld_email',$send_email_id);
			$this->db->where('fld_record_id',$schoolid);
			$query1 = $this->db->get();
			//echo $this->db->last_query();
			//echo $query1->num_rows();
			//exit;
			if($query1->num_rows()==0)
			{			
				$data2 = array(
				    'fld_userip' 		=> $userip,
					'fld_record_id' 	=> $schoolid,
					'fld_name'    		=> $send_name,
					'fld_email' 		=> $send_email_id,
					'fld_mobile' 		=> $send_mobile,
					'fld_message' 		=> $send_message,
					'fld_addedon'		=> date('Y-m-d')
				);
				$this->db->insert('tbl_enquiry',$data2);
				$insertid = $this->db->insert_id();
				
				
				
				$mandrill = new Mandrill(MANDRILL_KEY);
			
				$Subject = WEBNAME." || Request a Call Back";
				
				$body = "Hi Admin, <br/><br/> A new enquiry has been placed. Query Details - <br/><br/>";
				
				$body.='<strong>Name: </strong>'. $send_name.'<br/>';
				$body.='<strong>Email: </strong>'.$send_email_id.'<br/>';
				
				$body.='<strong>Mobile Number: </strong>'.$send_mobile.'<br/>';
				$body.='<strong>Message: </strong>'.$send_message.'<br/>';
								
				//$body.='<strong>Ip Address: </strong>'.$ip.'<br/>';
				$body.='<strong>Refferal Link: </strong>'.$_SERVER["HTTP_REFERER"].'<br/>';
		
				$body.=	'<br/><br/>';
				
				$body .="<br>Thanks & Regards,<br /> ".WEBNAME;

				//echo $body;
				//exit;
				
				$message = array(
					'html' => $body,
					'subject' => $Subject,
					'from_email' => FROM_EMAIL,
					'from_name' => FROM_NAME,
					'to' => array(
						array(
						'email' => ADMIN_EMAIL, 
						'name' => 'Admin',
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
				
				echo "Success";
			}
			else
			{
				echo 'exist';
			}
			exit;
		}
		else
		{
			echo "fail";
			exit;			
		}
	}
	
	public function addnewjob()
	{
		//echo preTagData($_FILES);
		//exit;
		$company_name         = trim($this->input->post('company_name'));
		$company_email     	= trim($this->input->post('company_email'));
		$company_phone      = trim($this->input->post('company_phone'));
		$country  = trim($this->input->post('country'));
		$state    = trim($this->input->post('state'));
		$city   = trim($this->input->post('city'));
		$company_website_url   = trim($this->input->post('company_website_url'));
		$job_profile   = trim($this->input->post('job_profile'));
		$job_type   = trim($this->input->post('job_type'));
		$experience   = trim($this->input->post('experience'));
		$salary   = trim($this->input->post('salary'));	
		$skills   = implode(',',$this->input->post('skills'));	
		$job_profile_description   = trim($this->input->post('job_profile_description'));	
		
		
		if($company_name!="" && $company_email!="") 
		{
			$this->db->select('*');
			$this->db->from('tbl_jobs');
			$this->db->where('fld_company_email',$company_email);
			$this->db->or_where('fld_company_name',$company_name);
			$query1 = $this->db->get();
			//echo $this->db->last_query();
			//echo $query1->num_rows();
			//exit;
			if($query1->num_rows()==0)
			{			
				$data2 = array(
				    'fld_userid' 		=> $this->session->userdata('usr_id'),
					'fld_company_name' 	=> $company_name,
					'fld_company_email'    		=> $company_email,
					'fld_company_phone' 		=> $company_phone,
					'fld_country' 		=> $country,
					'fld_state' 		=> $state,
					'fld_city' 	=> $city,
					'fld_company_website_url' 	=> $company_website_url,
					'fld_job_profile' 	=> $job_profile,
					'fld_job_type' 	=> $job_type,
					'fld_experience' 	=> $experience,
					'fld_salary' 	=> $salary,
					'fld_skills' 	=> $skills,
					'fld_job_profile_description' 	=> $job_profile_description,
					'fld_addedon'		=> date('Y-m-d')
				);
				$this->db->insert('tbl_jobs',$data2);
				$insertid = $this->db->insert_id();
			
				
				echo "Success";
			}
			else
			{
				echo 'exist';
			}
			exit;
		}
		else
		{
			echo "fail";
			exit;			
		}
	}
	
}

