<section class="content-header">
     <!-- <h1>
       Store Management System 
        <small>dashboard</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>-->

        <?php if (validation_errors()) : ?>
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= validation_errors() ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if (isset($error)) : ?>
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $error ?>
        </div>
      </div>
    <?php endif; ?>
    </section>
<?php echo form_open(); ?>

<div class="container">
  <div class="row text-center">
    <h1>Registration Sheet for Resident Personal information</h1>
  </div>
</div>
<!--name section-->
<fieldset>
<div class="container">

  <div class="row">
   
  <div class="col-md-12">
     <div class="col-md-1"><span class="glyphicon glyphicon-user form-control-feedback"></span>
     </div>
    <div class="col-md-4">
    <div class="row">

      <div class="form-group has-feedback">

        <!-- <input type="email" class="form-control" placeholder="Email"> -->
        <?php $FirstName = array(
                                      'type'  => 'text',
                                      'name'  => 'FirstName',
                                      'id'    =>  'inputFirstName',
                                      'placeholder' => 'First Name',
                                      'class' => 'form-control'
                              );

                              echo form_input($FirstName); ?>
        
      </div>
      </div>
       </div><!--/1st col-4-->
    <div class="col-md-3">
    <div class="row">
      <div class="form-group has-feedback">

        <!-- <input type="email" class="form-control" placeholder="Email"> -->
        <?php $MiddleName = array(
                                      'type'  => 'text',
                                      'name'  => 'Middlename',
                                      'id'    =>  'inputMiddlename',
                                      'placeholder' => 'Middle Name',
                                      'class' => 'form-control'
                              );

                              echo form_input($MiddleName); ?>
       
      </div>
      </div>
    </div><!--/col-4-2nd-->
    <div class="col-md-4">
      <div class="row">
      <div class="form-group has-feedback">
      
        <!-- <input type="email" class="form-control" placeholder="Email"> -->
        <?php $LastName = array(
                                      'type'  => 'text',
                                      'name'  => 'last',
                                      'id'    =>  'inputLastName',
                                      'placeholder' => 'Last Name',
                                      'class' => 'form-control'
                              );

                              echo form_input($LastName); ?>
        
      </div>
      </div>
    </div><!--/col-4-last-->
   </div>
  </div>
</div>
</fieldset>
<!--/name section-->
<!--address section-->
<fieldset>
<div class="container">
  <div class="row">
  <div class="col-md-12">
  <div class="col-md-1">
    <span class="glyphicon glyphicon-home form-control-feedback"></span>
  </div>
    <div class="col-md-1">
    <div class="row">
      <div class="form-group has-feedback">

        <!-- <input type="email" class="form-control" placeholder="Email"> -->
        <?php $HouseNumber = array(
                                      'type'  => 'number',
                                      'name'  => 'HouseNumber',
                                      'id'    =>  'inputFirstName',
                                      'placeholder' => 'HouseNumber',
                                      'class' => 'form-control'
                              );

                              echo form_input($HouseNumber); ?>
       
      </div>
      </div>
       </div><!--/1st col-4-->
    <div class="col-md-7">
    <div class="row">
      <div class="form-group has-feedback">

        <!-- <input type="email" class="form-control" placeholder="Email"> -->
        <?php $StreetAddress = array(
                                      'type'  => 'text',
                                      'name'  => 'Street Address',
                                      'id'    =>  'inputStreetAddress',
                                      'placeholder' => 'StreetAddress',
                                      'class' => 'form-control'
                              );

                              echo form_input($StreetAddress); ?>
       
      </div>
      </div>
    </div><!--/col-4-2nd-->
    <div class="col-md-3">
      <div class="row">
      <div class="form-group has-feedback">
      
        <!-- <input type="email" class="form-control" placeholder="Email"> -->
        <?php $MobileNumber = array(
                                      'type'  => 'text',
                                      'name'  => 'MobileNumber',
                                      'id'    =>  'MobileNumber/Landline',
                                      'placeholder' => 'Landline /Mobile',
                                      'class' => 'form-control'
                              );

                              echo form_input($MobileNumber); ?>
       
      </div>
      </div>
    </div><!--/col-4-last-->
   </div>
  </div>
