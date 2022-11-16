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
					<div class=" filter_sec">
				        
						<div class="card-block">
						    <form method="post" name="search_form" id="search_form">

							<div class="form-group row">

								<div class="col-sm-3">
								
								<input type="text" class="form-control" name="keywords" id="keywords" value="<?php echo $keywords;?>" placeholder="Name, Email..." />

							    </div>
								
								<div class="col-sm-2">

								  <input type="text" class="form-control" name="school_from_date" id="school_from_date" value="<?php echo $school_from_date;?>" placeholder="From Date" autocomplete="off" />
								</div>

								<div class="col-sm-2">

								  <input type="text" class="form-control" name="school_to_date" id="school_to_date" value="<?php echo $school_to_date;?>" placeholder="To date" autocomplete="off" />
								  
								</div>
								
								
								<div class="col-sm-3">
									  
									  <input type="submit" name="SearchBtn" class="btn btn-primary" value="Search" onclick='$("#search_form").attr("action", "<?php echo base_url();?>school");' />
									  
									  <input type="button" name="SearchBtn" class="btn btn-primary" value="Reset" onclick="$('#keywords').val(''); $('#school_from_date').val(''); $('#school_to_date').val(''); $('#school_status').val('');" />
								</div>
							</div>	
							
						  </form>
						</div>
					</div>
					<div class="card-head">

					<h4 class="card-title">Manage School</h4>

					</div>

							<div class="clearfix">&nbsp;</div>
							
							<div class="responsive-auto">
							<table id="example" class="table table-striped table-bordered nowrap">

								<thead>

									<tr>
										
										<th>Image</th>
										<th>School ID </th>
										<th>School Info</th>
										<th>Phone</th>
										<th>Added On</th>
										<th>Status</th>
										
									</tr>

								</thead>

								<tbody>

									<?php if(count(array_filter($result)) > 0){

									foreach($result as $row)
									{
								
									?>

									<tr>
									  <td>
										<?php if($row->fld_school_image!=""){?>
										<img src="<?php echo base_url();?>assets/upload/profileimg/<?php echo $row->fld_school_image;?>" />
										<?php
										} 
										?>
									  </td>
										
									  <td>
										<?php echo $row->fld_code;?>
									  </td>
									  
									  <td>
										
										<a class="label label-warning" href="<?php echo base_url();?>school/viewprof/<?php echo $row->id;?>" title="View Profile"><?php echo $row->fld_school_name;?></a>
										- <?php echo $row->fld_principle_name;?> - <?php echo $row->fld_email;?>
									  </td>
									  
									  <td>
										<?php echo $row->fld_phone;?>
									  </td>
									  
									  <td><?php echo convertdate($row->fld_addedon,'d M Y')?></td>
											
											
									  	
									  <td style="text-align:center">

										<?php if($row->status == "Active"){?>

										
										
										<label class="switch" onclick="return changestatus('<?php echo base_url();?>','adminstatus<?php echo $row->id;?>',this,'<?php echo $row->id;?>','school');">
										  <input type="checkbox" checked>
										  <span class="slider round"></span>
										</label>
										<?php }else{?>

										
										
										<label class="switch" onclick="return changestatus('<?php echo base_url();?>','adminstatus<?php echo $row->id;?>',this,'<?php echo $row->id;?>','school');">
										  <input type="checkbox">
										  <span class="slider round"></span>
										</label>
										<?php }?>

										<input type="hidden" id="adminstatus<?php echo $row->id;?>" value="<?php echo $row->status;?>" />		  

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

							</div><!-- .card-innr -->
							</div><!-- .card-innr -->

						

						</div><!-- .card -->

					</div><!-- .container -->

</div><!-- .page-content -->

