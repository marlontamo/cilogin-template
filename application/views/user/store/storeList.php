<?php  $this->load->view('user/Admin_lte_theme/Admin_lte_header');
       $this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar'); ?>
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
                  <th>Store Id</th>
                  <th>Store Name</th>
                  <th>Owner User id</th>
                  <th>Address Id</th>
                  <th><span class="fa fa-cog" aria-hidden="true"></span>option</th>
                </tr>
                </thead>
                <tbody>
                <?php 
          foreach ($stores as $key) { ?>
                   <tr>
                  <td><?php echo $key['store_id']; ?></td>
                  <td><?php echo $key['store_name']; ?>
                  </td>
                  <td><?php echo $key['user_id']; ?></td>
                  <td><?php echo $key['address_id']; ?></td>
                  <td>
                    <div class="dropdown">
    <button class="btn btn-xs btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="<?php echo base_url('store/view').'/'.$key['store_id'];?>"><span class="fa fa-eye" aria-hidden="true"></span>view</a></li>
      <li><a href="<?php echo base_url('store/modify').'/'.$key['store_id'];?>"><span class="fa fa-pencil-square-o" aria-hidden="true"></span>edit</a></li>
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



<?php  $this->load->view('user/Admin_lte_theme/Admin_lte_scripts_footer'); ?>