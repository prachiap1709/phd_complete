<div class="app-content">
   <div class="side-app">
      <div class="page-header">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Posted Job</li>
         </ol>
      </div>
      <div class="row">
          
          <?php
          $getPostedjobsofRecruiter=getPostedjobsofRecruiter($this->session->userdata('usr_id'),'Active');
          if(count($getPostedjobsofRecruiter) > 0)
          {
              foreach($getPostedjobsofRecruiter as $row)
              {
          ?>
            <div class="col-sm-4">
            <div class="card mb-3 p-4">
               <div class="row job">
                  <div class="col-sm-9">
                     <h4><i class="fa fa-building"></i> <?php echo $row->fld_company_name;?></h4>
                     <h6 class="pt-3 job-list pb-2"><span class="rating"><i class="fa fa-star"></i> 5 <span class="revie">(27 Review)</span></span></h6>
                     <h6 class="job-list"> <span class="salry"><i class="fa fa-rupee"></i>  <?php echo $row->fld_salary;?></span> </h6>
                  </div>
                  <div class="col-sm-3"><img src="images/logo.png" class="img-fluid"></div>
                  <div class="col-sm-12">
                     <p class="pt-4"><i class="fa fa-address-book"></i> <?php echo $row->fld_job_profile_description;?>< 
                     </p>
                     <p class="border-top pt-2"><i class="fa fa-calendar"></i> <strong>Job Posted on <?php echo convertdate($row->fld_addedon,'d M Y')?></strong></p>
                  </div>
               </div>
            </div>
         </div>
          <?php
              }
          }else{?>
              
               <div class="col-sm-4">
            <div class="card mb-3 p-4">
               <div class="row job">
                  <div class="col-sm-9">
                     <h4>No jobs found.</h4>
                  </div>
               </div>
            </div>
         </div>
          <?php
              
          }
          ?>
      </div>
   </div>
</div>