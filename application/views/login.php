<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo WEBNAME;?></title>
    <!-- plugins:css -->
    <base href="<?php echo base_url();?>" />
	<link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">	<link rel="icon" href="https://www.phdguidance.org/wp-content/themes/phdguidance/images/favicon.png" sizes="48x48">
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
    <link rel="stylesheet" href="assets/css/shared/login-page.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/wallet.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
      <div class="login-22">
    <div class="container-fluid">
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper auth auth-bg-1 theme-one">
           <!-- <div class="col col-login mx-auto"> <div class="text-center"> <img src="assets/images/logo.png" class="header-brand-img desktop-logo h-100 mb-4 mt-5" alt="Dashlot logo">  </div> </div>-->
           
          <div class="">
             
        <div class="row">
             <div class="col-lg-6 col-md-12 bg-img none-992 bg-color-13">
                <div class="info">
                    <h1>Welcome to <?php echo WEBNAME;?></h1>
                    <!-- <h6 style="font-style:italic; color:#FFF;"><strong>GUIDANCE AT EVERY STEP OF PhD. GUARANTEED SERVICE</strong></h6> -->
                    <p>Bringing out a difference in the lives of the naive researchers since a long time now. </p>
                </div>
            </div>
            <div class="col-lg-6 pl-0 text-left">
          
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
			  <div class="auto-form-wrapper">
			            <div class="form-section">
                    <div class="logo clearfix">
                        <a href="#">
                            <img src="assets/images/logo-black.png" alt="logo">
                        </a>
                    </div>
                    <h3>Sign into your account</h3>
                    
                    <div class="login-inner-form">
            
				
				<form action="login/authenticate" method="post">
                  <div class="form-group">
					
					
					<!--<label class="label">Username</label>-->
                    <div class="input-group">
                      <input type="text" class="form-control" name="username" id="username" required placeholder="Username">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-user" aria-hidden="true" style="font-size: 15px;"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <!--<label class="label">Password</label>-->
                    <div class="input-group">
                      <input type="password" class="form-control" name="userpass" id="userpass" required placeholder="*********" />
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-eye" style="cursor:pointer; font-size: 15px;" onclick="myFunction('userpass',this)" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-secondary submit-btn btn-block">Login</button>
                  </div>
                  
				  
                </form>
              </div></div></div>
			  
            </div>
            </div>
        
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div> </div> </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="assets/function/common_function.js"></script>
	<!-- endinject -->
    <!-- inject:js -->
    
	<!-- endinject -->
  </body>
</html>