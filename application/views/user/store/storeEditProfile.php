<?php $this->load->view('user/Admin_lte_theme/Admin_lte_header'); ?>
<?php $this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar'); ?>
 <div class="content-wrapper">
 <section class="content">
 <h1> Store Edit Profile</h1>
<div class="row">
<?php  ?>

 <table class="table-hover table">
 	<thead>
 		<th>store name</th>
 		<th>store Id</th>
 		 <th>Address id</th>
     <th>Ceated date</th>
     <th>Updated date</th>
 	</thead>
 	<tbody>
 	     
         <?php  
           
          foreach ($storeData as $key) {
            
           echo "<tr>";
            echo form_open(base_url('store/update'));
            echo "<td><input type='text'name='store_name' class='form-control' value='".$key->store_name."'/></td>";
            echo "<td><input type='text'name='store_id' class='form-control' value='".$key->store_id."'/></td>";
            echo "<td><input type='text'name='address_id' class='form-control' value='".$key->address_id."'/></td>";
             echo "<td><input type='text'name='created_date' class='form-control' value='".$key->created_date."'/></td>";
              echo "<td><input type='text'name='updated_date' class='form-control' value='".$key->updated_date."'/></td>";
             echo form_submit('save','save');
             echo form_close();
             echo "</tr>";    
           }?>
         
          
          
     <div class="row"> 
     <div class="col-md-8"></div>    
 		<div class='dropdown col-md-4'><b>option:</b>
    <button class='btn btn-xs btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>
    <span class='caret'></span></button>
    <ul class='dropdown-menu'>
      <li><a href='<?php echo base_url('store/view')."/".$storeData[0]->store_id; ?>'><span class='fa fa-eye' aria-hidden='true'></span>view</a></li>
      <li><a href=''><span class='fa fa-pencil-square-o' aria-hidden='true'></span>edit</a></li>
      <li><a href=''><span class='fa fa-trash' aria-hidden='true'></span>delete</a></li>
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
