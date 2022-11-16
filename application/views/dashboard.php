<?php 
$userDataInfo = getAdmin($this->session->userdata('adm_admin_id'));
if($this->session->userdata('adm_admin_type') == 'CONSULTANT' && $this->session->userdata('adm_admin_id')>0)
{
	$consultsettingdata 	=  getconsultsettingdata($this->session->userdata('adm_admin_id'));
	$selected_week_days	=	explode(',',$consultsettingdata->fld_selected_week_days);
	
	$checked_weekdays	= "";
	/* if($consultsettingdata->fld_selected_week_days==''){ $checked_weekdays	= 'checked="checked"'; } */
	
	$days_exclusion = '';
	if($consultsettingdata->fld_days_exclusion!="")
	{
		$days_exclusion = explode('|~|',$consultsettingdata->fld_days_exclusion);
	}
	
	$arrsun_time_data 	= explode('~',$consultsettingdata->fld_sun_time_data);
	$sun_counter	=	0;
	if(count(array_filter($arrsun_time_data))>0)
	{
		$sun_counter	=	count(array_filter($arrsun_time_data));
	}
	
	$arrmon_time_data 	= explode('~',$consultsettingdata->fld_mon_time_data);
	$mon_counter	=	0;
	if(count(array_filter($arrmon_time_data))>0)
	{
		$mon_counter	=	count(array_filter($arrmon_time_data));
	}
	
	$arrtue_time_data 	= explode('~',$consultsettingdata->fld_tue_time_data);
	$tue_counter	=	0;
	if(count(array_filter($arrtue_time_data))>0)
	{
		$tue_counter	=	count(array_filter($arrtue_time_data));
	}
	
	$arrwed_time_data 	= explode('~',$consultsettingdata->fld_wed_time_data);
	$wed_counter	=	0;
	if(count(array_filter($arrwed_time_data))>0)
	{
		$wed_counter	=	count(array_filter($arrwed_time_data));
	}
	
	$arrthu_time_data 	= explode('~',$consultsettingdata->fld_thu_time_data);
	$thu_counter	=	0;
	if(count(array_filter($arrthu_time_data))>0)
	{
		$thu_counter	=	count(array_filter($arrthu_time_data));
	}
	
	$arrfri_time_data	 	= explode('~',$consultsettingdata->fld_fri_time_data);
	$fri_counter	=	0;
	if(count(array_filter($arrfri_time_data))>0)
	{
		$fri_counter	=	count(array_filter($arrfri_time_data));
	}
	
	$arrsat_time_data	 	= explode('~',$consultsettingdata->fld_sat_time_data);
	$sat_counter	=	0;
	if(count(array_filter($arrsat_time_data))>0)
	{
		$sat_counter	=	count(array_filter($arrsat_time_data));
	}
	
	$consultquesettingdata 	=  getconsultquesettingdata($this->session->userdata('adm_admin_id'));
	$question_data				=  $consultquesettingdata->fld_question_data;
	
	if($question_data!="")
	{
		$arrquestion_data   		= explode('~~',$question_data);
		$countquestion_data 	= count(array_filter($arrquestion_data));
	}
}
?>
<style>
.form-inline label {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0;
}.form-check .form-check-label .input-helper:after {
    width: 40px;
    /* padding: 20px !important; */
}

input#SUN {}

input#SUN {}

input[type="checkbox"] {
    border: 2px solid #FFF !important;
    width: 19px;
    outline: none;
    box-shadow: none !important;
}

i.input-helper:before {
    order: none !important;
    border: none !important;
}label.form-check-label.unavailable1 {
    background: #ffd2d2;
    padding: 8px;
    border-radius: 2px;
}
.tnx-type1 img {
    height: 83px !important;
    border-radius: 100%;
    border: 4px solid #ebebeb;
    margin-top: 10px;
    width: 83px !important;
}
.unavailable1 {
    background: #ffd2d2;
    padding: 5px;
    border-radius: 2px;
    font-size: 12px !important;
}

.unavailable2{
    background: #ffd2d2;
    padding: 5px;
    border-radius: 2px;
    font-size: 12px !important;
}
.unavailable3 {
    background: #ffd2d2;
    padding: 5px;
    border-radius: 2px;
    font-size: 12px !important;
}
.unavailable4 {
    background: #ffd2d2;
    padding: 5px;
    border-radius: 2px;
    font-size: 12px !important;
}
.unavailable5 {
    background: #ffd2d2;
    padding: 5px;
    border-radius: 2px;
    font-size: 12px !important;
}
.unavailable6 {
    background: #ffd2d2;
    padding: 5px;
    border-radius: 2px;
    font-size: 12px !important;
}.unavailable7 {
    background: #ffd2d2;
    padding: 5px;
    border-radius: 2px;
    font-size: 12px !important;
}label.form-check-label.float-left {
    margin-right: 20px;
}.form-check.mb-2 {
    margin-top: 5px;
    margin-bottom: 5px;
    float: left;
}span.select2.select2-container.select2-container--default {
    line-height: 30px;
    height: 40px;
}