</div>
</fieldset>
<!--/name section-->
<!--work section-->
<fieldset>
<div class="container">
  <div class="row">
  <div class="col-md-12">
  <div class="col-md-1">
    <span class="glyphicon glyphicon-briefcase form-control-feedback"></span>
  </div>
    <div class="col-md-1">
    <div class="row">
      <div class="form-group has-feedback">

        <!-- <input type="email" class="form-control" placeholder="Email"> -->
       
        <?php $age = array(
                                      'type'  => 'number',
                                      'name'  => 'Age',
                                      'id'    =>  'inputAge',
                                      'placeholder' => 'Age',
                                      'class' => 'form-control'
                              );

                              echo form_input($age); ?>
      </div>
      </div>
       </div><!--/1st col-4-->
    <div class="col-md-6">
    <div class="row">
      <div class="form-group has-feedback">

        <!-- <input type="email" class="form-control" placeholder="Email"> -->
        <?php $Occupation = array(
                                      'type'  => 'text',
                                      'name'  => 'Occupation',
                                      'id'    =>  'inputOccuption',
                                      'placeholder' => 'Occupation',
                                      'class' => 'form-control'
                              );

                              echo form_input($Occupation); ?>
       
      </div>
      </div>
    </div><!--/col-4-2nd-->
    <div class="col-md-4">
      <div class="row">

      
      <div class="form-group has-feedback">
      
        <!-- <input type="email" class="form-control" placeholder="Email"> -->
        <?php $Email= array(
                                      'type'  => 'email',
                                      'name'  => 'Email',
                                      'id'    =>  'inputEmail',
                                      'placeholder' => 'Email',
                                      'class' => 'form-control'
                              );

                              echo form_input($Email); ?>
       
      </div>
      </div>
    </div><!--/col-4-last-->
   </div>
  </div>
</div>
</fieldset>
<!--/work section-->
<!--carowner section-->
<fieldset>
<div class="container">
  <div class="row">
  <div class="col-md-12">
  <div class="col-md-1">
   <span class="fas fa-car pull-right"></span>
  </div>
    <div class="col-md-1">
       
    <div class="row">
     
      <div class="form-group has-feedback">

        <!-- <input type="email" class="form-control" placeholder="Email"> -->
      
         <label>Car owner</label><input type="checkbox" name="is_carowner" value="1">
      </div>
      </div>
       </div><!--/1st col-4-->
    <div class="col-md-6">
    <div class="row">
      <div class="form-group has-feedback">

        <!-- <input type="email" class="form-control" placeholder="Email"> -->
        <?php $tyypeOfVehicle = array(
                                      'type'  => 'text',
                                      'name'  => 'type of vehicle',
                                      'id'    =>  'inputTypeOf Vehicle',
                                      'placeholder' => 'tyypeOfVehicle',
                                      'class' => 'form-control'
                              );

                              echo form_input($tyypeOfVehicle); ?>
       
      </div>
      </div>
    </div><!--/col-4-2nd-->
    <div class="col-md-4">
      <div class="row">
      
     
      <div class="form-group has-feedback">
      
        <!-- <input type="email" class="form-control" placeholder="Email"> -->
        <?php $plateNumber= array(
                                      'type'  => 'text',
                                      'name'  => 'plateNumber',
                                      'id'    =>  'inputPlateNumber',
                                      'placeholder' => 'plateNumber',
                                      'class' => 'form-control'
                              );

                              echo form_input($plateNumber); ?>
       
      </div>
      </div>
    </div><!--/col-4-last-->
   </div>
  </div>
</div>
</fieldset>
<!--/carowner section-->

</form>













<div class="row text-center">


<?php
// $current_=""; 
// $counter=1;
// $data ="HEELLLOLAA";
// $arr = str_split($data);
// echo current($arr)."".$counter."</br>";
// for ($i=0; $i < count($arr) ; $i++) { 
 
   
//   if(current($arr)==next($arr)){
//        $current_.$i = current($arr);
//        $counter= $counter+1;
//         echo "";
//   }else if($current_.$i!=next($arr)){
//        $counter = 0;
     
//   }else{
//      echo current($arr)."".$counter."</br>";
//   }
// }
// $current="";
//  $counter=0;
//  $string= "HEELLLOLAA";
 

//   function letter_counter($string= null){
//    $arr = str_split($string);
//  $cont = array_count_values($arr);
//  foreach ($cont as $current_index => $value) {
//        //check if the current key is equal to the next index
       
//        $current = current($arr);
//      if($current_index == $current){
//        //if it is equal just dont print the key but add 1 to the counter
//        $current = current($arr);
//        echo "";
//          echo $current_index."".$value;
//        $counter = $counter+1;
//        //if the current index does not match with the next index print the key and the counter
//      }else if($current_index != current($arr)){
//        $current = current($arr);
       
//       echo $current_index."".$value;
          
//      }else{
//      //else just print the key and the counter
//         //$counter = $counter+1;
//       echo $current_index."".$value;
//      }
//  }
//  }
 ?>
 </div>