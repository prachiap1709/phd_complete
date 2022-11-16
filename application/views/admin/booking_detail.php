<?php
$currency 		= getcurrency()[$result->fld_currency];
$currencysymb 	= getcurrencysymbol()[$result->fld_currency];

$question_data			=  $result->fld_question_data;
$arrquestion_data   		= explode('~~',$question_data);
$countquestion_data 	= count(array_filter($arrquestion_data));
?>
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
	    <div class="card ">

			<div class="card-body">						
										
				<?php 
				if($this->session->userdata('alert_type')!="")
				{
					?>
					<div class="alert alert-<?php echo $this->session->userdata('alert_type');?>">
						<a href="#"  data-dismiss="alert" aria-label="close" title="close">×</a>
						<?php echo $this->session->userdata('msg');?>
					</div>
					<?php
					$this->session->unset_userdata('alert_type');
					$this->session->unset_userdata('msg');
				}
				?>
				 <div class="form-group row">
						<div class="col-sm-12" style="text-align: center;" id="rePassmsgloader"></div>
				 </div>
				 <h4 class="card-title">View Booking Information </h4>
					<div style="float: right; margin-top: -42px;">
						
						<?php if($this->session->userdata('adm_admin_type') == 'EXECUTIVE'){?>
						<a href="<?php echo base_url();?>admin/reminder/<?php echo $result->id;?>" class="btn btn-primary ctawidthauto" title="Set Reminders"> <i class="fa fa-calendar" aria-hidden="true" style="line-height: normal;"></i> Set Reminders</a>
						<?php } ?>
						
						<?php if($this->session->userdata('adm_admin_type') == 'SUPERADMIN' && $result->fld_consultation_sts == 'Completed' && $result->fld_comment!=""){?>
						<a type="button" class="btn btn-warning completed" data-toggle="modal" data-target="#myModal" onclick="setbookingcomment('<?php echo $result->id?>')" style="cursor:pointer"><i class="fa fa-eye"></i> View Comments</a>
						
						<div class="consultation_data_bx<?php echo $result->id;?>" style="display:none">
							<strong>Comment</strong><br/> <?php echo $result->fld_comment;?>
							<?php if($result->fld_booking_call_file!=""){?>
							</br></br>
							<video width="450" height="240" controls>
							<source src="<?php echo base_url();?>assets/upload_doc/<?php echo $result->fld_booking_call_file;?>" type="video/mp4">
							</video>
							<?php }?>
						</div>
						<?php } ?>
						
						<a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="btn btn-primary ctawidthauto">
							<i class="fa fa-arrow-left" aria-hidden="true" style="line-height: normal;"></i> Back
						</a>
						<?php if($this->session->userdata('adm_admin_type') == 'CONSULTANT'){?>
						<div id="msgloader_consultation" style="text-align"></div>
						<?php } ?>
					</div>
					<div class="clearfix">&nbsp;</div>
					
					
					<?php
					if($this->session->userdata('adm_admin_type') == 'SUPERADMIN')
					{
					?>
					<div class="form-group row form-detls">
						<div class="col-sm-12 formmsi">
							<h5><strong>Consultant Information</strong></h5>
						</div>
						
						<div class="col-sm-4 ">
						<label class="col-form-label"><strong><i class="fa fa-user" aria-hidden="true"></i> Id</strong></label>
						<p><?php echo $result->admin_code;?></p>			
						
						</div>
						
						<div class="col-sm-4 ">
						<label class="col-form-label"><strong><i class="fa fa-user" aria-hidden="true"></i> Name</strong></label>
						<p><?php echo $result->admin_name;?></p>			
						
						</div>
						
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</strong></label>
							<p>
								<?php echo $result->admin_email;?>
						</p>
						</div>			
					</div>
					<?php } ?>
					
					<div class="form-group row form-detls">
						<div class="col-sm-12 formmsi">
							<h5><strong>User Information</strong></h5>
						</div>
						
						<div class="col-sm-4 ">
						<label class="col-form-label"><strong><i class="fa fa-user" aria-hidden="true"></i> Id</strong></label>
						<p><?php echo $result->user_code;?></p>			
						
						</div>
						
						<div class="col-sm-4 ">
						<label class="col-form-label"><strong><i class="fa fa-user" aria-hidden="true"></i> Name</strong></label>
						<p><?php echo $result->user_name;?></p>			
						
						</div>
						
					 
						
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</strong></label>
							<p>
								<?php echo $result->user_email;?>
						</p>
						</div>
						
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-key" aria-hidden="true"></i> Password</strong></label>
								<p>
								<?php echo $result->user_pass;?>
						</p>
						</div>
						
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-phone" aria-hidden="true"></i> Phone</strong></label>
							<p><?php echo $result->user_country_code.' - '.$result->user_phone;?></p>
						</div>
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-key" aria-hidden="true"></i> Address Line 1</strong></label>
								<p> <?php echo $result->fld_address;?> </p>
						</div>
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-key" aria-hidden="true"></i> Address Line 2</strong></label>
								<p> <?php echo $result->fld_address_line2;?> </p>
						</div>
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-key" aria-hidden="true"></i> State</strong></label>
								<p> <?php echo $result->fld_state;?> </p>
						</div>
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-key" aria-hidden="true"></i> City</strong></label>
								<p> <?php echo $result->fld_city;?> </p>
						</div>
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-key" aria-hidden="true"></i> Pincode</strong></label>
								<p> <?php echo $result->fld_pincode;?> </p>
						</div>
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-key" aria-hidden="true"></i> Country</strong></label>
								<p> <?php echo getCountrylist($result->fld_country)->nicename;?> </p>
						</div>
					</div>
					<div class="form-group row form-detls">
						<div class="col-sm-12 formmsi">
							<h5><strong>Booking Information</strong></h5>
						</div>
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-calendar" aria-hidden="true"></i> Booking Information</strong></label>
							<p>
								<?php echo convertdate($result->fld_booking_date.''.$result->fld_booking_slot,'D d M, Y h:i A');?>
							</p>
						</div>
						
						
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-clock-o" aria-hidden="true"></i> Timezone</strong></label>
							<p>
								<?php echo $result->fld_timezone;?>												
							</p>
						</div>
						
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-clock-o" aria-hidden="true"></i> Duration</strong></label>
							<p>
								<?php echo meetingduration()[$result->fld_durations];?>												
							</p>
						</div>
						
						<?php if($result->fld_document1!=""){?>
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-file" aria-hidden="true"></i> Document 1</strong></label>
							<p>
								<a href="<?php echo base_url()?>assets/booking_doc/<?php echo $result->fld_document1;?>" target="_blank"><?php echo $result->fld_document1;?></a>
							</p>
						</div>
						<?php } ?>
						<?php if($result->fld_document2!=""){?>
						<div class="col-sm-4 ">
							<label class="col-form-label"><strong><i class="fa fa-file" aria-hidden="true"></i> Document 2</strong></label>
							<p>
								<a href="<?php echo base_url()?>assets/booking_doc/<?php echo $result->fld_document2;?>" target="_blank"><?php echo $result->fld_document2;?></a>									
							</p>
						</div>
						<?php }?>
					</div>
					<?php 
					if($countquestion_data>0)
					{
					?>
					<div class="form-group row form-detls">
						<div class="col-sm-12 formmsi">
							<h5><strong>Questions Information</strong></h5>
						</div>
						
							<?php 
							$a=0;
							$arranswer = explode('|~|',$result->fld_answer_data);
							foreach($arrquestion_data as $key=>$que_data)
							{
								$a++;
								$arrque_data = explode('||', $que_data);
								
								$mandate = '';
								if($arrque_data[2]=='required')
								{
									$mandate = '<span class="text-danger">*</span>';
									
								}
								?>
								<div class="col-sm-4">
									<div class="alert alert-primary">
										<div>
											<label>Q<?php echo $a;?>. <?php echo $arrque_data[0];?> <?php echo $mandate;?></label>
											<div>Ans.
											<?php
											echo $arranswer[$key];
											?>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
							?>
					</div>
					<!-- .card-innr -->
					<?php
					}
					?>
					

					<?php 
					$executive_replies = getexecutive_replies($result->id,$result->fld_consultantid,$result->fld_userid);
					if($this->session->userdata('adm_admin_type') == 'EXECUTIVE' && $executive_replies->id==''){?>
					<div class="form-group row form-detls">
						<div class="col-sm-12 formmsi">
							<h5><strong>Send Mail</strong></h5>
						</div>
						<div class="col-sm-12">
							<div id="msgloader" style="text-align"></div>
							<form method="post" action="<?php echo base_url();?>dashboard/sendbookingmailer" onsubmit="return sendInvitaion('<?php echo base_url();?>')" id="invitationfrm" enctype="multipart/form-data">
								<input type="hidden" name="bookingid" id="bookingid" value="<?php echo $result->id;?>" />
								<input type="hidden" name="consultantid" id="consultantid" value="<?php echo $result->fld_consultantid;?>" />
								<input type="hidden" name="admin_name" id="admin_name" value="<?php echo $result->admin_name;?>" />
								<input type="hidden" name="consultantemail" id="consultantemail" value="<?php echo $result->admin_email;?>" />
								
								<input type="hidden" name="userid" id="userid" value="<?php echo $result->fld_userid;?>" />
								<input type="hidden" name="username" id="username" value="<?php echo $result->user_name;?>" />
								<input type="hidden" name="useremail" id="useremail" value="<?php echo $result->user_email;?>" />
								
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Mail Subject</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="subject" id="subject" value="Booking Information - <?php echo WEBNAME;?>" placeholder="Enter Subject..." />												
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">&nbsp;</label>
									<div class="col-sm-10">
										Dear <?php echo $result->user_name;?>,
										<br><br>
										Greetings!
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Mail Body</label>
									<div class="col-sm-10">
										<textarea class="form-control" name="mail_body" id="mail_body" rows="2" placeholder="Enter Mail Body..." ><?php echo $mailbody;?></textarea>
										<script>CKEDITOR.replace('mail_body');</script>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Booking Date</label>
									<div class="col-sm-10">
									   <input type="text" class="form-control" name="meeting_date" id="meeting_date" value="<?php echo convertdate($result->fld_booking_date,'D d M, Y');?>" readonly="readonly" required />
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Booking Time</label>
									<div class="col-sm-3">
									   <input type="text" class="form-control" name="meeting_time" id="meeting_time"  value="<?php echo $result->fld_booking_slot;?>" readonly="readonly" required />
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Signature</label>
									<div class="col-sm-10">
										<?php $signature = 'Thanks & Regards <br> '.$this->session->userdata('adm_admin_name').' <br> '.WEBNAME?>
										<textarea class="form-control" name="signature" id="signature" value="" placeholder="Enter Signature..." required><?php echo $signature;?></textarea>												
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-sm-2"></label>
									<div class="col-sm-10">
										<input type="submit" class="btn btn-primary m-b-0" value="Submit"> 
									</div>
								</div>
							</form>              
						</div>
					</div>
					<?php
					}
					?>
					<?php if($this->session->userdata('adm_admin_type') == 'CONSULTANT' && $result->status == 'Paid' && $result->fld_consultation_sts!='Completed'){?>
					<div id="msgloader" style="text-align"></div>
					<form method="POST" id="bookingstatusupdate" onsubmit="return udpateconsultation_sts('<?php echo base_url();?>');" enctype="multipart/form-data">
					<div class="form-group row form-detls">
						<div class="col-sm-12 formmsi">
							<h5><strong>Update Status</strong></h5>
						</div>
						<div class="col-sm-3">
    						<textarea class="form-control" name="comment" id="comment" placeholder="Add Comments"></textarea>
    					</div>
						<div class="col-sm-3">
    						<input type="file" class="form-control" name="video_file" id="video_file" value="" />
    					</div>
						<div class="col-sm-3">
    						<input type="hidden" name="bookingid" id="bookingid" value="<?php echo $result->id;?>" />
    						<select class="form-control" name="consultation_sts" id="consultation_sts">
    							<option value="Pending" <?php if($result->fld_consultation_sts == 'Pending'){?> selected="selected"<?php }?>>Pending</option>
    							<option value="Completed" <?php if($result->fld_consultation_sts == 'Completed'){?> selected="selected"<?php }?>>Completed</option>
    						</select>
    					</div>
						<div class="col-sm-3">
						<button type="submit" class="btn btn-primary ctawidthauto consultation_sts">
							<i class="fa fa-arrow-right" aria-hidden="true" style="line-height: normal;"></i> Update
						</button>
						</div>
					</div>
					</form>
					<?php } ?>

				</div><!-- .card -->

			</div><!-- .container -->
			
		</div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Consultation Completed Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body consultation_data">
        </div>
        
      </div>
      
    </div>
  </div>