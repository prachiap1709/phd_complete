<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo WEBNAME;?></title>
    <!-- plugins:css -->
    <base href="<?php echo base_url();?>" />
	<link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/wallet.png" />
	<style>
	@import url("https://fonts.googleapis.com/css?family=Raleway:200");

	.digit-group input {
		width: 13%;
		height: 34px !important;
		background-color: #ffffff;
		border: 1px solid #ccc;
		line-height: 50px;
		text-align: center;
		font-size: 24px;
		font-family: 'Raleway', sans-serif;
		font-weight: 200;
		color: #212529;
		margin: 0 2px;
		padding: 4px 0px;
	}
	.digit-group .splitter {
	  padding: 0 5px;
	  color: #ccc;
	  font-size: 24px;
	}
	.fixed-top {
    background-color: #FFF;
    box-shadow: 4px 4px 4px #ccc;
}.footer {
    background: #dbdbdb;
    padding: 20px 1rem;
    transition: all 0.25s ease;
    -moz-transition: all 0.25s ease;
    -webkit-transition: all 0.25s ease;
    -ms-transition: all 0.25s ease;
    border-top: 1px solid #cdd6dc;
    font-size: calc(0.875rem - 0.05rem);
    font-family: "roboto", sans-serif;
}
	</style>
  </head>
  <body>
      


	    
      <!-- partial:partials/_navbar.html -->
      <div class="fixed-top">
      <nav class="navbar default-layout col-lg-12 col-12 p-0 d-flex flex-row">
        <!--<div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">-->
        <!--  <a class="navbar-brand brand-logo" href="<?php echo base_url();?>">-->
        <!--    <img src="assets/images/logo.svg" alt="logo" /> </a>-->
        <!--  <a class="navbar-brand brand-logo-mini" href="<?php echo base_url();?>">-->
        <!--    <img src="assets/images/logo-mini.svg" alt="logo" /> </a>-->
        <!--</div>-->
        <div class="navbar-menu-wrapper d-flex align-items-center">
            
          <div class="container">
              <div class="col-md-12 row">
		  <a class="navbar-brand brand-logo" href="<?php echo base_url();?>"><img src="assets/images/logo.png" alt="logo" class="img-fluid"></a>
		  </div></div></div></div>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
                <?php 
				if($msg!="")
				{
					?>
						<div class="alert alert-danger">
						<a href="#"  data-dismiss="alert" aria-label="close" title="close">×</a>
						<strong>Error!</strong> <?php echo $msg;?>
						</div>
					<?php
				}
				
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
			  <div class="auto-form-wrapper mobile-verify p-0">
                <center class="bg-info"><h3><?php echo WEBNAME;?></h3>
                <h5>Verify It's You?</h5></h5>
                
                </center>
				<div class="clearfix">&nbsp;</div>
				<div id="mobileverifybox">
                  <div class="form-group row">
					<div class="col-md-7">
						<input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>" />
						<input type="text" class="form-control" name="phone" id="phone" placeholder="Please enter your 10 digits mobile number" value="<?php echo $result->fld_phone;?>" />
					</div>
					<div class="col-md-5">
						<button onclick="return sendOtp('<?php echo base_url();?>')" type="button" name="verify" id="verify" class="btn btn-warning" data-id="<?php echo $userid;?>">Verify</button>
					</div>
                  </div>
				  <div class="form-group">
					<div id="msgloader"></div>
				  </div>
                  <div class="form-group" id="otpbox" style="display:none">
                    <div class="input-group">
                     <div class="form-group digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off" >
				        <input type="text" class="otpval" id="digit-1" name="digit-1" data-next="digit-2" />
						<input type="text" class="otpval" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
						<input type="text" class="otpval" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
						
						<input type="text" class="otpval" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
						<input type="text" class="otpval" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" />
						<input type="text" class="otpval" id="digit-6" name="digit-6" data-previous="digit-5" />
				    </div>
					<button type="button" id="prcdbtn" onclick="return verifyOtp('<?php echo base_url();?>');" class="btn btn-primary submit-btn btn-block">Proceed</button>
                    
					</div>
					
					
                  </div>
                  <div class="form-group">
                    &nbsp;
                  </div>
                </div>
                  
				  
                
              </div>
			  
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
    <footer class="footer">
		<div class="container-fluid clearfix">
		  <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php echo date('Y');?> . All Rights Reserved.</span>
		  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><?php echo WEBNAME;?></span>
		</div>
	  </footer>
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    
	<script src="assets/function/common_function.js"></script>
    <!-- endinject -->
	<script>
	$("input").focus(function(){
	   var id=this.id;
	   $("#"+id+"Err").html('');
	   $("#"+id).css('border','1px solid #ccc');
	});
	$("select").focus(function(){
	   var id=this.id;
	   $("#"+id+"Err").html('');
	   $("#"+id).css('border','1px solid #ccc');
	});
	$("textarea").focus(function(){
	   var id=this.id;
	   $("#"+id+"Err").html('');
	   $("#"+id).css('border','1px solid #ccc');
	});
	</script>
  </body>
</html>