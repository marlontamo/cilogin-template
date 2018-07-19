<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
    </section>

    <!-- Main content -->
    <section class="content">
           
      <!-- SELECT2 EXAMPLE -->
      <?php
        $storeID =$_SESSION['store_id'];
     $product_id = uniqid();
    $Updated_Date = date('Y-m-d H:i:s');
    $Created_Date = date('Y-m-d H:i:s');
    $UserID = $_SESSION['user_id'];
       echo form_open('store/add_to_store');
        $prod_id = array(
                  'name'          => 'product_id',
                  'id'            => 'product_id',
                  'type'          => 'hidden',
                  'value'          =>  $product_id,
                  
          );

          echo form_input($prod_id);
          $user_id = array(
                  'name'          => 'added_by',
                  'id'            => 'updated_date',
                  'type'          => 'hidden',
                  'value'          =>  $UserID,
                  
          );

          echo form_input($user_id);
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
          $productby = array(
                  'name'          => 'store_id',
                  'id'            => 'created_date',
                  'type'          => 'hidden',
                  'value'          =>  $storeID,
                  
          );

          echo form_input($productby);  
      ?>
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Product Form</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Product Title</label>
              <?php  $store_name = array(
                  'name'          => 'product_title',
                  'id'            => 'inputEmail3',
                  'placeholder'   => 'Product Title',
                  'size'          => '50',
                  'class'         => 'form-control'
                                   );

          echo form_input($store_name); ?>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Product description</label>
                <?php $data = array(
                                      'type'  => 'text',
                                      'name'  => 'product_desc',
                                      'id'    =>  'inputEmail3',
                                      'placeholder' => 'Product description',
                                      'class' => 'form-control'
                              );

                              echo form_input($data); ?>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
              <label>Email</label>
                   
                    <?php $data = array(
                                      'type'  => 'email',
                                      'name'  => 'email',
                                      'id'    =>  'inputEmail3',
                                      'placeholder' => 'Email ex: john@example.com',
                                      'class' => 'form-control'
                              );

                              echo form_input($data); ?>
             
              </div>
              <div class="form-group">
              <label>Price</label>
                   
                    <?php $data = array(
                                      'type'  => 'number',
                                      'name'  => 'price',
                                      'id'    =>  'inputEmail3',
                                      'placeholder' => 'price',
                                      'class' => 'form-control'
                              );

                              echo form_input($data); ?>
             
              </div>
              <!-- /.form-group -->
              <div class="form-group">

                <div class="col-sm-10">
                      <?php 
              $data = array(
                                      'type'  => 'submit',
                                      'name'  => 'mysubmit',
                                      'id'    =>  'inputEmail3',
                                      'value'  => 'Add Product',
                                      'class' => 'btn btn-md btn-danger pull-right'
                              );
             echo form_submit($data); ?>
                </div>

              </div>
              
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
             
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Marlon Tamo
        </div>
      </div>
     <!--  hiddenfields -->
   <?php 
    

    ?>     
  <!-- / hidden fields end -->
                <!-- /.input group -->
              </div>
              <!-- /.form group >

                <!-- /.input group -->
              </div>
              <!-- /.form group -->

                <!-- /.input group -->
              </div>
              <!-- /.form group -->

            
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

           
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
       
              <!-- /.form group -->

            
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
      
                <!-- /.input group -->
              </div>
           
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

            
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

            
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div> -->
      <!-- /.row end small forms -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
   //extracted code
       
       
   ?>