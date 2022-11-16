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
<!Doctype html>
<html lang="en" dir="ltr">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<?php 
		if($mtitle=="")
		{
		$mtitle =  WEBNAME;
		}
		?>
		<title><?php echo $mtitle;?></title>
		<meta name="description" content="<?php echo $mtitle;?>">
		<meta name="author" content="">
		<base href="<?php echo base_url();?>assets/dashboard/" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet"/>
		<link href="css/sidemenu.css" rel="stylesheet">
		<link href="css/icons.css" rel="stylesheet"/>

   </head>
   <body class="app sidebar-mini Left-menu-Default  Sidemenu-left-icons">
      <div class="page">
         <div class="page-main">
         
            <div class="app-header header-search-icon">
               <div class="header-style1">
                  <a class="header-brand" href="<?php echo base_url();?>account">
                  <img src="images/logo.png" class="header-brand-img desktop-logo" alt="logo">
             
                  </a>
               
               </div>
               
			   
			   <div class="ml-auto pt-3"><img src="images/profile.jpg" class="pr-img"><strong>Welcome <?php echo $userinfo->fld_name;?></strong></div>
            </div>
            
            <aside class="app-sidebar">
               <div class="sidebar-user-settings">
                  <div class="app-sidebar__user mb-4 mt-4">
                     <div class="dropdown user-pro-body text-center">
                        <a href="#" class="user-box">
                       
                           <div class="user-info">
						   <img src="<?php echo $profileImg;?>" class="img-fluid pro-img mb-3">
                              <h5 class=" mb-1 font-weight-bold text-dark"><i class="fa fa-user"></i> <?php echo $userinfo->fld_name;?></h5>
                              <span class="text-muted app-sidebar__user-name text-sm">PhD Student</span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <ul class="side-menu">
			      <li>
                     <a class="side-menu__item" href="<?php echo base_url();?>account"><span class="side-menu__label"><i class="side-menu__icon fa fa-dashboard"></i> Dashboard</span></a>
                  </li>
                  <li>
                     <a class="side-menu__item" href="<?php echo base_url();?>profile"><span class="side-menu__label"><i class="side-menu__icon fa fa-pencil"></i> Edit Profile</span></a>
                  </li>
				  
				  <li>
                     <a class="side-menu__item" href="<?php echo base_url();?>changepassword"><span class="side-menu__label"><i class="side-menu__icon fa fa-lock"></i> Change Password</span></a>
                  </li>
				  
				   <li>
                     <a class="side-menu__item" href="<?php echo base_url();?>job-apply"><span class="side-menu__label"><i class="side-menu__icon fa fa-briefcase"></i> Job Apply</span></a>
                  </li>
				  
				   <li>
                     <a class="side-menu__item" href="<?php echo base_url();?>entrance-test"><span class="side-menu__label"><i class="side-menu__icon fa fa-navicon"></i> Entrance Test</span></a>
                  </li>
				  
				    <li>
                     <a class="side-menu__item" href="<?php echo base_url();?>my-sample-papers"><span class="side-menu__label"><i class="side-menu__icon fa fa-window-restore"></i> My Sample Papers</span></a>
                  </li>
             <li>
                     <a class="side-menu__item" href="<?php echo base_url();?>catalog/logout"><span class="side-menu__label"><i class="side-menu__icon fa fa-unlock"></i> Logout</span></a>
                  </li>
               </ul>
            </aside>
            <!--/APP-SIDEBAR-->
            <!-- Mobile Header -->
            <div class="mobile-header">
               <div class="container-fluid">
                  <div class="d-flex">
                     <div class="app-sidebar__toggle" data-toggle="sidebar">
                        <a class="open-toggle" href="#"><i class="fa fa-bars"></i></a>
                        <a class="close-toggle" href="#"><i class="fe fe-x"></i></a>
                     </div>
                
                     <div class="d-flex order-lg-2 ml-auto header-right-icons">
                        <button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                           aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                        </button>
                        <div class="dropdown profile-1">
                           <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
                           <span>
                           <img src="assets/images/profile.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                           </span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                              <div class="drop-heading">
                                 <div class="text-center">
                                    <h5 class="text-dark mb-0">Gunjan Jain</h5>
                                    <small class="text-muted">PhD Student</small>
                                    <p></p>
                                 </div>
                              </div>
                              <div class="dropdown-divider m-0"></div>
							   <a class="dropdown-item" href="#">
                              <i class="dropdown-icon mdi mdi-account-outline"></i> Dashboard
                              </a>
                              <a class="dropdown-item" href="#">
                              <i class="dropdown-icon mdi mdi-account-outline"></i> Edit Profile
                              </a>
                              <a class="dropdown-item" href="#">
                              <i class="dropdown-icon  mdi mdi-settings"></i> Change Password
                              </a>
                              <a class="dropdown-item" href="#">
                              <span class="float-right"></span>
                              <i class="dropdown-icon mdi  mdi-message-outline"></i> Job Apply
                              </a>
                              <a class="dropdown-item" href="#">
                              <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Entrance Test
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">
                              <i class="dropdown-icon mdi mdi-compass-outline"></i> My Sample Papers
                              </a>
                              <a class="dropdown-item" href="login.html">
                              <i class="dropdown-icon mdi  mdi-logout-variant"></i> Log out
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           