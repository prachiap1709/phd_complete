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
			    <div class="col-sm-7"> <div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Enter Signup Details</h2>
   <p>Please enter your email and password</p>
   </div>
 <div class="row align-items-center justify-content-center" style="">
    <div class="col-sm-12">
		<div id="msgloader"></div>
        <form id="registerForm" onsubmit="return registration('<?php echo base_url();?>');">
		<input type="hidden" name="user_type" id="user_type" value="USER" />
		<div class="card">
        <div class="card-body">
        
			<div id="msgloader"></div>
			
			<!-- <div class="form-floating mb-3">
				<input type="text" class="form-control" id="username" placeholder="Input your Username" autocomplete="off" name="username" />
				<label for="userInput">Username</label>
			</div> -->
			
			<div class="form-floating mb-3">
				<input type="text" class="form-control" id="name" placeholder="Input your Name" autocomplete="off" name="name" />
				<label for="nameInput">Name</label>
			</div>
			<div class="form-floating mb-3">
				<input type="text" class="form-control" id="email" placeholder="Input your email" autocomplete="off" name="email" />
				<label for="emailInput">Email address</label>
			</div>
			<div class="form-floating mb-3">
				<input type="password" class="form-control" id="password" name="password" placeholder="Input your password" />
				<label for="passwordInput">Password</label>
			</div>
			<div class="form-floating mb-3">
				<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Input your password" />
				<label for="cpasswordInput">Confirm Password</label>
			</div>
            <div class="form-floating mb-3">
                                <div class="captcha-box">
                                    <!-- <label>Captcha</label><br/>-->
                                    <?php $rand=rand('1111','9999');?>
                                    <input class="captchacodebox numfg" id="captchabx_codeBox1" name="captchabx_codeBox1" type="text" maxlength="1" onkeyup="onKeyUpEvent(1, event,'captchabx_codeBox')" onfocus="onFocusEvent(1,'captchabx_codeBox')" style="border: 1px solid rgb(204, 204, 204);">
                                    <input class="captchacodebox numfg" id="captchabx_codeBox2" name="captchabx_codeBox2" type="text" maxlength="1" onkeyup="onKeyUpEvent(2, event,'captchabx_codeBox')" onfocus="onFocusEvent(2,'captchabx_codeBox')">
                                        <input class="captchacodebox numfg" id="captchabx_codeBox3" name="captchabx_codeBox3" type="text" maxlength="1" onkeyup="onKeyUpEvent(3, event,'captchabx_codeBox')" onfocus="onFocusEvent(3,'captchabx_codeBox')">
                                    <input class="captchacodebox numfg" id="captchabx_codeBox4" name="captchabx_codeBox4" type="text" maxlength="1" onkeyup="onKeyUpEvent(4, event,'captchabx_codeBox')" onfocus="onFocusEvent(4,'captchabx_codeBox')"> <span class="captcha" style="background-color: #4A6983; color: #FFF; padding: 12px; padding-right: 15px; margin-top: 0px; float: right; line-height: 21px; font-size: 15px; margin-left: 5px !important; font-size: 14px;"><?php echo $rand;?></span>
                                    <input id="captcha" name="captcha" type="hidden" value="<?php echo $rand;?>">
                                </div>
                                      <div class="clearfix"></div> 
                                      <small style="float:left">Enter Code As Seen</small><br>
                                      <small id="captchaErr" style="float:left;color:#f00"></small> 
                            </div>

			
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-sm btn-primary radius" >Register Your Account →</button>
        </div>
      </div></form>
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