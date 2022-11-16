<?php
$bookingreminderdate 	= getbookingreminderdate($result->id,$result->fld_consultantid,$result->fld_userid);

if($bookingreminderdate->fld_reminder_date!="")
{
	$arrreminder_date  	= explode(",",$bookingreminderdate->fld_reminder_date);
}
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
				 
				 <h4 class="card-title">Manage Reminders - <?php echo $result->user_name;?> - <?php echo $result->user_email;?> </h4>
					<div style="float: right; margin-top: -42px;">
						<a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="btn btn-primary ctawidthauto">
							<i class="fa fa-arrow-left" aria-hidden="true" style="line-height: normal;"></i> Back
						</a>
					</div>
					<div class="clearfix">&nbsp;</div>
					<input type="hidden" name="adminid" id="adminid" value="<?php echo $result->id;?>" />    
					
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
					</div>					

					<?php if($this->session->userdata('adm_admin_type') == 'EXECUTIVE'){?>
					<div class="form-group row form-detls">
						<div class="col-sm-12 formmsi">
							<h5><strong>Reminder Dates</strong></h5>
						</div>
						<div class="col-sm-12">
							<div id="msgloader" style="text-align"></div>
							<form method="post" action="<?php echo base_url();?>dashboard/insertreminderdate" onsubmit="return sendInvitaion('<?php echo base_url();?>')" id="invitationfrm" enctype="multipart/form-data">
								<input type="hidden" name="bookingid" id="bookingid" value="<?php echo $result->id;?>" />
								<input type="hidden" name="consultantid" id="consultantid" value="<?php echo $result->fld_consultantid;?>" />
								<input type="hidden" name="admin_name" id="admin_name" value="<?php echo $result->admin_name;?>" />
								<input type="hidden" name="consultantemail" id="consultantemail" value="<?php echo $result->admin_email;?>" />
								
								<input type="hidden" name="userid" id="userid" value="<?php echo $result->fld_userid;?>" />
								<input type="hidden" name="username" id="username" value="<?php echo $result->user_name;?>" />
								<input type="hidden" name="useremail" id="useremail" value="<?php echo $result->user_email;?>" />
								<input type="hidden" name="rmdate_counter" id="rmdate_counter" value="1" />
								<input type="hidden" name="current_date" id="current_date" value="<?php echo date('Y-m-d');?>" />
								<input type="hidden" name="booking_date" id="booking_date" value="<?php echo $result->fld_booking_date;?>" />
								
								<div class="form-group row">
									<div class="col-sm-12">
										<div class="row reminder_data_bx">
											<?php
											if(count(array_filter($arrreminder_date))=='')
											{
											?>
											<div class="col-sm-3">
												<div class="form-inline">
													<div class="form-group mb-1 mr-2"><input type="date" name="rmdate_data[]" min="<?php echo date('Y-m-d');?>" max="<?php echo $result->fld_booking_date;?>" class="form-control" required /></div>
													<div class="form-group mb-1"><button type="button" class="btn btn-link p-0 addreminderdate" data-id='1'><i class="fa fa-plus"></i></button></div>												
												</div>												
											</div>
											<?php
											}
											else
											{
												if(count($arrreminder_date)>0)
												{
													$i=0;
													foreach($arrreminder_date as $reminder_date)
													{
														$i++;
														if($i==1)
														{
															?>
															<div class="col-sm-3">
																<div class="form-inline">
																	<div class="form-group mb-1 mr-2"><input type="date" name="rmdate_data[]" min="<?php echo date('Y-m-d');?>" value="<?php echo $reminder_date;?>" max="<?php echo $result->fld_booking_date;?>" class="form-control" required /></div>
																	<div class="form-group mb-1"><button type="button" class="btn btn-link p-0 addreminderdate" data-id='1'><i class="fa fa-plus"></i></button></div>												
																</div>												
															</div>
															<?php
														}
														else
														{
															?>
															<div class="col-sm-3">
															<div class="form-inline available"><div class="form-group mb-3 mr-2"><input type="date" name="rmdate_data[]" min="<?php echo date('Y-m-d');?>" max="<?php echo $result->fld_booking_date;?>" class="form-control" value="<?php echo $reminder_date;?>" required /></div><div class="form-group mb-3"><button type="button" class="btn btn-link text-danger p-0 mr-2 remove_rmdatarow" name="remove1" data-module="rmdate_counter"><i class="fa fa-times"></i></button></div></div>
															</div>
															<?php
														}
													}
												}
											}
											?>
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-sm-2"></label>
									<div class="col-sm-10">
										<input type="submit" class="btn btn-primary m-b-0 float-right" value="Submit"> 
									</div>
								</div>
							</form>              
						</div>
					</div>
					<?php
					}
					?>

					

				</div><!-- .card -->

			</div><!-- .container -->
			
		</div>
</div>

