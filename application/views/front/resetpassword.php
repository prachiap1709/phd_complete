<?php 
$clientDataInfo = getUserInfo($userid,$code);
//$clientsetting  = getclientsettingdata($userid);
?>


<main>
        
         <section class="slider-area hero-height position-relative fix" style="
               background-size:45%;
               background-repeat: no-repeat;
               background-position:right bottom;
    background-color: #f6f8fb7a;">
            <div class="container pb-5" >
               <div class="row">
			   
			<div class="col-sm-3">
					<?php $this->load->view('common/sidebar');?>
			   </div>
			    <div class="col-sm-7"> 
				<div class="login-form">
<div class="main-div">
  
 <div class="row">
    <div class="col-sm-12">
			<form method="post"  name="changepasswordfrm" id="changepasswordfrm" onsubmit="return changepassword('<?php echo base_url();?>')" enctype="multipart/form-data">
            <div id="passwordloader" style="float: right;"></div>
			<?php if($viewact!="" && $clientsetting->fld_pass_upd_days){?>
			<span class="badge badge-danger float-right">You have not reset your password since <?php echo $clientsetting->fld_pass_upd_days;?> days</span>
			<?php }?>
			<h3>Reset Password</h3>	
			
			
				<input type="hidden" name="act_type" id="act_type" value="resetpassword" />
				<input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>" />
				<input type="hidden" id="username" value="<?php echo $clientDataInfo->fld_name;?>" />
				<div class="row">
				<div class="form-group col-md-12">

					
					<input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="New Password">
					<i class="fa fa-eye toggle-password" style="position: relative;float: right;margin: -32px 10px 0 0; color: #000;" onclick="return passwordview('newpassword')"></i>
					<div class="error" id="newpasswordErr"></div>

				</div>  


				<div class="col-md-12">

					

					<input type="password" class="form-control" name="confpassword" id="confpassword" placeholder="Confirm New Password">
					<i class="fa fa-eye toggle-password" style="position: relative;float: right;margin: -32px 10px 0 0; color: #000;" onclick="return passwordview('confpassword')"></i>
					<div class="error" id="confpasswordErr"></div>

				</div>
				<div class="col-md-12" style="text-align: initial;">
					
					<!--<span style="font-size:13px; color:#f00">Password should be minimum ten characters, at least one uppercase letter, one lowercase letter, one number and one special character!</span>-->
					</br>
					<span style="font-size:13px;font-weight: 500;"><strong>Password Policy *</strong></span>
					<ul style="font-size: 13px;color: #000; list-style-type: circle;">
						<li>It should be minimum ten characters</li>
						<li>At least one uppercase letter</li>
						<li>One lowercase letter</li>
						<li>One number</li>
						<li>One special character</li>
					</ul>
					</br>
				</div>
				<div class="col-md-12 update-pass">
					<input type="submit" name="SubmitChangePassword" class="btn btn-primary pull-right"  value="Update Password">
				</div>
				</div>
				
			</form>
        </div>
  </div>
    </div>
</div></div>
				<div class="col-sm-2 pl-0 pr-0">
				
					<div class="side-box mb-3">
					<img src="assets/img/search.png" class="img-fluid w-50 mx-auto mt-3 mb-3">
						<h3>Search Your PhD Learning Requirement on Our Portal</h3>
					</div>
					
					<div class="side-box">
					<img src="assets/img/job2.png" class="img-fluid w-50 mx-auto mt-3 mb-3">
						<h3>Search Your Job on our Portal</h3>
					</div>
				</div>
               </div>
            </div>
         </section>
         <!-- slider-area-end -->