<section class="content">
<h1 style="color:#fff">STORES MANAGER</h1>
<div class="row boxes">
       <?php $counter=0;
       	   foreach ($stores as $store) { $counter++;?>
             
       	   	<div class="col-lg-3 col-xs-12 ">
        
          <!-- small box -->
          <div class="small-box <?php echo "small-box-".$counter; ?>">
            <div class="inner">
            <p><?php echo $store->store_name; ?></p>
              <h3><?php echo $counter; ?></h3>

              <p>products</p>
            </div>
            <div class="icon">
             <span class="glyphicon glyphicon-home"></span>
            </div>
            <a href="<?php echo base_url('product/storeproducts')."/".$store->store_id;?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div>
       	 <?php  }     ?>
</div>
	     
	     
        <!-- <!-- ./col -->
        <!-- <div class="col-lg-3 col-xs-6"> -->
          <!-- small box -->
         <!--  <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
        <!-- ./col -->
        <!-- <div class="col-lg-3 col-xs-6"> -->
          <!-- small box -->
          <!-- <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
        <!-- ./col -->
        <!-- <div class="col-lg-3 col-xs-6"> -->
          <!-- small box -->
          <!-- <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
        <!-- ./col -->
      <!-- </div> --> 
</section>