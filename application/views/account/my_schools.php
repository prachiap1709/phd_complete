<?php 
$schoolinfo = getschoollist('',$this->session->userdata('usr_id'));
?>
<div class="main-content">

<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
		 <div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title mb-4">School Listing</h4>
						<div class="table-responsive">
							<table class="table table-centered table-nowrap mb-0">
								<thead class="table-light">
									<tr>
										
										<th>Name</th>
										<!-- <th>School</th> -->
										<th>School Image</th>
										<th>Date</th>
										<th>Location</th>
										<th width="30%">Description</th>
										<!-- <th>Action</th> -->
								   
									</tr>
								</thead>
								<tbody>
								<?php if(count($schoolinfo)>0)
								{
									foreach($schoolinfo as $row)
									{
									?>
									<tr class="sc-listing">
										<td>
										   <strong><?php echo $row->fld_school_name;?></strong>
										</td>
										<!-- <td style="width:5%;"><img src="assets/images/profile.jpg" class="sc-img"></td> -->
										<td>
										<?php
										$profileImg = $row->fld_school_image;
										if($profileImg!="")
										{
											$profileImg = base_url()."assets/upload/profileimg/".$profileImg;
											?>
											<img src="<?php echo $profileImg;?>" class="sc-img2">
											<?php
										}
										?>
										
										</td>
										<td style="width:15%;"><i class="fa fa-calendar"></i> <?php echo convertdate($row->fld_addedon,'d M Y');?></td>
										<td style="width:12%;">
											<i class="fa fa-map-marker"></i> <?php echo $row->fld_location;?>
										</td>
										<td>
										   <p><?php echo $row->fld_about_school;?></p>
										</td>
									   
										<!--<td>
											<a type="button" href="edit-school-listing.php" class="btn btn-primary edit">
												Edit <i class="fa fa-pencil"></i>
											</a>
										</td> -->
									</tr>
									<?php 
									}
								}
								?>
								</tbody>
							</table>
						</div>
					   
					</div>
				</div>
			</div>
		</div>
	  
	 

	  

	</div> 
</div>
                
                