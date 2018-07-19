<?php?>
<div class="content-wrapper">
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>product Id</th>
                  <th>product Name</th>
                  <th>Owner User id</th>
                  <th>store name</th>
                  <th><span class="fa fa-cog" aria-hidden="true"></span>option</th>
                </tr>
                </thead>
                <tbody>
                <?php 
          foreach ($stores as $key) { 
             ?>
                   
                 <tr>
                  <td><?php echo $key->product_id; ?></td>
                  <td><?php echo $key->product_title; ?>
                  </td>
                  <td><?php echo  $this->product->get_username_by_id($key->added_by); ?></td>
                  <td><?php echo  $this->product->get_storename_by_id($key->product_store); ?></td>
                  <td>
                    <div class="dropdown">
    <button class="btn btn-xs btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="<?php echo base_url('store/view').'/'.$key->product_id;?>"><span class="fa fa-eye" aria-hidden="true"></span>view</a></li>
      <li><a href="<?php echo base_url('store/modify').'/'.$key->product_id;?>"><span class="fa fa-pencil-square-o" aria-hidden="true"></span>edit</a></li>
      <li><a href="#"><span class="fa fa-trash" aria-hidden="true"></span>delete</a></li>
    </ul>
  </div>
</div>
                </td>
                </tr>
                <?php } ?>

                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

      
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>



<?php ?>