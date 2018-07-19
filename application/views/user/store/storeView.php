<?php $this->load->view('header'); ?>
<div class="row">
	<div class="col-md-4">
		<div class="row">
				<div class="image-profile">
				  <h1>shownewstore</h1>
				     
         				</div>
		           
		</div>
	</div>

	<div class="col-md-4">
	<ul><?php $url= base_url();
	foreach ($storeData as $key => $val) {
         // var_dump($val->store_name);
		echo"<li><a href='".$url."store/view/".$val['store_id']."'>".$val['store_name']."</a></li>";
    }
    
	 ?>
		</ul>
		
	</div>

<?php $this->load->view('footer'); ?>