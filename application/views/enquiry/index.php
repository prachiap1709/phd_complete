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

				<!-- Page-body start -->
					
					<div class="card-head">

					<h4 class="card-title">Manage Enquiry </h4>

					</div>

							<div class="clearfix">&nbsp;</div>
							
							<div class="responsive-auto">
								<table id="example" class="table table-striped table-bordered zero-configuration">
									<thead>
										<tr>
											
											<th>IP</th>
											<th>School Name</th>
											<th>User Info.</th>
											
											<th>Message</th>
											<th>Added On</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php if(count(array_filter($result)) > 0)
										{
											foreach($result as $row){
											
											$enqfor_title = getschoollist($row->fld_record_id);
											$title = $enqfor_title->fld_school_name;
										?>
										<tr>
										  
											
											<td><?php echo $row->fld_userip;?></td>
											<td><?php echo $title;?></td>
											<td>
												<strong>Name: </strong><?php echo $row->fld_name;?></br>
												<strong>Email: </strong><?php echo $row->fld_email;?></br>
												<strong>Phone: </strong><?php echo $row->fld_mobile;?>
											</td>
											<td><?php echo $row->fld_message;?></td>
											<td><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo convertdate($row->fld_addedon,'d M Y')?></td>
											<td style="text-align:center">
											<a class="label label-danger" href="<?php echo base_url();?>enquiry/deleteenquiry/<?php echo $row->id;?>" title="Delete" onclick="return confirm('Are you sure, want to delete this record?');"><i class="fa fa-trash"></i></a>											
										  </td>
										</tr>
										<?php 
										}
									}
									?>
									</tbody>
								</table>
							</div><!-- .card-innr -->
							</div><!-- .card-innr -->

						

						</div><!-- .card -->

					</div><!-- .container -->

</div><!-- .page-content -->
