<?php $this->load->view('user/Admin_lte_theme/Admin_lte_header'); ?>
<?php $this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar'); ?>
 <div class="content-wrapper">
 <section class="content">
 <h1> <?php echo " ".$storeData[0]->store_name; ?> Profile</h1>
<div class="row">
<?php  ?>

 <table class="table-hover table">
 	<thead>
 		<th>Key</th>
 		<th>value</th>
 		
 	</thead>
 	<tbody>
 	     
         <?php  
         //print_r();
          foreach ($storeData[0] as $key=> $value) {
            echo "<tr><td>".$key."</td>";
            echo "<td>".$value."</td></tr>";
           }?>
          
       
     <div class="row"> 
     <div class="col-md-8"></div>    
 		<div class='dropdown col-md-4'><b>option:</b>
    <button class='btn btn-xs btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>
    <span class='caret'></span></button>
    <ul class='dropdown-menu'>
      <li><a href='<?php echo base_url('store/view')."/".$storeData[0]->store_id; ?>'><span class='fa fa-eye' aria-hidden='true'></span>view</a></li>
      <li><a href='<?php echo base_url('store/modify')."/".$storeData[0]->store_id; ?>'><span class='fa fa-pencil-square-o' aria-hidden='true'></span>edit</a></li>
      <li><a href=''><span class='fa fa-trash' aria-hidden='true'></span>delete</a></li>
      <li><a href='<?php echo base_url('product/get_mystore_product')."/".$storeData[0]->store_id; ?>'><span class='fa fa-eye' aria-hidden='true'></span>show <?php echo $storeData[0]->store_name; ?> products</a></li>
      <li><a href='<?php echo base_url('store/addstoreproduct')."/".$storeData[0]->store_id; ?>'><span class='fa fa-eye' aria-hidden='true'></span>add product to  <?php echo " ".$storeData[0]->store_name; ?></a></li>
    </ul>
  </div>
</div>
 		</div> 
 	</tbody>
 </table>
</div>

</section>
</div>
<?php $this->load->view('user/Admin_lte_theme/Admin_lte_scripts_footer'); 
//$this->store->get_username_by_id($key->user_id)?>
