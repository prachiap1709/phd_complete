<style>
.form-control{
	margin-bottom:10px;
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
				 <h4 class="card-title">Manage Package Information </h4>
					<form action="<?php echo base_url();?>admin/updatepackage" onsubmit="if(!confirm('Please confirm!')) return false;" method="POST">
					<div class="form-group row form-detls">
						<div class="col-sm-12 formmsi"></div>
						
						<div class="col-sm-2">
							<label class="col-form-label"><strong>Package Name</strong></label>
						</div>
						<div class="col-sm-1">
							<label class="col-form-label"><strong>Currency</strong></label>
						</div>
						<div class="col-sm-2">
							<label class="col-form-label"><strong>Main Amount</strong></label>							
						</div>
						<div class="col-sm-2">
							<label class="col-form-label"><strong>Discount Amount</strong></label>							
						</div>
						<div class="col-sm-2">
							<label class="col-form-label"><strong>Timeline</strong></label>							
						</div>
						<div class="col-sm-1">
							<label class="col-form-label"><strong>Zoom Call</strong></label>							
						</div>
						<div class="col-sm-2">
							<label class="col-form-label"><strong>Call Time</strong></label>							
						</div>
						<?php foreach($result as $row){?>
						<div class="col-sm-2">
							<input type="text" class="form-control" value="<?php echo $row->fld_name;?>" readonly />
						</div>
						<div class="col-sm-1">
							<input type="text" class="form-control" value="<?php echo $row->fld_currency;?>" readonly />
						</div>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="main_amt[]" value="<?php echo $row->fld_main_amt;?>" />
						</div>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="discount_amt[]" value="<?php echo $row->fld_discount_amt;?>" />
						</div>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="timeline[]" value="<?php echo $row->fld_timeline;?>" />
						</div>
						<div class="col-sm-1">
							<input type="text" class="form-control" name="zoom_call[]" value="<?php echo $row->fld_zoom_call;?>" />
						</div>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="call_time[]" value="<?php echo $row->fld_call_time;?>" />
							<input type="hidden" name="row_id[]" value="<?php echo $row->id;?>" />
						</div>
						<?php } ?>
					</div>
					<div class="form-group row form-detls">
						<div class="col-sm-12 formmsi"></div>
						<div class="col-sm-12"><button class="btn btn-primary float-right">Update</button></div>
					</div>
					</form>
				</div><!-- .card -->

			</div><!-- .container -->
			
		</div>
</div>

