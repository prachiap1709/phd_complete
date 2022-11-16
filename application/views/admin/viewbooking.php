<?php if($adminid>0){	$consultantinfo = getAdmin($adminid,'CONSULTANT');	$consultantname = ' - '.$consultantinfo->fld_name;}?><div class="row">              <div class="col-lg-12 grid-margin stretch-card">              <div class="card ">                  <div class="card-body">
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
				}				//echo convertedAmount(20,'0.74');
				?>
				
				<!-- Page-body start -->					<div class=" filter_sec">				        						<div class="card-block">						    <form method="post" name="search_form" id="search_form">							<div class="form-group row">								<div class="col-sm-2">									<select name="filterdays" id="filterdays" class="form-control" title="Select Days">										<option value="All">Select Days</option>										<option value="7" <?php if($this->input->post('filterdays') == 7){ ?> selected="selected" <?php } ?>>7 Days</option>										<option value="30" <?php if($this->input->post('filterdays') == 30){ ?> selected="selected" <?php } ?>>30 Days</option>										<option value="90" <?php if($this->input->post('filterdays') == 90){ ?> selected="selected" <?php } ?>>90 Days</option>										<option value="Custom" <?php if($this->input->post('filterdays') == 'Custom'){ ?> selected="selected" <?php } ?>>Custom</option>									</select>								</div>																<div class="col-sm-3 customdatebx" style="display:none">									<input type="text" class="form-control customdatefld" name="client_from_date" id="client_from_date" value="<?php echo $this->input->post('client_from_date');?>" placeholder="From Date" autocomplete="off" />								</div>								<div class="col-sm-3 customdatebx" style="display:none">									<input type="text" class="form-control customdatefld" name="client_to_date" id="client_to_date" value="<?php echo $this->input->post('client_to_date');?>" placeholder="To date" autocomplete="off" />									</br>								</div>																<div class="col-sm-2">									<select name="booking_status" id="booking_status" class="form-control">										<option value="">Select Status</option>										<option value="Pending" <?php if($this->input->post('booking_status') == 'Pending'){ ?> selected="selected" <?php } ?>>Pending</option>										<option value="Completed" <?php if($this->input->post('booking_status') == 'Completed'){ ?> selected="selected" <?php } ?>>Completed</option>								    </select>								  								</div>																<div class="col-sm-2">									  									  <input type="submit" name="SearchBtn" class="btn btn-primary" value="Search" onclick='$("#search_form").attr("action", "<?php echo base_url();?>admin/viewbooking");' />									  									  <input type="button" name="SearchBtn" class="btn btn-primary" value="Reset" onclick="$('#keywords').val(''); $('#client_from_date').val(''); $('#client_to_date').val(''); $('#client_status').val('');" />								</div>							</div>														  </form>						</div>					</div>
					<div class="card-head">
						<h4 class="card-title">Manage Booking <?php echo $consultantname;?></h4>
					</div>
							<div class="clearfix">&nbsp;</div>							<div class="responsive-auto">
							<table id="example" class="table table-striped table-bordered nowrap">
								<thead>
									<tr>										<th>User</th>										<?php										if($this->session->userdata('adm_admin_type') == 'SUPERADMIN')										{										?>										<th>Consultant</th>										<?php 										}										?>
										<th>Booking Information</th>
										<th>Timezone</th>
										<th>Added On</th>										<th>Consultation Status</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php if(count(array_filter($result)) > 0)								{
									foreach($result as $row)									{
									?>
									<tr>									  <td><?php echo $row->user_name;?></td>									  <?php									  if($this->session->userdata('adm_admin_type') == 'SUPERADMIN')									  {									  ?>									  <td><?php echo $row->admin_name;?></td>									  <?php									  }									  ?>									  <td><?php echo convertdate($row->fld_booking_date.''.$row->fld_booking_slot,'D d M, Y h:i A');?></td>
									  <td><?php echo $row->fld_timezone;?></td>
									  <td><?php echo convertdate($row->fld_addedon,'d M Y')?></td>
									  <td style="text-align:center">										<?php echo $row->fld_consultation_sts;?>									  </td>									  <td style="text-align:center">										<?php echo $row->status;?>
									  </td>									  
									  <td style="text-align:center">										<a href="<?php echo base_url();?>admin/booking_detail/<?php echo $row->id;?>" class="label label-warning" title="View Booking Detail"><i class="fa fa-eye"></i></a>
									  </td>
									</tr>
									<?php
									}
								}
								else
								{
									?>
									<tr>
										<td colspan='6'><div class="alert alert-danger">Info. Not Available</div></td>
									</tr>
									<?php
								}
								?>
								</tbody>
							</table>							
							</div><!-- .card-innr -->							</div><!-- .card-innr -->
						
						</div><!-- .card -->
					</div><!-- .container -->
</div><!-- .page-content -->
