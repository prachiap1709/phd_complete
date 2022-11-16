<?php 
$userDataInfo = getAdmin($this->session->userdata('adm_admin_id'));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<title><?php echo $mtitle;?></title>

	<base href="<?php echo base_url();?>" />
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    	<link rel="icon" href="https://www.phdguidance.org/wp-content/themes/phdguidance/images/favicon.png" sizes="48x48">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
	
	<link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/wallet.png" />
	
	
	<?php if($module == "news"){?>
	<script src="assets/ckeditor/ckeditor.js"></script>
	<?php }?>
	
	<style>
	.linkstyle{
		cursor:pointer;
		color:#fff !important;
	}
	.error{
		color:#f00;
		font-size:13px;
	}
	
	/* The switch - the box around the slider */
	.switch {
	  position: relative;
	  display: inline-block;
	  width: 52px;
	  height: 25px;
	}

	/* Hide default HTML checkbox */
	.switch input {
	  opacity: 0;
	  width: 0;
	  height: 0;
	}

	/* The slider */
	.slider {
	  position: absolute;
	  cursor: pointer;
	  top: 0;
	  left: 0;
	  right: 0;
	  bottom: 0;
	  background-color: #f30e0e;
	  -webkit-transition: .4s;
	  transition: .4s;
	}

	.slider:before {
	  position: absolute;
	  content: "";
	  height: 17px;
	  width: 17px;
	  left: 4px;
	  bottom: 4px;
	  background-color: white;
	  -webkit-transition: .4s;
	  transition: .4s;
	}

	input:checked + .slider {
	  background-color: #28a745;
	}

	input:focus + .slider {
	  box-shadow: 0 0 1px #2196F3;
	}

	input:checked + .slider:before {
	  -webkit-transform: translateX(26px);
	  -ms-transform: translateX(26px);
	  transform: translateX(26px);
	}

	/* Rounded sliders */
	.slider.round {
	  border-radius: 34px;
	}

	.slider.round:before {
	  border-radius: 50%;
	}
	.responsive-auto{
		overflow:auto;
	}
	.user-status {
		padding: 3px 11px;
		background: #150570;
		border-radius: 4px;
		right: -34px;
		color: 	#fff;
	}
	.user-status-title {
		font-size: 11px;
		letter-spacing: 0.1em;
		text-transform: uppercase;
		color: #fff;
		margin-bottom: 0;
	}
	.user-status-balance {
		font-size: 23px;
		color: #fff;
		white-space: nowrap;
		line-height: 1;
		font-weight: bold;
		padding-top: 4px;
	}
	
	@media only screen and (max-width: 767px) {
	    .row.comment.more p {
    width: 100%;

    padding-right: 20px !important;
}.col-md-12.grid-margin.stretch-card.right_side .card {
    z-index: 1;

    margin-top: 0% !important;
}
.price.ml-auto {
    FLOAT: RIGHT;
    padding-right: 20px;
}.modal-lg, .modal-xl {
    max-width: 100%;
}
.card-body {
    text-align: justify;
}.table td, .table th {
    white-space: initial;
}
input#amount {
    margin-bottom: 11px;
}input#text6 {
    margin-bottom: 20px;
}img {}

div#imgbox img {
    width: 50px !important;
    height: 50px !important;
    margin-right: 0px !important;
}
.card-body h4 {
    font-size: 15px;
}

.exzoom .exzoom_img_box {
    background: transparent;
    position: relative;
    margin-left: -50px;
    width: 59% !important;
    border: none !important;
}.exzoom .exzoom_img_ul_outer .exzoom_img_ul li img {
    width: 76% !important;
    margin-top: 0px !important;
    border: none;
    margin-left: -68px;
    height: 200px !important;
}.exzoom_img_ul_outer {
    height: 200px !important;
}

.exzoom_img_box {
    height: 216px !important;
}

.row.servicebox {
    margin-top: 33%;
}
	    .margin-0 {
    margin-top: 0px !important;
}
.page-rightheader {
    display: initial !important;
    margin-top: 0px !important;
    float: left;
}

.page-rightheader .ml-3.ml-auto.d-flex {
    display: initial !important;
}

.page-leftheader {
    display: initial !important;
    width: 100% !important;
    float: left;
}

