<?php 
$userinfo = getUserInfo($this->session->userdata('usr_id'));
$settinginfo =  getclientsettingdata($this->session->userdata('usr_id'));
?>
<style>
    td {
    padding-bottom: 0px !important;
}input.col-sm-7.form-control.mr-2 {
    font-size: 14px;
}
</style>
     <div class="content-wrapper">

      


        <div class="container-fluid">

  

<div class="row pl-2">
	<div class="col-lg-12 col-12 mb-2" id="msgloader_setting" style="text-align: right;"></div>
	<div class="col-lg-12 col-12 mb-2">
	   <h4 class="creative-state-title mb-0 pb-2"><b>Change Password</b></h4>
	</div>
	
	<div class="col-sm-12 average">
    <div class="card price-package shadow-sm p-4">
	<form method="post" id="passwordupdfrm" action="" enctype="multipart/form-data" onsubmit="return udpatePassword('<?php echo base_url();?>','<?php echo $userinfo->fld_name;?>')">
	<div class="row">
	<div class="col-md-3">
	<div class="form-group">
	<label>Existing Password</label>
	<input class="form-control" name="oldpassword" id="oldpassword" type="password" />
	<i class="fa fa-eye toggle-password" style="position: relative;float: right;margin: -26px 10px 0 0;" onclick="return passwordview('oldpassword')"></i>
	</div>

	</div>

	<div class="col-md-3">
	<div class="form-group">
	<label>New Password</label>
	<input class="form-control" type="password" name="password" id="password" />
	<i class="fa fa-eye toggle-password" style="position: relative;float: right;margin: -26px 10px 0 0;" onclick="return passwordview('password')"></i>
	</div>

	</div>
	<div class="col-md-3">
	<div class="form-group">
	<label>Confirm Password</label>
	<input class="form-control" type="password" name="password_confirm" id="password_confirm" />
	<i class="fa fa-eye toggle-password" style="position: relative;float: right;margin: -26px 10px 0 0;" onclick="return passwordview('password_confirm')"></i>
	</div>

	</div>
	<div class="col-sm-3 text-left mt-4">
		<input type="submit" value="Submit" class="btn btn-primary sub mt-1">
	</div>
	</div>
	</form>

    </div><!--price-package-->
	
  </div>
            
<div class="col-sm-6 mt-4">
<div class="card p-3 w-100">
            
            <h4 class="pt-2">Timeline For Password Expiry</h4>
            <p>Please select a timeline for auto reset of your account's password</p>
            <div class="mt-2 calls">
                <label class="switch">
					<input type="checkbox" class="timeline_days" data-days='30' id="timeline1" name="timeline1" value="<?php echo $settinginfo->fld_pass_upd_days;?>" <?php if($settinginfo->fld_pass_upd_days=='30'){?>checked=""<?php }?> />
					<span class="slider round"></span>
					<span class="day">30 Days</span>
				</label>

				<label class="switch">
					<input type="checkbox" class="timeline_days" data-days='90' id="timeline1" name="timeline1" value="<?php echo $settinginfo->fld_pass_upd_days;?>" <?php if($settinginfo->fld_pass_upd_days=='90'){?>checked=""<?php }?> />
					<span class="slider round"></span>
					<span class="day">90 Days</span>
				</label>
				<label class="switch">
					<input type="checkbox" class="timeline_days" data-days='120' id="timeline1" name="timeline1" value="<?php echo $settinginfo->fld_pass_upd_days;?>" <?php if($settinginfo->fld_pass_upd_days=='120'){?>checked=""<?php }?> />
					<span class="slider round"></span>
					<span class="day">120 Days</span>
				</label>
          </div></div>
       </div>
          
		<!-- <div class="col-sm-6 mt-4">
			<div class="card p-3 w-100 pb-2">
				<h4 class="pt-2 mt-2 mb-3">2 Factor Authentication</h4>

					<label class="switch">
					  <input type="checkbox">
					  <span class="slider round"></span>
					  <span class="day two">Enable 2 factor Authentication</span>
					</label>

					<div class="row number-field pl-3 mt-2">
						<input type="text" class="col-sm-7 form-control mr-2" placeholder="Enter Phone Number">
						<input type="submit" value="Submit" class="col-sm-2 btn btn-primary" style="    font-size: 15px; padding: 5px;">
					</div>
				</div>
			</div>
		</div>-->
    </div>
    
   
</div>
              
            </div>
        </div>