<?php 
$userinfo = getUserInfo($this->session->userdata('usr_id'));
?>
<div class="app-content">
               <div class="side-app">
                
                  <div class="page-header">
                     <ol class="breadcrumb">
                       
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Dashboard</li>
                     </ol>
                     
                  </div>

				  
				<div class="row mt-4">
	  <div class="col-sm-4 text-left mb-4">
	  
	  <div class="banner banner-color mt-0 row">
								
								<div class="page-content col-sm-12">
									<h4 class="mb-1 pb-2"><strong>Welcome to <?php echo $userinfo->fld_name;?>! </strong></h4>
									<p class="mb-0 fs-16">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a href="<?php echo base_url();?>profile" class="btn btn-primary mt-4 mb-1">My Profile <i class="fa fa-pencil"></i></a>
								
								</div>
								
							</div>
							
					
								
	  
	  </div>
 
 <div class="col-lg-4">
								<div class="card">
									<div class="card-header custom-header">
										<div>
											<h3 class="card-title">Latest Added Jobs</h3>
											
										</div>
									</div>
									<div class="card-body">
										<div class="latest-timeline">
										
											<ul class="timeline mb-0">
											    <?php
          $getPostedjobsofRecruiter=getPostedjobsofRecruiter($this->session->userdata('usr_id'),'Active');
          if(count($getPostedjobsofRecruiter) > 0)
          {
              foreach($getPostedjobsofRecruiter as $row)
              {
          ?>
												<li class="mt-0">
													<a target="_blank" href="#" class="font-weight-semibold text-dark fs-16"> <?php echo $row->fld_job_profile;?></a>
													<h6 class="text-warning pt-3"><i class="fa fa-building"></i> <?php echo $row->fld_company_name;?></h6>
													<div><small class="fs-13 text-muted"><i class="fa fa-calendar"></i> <?php echo convertdate($row->fld_addedon,'d M Y')?></small></div>
													<p class="text-muted mt-2"><?php echo $row->fld_job_profile_description;?> </p>
												</li>
									<?php
									}
												}
												?>
												<!--<li>
													<a target="_blank" href="#" class="font-weight-semibold text-dark fs-16">PhP Developer</a>
													<h6 class="text-warning pt-3"><i class="fa fa-building"></i> ABCD Company Pvt. Ltd.</h6>
													<div><small class="fs-13 text-muted"><i class="fa fa-calendar"></i> 13-05-2022</small></div>
													<p class="text-muted mt-2">Lorem ipsum dolor tempor incididunt ut labore et dolore.</p>
												</li>-->
												
											</ul>
										</div>
									</div>
								</div>
							</div>
<div class="col-lg-4">
							<div class="card overflow-hidden">
									<div class="card-header">
										<h5 class="card-title">New Applications</h5>
									</div>
									<div class="card-body p-0">
										<div class="list-group list-group-flush ">
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<img class="mr-3 rounded-circle" width="40" src="images/profile.jpg" alt="avatar">
												</div>
												<div class="">
													<div class=" h6 mb-0 text-dark">Gunjan Jain</div>
													<small class="text-muted">Web Designer
													</small>
												</div>
												<div class="ml-auto">
													<i class="fa fa-calendar">14-05-2022</i>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<img class="mr-3 rounded-circle" width="40" src="images/profile.jpg" alt="avatar">
												</div>
												<div class="">
													<div class=" h6 mb-0 text-dark">Gunjan Jain</div>
													<small class="text-muted">Project Manager
													</small>
												</div>
												<div class="ml-auto">
													<i class="fa fa-calendar">14-05-2022</i>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<img class="mr-3 rounded-circle" width="40" src="images/profile.jpg" alt="avatar">
												</div>
												<div class="">
													<div class=" h6 mb-0 text-dark">Gunjan Jain</div>
													<small class="text-muted">Administrator
													</small>
												</div>
												<div class="ml-auto">
													<i class="fa fa-calendar">14-05-2022</i>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<img class="mr-3 rounded-circle" width="40" src="images/profile.jpg" alt="avatar">
												</div>
												<div class="">
													<div class=" h6 mb-0 text-dark">Gunjan Jain</div>
													<small class="text-muted">Web Developer
													</small>
												</div>
												<div class="ml-auto">
													<i class="fa fa-calendar">14-05-2022</i>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<img class="mr-3 rounded-circle" width="40" src="images/profile.jpg" alt="avatar">
												</div>
												<div class="">
													<div class=" h6 mb-0 text-dark">Gunjan Jain</div>
													<small class="text-muted">Web Designer
													</small>
												</div>
												<div class="ml-auto">
													<i class="fa fa-calendar">14-05-2022</i>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<img class="mr-3 rounded-circle" width="40" src="images/profile.jpg" alt="avatar">
												</div>
												<div class="">
													<div class=" h6 mb-0 text-dark">Gunjan Jain</div>
													<small class="text-muted">Project Manager
													</small>
												</div>
												<div class="ml-auto">
													<i class="fa fa-calendar">14-05-2022</i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>





	  </div>
				  
			
            </div>
            <!-- CONTAINER END -->
         </div>