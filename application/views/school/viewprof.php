<style>
    td {
    padding-bottom: 0px !important;
}.mt-2.calls i {
    color: #ffffff !important;
       margin-right: 0;
}i.fa.fa-clock-o.text-dark {
    color: #ff6a00 !important;
}i.fa.fa-video-camera.text-dark {
    color: #ff6a00 !important;
}
i.fa.fa-calendar.text-dark{
    color: #ff6a00 !important;
}span.second-trans {
  float: right;
    background: #ff8100;
    border-radius: 4px;
    font-size: 16px;
    color: #FFF;
    padding-left: 6px;
    padding-right: 6px;
    line-height: 24px;
    padding-bottom: 0px;
    /* font-weight: bold; */
    margin-bottom: 7px;
}

span.first-trans {
    float: right;
    background: #ff8100;
    border-radius: 4px;
    font-size: 16px;
    color: #FFF;
    padding-left: 6px;
    padding-right: 6px;
    line-height: 24px;
    padding-bottom: 0px;
    /* font-weight: bold; */
    margin-bottom: 7px;
}

span.final-price {
    float: left;
    width: 40%;
    font-size: 29px;
    font-weight: bold;
    margin-top: -10px;
}
p.max.mb-0 {
    /* border: 1px solid #ccc; */
    background: #fbfbfb;
    padding: 5px;
    border-radius: 2px;
}
.price {
    background: #058e9312 !important;
    padding: 10px;
    border-radius: 4px;
    color: #058e93 !important;
    font-weight: 500;
    font-size: 15px;
    margin-bottom: 10px;
    float:left;
    width:100%;
    padding-top: 17px;
}ul#style-1 i {
    position: absolute;
    left: 24px;
    margin-top: 4px;
}
span.left-text.paid-text {
    float: left;
    font-size: 13px;
    font-weight: 500;
    padding-top: 9px;
}
ul#style-1 li {
    padding-left: 20px;
    font-size: 14px;
    padding-bottom: 5px;
}p.max {
    font-size: 14px;
}span.text-success.availed {
    padding-left: 27px;
}.mt-2.calls p {
    margin-bottom: 6px;
}span.text-success.availed {
    /* float: left; */
    /* margin-top: -35px; */
    font-size: 13px;
    background: #ff7c0ca1;
    text-align: center;
    padding-left: 0px;
    padding: 5px;
    border-radius: 4px;
    color: #FFF!important;
    padding-top: 5px !important;
    line-height: 22px;
}a.book.btn.btn-primary.p-1.schedul {
    float: right;
    font-size: 13px;
    margin-top: -30px;
    padding: 5px !important;
    padding-left: 10px !important;
    padding-right: 10px !important;
    font-weight: bold;
    margin-right: 5px;
}span.gst {
    font-size: 12px;
    float: left;
    width: 100%;
    margin-top: -10px;
    color: #000;
    font-weight: 500;
}span.total {
    background: #f7730f;
    padding: 8px;
    border-radius: 30px;
    color: #FFF;
    margin-left: 33%;
    font-size: 15px;
    border: none;
    /* margin-top: 7px; */
}.card.shadow-sm.mt-2.calls {
    border-radius: 6px;
    padding: 13px;
}
</style>
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
	    <div class="card ">

	<div class="card-body">						
								
		<?php 

		if($this->session->userdata('alert_type')!="")

		{

			?>

			<div class="alert alert-<?php echo $this->session->userdata('alert_type');?>">

				<a href="#"  data-dismiss="alert" aria-label="close" title="close">×</a>

				<?php echo $this->session->userdata('msg');?>

			</div>

			<?php

			$this->session->unset_userdata('alert_type');

			$this->session->unset_userdata('msg');

		}

		?>
		 <div class="form-group row">
				<div class="col-sm-12" style="text-align: center;" id="rePassmsgloader"></div>
		 </div>
		 <h4 class="card-title">View Profile </h4>
			<div style="float: right; margin-top: -42px;">
				
				<a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="btn btn-primary ctawidthauto">
					<i class="fa fa-arrow-left" aria-hidden="true" style="line-height: normal;"></i> Back
				</a>
			</div>
			<div class="clearfix">&nbsp;</div>
			<input type="hidden" name="adminid" id="adminid" value="<?php echo $result->id;?>" />    
			
			<div class="form-group row form-detls">
			    <div class="col-sm-4 formmsi">
				<label class="col-form-label"><strong><i class="fa fa-user" aria-hidden="true"></i> School Name</strong></label>
				<p><?php echo $result->fld_school_name;?></p>			
			</div>
			
			    <div class="col-sm-4 formmsi">
				<label class="col-form-label"><strong><i class="fa fa-user" aria-hidden="true"></i> Principal Name</strong></label>
				<p><?php echo $result->fld_principle_name;?></p>			
			</div>
			
			<div class="col-sm-4 formmsi">
				<label class="col-form-label"><strong><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</strong></label>
				<p><?php echo $result->fld_email;?></p>
			</div>
			
			<div class="col-sm-4 formmsi">
				<label class="col-form-label"><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Phone</strong></label>
				<p>
				<?php echo $result->fld_phone;?>
				</p>
			</div>
			
			 <div class="col-sm-4 formmsi">
				<label class="col-form-label"><strong><i class="fa fa-location-arrow" aria-hidden="true"></i> School</strong></label>
				<p><?php echo $result->fld_class;?></p>
			</div>
			
			<div class="col-sm-4 formmsi">
				<label class="col-form-label"><strong><i class="fa fa-flag" aria-hidden="true"></i> Category</strong></label>
				<p><?php echo $result->fld_category;?></p>
			</div>
			
			<div class="col-sm-4 formmsi">
				<label class="col-form-label"><strong><i class="fa fa-map-pin" aria-hidden="true"></i> Type</strong></label>
				<p><?php echo $result->fld_type;?></p>
			</div>
			
			
			<div class="col-sm-4 formmsi">
				<label class="col-form-label"><strong><i class="fa fa-location-arrow" aria-hidden="true"></i> Location</strong></label>
				<p><?php echo $result->fld_location;?></p>
			</div>
			
			<div class="col-sm-4 formmsi">
				<label class="col-form-label"><strong><i class="fa fa-phone" aria-hidden="true"></i> Facilities</strong></label>
				<p><?php echo $result->fld_facilities;?></p>				
			
			</div>
			
			<div class="col-sm-4 formmsi">
				<label class="col-form-label"><strong><i class="fa fa-list" aria-hidden="true"></i> No. of Students</strong></label>
				<p><?php echo $result->noofstudents;?></p>
			</div>
			
			<div class="col-sm-4 formmsi">
				<label class="col-form-label"><strong><i class="fa fa-list" aria-hidden="true"></i> No. of Teachers</strong></label>
					<p><?php echo $result->fld_noofteacher;?></p>
			</div>
			
			<?php if($result->fld_upload_brochure!=""){?>
			<div class="col-sm-4 formmsi">
				<label class="col-form-label"><strong><i class="fa fa-file-text-o" aria-hidden="true"></i> Upload Brochure</strong></label>
				<p><a href="<?php echo base_url();?>assets/upload/brochure/<?php echo $result->fld_upload_brochure;?>" target="_blank"><?php echo $result->fld_upload_brochure;?></a></p>
			</div>
			<?php }?>
			<div class="col-sm-4 formmsi">
				<label class="col-form-label"><strong><i class="fa fa-list" aria-hidden="true"></i> About School</strong></label>
					<p><?php echo $result->fld_about_school;?></p>
			</div>
			<?php if($result->fld_latest_news!=""){?>
			<div class="col-sm-12 formmsi">
				<label class="col-form-label"><strong>Latest News</strong></label>
					<div class="card p-3 text-center latest mt-3 mb-3">
					<div class=" marquee">
					<?php 
					$arrlatestnews = explode('~~',$result->fld_latest_news);
					foreach($arrlatestnews as $value)
					{
						$arrnews = explode('||',$value);
						?>
					<div class="row pt-3">
						
						<div class="col-sm-12 text-left">
						<h4> <?php echo $arrnews[0]?></h4>
						<p> <?php echo $arrnews[2]?></p>
						<span class="post"><i class="fa fa-calendar"></i> <?php echo $arrnews[1]?></span>
						
						</div>
					</div>
					<?php } ?>
					</div>
						
					</div>
			</div>
			<?php }?>
			
			<?php if($result->fld_faq!=""){?>
			<div class="col-sm-12 formmsi">
				<label class="col-form-label"><strong>Frequently Asked Question</strong></label>
					<div class="border p-0">
					
					<div id="accordion" class="p-4 bg-white">
					<?php 
					$arrfaq = explode('~~',$result->fld_faq);
					foreach($arrfaq as $key=>$value)
					{
						$arr_faq = explode('||',$value);
						?>
						<div class="card">
							<div class="card-header">
							<a class="card-link" data-toggle="collapse" href="#collapse<?php echo $key;?>">
							<?php echo $arr_faq[0];?> <i class="fa fa-angle-double-down"></i>
							</a>
							</div>
							<div id="collapse<?php echo $key;?>" class="collapse <?php if($key<1){?>show<?php }?>" data-parent="#accordion">
							<div class="card-body">
							<?php echo $arr_faq[1];?>
							</div>
							</div>
						</div>
					<?php
					}
					?>
					</div>
					</div>
			</div>
			<?php }?>
		</div><!-- .card-innr -->					

		</div><!-- .card -->

	</div><!-- .container -->
	
</div>

</div>

