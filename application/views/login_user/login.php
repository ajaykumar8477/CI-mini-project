<?php include 'header.php';?>
<body>
<div class="container" style ="margin-top:20px"; >
  <h2>Login Form</h2>
  <?php// echo validation_errors(); ?>
  <?php if($error=$this->session->flashdata('Login_failed')) :?>
    <div class="row">
      <div class ="col-lg-8">
        <div class="alert alert-danger">
          <?php //echo $error;?>
          <?= $error; ?>
        </div>
      </div>
    </div>
  <?php endif;?>
   <?php echo form_open('Admin/login'); ?>
    <div class ="row">
        <div class ="col-lg-8">
          <?php echo form_error('uname');?>
            <div class="form-group">
             <label for="login">User Name:</label>
             <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter login name','name'=>'uname'
             ,'value'=>set_value('uname')]); ?>
            </div>
        </div>
       <div class ="col-lg-8 mt-3 mb-3 " >
           <?php echo form_error('pass');?>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password',
              'name'=>'pass','value'=>set_value('pass')]);?>
            </div>
        </div>
     </div>
        <div class="checkbox mb-3">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
            <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']);?>
           <?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']);?>
            <?php echo anchor('Admin/register/','Sign up','class="link-class"')?>
</div>
    
     </body>
    </head>
</html> 
