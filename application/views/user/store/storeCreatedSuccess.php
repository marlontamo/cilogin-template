<?php $this->load->view('header'); ?>
<div class="row">
	<div class="col-md-4">
		<div class="row">
				<div class="image-profile">
				  <h1>store list</h1>
				  <ol>
				  <?php  
				 foreach( $info as $data ){
				 	echo"<li><a href='".base_url('store/edit')."/".$data->store_id."'>".$data->store_name."</a></li>";
				 }
				 ?></ol>
         				</div>
				  
		
		</div>
	</div>
	<div class="col-md-4">
		<div class="row">
			<div class="entry">
				
				<h1>Data Inserted!!!</h1>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>

<?php $this->load->view('footer'); ?>
