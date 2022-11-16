<?php 
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
				
				<!-- Page-body start -->
					<div class="card-head">
						<h4 class="card-title">Manage Booking <?php echo $consultantname;?></h4>
					</div>
							<div class="clearfix">&nbsp;</div>
							<table id="example" class="table table-striped table-bordered nowrap">
								<thead>
									<tr>
										<th>Booking Information</th>
										<th>Timezone</th>
										<th>Added On</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php if(count(array_filter($result)) > 0)
									foreach($result as $row)
									?>
									<tr>
									  <td><?php echo $row->fld_timezone;?></td>
									  <td><?php echo convertdate($row->fld_addedon,'d M Y')?></td>
									  <td style="text-align:center">
									  </td>
									  <td style="text-align:center">
									  </td>
									</tr>
									<?php
									}
								}
								else
								{
									?>
									<tr>
										<td colspan='6'><div class="alert alert-danger">Info. Not Available</div></td>
									</tr>
									<?php
								}
								?>
								</tbody>
							</table>
							</div><!-- .card-innr -->
						
						</div><!-- .card -->
					</div><!-- .container -->
</div><!-- .page-content -->