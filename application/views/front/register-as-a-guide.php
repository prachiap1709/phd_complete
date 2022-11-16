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
				
						<h3 class="border-bottom pb-3"> Register as a Guide</h3>
						
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				
				<div class="row mt-45">
					<div class="col-sm-12 text-center pb-0 border-bottom mb-4">
						<h3>Process of Become a Guider</h3>
					</div>
					<div class="col-sm-4">
					<div class="card p-3 text-left">
					<img src="assets/img/reg1.png" class="w-50">
						<h4 class="pt-3">Enter Your Details For Become a Guide</h4>
					</div></div>
					
					
					<div class="col-sm-4">
					<div class="card p-3 text-left">
					<img src="assets/img/ben.png" class="w-50">
						<h4 class="pt-3">Benefits of <br/>Guide</h4>
					</div></div>
					
					<div class="col-sm-4 mb-3">
					<div class="card p-3 text-left">
					<img src="assets/img/faq.png" class="w-50">
						<h4 class="pt-3">FAQ related to <br/> Guide</h4>
					</div></div>
					<br/>
					<a onclick="scrollOnBox('#register')" class="edu-btn mt-5 mr-3 col-sm-3 mx-auto" style="cursor:pointer;">Register Now <i class="fa fa-angle-double-down"></i></a>
					
				</div>
				
				
				</div>
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
         
         
        
	  <section class="pt-45">
	  <div class="container">
	  <div class="row">
	  
	  <div class="col-sm-8">
		<h3 class="border-bottom pb-2">Benefits of Guide</h3>
		<ul class="point">
<li><i class="fa fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</li>
<li><i class="fa fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</li>

<li><i class="fa fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</li>
<li><i class="fa fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</li>

<li><i class="fa fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</li>

</ul>

<h4 class="border-bottom pb-2 mt-3">FAQ's Related to Become a Guide</h4>
 <div id="accordion">
    <div class="card mb-3">
      <div class="card-header">
        <a class="card-link text-dark" data-toggle="collapse" href="#collapseOne">
          Lorem Ipsum is simply dummy <i class="fa fa-angle-double-down"></i>
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-header">
        <a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseTwo">
         Lorem Ipsum is simply dummy <i class="fa fa-angle-double-down"></i>
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-header">
        <a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseThree">
           Lorem Ipsum is simply dummy <i class="fa fa-angle-double-down"></i>
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
	
	
	    <div class="card mb-3">
      <div class="card-header">
        <a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapsefour">
           Lorem Ipsum is simply dummy <i class="fa fa-angle-double-down"></i>
        </a>
      </div>
      <div id="collapsefour" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
  </div>
	  </div>
	  <div class="col-sm-4" id="register">
			<div class="card shadow-sm p-4">
			<div id="msgloader"></div>
			<form class="register-form" id="registerForm" method="post" onsubmit="return registration('<?php echo base_url();?>');">
					<div class="col-sm-12">
						<div class="row">
						<h5 class="border-bottom pb-2">Register Your Account For Become Guide</h5>
							<div class="col-sm-12 form-group">
								<input type="hidden" name="user_type" id="user_type" value="GUIDE" />
								<label>Full Name</label>
								<input type="text" name="name" id="name" placeholder="Enter Your Full Name" class="form-control">
							</div>
							<div class="col-sm-12 form-group">
								<label>Email Id</label>
								<input type="text" name="email" id="email" placeholder="Enter Your Email" class="form-control">
							</div>
							
							<div class="col-sm-12 form-group">
								<label>Phone Number</label>
								<input type="text" name="phone" id="phone" placeholder="Enter Your Phone Number" class="form-control numfg">
							</div>
							
							<div class="col-sm-12 form-group">
								<label>Enter Your Password</label>
								<input type="password" name="password" id="password" placeholder="Enter Your Password" class="form-control">
							</div>
							
								<div class="col-sm-12 form-group">
								<label>Confirm Your Password</label>
								<input type="password" name="cpassword" id="cpassword" placeholder="Confirm Your Password" class="form-control">
							</div>
							
							<div class="col-sm-12 form-group">
                                <div class="captcha-box">
                                     <label>Captcha</label><br/>
                                    <?php $rand=rand('1111','9999');?>
                                    <input class="captchacodebox numfg" id="captchabx_codeBox1" name="captchabx_codeBox1" type="text" maxlength="1" onkeyup="onKeyUpEvent(1, event,'captchabx_codeBox')" onfocus="onFocusEvent(1,'captchabx_codeBox')" style="border: 1px solid rgb(204, 204, 204);">
                                    <input class="captchacodebox numfg" id="captchabx_codeBox2" name="captchabx_codeBox2" type="text" maxlength="1" onkeyup="onKeyUpEvent(2, event,'captchabx_codeBox')" onfocus="onFocusEvent(2,'captchabx_codeBox')">
                                        <input class="captchacodebox numfg" id="captchabx_codeBox3" name="captchabx_codeBox3" type="text" maxlength="1" onkeyup="onKeyUpEvent(3, event,'captchabx_codeBox')" onfocus="onFocusEvent(3,'captchabx_codeBox')">
                                    <input class="captchacodebox numfg" id="captchabx_codeBox4" name="captchabx_codeBox4" type="text" maxlength="1" onkeyup="onKeyUpEvent(4, event,'captchabx_codeBox')" onfocus="onFocusEvent(4,'captchabx_codeBox')"> <span class="captcha" style="background-color: #4A6983; color: #FFF; padding: 12px; padding-right: 15px; margin-top: 0px; float: right; line-height: 21px; font-size: 15px; margin-left: 5px !important; font-size: 14px;"><?php echo $rand;?></span>
                                    <input id="captcha" name="captcha" type="hidden" value="<?php echo $rand;?>">
                                </div>
                                      <div class="clearfix"></div> 
                                      <small>Enter Code As Seen</small><br>
                                      <small id="captchaErr" style="color:#f00"></small> 
                            </div>
							
							<!--<div class="col-sm-12 form-group">
								<label>Enter Your Qualification</label>
								<textarea rows="3" class="form-control"></textarea>
							</div>-->
							
							<!--<div class="col-sm-12 form-group">
							 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="    float: left;
    margin-top: 23px;">
  <label for="vehicle1" style="    float: left;
    width: 80%;
    margin-left: 10px;
    line-height: 20px;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </label><br>
							</div>-->
							
							<div class="col-sm-12 form-group mt-5">
							<input type="submit" class="w-100 edu-btn mt-5 float-right" value="Submit →">
							</div> 
						</div>					
					
										
					</div>
				</form> </div>
	  </div>
	
	  </div>
	  </div>
	  </section>