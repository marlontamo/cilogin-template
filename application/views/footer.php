<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	</main><!-- #site-content -->

	<footer id="site-footer" role="contentinfo">
	</footer><!-- #site-footer -->

	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/script.js') ?>"></script>
	<!-- vue and axios-->
	  <script src="<?php echo base_url('asset/js/vue/vue.min.js'); ?>"></script>
    <script src="<?php echo base_url(); ?>asset/js/vee-validate/vee-validate.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/axios/axios.min.js"></script>
    
       <script>
       	$(document).ready(function(){
                 var api = 'http://localhost/inventlatestversion/store/get_data';
                 console.log(api.name);
        	});

       </script>

</body>
</html>