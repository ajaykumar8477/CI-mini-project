<?php include 'header.php';?>
<body>
      <div class="container mt-3">
                  <h2>Register Form</h2>
                  <?php// echo validation_errors(); ?>
                  <?php if($user=$this->session->flashdata('user')):
                  $user_class=$this->session->flashdata('user_class')?>
                  <div class="row">
                    <div class ="col-lg-8">
                      <div class="alert <?=$user_class ?>">
                        <?php //echo $error;?>
                        <?= $user; ?>
                      </div>
                    </div>
                  </div>
                <?php endif;?>

                <?php echo form_open('Admin/sendemail'); ?>
                   <div class ="row">
                        <div class ="col-lg-8">
                          <?php echo form_error('user_name');?>
                              <div class="form-group">
                                <label for="Username">User Name:</label>
                                <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter login name','name'=>'user_name'
                                ,'value'=>set_value('user_name')]); ?>
                              </div>
                        </div>
                        <div class ="col-lg-8 mt-3 mb-3">
                          <?php echo form_error('password');?>
                            <div class="form-group">
                              <label for="pwd">Password:</label>
                               <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password',
                               'name'=>'password','value'=>set_value('password')]);?>
                            </div>
                        </div>
   
                        <div class ="col-lg-8 mb-3">
                           <?php echo form_error('email');?>
                              <div class="form-group">
                                <label for="Username">Email:</label>
                                <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email',
                                'name'=>'email','value'=>set_value('email')]);?>
                              </div>
                         </div>
                    </div>
    
                     <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']);?>
                     <?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']);?>
                     </form>
         </div>
    
 </body>
 </head>
</html>