<?php include 'include/header.php';?>
     <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Forgot Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form>
		<input class="form-control mb-3" placeholder="Enter New Password">
		
		<input class="form-control mb-3" placeholder="Confirm Password">
		
		<input type="submit" class="btn btn-primary mr-auto offset-9 pr-0 login-but" value="Submit →">
		</form>
      </div>

      

    </div>
  </div>
</div>
   
     
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
   <h2>Enter Login Details</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login">

        <div class="form-group">


            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Password">

        </div>
        <div class="forgot">
        <a class="" data-toggle="modal" data-target="#myModal" style="cursor:pointer;">Forgot password?</a>
</div>
        <button type="submit" class="btn btn-primary">Login →</button>

    </form>
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