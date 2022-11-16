 <!-- FOOTER -->
         <footer class="footer">
            <div class="container">
               <div class="row align-items-center flex-row-reverse">
                  <div class="col-md-12 col-sm-12 text-center">
                     Copyright © 2022 <a href="#">PhD Net All Righjts Reserved</a>.
                  </div>
               </div>
            </div>
         </footer>

      </div>
  

      <script src="js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/function/common_function.js"></script>
	
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
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/popper.min.js"></script>
     <script src="js/sidemenu.js"></script>
      <script src="js/sidebar.js"></script>
 <script src="js/custom.js"></script>  
<!-- JQUERY JS -->
		
		<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- CHART-CIRCLE JS-->
		<script src="assets/plugins/circle-progress/circle-progress.min.js"></script>

		<!-- RATING STARJS -->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>


		<!-- CUSTOM SCROLLBAR JS-->
		<script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
		<script src="assets/plugins/p-scroll/p-scroll.js"></script>
		<script src="assets/plugins/p-scroll/p-scroll-1.js"></script>

        

		<!-- SELECT2 JS -->
		<script src="assets/plugins/select2/select2.full.min.js"></script>

        
		<!-- C3.JS CHART JS  -->
		<script src="assets/plugins/charts-c3/d3.v5.min.js"></script>
		<script src="assets/plugins/charts-c3/c3-chart.js"></script>

		<!-- INPUT MASK JS -->
		<script src="assets/plugins/input-mask/jquery.mask.min.js"></script>

        <!-- CLIPBOARD JS -->
		<script src="assets/plugins/clipboard/clipboard.min.js"></script>
		<script src="assets/plugins/clipboard/clipboard.js"></script>

		<!-- PRISM JS -->
		<script src="assets/plugins/prism/prism.js"></script>


		<!-- Switcher js -->
		<script src="assets/switcher/js/switcher.js"></script>

        <link rel="stylesheet" href="<?php echo base_url();?>assets/snackbar/js-snackbar.css?v=1.3" />
	<script src="<?php echo base_url();?>assets/snackbar/js-snackbar.js?v=1.3"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/tagscript/css/amsify.suggestags.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/tagscript/js/jquery.amsify.suggestags.js"></script>
		<script type="text/javascript">
	$('#skills').amsifySuggestags({ tagLimit: 10 });
	</script>
	<style>
	.disabled{
		pointer-events:none;
		opacity:0.7;
	}
	.js-snackbar-container{
		z-index:9999;
	}
	</style>
   </body>
</html>