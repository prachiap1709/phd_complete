<?php include("include/header.php");?>
<div class="app-content">
   <div class="side-app">
      <div class="page-header">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Change Password</li>
         </ol>
      </div>
      <div class="row">
         <div class="col-sm-6 mx-auto">
            <div class="card">
               <div class="card-body p-0">
                  <form class="p-5">
                     <input type="text" class="form-control mb-4" placeholder="Enter Old Password">
                     <input type="text" class="form-control mb-4" placeholder="Enter New Password">
                     <input type="text" class="form-control mb-4" placeholder="Enter Confirm Password">
                     <center><input type="submit" class="w-50 mx-auto ml-5 btn btn-primary" value="Submit →"></center>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php include("include/footer.php");?>