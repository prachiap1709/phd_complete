<?php 
$userinfo = getUserInfo($this->session->userdata('usr_id'));
$profile_image = $userinfo->fld_profile_image;

$profileImg = "";
if($profile_image!="")
{
	$profileImg = base_url()."assets/profileimg/".$profile_image;
}
else
{
	$profileImg = base_url()."assets/images/profile.jpg";
}
?>
<div class="app-content">
   <div class="side-app">
	
	  <div class="page-header">
		 <ol class="breadcrumb">
		 
			<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
		 </ol>
		
	  </div>
  
	  <div class="row">
		 <div class="col-sm-6">
			<div class="card">
			   <div class="card-body p-0">
				  <div class="wideget-user text-center">
					 <div class="wideget-user-desc pt-5">
					 <a class="badge badge-primary edit-pr float-right mr-2" style="color:#fff; cursor:pointer;">Edit Profile <i class="fa fa-pencil"></i></a>
						<div class="wideget-user-img">
						   <img alt="" src="<?php echo $profileImg;?>" />
						   
						</div>
						<div class="user-wrap">
						   <h3 class="pro-user-username text-dark"><?php echo $userinfo->fld_name;?></h3>
						   <h6 class="text-muted mb-2"><i class="fa fa-envelope"></i> <?php echo $userinfo->fld_email;?></span></h6>
						   <h6 class="text-muted mb-2">PhD Student</h6>
						   <div class="wideget-user-rating">
							  <a href="#"><i class="fa fa-star text-warning"></i></a>
							  <a href="#"><i class="fa fa-star text-warning"></i></a>
							  <a href="#"><i class="fa fa-star text-warning"></i></a>
							  <a href="#"><i class="fa fa-star text-warning"></i></a>
							  <a href="#"><i class="fa fa-star-o text-warning"></i></a>
						   </div>
						</div>
					 </div>
				  </div>
			   </div>
			   <!-- <div class="card-footer p-0">
				  <div class="row">
					 <div class="col-sm-12 text-;eft border-right">
						<div class="description-block text-left pl-4">
						   <h5>About Me</h5>
						   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
							  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
						   </p>
						</div>
					 </div>
				  </div>
			   </div>-->
			</div>
			<!-- <div class="card panel-theme">
			   <div class="card-header">
				  <div class="float-left">
					 <h3 class="card-title">Personal Information</h3>
				  </div>
				  <div class="clearfix"></div>
			   </div>
			   <div class="card-body no-padding">
				  <div class="row">
					
					 <div class="col-md-4 mb-3">
						<h5>Gender</h5>
						<p>Female</p>
					 </div>
					 <div class="col-md-4">
						<h5>Country</h5>
						<p>India</p>
					 </div>
					 <div class="col-md-4">
						<h5>State</h5>
						<p>Haryana</p>
					 </div>
					 <div class="col-md-12">
						<h5>Address</h5>
						<p>bada jain mandir , Sonipat</p>
					 </div>
				  </div>
			   </div>
			</div>-->
		 </div>
		 <div class="col-sm-6 profilebox" style="display:none">
			<form class="form-horizontal row" id="myprofileupdatefrm" onsubmit="return myprofileupdate('<?php echo base_url();?>');">
			<div class="card">
				<div class="card-header">
				  <h3 class="card-title">Edit Profile</h3>
				</div>
				<div class="card-body">

				<div class="row">
				<div class="col-lg-6 col-md-12">
				<div class="form-group">
				<label for="exampleInputname"><strong>Name</strong></label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $userinfo->fld_name;?>">
				</div>
				</div>

				<div class="col-lg-6 col-md-12">
				<label for="exampleInputEmail1"><strong>Email address</strong></label>
				<input type="text" class="form-control" placeholder="Enter Email id" value="<?php echo $userinfo->fld_email;?>" readonly="readonly">
				</div>
				<div class="col-lg-6 col-md-12">
				<label for="exampleInputnumber"><strong>Conatct Number</strong></label>
				<input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone" value="<?php echo $userinfo->fld_phone;?>">
				</div>

				<div class="col-lg-6 col-md-12">
				<label>Upload Profile Photo</label>
				<input type="file" class="form-control" id="profile_picture" name="profile_picture" />
				<input type="hidden" name="old_profile_picture" id="old_profile_picture" value="<?php echo $userinfo->fld_profile_image;?>" />
				</div>



				<div class="col-sm-6 form-group mt-3">
				<label><strong>Area of Research</strong></label>
				<input type="text" class="form-control" name="areaofresearch" id="areaofresearch" value="<?php echo $userinfo->fld_areaofresearch;?>" placeholder="Enter Area of Research">
				</div>
				</div>
				</div>
				<div class="card-footer text-right">
				<button class="btn btn-primary mt-1">Save →</button>
				</div>
			</div>
			</form>
		 </div>
	  </div>
   </div>
</div>
</div>