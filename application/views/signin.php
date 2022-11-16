<!DOCTYPE html>
<html lang="en">
   <head>
        <?php 
		if($mtitle=="")
		{
			$mtitle =  WEBNAME;
			$mdescription =  WEBNAME;
		}
		?>
		<title><?php echo $mtitle;?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="<?php echo $mdescription;?>">
		<meta name="author" content="">
	<link rel="icon" href="https://www.phdguidance.org/wp-content/themes/phdguidance/images/favicon.png" sizes="48x48">
		<base href="<?php echo base_url();?>assets/dashboard/" />
		<link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/vendor/dashlab-icon/dashlab-icon.css" rel="stylesheet">
		<link href="assets/vendor/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="assets/vendor/icheck/skins/all.css" rel="stylesheet">
		<link href="assets/vendor/vector-map/jquery-jvectormap-1.1.1.css" rel="stylesheet" >
		<link href="assets/vendor/c3chart/c3.min.css" rel="stylesheet">
		<link href="assets/css/main.css" rel="stylesheet">
		
		  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	</head>
    <body class="fixed-nav">
<style>
body.fixed-nav {
    padding-top:50px;
    background: #00979c0a;
}button.btn.btn-primary.forgot {
    background: transparent !important;
    color: #000;
    font-weight: 600;
}
button {
    border-radius:5px;
    border: 1px solid #f95f5c;
    background-color:#f95f5c;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
	cursor:pointer;
    letter-spacing: 1px;
    text-transform: uppercase;
	margin-top:10px;
    transition: transform 80ms ease-in;
}
.form-container.sing-in-container button:hover {
    background: #e70101;
}
button:active {
    transform: scale(0.95);
}

button:focus {
    outline: none;
}

button.devingine {
    background-color: transparent;
    border-color: #fff;
}

form {
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 30px;
    height: 100%;
    text-align: center;
}
.form-container.sing-in-container button {
    width: 100%;
}
input {
    background-color: #f3f3f3;
    border: none;
    padding: 12px 25px;
    margin: 8px 0;
    width: 100%;
    border-radius: 5px;
}

input:focus-visible {
    outline: none;
    border: 1px solid #ff4b2b;
}

.login-box {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
}

.form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}

.sing-in-container {
    left: 50%;
    width: 50%;
    z-index: 2;
}

.login-box.right-panel-active .sing-in-container {
    transform: translateX(100%);
}

.sing-up-container {
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
}

.login-box.right-panel-active .sing-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
    animation: show 0.6;
}

@keyframes show {
    0%,
    49.99% {
        opacity: 0;
        z-index: 1;
    }
    50%,
    100% {
        opacity: 1;
        z-index: 5;
    }
}

.overlay-container {
    position: absolute;
    top: 0;
    left:0%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 100;
}

.login-box.right-panel-active .overlay-container {
    transform: translateX(-100%);
}

.overlay {
    background: #ff416c;
    background: linear-gradient(to right, #00979c, #00c2c9);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 0 0;
    color: #fff;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transition: transform 0.6s ease-in-out;
}

.login-box.right-panel-active .overlay {
    transform: translateX(50%);
}

.overlay-panel {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    top: 0;
    height: 100%;
    width: 50%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.overlay-left {
    transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
    transform: translateX(0);
}

.overlay-right {
    right: 0;
    transform: translateX(0);
}

.login-box.right-panel-active .overlay-right {
    transform: translateX(20%);
}

.social-container {
    margin: 20px 0;
}

.social-container a {
    border: 1px solid #ddd;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
}
a.forgot {
    color: red;
    font-size: 12px;
    padding-top: 11px;
}button.close {
    float: right;
    margin: 0px !important;
    padding: 0px !important;
}

h4.modal-title {
    text-align: left;
    float: left;
    margin-left: 33%!important;
}
a.social:hover {
    background: linear-gradient(to right, #ff4b2b, #ff416c);
    color: #fff;
}input.form-control {}

.modal-body input {
    font-size: 13px;
    line-height: 32px;
    margin-bottom: 20px;    margin-top: 0px;
}input.btn.btn-primary.mb-3 {}

input.btn.btn-primary.mb-3 {
    background: #f95f5c !important;
    padding: 0px;
    font-size: 13px;
    width: 18%;
    margin-left: 87%;
    margin-top: -47px;
    width: 60px;
}button.close {
    float: left;
    background: #ccc;
}
button.close {
    font-size: 13px;
    padding: 7px !important;
    text-shadow: none;
    text-transform: inherit;
    background: #e4e2e2;
    border: 1px solid #cfcfcf;
    height: 30px;    letter-spacing: 0px;
}

@media(max-width:767px){
.overlay-panel.overlay-right  h1 {
    font-size: 22px;
    padding-top: 20px;
}input.btn.btn-primary.mb-3 {
    margin-right: 0px !important;
    float: right;
    margin-top: -30px;
}
.overlay-panel {
    width: 50% !important;
    position: relative;
}.overlay {
    left: 0 !important;
}
.sing-in-container {
    left: 0;
    width: 100%;
    z-index: 2;
    margin-top: 40px;
}
.overlay-container {
    width: 100% !important;
    text-align: center;
    padding: 0px;
    height: 110px;
}
}
</style>
<div class="container text-center"><img src="https://360emarketz.com/gunjan/phd-guidance/images/logo.png" class="mb-3"></div>
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title">Reset Password</h4>
        
        </div>
        <div class="modal-body">
		<div id="forgetloader"></div>
            <label><strong>Enter Email</strong></label>
          <input type="text" name="usremail" id="usremail" class="form-control" placeholder="Enter Your Email">
             <button type="button"  class="close" data-dismiss="modal">Close</button>
          <input type="submit" value="Reset" class="btn btn-primary mb-3" onclick="return forgetpassword('<?php echo base_url();?>')">
        </div>
       
      </div>
      
    </div>
  </div>
 <div class="login-box mx-auto" id="container">

        <div class="form-container sing-in-container">
            <form action="" method="post" onsubmit="return loginuser('<?php echo base_url();?>','')">
                <h1>Login</h1>
               
                <span>Please Enter Your Login Details</span>
                <input type="text" name="useremail" id="useremail" value="" placeholder="Email id">
                <input type="password" name="userpassword" id="userpassword" value="" placeholder="Password">
                <button type="submit">Login</button>
				<span id="loginmsgloader"></span>
			 <button type="button" class="btn btn-primary forgot" data-toggle="modal" data-target="#myModal">
    Forgot Your Password ?
  </button>
            </form>
        </div>

      <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Welcome to PhD Guidance!</h1>
                    <p>Sign in to your dashboard for PhD consultation and guidance. 
</p>
      
                </div>

               

            </div>
        </div>

    </div>

   </body>
<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.js"></script>
<script src="<?php echo base_url();?>assets/function/common_function.js"></script>

<link rel="stylesheet" href="<?php echo base_url();?>assets/snackbar/js-snackbar.css?v=1.3" />
<script src="<?php echo base_url();?>assets/snackbar/js-snackbar.js?v=1.3"></script>
<style>
.js-snackbar-container{
	z-index:9999;
}
</style>
</html>