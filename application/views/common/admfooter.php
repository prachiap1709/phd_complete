</div>
</div>
	  <!-- content-wrapper ends -->
	  <!-- partial:partials/_footer.html -->
	  <footer class="footer">
		<div class="container-fluid clearfix">
		  <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php echo date('Y');?> . All Rights Reserved.</span>
		  <!--<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><?php echo WEBNAME;?></span>-->
		  <span class="float-none d-block mt-1 mt-sm-0 text-center"><?php echo WEBNAME;?></span>
		</div>
	  </footer>
	  <!-- partial -->
	</div>
	<!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->


<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->

<script src="assets/function/common_function.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="assets/js/shared/off-canvas.js"></script>
<script src="assets/js/shared/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="assets/js/demo_1/dashboard.js"></script>
<!-- End custom js for this page-->

<script>
$(document).ready(function(){
	
	$('#example').DataTable({
		"ordering": false,
		"pageLength": 25
	});
});
$(document).ready(function(){
	$('#example1').DataTable({
	  "ordering": true,
	  "pageLength": 25
	});
});
</script>

<script>
$(document).ready(function(){
	$("input").focus(function(){
	   var id=this.id;
	   $("#"+id+"Err").html('');
	   $("#"+id).css('border','1px solid #ccc');
	});
	$("select").focus(function(){
	   var id=this.id;
	   $("#"+id+"Err").html('');
	   $("#"+id).css('border','1px solid #ccc');
	});
	$("textarea").focus(function(){
	   var id=this.id;
	   $("#"+id+"Err").html('');
	   $("#"+id).css('border','1px solid #ccc');
	});
});
</script>

<?php
if($module == 'dashboard' || $module == 'admin' || $module == 'news')
{
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
    var dateFormat = "dd-mm-yy",
      school_from_date = $( "#school_from_date" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          changeYear: true,
		  dateFormat:'dd-mm-yy',
        })
        .on( "change", function() {
          school_to_date.datepicker( "option", "minDate", getDate( this ) );
        }),
      school_to_date = $( "#school_to_date" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
		changeYear: true,
        dateFormat:'dd-mm-yy',
      })
      .on( "change", function() {
        school_from_date.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
});

$( function() {
    $( "#news_date" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat:'dd-mm-yy',
		maxDate:0,
	});
});
</script>
<?php 
}
?>

<?php
if($module == 'dashboard')
{
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/select2/select2.css">
<script type="text/javascript" src="<?php echo base_url();?>assets/select2/select2.js"></script>
<script>
/* $(document).ready(function(){
	$('.subcatfields').select2({
	});
}); */

	$(document).ready(function(){
		$('#timezone').select2({
			placeholder: "Select Timezone",
			allowClear: true
		});
		$('#answer_options').select2({
			placeholder: "Select Answer Type",
			allowClear: true
		});
	}); 
</script>
<?php 
}
?>
<?php if($module=='admin' && $submodule=='chat'){?>
<script>
getuserlisting('<?php echo base_url();?>');
</script>
<?php }?>


<?php
if($module == 'admin')
{
?>
<link rel="stylesheet" type="text/css" href="assets/tagscript/css/amsify.suggestags.css">
<script type="text/javascript" src="assets/tagscript/js/jquery.amsify.suggestags.js"></script>

<script type="text/javascript">
$('input[name="tags"]').amsifySuggestags({
	suggestionsAction : {
	  //url : 'https://phdlogic.in/trcm/ajax/getTagslist'
	}
});
</script>
<?php } ?>


<link rel="stylesheet" href="assets/snackbar/js-snackbar.css?v=1.3" />
<script src="assets/snackbar/js-snackbar.js?v=1.3"></script>
<style>
.js-snackbar-container{
	z-index:9999;
}
</style>
</body>
</html>