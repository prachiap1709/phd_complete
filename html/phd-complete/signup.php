<?php include 'include/header.php';?>
     
      <main>
        
         <section class="slider-area hero-height position-relative fix" style="
               background-size:45%;
               background-repeat: no-repeat;
               background-position:right bottom;
    background-color: #f6f8fb7a;">
            <div class="container pb-5" >
               <div class="row">
			   
			<div class="col-sm-3">
					<?php include 'include/sidebar.php';?>
			   </div>
			    <div class="col-sm-7"> <div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Enter Signup Details</h2>
   <p>Please enter your email and password</p>
   </div>
 <div class="row align-items-center justify-content-center" style="">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
        
          
          <form id="registerForm">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="userInput" placeholder="Input your Username" autocomplete="off" name="username" required>
              <label for="userInput">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="emailInput" placeholder="Input your email" autocomplete="off" name="email" required>
              <label for="emailInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nameInput" placeholder="Input your Name" autocomplete="off" name="name" required>
              <label for="nameInput">Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Input your password" required>
              <label for="passwordInput">Password</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="cpasswordInput" name="cpassword" placeholder="Input your password" required>
              <label for="cpasswordInput">Confirm Password</label>
            </div>

          
          </form>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-sm btn-primary radius" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Register Your Account →</button>
        </div>
      </div>
    </div>
  </div>
    </div>
<p class="botto-text"> Designed by Sunil Rajput</p>
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
         
         
        
	 <?php include 'include/footer.php';?>