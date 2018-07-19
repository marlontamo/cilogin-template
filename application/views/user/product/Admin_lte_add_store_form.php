<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advanced Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
      <?php echo "<h1>".$_data['username']."</h1>" ?>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <?php echo form_open('product/add_product');
      
       
      ?>
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>

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
              <?php $data = array(
                                      'type'  => 'text',
                                      'name'  => 'product_title',
                                      'id'    =>  'inputEmail3',
                                      'placeholder' => 'Product Title',
                                      'class' => 'form-control'
                              );

                              echo form_input($data); ?>
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
                    <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->
                    <?php $data = array(
                                      'type'  => 'email',
                                      'name'  => 'email',
                                      'id'    =>  'inputEmail3',
                                      'placeholder' => 'Email ex: john@example.com',
                                      'class' => 'form-control'
                              );

                              echo form_input($data); ?>
               <!--  <label>Multiple</label>
                <select class="form-control select2" style="width: 100%;">
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select> -->
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
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div>
      </div>
     <!--  hiddenfields -->
      <?php 
      $product_id = uniqid(); // this will gernerate unique product id
      $created_date= date("Y-m-d H:i:s");//createddate and updated date
      $store_id = 8;// store Id
      $user_id = $_SESSION['user_id'];//place the php variable of the 
      $product_id = array(
                                      'type'  => 'hidden',
                                      'name'  => 'product_id',
                                      'id'    =>  'inputEmail3',
                                      'value' => $product_id,
                                      'class' => 'form-control'
                              );

                              echo form_input($product_id); 
      $added_by = array(
                                      'type'  => 'hidden',
                                      'name'  => 'added_by',
                                      'id'    =>  'inputEmail3',
                                      'value' => $user_id,
                                      'class' => 'form-control'
                              );

                              echo form_input($added_by); 
      $owner = array(
                                      'type'  => 'hidden',
                                      'name'  => 'owned_by',
                                      'id'    =>  'inputEmail3',
                                      'value' => $store_id,
                                      'class' => 'form-control'
                              );

                              echo form_input($owner);
      $createddate = array(
                                      'type'  => 'hidden',
                                      'name'  => 'created_date',
                                      'id'    =>  'inputEmail3',
                                      'value' => $created_date,
                                      'class' => 'form-control'
                              );

                              echo form_input($createddate);
      $updated_date = array(
                                      'type'  => 'hidden',
                                      'name'  => 'updated_date',
                                      'id'    =>  'inputEmail3',
                                      'value' => $created_date,
                                      'class' => 'form-control'
                              );

                              echo form_input($updated_date);
                              ?>
    <!--  /hiddefields -->
      <?php echo form_close(); ?>
      <!-- /.box -->
<!-- small forms -->
      <!-- <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Input masks</h3>
            </div>
            <div class="box-body">
              <Date dd/mm/yyyy >
              <div class="form-group">
                <label>Date masks:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group >

              <!-- Date mm/dd/yyyy >
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- phone mask >
              <div class="form-group">
                <label>US phone mask:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- phone mask >
              <div class="form-group">
                <label>Intl US phone mask:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control"
                         data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- IP mask >
              <div class="form-group">
                <label>IP mask:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box >

          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Color & Time Picker</h3>
            </div>
            <div class="box-body">
              <!-- Color Picker >
              <div class="form-group">
                <label>Color picker:</label>
                <input type="text" class="form-control my-colorpicker1">
              </div>
              <!-- /.form group -->

              <!-- Color Picker >
              <div class="form-group">
                <label>Color picker with addon:</label>

                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control">

                  <div class="input-group-addon">
                    <i></i>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- time Picker >
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Time picker:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) >
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Date picker</h3>
            </div>
            <div class="box-body">
              <!-- Date >
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date range >
              <div class="form-group">
                <label>Date range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date and time range >
              <div class="form-group">
                <label>Date and time range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservationtime">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date and time range >
              <div class="form-group">
                <label>Date range button:</label>

                <div class="input-group">
                  <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                    <span>
                      <i class="fa fa-calendar"></i> Date range picker
                    </span>
                    <i class="fa fa-caret-down"></i>
                  </button>
                </div>
              </div>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck >
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">iCheck - Checkbox &amp; Radio Inputs</h3>
            </div>
            <div class="box-body">
              <!-- Minimal style -->

              <!-- checkbox >
              <div class="form-group">
                <label>
                  <input type="checkbox" class="minimal" checked>
                </label>
                <label>
                  <input type="checkbox" class="minimal">
                </label>
                <label>
                  <input type="checkbox" class="minimal" disabled>
                  Minimal skin checkbox
                </label>
              </div>

              <!-- radio >
              <div class="form-group">
                <label>
                  <input type="radio" name="r1" class="minimal" checked>
                </label>
                <label>
                  <input type="radio" name="r1" class="minimal">
                </label>
                <label>
                  <input type="radio" name="r1" class="minimal" disabled>
                  Minimal skin radio
                </label>
              </div>

              <!-- Minimal red style -->

              <!-- checkbox >
              <div class="form-group">
                <label>
                  <input type="checkbox" class="minimal-red" checked>
                </label>
                <label>
                  <input type="checkbox" class="minimal-red">
                </label>
                <label>
                  <input type="checkbox" class="minimal-red" disabled>
                  Minimal red skin checkbox
                </label>
              </div>

              <!-- radio >
              <div class="form-group">
                <label>
                  <input type="radio" name="r2" class="minimal-red" checked>
                </label>
                <label>
                  <input type="radio" name="r2" class="minimal-red">
                </label>
                <label>
                  <input type="radio" name="r2" class="minimal-red" disabled>
                  Minimal red skin radio
                </label>
              </div>

              <!-- Minimal red style -->

              <!-- checkbox >
              <div class="form-group">
                <label>
                  <input type="checkbox" class="flat-red" checked>
                </label>
                <label>
                  <input type="checkbox" class="flat-red">
                </label>
                <label>
                  <input type="checkbox" class="flat-red" disabled>
                  Flat green skin checkbox
                </label>
              </div>

              <!-- radio >
              <div class="form-group">
                <label>
                  <input type="radio" name="r3" class="flat-red" checked>
                </label>
                <label>
                  <input type="radio" name="r3" class="flat-red">
                </label>
                <label>
                  <input type="radio" name="r3" class="flat-red" disabled>
                  Flat green skin radio
                </label>
              </div>
            </div>
            <!-- /.box-body >
            <div class="box-footer">
              Many more skins available. <a href="http://fronteed.com/iCheck/">Documentation</a>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div> -->
      <!-- /.row end small forms -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->