span.select2-selection.select2-selection--single {
    height: 33px;
    line-height: 44px !important;
    font-size: 13px;
    padding-top: 2px;
}.alert.alert-primary {
    background: #d3eafd42;
    padding: 10px;
}

.alert.alert-primary label {
    font-size: 13px;
    font-weight: 500;
}
</style>


<div class="row page-title-header">
	<div class="col-12">
		<div class="page-header row">
			<div class="col-md-2">
				<h4 class="page-title">
				<?php if($this->session->userdata('adm_admin_type') == 'CONSULTANT'){?>
				My Calendar
				<?php } else {?>
				Dashboard
				<?php } ?>
				</h4>
			</div>
			
		</div>
	</div>	
	<?php if($this->session->userdata('adm_admin_type') == 'CONSULTANT'){?>
	<div class="col-12">
		
		<div class="card">
			
			<form id="consultantsettingfrm" onsubmit="return saveconsultantsetting('<?php echo base_url();?>')" method="POST">
			<div class="card-body pb-0">
			<div class="card-head">
				<div class="row">
					<div class="form-group col-md-6 col-lg-6">	
					<div class="card shadow-sm p-3">
						<h4 class="card-title">Working hours</h4>
						
						<div class="mr-3">
							<div class="form-inline mb-2 weekday pb-1" style="border-bottom: 1px solid #ccc;">
							<div class="form-check mb-3"><input type="checkbox" name="weekdayinpt[]" id="SUN" value="1" class="form-check-input weekdayinpt" <?php if(in_array(1,$selected_week_days)){?> checked="checked"<?php }?>><label class="form-check-label float-left" style="min-width: 3rem;" for="SUN"> SUN </label></div>
								<div>
									
									<label class="form-check-label unavailable1" <?php if(in_array(1,$selected_week_days) && $consultsettingdata->fld_selected_week_days!=''){?>style="display:none"<?php }?>>Unavailable</label>
									<input type="hidden" name="time_data_1" id="time_data_1" value="<?php echo $sun_counter;?>" />
									<div class="weekday_data_bx1">
										<?php 
										if($consultsettingdata->fld_sun_time_data!="")
										{
											for($i=0; $i<count($arrsun_time_data); $i++)
											{
												$arrdata_1 = explode('||',$arrsun_time_data[$i]);
												$frmdata = $arrdata_1[0]; 
												$todata = $arrdata_1[1]; 
												if($i<1)
												{
												?>
												<div class="form-inline available1">
												<div class="form-group mb-1 mr-2"><input type="time" name="time_data_frm1[]" value="<?php echo $frmdata;?>" class="form-control"></div>
												<div class="form-group mb-1 mr-2"><input type="time" name="time_data_to1[]" value="<?php echo $todata;?>" class="form-control"></div>
												<div class="form-group mb-1"><button type="button" class="btn btn-link p-0 addweekdaytime" data-id='1'><i class="fa fa-plus"></i></button></div>
												</div>
												<?php }else{?>
												<div class="form-inline available1"><div class="form-group mb-1 mr-2"><input type="time" name="time_data_frm1[]" value="<?php echo $frmdata;?>" class="form-control"></div><div class="form-group mb-1 mr-2"><input type="time" name="time_data_to1[]"  value="<?php echo $todata;?>" class="form-control"></div><div class="form-group mb-1"><button type="button" class="btn btn-link text-danger p-0 mr-2 removedatarow" data-module="time_data_1"><i class="fa fa-times"></i></button></div></div>
												<?php
												}
											}
										}
										?>
									</div>
								</div>
							  
							</div>
							<div class="form-inline mb-2 weekday pb-1" style="border-bottom: 1px solid #ccc;">
							<div class="form-check mb-3"><input type="checkbox" name="weekdayinpt[]" id="MON" value="2" class="form-check-input weekdayinpt" <?php if(in_array(2,$selected_week_days)){?> checked="checked"<?php }?>/><label class="form-check-label float-left" style="min-width: 3rem;" for="MON"> MON </label></div>
							  
								<div>
									<label class="form-check-label unavailable2" <?php if(in_array(2,$selected_week_days) && $consultsettingdata->fld_selected_week_days!=''){?>style="display:none"<?php }?>>Unavailable</label>
									<input type="hidden" name="time_data_2" id="time_data_2" value="<?php echo $mon_counter;?>" />
									<div class="weekday_data_bx2">
										<?php 
										if($consultsettingdata->fld_mon_time_data!="")
										{
											for($i=0; $i<count($arrmon_time_data); $i++)
											{
												$arrdata_2 = explode('||',$arrmon_time_data[$i]);
												$frmdata = $arrdata_2[0]; 
												$todata = $arrdata_2[1]; 
												if($i<1)
												{
												?>
												<div class="form-inline available2">
												<div class="form-group mb-1 mr-2"><input type="time" name="time_data_frm2[]" value="<?php echo $frmdata;?>" class="form-control"></div>
												<div class="form-group mb-1 mr-2"><input type="time" name="time_data_to2[]" value="<?php echo $todata;?>" class="form-control"></div>
												<div class="form-group mb-1"><button type="button" class="btn btn-link p-0 addweekdaytime" data-id='2'><i class="fa fa-plus"></i></button></div>
												</div>
												<?php }else{?>
												<div class="form-inline available2"><div class="form-group mb-1 mr-2"><input type="time" name="time_data_frm2[]" value="<?php echo $frmdata;?>" class="form-control"></div><div class="form-group mb-1 mr-2"><input type="time" name="time_data_to2[]"  value="<?php echo $todata;?>" class="form-control"></div><div class="form-group mb-1"><button type="button" class="btn btn-link text-danger p-0 mr-2 removedatarow" data-module="time_data_2"><i class="fa fa-times"></i></button></div></div>
												<?php
												}
											}
										}
										?>
									</div>
								</div>
							</div>
							<div class="form-inline mb-2 weekday pb-1" style="border-bottom: 1px solid #ccc;">
							<div class="form-check mb-2"><input type="checkbox" name="weekdayinpt[]" id="TUE"  value="3" class="form-check-input weekdayinpt" <?php if(in_array(3,$selected_week_days)){?> checked="checked"<?php }?>/><label class="form-check-label float-left" style="min-width: 3rem;" for="TUE"> TUE </label></div>
							  
							  <div>
									<label class="form-check-label unavailable3" <?php if(in_array(3,$selected_week_days) && $consultsettingdata->fld_selected_week_days!=''){?>style="display:none"<?php }?>>Unavailable</label>
									<input type="hidden" name="time_data_3" id="time_data_3" value="<?php echo $tue_counter;?>" />
									<div class="weekday_data_bx3">
										<?php 
										if($consultsettingdata->fld_tue_time_data!="")
										{
											for($i=0; $i<count($arrtue_time_data); $i++)
											{
												$arrdata_3 = explode('||',$arrtue_time_data[$i]);
												$frmdata = $arrdata_3[0]; 
												$todata = $arrdata_3[1]; 
												if($i<1)
												{
												?>
												<div class="form-inline available3">
												<div class="form-group mb-3 mr-2"><input type="time" name="time_data_frm3[]" value="<?php echo $frmdata;?>" class="form-control"></div>
												<div class="form-group mb-3 mr-2"><input type="time" name="time_data_to3[]" value="<?php echo $todata;?>" class="form-control"></div>
												<div class="form-group mb-3"><button type="button" class="btn btn-link p-0 addweekdaytime" data-id='3'><i class="fa fa-plus"></i></button></div>
												</div>
												<?php }else{?>
												<div class="form-inline available3"><div class="form-group mb-3 mr-2"><input type="time" name="time_data_frm3[]" value="<?php echo $frmdata;?>" class="form-control"></div><div class="form-group mb-3 mr-2"><input type="time" name="time_data_to3[]"  value="<?php echo $todata;?>" class="form-control"></div><div class="form-group mb-3"><button type="button" class="btn btn-link text-danger p-0 mr-2 removedatarow" data-module="time_data_3"><i class="fa fa-times"></i></button></div></div>
												<?php
												}
											}
										}
										?>
									</div>
							  </div>
							  
							</div>
							<div class="form-inline mb-2 weekday pb-1" style="border-bottom: 1px solid #ccc;">
							<div class="form-check mb-2"><input type="checkbox" name="weekdayinpt[]" id="WED" value="4" class="form-check-input weekdayinpt" <?php if(in_array(4,$selected_week_days)){?> checked="checked"<?php }?>/><label class="form-check-label float-left" style="min-width: 3rem;" for="WED"> WED </label></div>
							  
							  <div>
									<label class="form-check-label unavailable4" <?php if(in_array(4,$selected_week_days) && $consultsettingdata->fld_selected_week_days!=''){?>style="display:none"<?php }?>>Unavailable</label>
									<input type="hidden" name="time_data_4" id="time_data_4" value="<?php echo $wed_counter;?>" />
									<div class="weekday_data_bx4">
										<?php 
										if($consultsettingdata->fld_wed_time_data!="")
										{
											for($i=0; $i<count($arrwed_time_data); $i++)
											{
												$arrdata_4 = explode('||',$arrwed_time_data[$i]);
												$frmdata = $arrdata_4[0]; 
												$todata = $arrdata_4[1]; 
												if($i<1)
												{
												?>
												<div class="form-inline available4">
												<div class="form-group mb-3 mr-2"><input type="time" name="time_data_frm4[]" value="<?php echo $frmdata;?>" class="form-control"></div>
												<div class="form-group mb-3 mr-2"><input type="time" name="time_data_to4[]" value="<?php echo $todata;?>" class="form-control"></div>
												<div class="form-group mb-3"><button type="button" class="btn btn-link p-0 addweekdaytime" data-id='4'><i class="fa fa-plus"></i></button></div>
												</div>
												<?php }else{?>
												<div class="form-inline available4"><div class="form-group mb-3 mr-2"><input type="time" name="time_data_frm4[]" value="<?php echo $frmdata;?>" class="form-control"></div><div class="form-group mb-3 mr-2"><input type="time" name="time_data_to4[]"  value="<?php echo $todata;?>" class="form-control"></div><div class="form-group mb-3"><button type="button" class="btn btn-link text-danger p-0 mr-2 removedatarow" data-module="time_data_4"><i class="fa fa-times"></i></button></div></div>
												<?php
												}
											}
										}
										?>
									</div>								 
							  </div>
							  
							</div>
							<div class="form-inline mb-2 weekday pb-1" style="border-bottom: 1px solid #ccc;">
							  <div class="form-check mb-2"><input type="checkbox" name="weekdayinpt[]" id="THU" value="5"class="form-check-input weekdayinpt"  <?php if(in_array(5,$selected_week_days)){?> checked="checked"<?php }?>/><label class="form-check-label float-left" style="min-width: 3rem;" for="THU"> THU </label></div>
							  
							  <div>
									<label class="form-check-label unavailable5" <?php if(in_array(5,$selected_week_days) && $consultsettingdata->fld_selected_week_days!=''){?>style="display:none"<?php }?>>Unavailable</label>
									<input type="hidden" name="time_data_5" id="time_data_5" value="<?php echo $thu_counter;?>" />
									<div class="weekday_data_bx5">
										<?php 
										if($consultsettingdata->fld_thu_time_data!="")
										{
											for($i=0; $i<count($arrthu_time_data); $i++)
											{
												$arrdata_5 = explode('||',$arrthu_time_data[$i]);
												$frmdata = $arrdata_5[0]; 
												$todata = $arrdata_5[1]; 
												if($i<1)
												{
												?>
												<div class="form-inline available5">
												<div class="form-group mb-3 mr-2"><input type="time" name="time_data_frm5[]" value="<?php echo $frmdata;?>" class="form-control"></div>
												<div class="form-group mb-3 mr-2"><input type="time" name="time_data_to5[]" value="<?php echo $todata;?>" class="form-control"></div>
												<div class="form-group mb-3"><button type="button" class="btn btn-link p-0 addweekdaytime" data-id='5'><i class="fa fa-plus"></i></button></div>
												</div>
												<?php }else{?>
												<div class="form-inline available5"><div class="form-group mb-3 mr-2"><input type="time" name="time_data_frm5[]" value="<?php echo $frmdata;?>" class="form-control"></div><div class="form-group mb-3 mr-2"><input type="time" name="time_data_to5[]"  value="<?php echo $todata;?>" class="form-control"></div><div class="form-group mb-3"><button type="button" class="btn btn-link text-danger p-0 mr-2 removedatarow" data-module="time_data_5"><i class="fa fa-times"></i></button></div></div>
												<?php
												}
											}
										}
										?>
									</div>
								 
							  </div>
							  
							</div>
							<div class="form-inline mb-2 weekday pb-1" style="border-bottom: 1px solid #ccc;">
							<div class="form-check mb-2"><input type="checkbox" name="weekdayinpt[]" id="FRI" value="6" class="form-check-input weekdayinpt"  <?php if(in_array(6,$selected_week_days)){?> checked="checked"<?php }?>/><label class="form-check-label float-left" style="min-width: 3rem;" for="FRI"> FRI </label></div>
							  
							  <div>
									<label class="form-check-label unavailable6" <?php if(in_array(6,$selected_week_days) && $consultsettingdata->fld_selected_week_days!=''){?>style="display:none"<?php }?>>Unavailable</label>
									<input type="hidden" name="time_data_6" id="time_data_6" value="<?php echo $fri_counter;?>" />
									<div class="weekday_data_bx6">
										<?php 
										if($consultsettingdata->fld_fri_time_data!="")
										{
											for($i=0; $i<count($arrfri_time_data); $i++)
											{
												$arrdata_6 = explode('||',$arrfri_time_data[$i]);
												$frmdata = $arrdata_6[0]; 
												$todata = $arrdata_6[1]; 
												if($i<1)
												{
												?>
												<div class="form-inline available6">
												<div class="form-group mb-3 mr-2"><input type="time" name="time_data_frm6[]" value="<?php echo $frmdata;?>" class="form-control"></div>
												<div class="form-group mb-3 mr-2"><input type="time" name="time_data_to6[]" value="<?php echo $todata;?>" class="form-control"></div>
												<div class="form-group mb-3"><button type="button" class="btn btn-link p-0 addweekdaytime" data-id='6'><i class="fa fa-plus"></i></button></div>
												</div>
												<?php }else{?>
												<div class="form-inline available6"><div class="form-group mb-3 mr-2"><input type="time" name="time_data_frm6[]" value="<?php echo $frmdata;?>" class="form-control"></div><div class="form-group mb-3 mr-2"><input type="time" name="time_data_to6[]"  value="<?php echo $todata;?>" class="form-control"></div><div class="form-group mb-3"><button type="button" class="btn btn-link text-danger p-0 mr-2 removedatarow" data-module="time_data_6"><i class="fa fa-times"></i></button></div></div>
												<?php
												}
											}
										}
										?>
									</div>
							  </div>
							  
							</div>
							<div class="form-inline mb-2 weekday pb-1" style="">
							<div class="form-check mb-2"><input type="checkbox" name="weekdayinpt[]" id="SAT" value="7" class="form-check-input weekdayinpt" <?php if(in_array(7,$selected_week_days)){?> checked="checked"<?php }?> /><label class="form-check-label float-left" style="min-width: 3rem;" for="SAT"> SAT </label></div>
								<div>
									<label class="form-check-label unavailable7" <?php if(in_array(6,$selected_week_days) && $consultsettingdata->fld_selected_week_days!=''){?>style="display:none"<?php }?>>Unavailable</label>
									<input type="hidden" name="time_data_7" id="time_data_7" value="<?php echo $sat_counter;?>" />
									<div class="weekday_data_bx7">
										<?php 
										if($consultsettingdata->fld_sat_time_data!="")
										{
											for($i=0; $i<count($arrsat_time_data); $i++)
											{
												$arrdata_7 = explode('||',$arrsat_time_data[$i]);
												$frmdata = $arrdata_7[0]; 
												$todata = $arrdata_7[1]; 
												if($i<1)
												{
												?>
												<div class="form-inline available7">
												<div class="form-group mb-3 mr-2"><input type="time" name="time_data_frm7[]" value="<?php echo $frmdata;?>" class="form-control"></div>
												<div class="form-group mb-3 mr-2"><input type="time" name="time_data_to7[]" value="<?php echo $todata;?>" class="form-control"></div>
												<div class="form-group mb-3"><button type="button" class="btn btn-link p-0 addweekdaytime" data-id='7'><i class="fa fa-plus"></i></button></div>
												</div>
												<?php }else{?>
												<div class="form-inline available7"><div class="form-group mb-3 mr-2"><input type="time" name="time_data_frm7[]" value="<?php echo $frmdata;?>" class="form-control"></div><div class="form-group mb-3 mr-2"><input type="time" name="time_data_to7[]"  value="<?php echo $todata;?>" class="form-control"></div><div class="form-group mb-3"><button type="button" class="btn btn-link text-danger p-0 mr-2 removedatarow" data-module="time_data_7"><i class="fa fa-times"></i></button></div></div>
												<?php
												}
											}
										}
										?>
									</div>
								</div>
							</div>
						   
						</div>
						</div>
					</div>
					<div class="form-group col-md-6 col-lg-6">
					    	<div class="card shadow-sm p-3">	
						<h4 class="card-title">Timezone</h4>
						<p class="help-text small mb-3"> Automatically detected timezone is <span class="text-danger text-timezone">
						<?php 
						if($consultsettingdata->fld_timezone!='')
						{
							echo explode(' ',timezone_list()[$consultsettingdata->fld_timezone])[0];
						}
						elseif($consultsettingdata->fld_timezone=='')
						{
							$date = new DateTime();
							$timeZone = $date->getTimezone();
							echo $timeZone->getName();
						}
						?>
						
						</span>. You may change it to specify default time-zone for your calendar. </p>
						<div class="form-group row">
								<div class="col-sm-10">
									<select name="timezone" id="timezone" class="form-control timezone">
										<?php 
										foreach(timezone_list() as $key=>$timezone)
										{
											$newkey='';
											if($key==$consultsettingdata->fld_timezone)
											{
												$selectedid 	= $consultsettingdata->fld_timezone;
												$newkey 	= $key;
											}
											elseif($consultsettingdata->fld_timezone=='')
											{
												$selectedid 	= trim(explode(' ',$timezone)[0]);
												$newkey 	= $timeZone->getName();
											}
											?>
											<option value="<?php echo $key;?>" <?php if($newkey==$selectedid && $selectedid!=''){?> selected="selected"<?php }?>> <?php echo $timezone;?></option>
											<?php 
										}
										?>
								    </select>
								</div>
						</div>
						<hr>
						
						<h4 class="card-title">Exclusions</h4>
						<p class="help-text small mb-3"> Add dates or custom range to exclude from your availability. E.g holidays, vacation etc. </p>
						<div class="form-group row">
								<div class="col-sm-10">
									<input type="hidden" name="exclusionsdatacounter" id="exclusionsdatacounter" value="0" />
									<ul class="list-group exclusionsdata">
									<?php if(count(array_filter($days_exclusion))>0)
									{
										foreach($days_exclusion as $exclusion_data)
										{
										?>
											<li class="list-group-item d-flex justify-content-between align-items-center pt-0 pb-0"><?php echo $exclusion_data;?><input type="hidden" name="exclusionsdata[]"  value="<?php echo $exclusion_data;?>" /><button class="btn btn-link text-danger p-0 mr-2 removeexclusionsdatarow" data-module="exclusionsdatacounter"><i class="fa fa-times"></i></button></li>
										<?php
										}
									}
									?>
									</ul>
								</div>
						</div>
						<div class="form-group row">
								<div class="col-sm-10">
									<div class="form-inline mt-3">
										<div class="form-group mr-3">
											<label for="exclusionsTypeDate"><input id="exclusionsTypeDate" value="date" type="radio" name="exclusionsType" class="mr-2 exclusionsType" checked="checked"> Single date </label>
										</div>
										<div class="form-group mr-3">
											<label for="exclusionsTypeRange"><input id="exclusionsTypeRange" value="ranges" type="radio" name="exclusionsType" class="mr-2 exclusionsType"> Date ranges </label>
										</div>
									</div>
									
									<div class="input-group mb-3 mt-1">
										<input type="date" name="excludeStartDate" class="form-control excludeStartDate" />
										<input type="date" name="excludeEndDate" class="form-control excludeEndDate" style="display:none" />
										<div class="input-group-append">
											<button type="button" class="btn btn-outline-secondary addexclusionsType"><i class="fa fa-plus"></i> Add </button>
										</div>
									</div>
								</div>
						</div>
					</div>
					<button type="submit" class="btn btn-warning float-right">Save</button>
					</div>
					<div class="col-sm-6 ml-auto">
						
					</div>
				</div>
				<div class="row">
					
				</div>
			</div>
			</div>
			</form>
			<form id="question_settingfrm"  onsubmit="return saveconsultantquesetting('<?php echo base_url();?>')" method="POST">
			<div class="card-body pt-0">
			<div class="card-head">
					<div class="row">
						<div class="form-group col-md-12 col-lg-12">	
						
							<div class="row">
							    <div class="col-lg-6 col-sm-12 border-right">
								  <div class="card">
									 <div class="card-body">
									     	<h4 class="card-title">Invitee questions</h4>
							<div id="msgloader1" class="float-right"></div>
							<div  class="form-group"><p >Add invitee questions to collect more information about the invitee. (e.g. their phone number, company name etc.)</p></div>
							
										<div class="form-group">
										   <label for="question.label">Question <span class="text-danger">*</span></label>
										   <input name="question_field" id="question_field" type="text" class="form-control ">
										</div>
										<div class="form-check float-right"><input type="checkbox" name="question_required" id="question_required" class="form-check-input" value="1"><label for="question_required" class="form-check-label">Is required?</label></div>
										<div class="form-group">
										   <label for="question.type">Answer type <span class="text-danger">*</span></label>
										   <select name="answer_options" id="answer_options" class="form-control timezone">
												<?php 
												foreach(answer_options() as $key=>$answer_type)
												{
													?>
													<option value="<?php echo $key;?>"> <?php echo $answer_type;?></option>
													<?php 
												}
												?>
											</select>
										</div>
										
										<input type="hidden" name="add_option" id="add_option" value="0" />
										<div class="add_option_mainbx" style="display:none">
											<label for="question.type">Options</label>
											<div class="add_optionlistbx">
												<div class="form-group">
													<div class="form-inline"><input type="text" class="form-control input_option_fld" name="input_option_fld[]"><a class="btn btn-danger removeaddoptiondatarow" data-module="add_option"><i class="fa fa-times"></i></a></div>
												</div>
												<div class="form-group">
													<div class="form-inline"><input type="text" class="form-control input_option_fld" name="input_option_fld[]"><a class="btn btn-danger removeaddoptiondatarow" data-module="add_option"><i class="fa fa-times"></i></a></div>
												</div>
											</div>
											<button type="button"  class="btn btn-link p-0 addQuestionOption">Add option</button>
										</div>
										
										<div class="form-group">
											<button type="button" class="btn btn-outline-secondary addQuestion"><i class="fa fa-plus"></i> Add </button>
										</div>
									 </div>
								  </div>
							    </div>
							    <div class="col-lg-6 col-sm-12">
							         <div class="card sahdow-sm p-4">
								  <div class="form-group">
									 <h5 class="text-gray-900"><strong>Preview</strong></h5>
								  </div>
									<div id="question_prev_bx">
										<input type="hidden" name="questiondatacounter" id="questiondatacounter" value="<?php echo $countquestion_data+3?>" />
										<div class="alert alert-primary">
											<div>
												<label for="name">Name <span class="text-danger">*</span></label>
												<div><input class="form-control " id="name" name="name" type="text" /></div>
											</div>
										</div>
										<div class="alert alert-primary">
											<div>
												<label for="email">Email address <span class="text-danger">*</span></label>
												<div><input class="form-control " id="email" name="email" type="email" /></div>
											</div>
										</div>
										<div class="alert alert-primary">
											<div>
												<label for="name">Phone <span class="text-danger">*</span></label>
												<div>
													<select class="form-control" id="phone" name="phone" style="width:27%">
														<?php 
														foreach(getCountrylist() as $row)
														{
															?>
															<option value="<?php echo $row->nicename.'  (+'.$row->phonecode.')';?>"> <?php echo $row->nicename.'  (+'.$row->phonecode.')';?></option>
															<?php 
														}
														?>
													</select>
													<input class="form-control" id="phone" name="phone" type="phone" min="0" style="width: 72%;" />
												</div>
											</div>
										</div>
										<?php if($countquestion_data>0)
										{
											$a=3;
											foreach($arrquestion_data as $que_data)
											{
												$arrque_data = explode('||', $que_data);
												$a++;
												$mandate = '';
												if($arrque_data[2]=='required')
												{
													$mandate = '<span class="text-danger">*</span>';
												}
											?>
											<div class="alert alert-primary">
												<button type="button" title="Remove this question" class="border-0 btn text-danger float-right p-0 mr-2 removequestions" data-module="questiondatacounter"><i class="fa fa-times"></i></button>
												<div>
													<label><?php echo $arrque_data[0];?> <?php echo $mandate;?></label>
													<div>
													<?php
													if($arrque_data[1] == 1)
													{
														$fieldinput = '<input class="form-control " id="question_no_'.$a.'" name="question_no_'.$a.'" type="text">';
													}
													else if($arrque_data[1] == 2)
													{
														$fieldinput = '<input class="form-control " id="question_no_'.$a.'" name="question_no_'.$a.'" type="date">';
													}
													else if($arrque_data[1] == 3)
													{
														$fieldinput = '<input class="form-control " id="question_no_'.$a.'" name="question_no_'.$a.'" type="number" min="0">';
													}
													else if($arrque_data[1] == 4)
													{
														$fieldinput = '<textarea rows="3" class="form-control" id="question_no_'.$a.'" name="question_no_'.$a.'" style="border: 1px solid rgb(204, 204, 204);" ></textarea>';
													}
													else if($arrque_data[1] == 5)
													{
														$fieldinput = '';
														if($arrque_data[3]!="")
														{
															$arradd_option = explode(',',$arrque_data[3]);
															foreach($arradd_option as $option_data)
															{
																if($option_data!="")
																{
																	$fieldinput .= '<div><label class="chkbx"><input type="checkbox" class="question_no_'.$a.'"  name="question_no_'.$a.'" value="'.$option_data.'"  /> '.$option_data.'</label></div>';
																}
															}
														}
														
													}
													else if($arrque_data[1] == 6)
													{
														$fieldinput = '';
														if($arrque_data[3]!="")
														{
															$arradd_option = explode(',',$arrque_data[3]);
															foreach($arradd_option as $option_data)
															{
																if($option_data!="")
																{
																	$fieldinput .= '<div><label class="chkbx"><input type="radio" class="question_no_'.$a.'"  name="question_no_'.$a.'" value="'.$option_data.'"  /> '.$option_data.'</label></div>';
																}
															}
														}
													}
													else if($arrque_data[1] == 7)
													{
														$fieldinput = '';
														if($arrque_data[3]!="")
														{
															$fieldinput = '<select class="form-control" id="question_no_'.$a.'">';
															$arradd_option = explode(',',$arrque_data[3]);
															$fieldinput .= '<option value=""> Select </option>';
															foreach($arradd_option as $option_data)
															{
																if($option_data!="")
																{
																	$fieldinput .= '<option value="'.$option_data.'"> '.$option_data.'</option>';
																}
															}
															$fieldinput .= '</select>';
														}
													}	
													echo $fieldinput;
													?>
													</div>
												</div>
												<input type="hidden" name="question_data[]" value="<?php echo $que_data;?>" />
											</div>
											<?php
											}
										} 
										?>
									</div>
							    </div> </div>
							    <div class="col-lg-12 col-sm-12">
									<button type="submit" class="btn btn-warning float-right">Save</button>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>				
			</form>
			
		</div>
		
	</div>
	<?php }?>
	
	<?php if($this->session->userdata('adm_admin_type') == 'EXECUTIVE'){?>
	<div class="col-12">
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
		<div class="card">
			<div class="card-body">
			<div class="card-head">
				<div class="row">
					<div class="form-group col-md-12 col-lg-12">	
						<h4 class="card-title">Recent Booking</h4>
						
						<div class="mr-3">
							<div class="table-responsive">
								<table class="table table-hover table-custom">
									<thead>
										<tr>
											<th scope="col">Sr. No.</th>
											<th scope="col">Invoice id</th>
											<th scope="col">Invoice Date</th>
											<th scope="col">Created Date</th>
											
											<th scope="col">Amount</th>
											<th scope="col">Status</th>
											
										</tr>
									</thead>
									<tbody>
									<?php if(count(array_filter($result_booking)) > 0)
									{
										$i=0;
										foreach($result_booking as $row)
										{
											$i++;
										?>
										<tr>
											<td><strong><?php echo $i;?></strong></td>
											<td>
											<a href="<?php echo base_url();?>admin/booking_detail/<?php echo $row->id;?>" class="label label-warning" title="View Booking Detail"><strong><?php echo 'INV#'.$row->fld_invno;?></strong></a>
											
											</td>
											<td><i class="fa fa-calendar"></i> <?php echo convertdate($row->pay_addedon,'d/m/Y , H:i A');?></td>
											<td><i class="fa fa-calendar"></i> <?php echo convertdate($row->pay_addedon,'d/m/Y , H:i A');?></td>
											<td>
												<?php if($row->paycurrency == 'INR'){?>
												<i class="fa fa-inr" aria-hidden="true"></i>
												<?php } ?>
												<?php if($row->paycurrency == 'USD'){?>
												<i class="fa fa-usd" aria-hidden="true"></i>
												<?php } ?>

												<?php echo $row->payamount;?>
											</td>
											
											<td>
											<?php if($row->pay_status == 'Paid')
											{
												$paysts = 'text-success';
											}
											if($row->status == 'Pending')
											{
												$paysts = 'text-warning';
											}
											?>
											<span class="badge bg-badge-grey <?php echo $paysts;?>"><i class="fa fa-circle me-1"></i> <?php echo $row->pay_status;?></span>
											
											</td>
											
										</tr>
										<?php
										}
									}
									?>
									</tbody>
								</table>
							</div>
						
						</div>
					</div>	
				</div>
				
			</div>
			</div>
			
		</div>
		
	</div>
	
	<?php }?>
	
</div>	


