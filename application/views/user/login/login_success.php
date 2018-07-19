<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Login success!</h1>
				
				<a class="btn btn-sm btn-primary pull-right" 
				href=" <?php $url = base_url('store/get_store');
				                $id =  $_SESSION['user_id'];
				               
				 echo  $url."/".$id;?>">show my store's</a>			
			</div>
			<p>You are now logged in.</p>
			<b>Welcomeback</b><button class="btn btn-md btn-warning"><?php echo $_SESSION['username']; ?></button>
		</div>
	</div><!-- .row -->
</div><!-- .container -->