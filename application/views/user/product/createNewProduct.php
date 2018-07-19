<?php $this->load->view('header'); ?>
<div class="row">
	<div class="col-md-4">
		<div class="row">
				<div class="image-profile">
				  <h1>createnewProduct</h1>
				 
				 
         				</div>
				  
		
		</div>
	</div>
	<div class="col-md-4">
		<div class="row">
			<div class="entry">
				
				<div class="form" id="new-store">
				   
					<?php

                   $storeID =$this->session->all_userdata()['__ci_last_regenerate'];
                   $Updated_Date = date('Y-m-d H:i:s');
                   $Created_Date = date('Y-m-d H:i:s');
                   $UserID = $_SESSION['user_id'];
					 echo form_open();
					 $userhidden = array(
					        'name'          => 'user_Id',
					        'id'            => 'updated_date',
					        'type'          => 'hidden',
					        'value'          =>  $UserID,
					        
					);

					echo form_input($userhidden);
					 $updated_date = array(
					        'name'          => 'updated_date',
					        'id'            => 'updated_date',
					        'type'          => 'hidden',
					        'value'          =>  $Updated_Date,
					        
					);

					echo form_input($updated_date);
					 $created_date = array(
					        'name'          => 'created_date',
					        'id'            => 'created_date',
					        'type'          => 'hidden',
					        'value'          =>  $Created_Date,
					        
					);

					echo form_input($created_date);
					 $product_id_hidden = array(
					        'name'          => 'product_id',
					        'id'            => 'product_id',
					        'type'          => 'number',
					        'value'          =>  $UserID,
					        
					);

					echo form_input($product_id_hidden);
					$product_name = array(
					        'name'          => 'product_Name',
					        'id'            => 'product_Name',
					        'placeholder'   => 'Product_Name',
					        'maxlength'     => '100',
					        'size'          => '50',
					        'style'         => 'width:50%'
					);

					echo form_input($product_name);
					$prod_desc = array(
					        'name'          => 'product_desc',
					        'id'            => 'product_desc',
					        'placeholder'   => 'product_description',
					        'type'			=> 'textarea',
					        'maxlength'     => '200',
					        'size'          => '50',
					        'style'         => 'width:50%'
					);

					echo form_textarea($prod_desc);
					
					$button = array(
						        'name'          => 'submit',
						        'id'            => 'submit',
						        'value'         => 'submit',
						        'type'          =>  'submit',
						         'class'		=>  'btn btn-danger btn-xs',
						          );

                    echo form_input($button);
              
				      echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>

<?php $this->load->view('footer'); ?>
