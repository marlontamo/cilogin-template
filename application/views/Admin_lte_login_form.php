<div class="content-wrapper">
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
<div class="login-box" id="draggable">
  <div class="login-logo">
    <a href=><b>Login</b>-your account</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" >
    <p class="login-box-msg">Sign in to start your session</p>

   <?php echo form_open('Accounts/post_login');?>
      <div class="form-group has-feedback">

        <!-- <input type="email" class="form-control" placeholder="Email"> -->
        <?php $username = array(
                                      'type'  => 'text',
                                      'name'  => 'username',
                                      'id'    =>  'inputEmail3',
                                      'placeholder' => 'Username',
                                      'class' => 'form-control'
                              );

                              echo form_input($username); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
       <!--  <input type="password" class="form-control" placeholder="Password"> -->
        <?php $pass = array(
                                      'type'  => 'password',
                                      'name'  => 'password',
                                      'id'    =>  'inputEmail3',
                                      'placeholder' => 'password',
                                      'class' => 'form-control'
                              );

                              echo form_input($pass); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <!-- <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div> -->
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
        <?php $submit = array(
                                      'type'  => 'submit',
                                      'name'  => 'login',
                                      'id'    =>  'inputEmail3',
                                      'value' => 'Sign In',
                                      //'placeholder' => 'Product Title',
                                      'class' => 'btn btn-primary btn-block btn-flat'
                              );

                              echo form_input($submit); ?>
          <!-- <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button> -->
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="#" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
</div>