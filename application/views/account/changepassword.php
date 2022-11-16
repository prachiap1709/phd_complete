<style>
.error{
	color:#f00;
}
</style>
<div class="app-content">
   <div class="side-app">
      <div class="page-header">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Change Password</li>
         </ol>
      </div>
      <div class="row">
         <div class="col-sm-6 mx-auto">
            <div class="card">
               <div class="card-body p-0">
				<form class="p-5" action="" method="post" onsubmit="return changepassword('<?php echo base_url();?>','')" id="changepasswordfrm">
					<input type="hidden" name="userid" id="userid" value="<?php echo $this->session->userdata('usr_id');?>" />
					<input type="hidden" id="username" value="<?php echo $this->session->userdata('usr_name');?>" />
					<!-- <input type="password" name="oldpassword" id="oldpassword" placeholder="Enter Old password" class="form-control mb-3">
					<i class="fa fa-eye toggle-password" style="position: relative;float: right;margin: -32px 10px 0 0; color: #000;" onclick="return passwordview('oldpassword')"></i>
					-->
					<input type="password" name="newpassword" id="newpassword" placeholder="Enter New password" class="form-control mb-4">
					<i class="fa fa-eye toggle-password" style="position: relative;float: right;margin: -32px 10px 0 0; color: #000;" onclick="return passwordview('newpassword')"></i>
					<div class="error" id="newpasswordErr"></div>
					<input type="password" name="confpassword" id="confpassword" placeholder="Confirm  password" class="form-control mb-4">
					<i class="fa fa-eye toggle-password" style="position: relative;float: right;margin: -32px 10px 0 0; color: #000;" onclick="return passwordview('confpassword')"></i>
					<div class="error" id="confpasswordErr"></div>
					<div class="col-md-12">
						<!--<span style="font-size:13px; color:#f00">Password should be minimum ten characters, at least one uppercase letter, one lowercase letter, one number and one special character!</span>-->
						<span style="font-size:13px;font-weight: 500;"><strong>Password Policy *</strong></span>
						<ul style="font-size: 13px; padding-left: 15px;color: #000; list-style-type: circle;">
							<li>It should be minimum ten characters</li>
							<li>At least one uppercase letter</li>
							<li>One lowercase letter</li>
							<li>One number</li>
							<li>One special character</li>
						</ul>
						
					</div>
					
					<center><input type="submit" class="btn btn-info w-100"></center>
				</form>
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-3" id="passwordloader"> </div>
				</div>
				 </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>