.page-header.ml-3.mr-3 {
    display: initial !important;
}.content-wrapper {
    background: #F3F3F3;
    padding: 0px;
}
	    .navbar-menu-wrapper.d-flex.align-items-center {
    height: 150px;
}.page-header {
    display: inline-block !important;
}.assignment-list .nav>li>a {
    padding: 13px 20px  !important;
}
.filter_sec input {
    margin-bottom: 11px;
}.list-group-item.products {
    display: initial !important;
    width: 100%;
    border-radius: unset;
}

.filter_sec select {
    margin-bottom: 11px;
}
.main-panel {
    margin-top: 199px;
}button.navbar-toggler.navbar-toggler-right.d-lg-none.align-self-center {
    display: none;
}.prof_pic {
    border-radius: 0px;
    height: 68px;
    width: 158px;
    border: 1px solid #ddd;
}
	} h4.font-weight-medium.text-primary {
    color: #0f74ca !important;
}
	</style>
	
  </head>
  <body>
	<input type="hidden" id="basePath" value="<?php echo base_url();?>" />
	<div class="container-scroller">
	    
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
              <div class="col-md-12 row navtabbb">
		  
		  <ul class="w-100 navbar-nav header-section-s">
		    <li class="main-logo">
				<a class="navbar-brand brand-logo" href="<?php echo base_url();?>"><img src="assets/images/logo-black.png" alt="logo" class="img-fluid"></a>
			</li>
			
			<!--<li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="pulse"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown" style="overflow-y: scroll;">
				<a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have <span class="unreadmsg"><?php echo $unreadmsg?></span> unread notification... </p>
                </a>
                <div class="dropdown-divider"></div>
				
              </div>
            </li> -->
            
			
			<li class="nav-item dropdown ml-auto  d-none d-xl-inline-block user-dropdown">
				<?php
				$imgsrc = '<i class="mdi mdi-face" aria-hidden="true"></i>';
				$imgsrc1 = '<i class="mdi mdi-face" aria-hidden="true"></i>';
				if($userDataInfo->fld_profile_image)
				{
					$imgsrc = '<img src="'.base_url().'assets/profileimg/'.$userDataInfo->fld_profile_image.'" class="img-xs rounded-circle" />';
					$imgsrc1 = '<img src="'.base_url().'assets/profileimg/'.$userDataInfo->fld_profile_image.'" class="img-md rounded-circle" />';
				}
				?>
			  
			  <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <?php echo $imgsrc;?>&nbsp; Welcome <?php 
                if($this->session->userdata('adm_admin_id')=='1' && $this->session->userdata('adm_admin_type')=='SUPERADMIN'){
                    echo 'Admin';
                };?>
			  </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
               
                
				<?php if($this->session->userdata('adm_admin_type') != 'SUPERADMIN'){?>
				<!--<a class="dropdown-item" href="<?php echo base_url()?>myprofile"><i class="mdi mdi-face-profile"></i> My Profile</a>-->
				<?php }?>
				
                <!--<a class="dropdown-item"><i class="mdi mdi-message-draw"></i>
                Messages</a>
				<?php if($this->session->userdata('adm_admin_type') == 'SUPERADMIN'){?>
                <a class="dropdown-item" href="<?php echo base_url()?>dashboard/setting"><i class="mdi mdi-settings"></i> Setting</a>
				<?php } ?>-->
				<a class="dropdown-item" href="<?php echo base_url()?>dashboard/logout"><i class="mdi mdi-logout"></i> Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
          
          </div>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse bg-dark" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url()?>dashboard">
                <i class="mdi mdi-view-dashboard"></i>
                <span class="menu-title">
				Dashboard
				</span>
              </a>
            </li>
			<?php if($this->session->userdata('adm_admin_type') == 'SUPERADMIN'){?>
				<li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>user">
                <i class="menu-icon typcn typcn-user"></i>
                <span class="menu-title">User</span>
              </a>
            </li>
		<!--	<li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>news">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">News</span>
              </a>
            </li>-->
			<!--<li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>enquiry">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Enquiry</span>
              </a>
            </li>-->
			<?php }?>
		</ul>
		</div>
	  </div>
    </nav>
    </div>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
          <div class=" container">