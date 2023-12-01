<?php include 'header.php';?>
        <body>
        <div class="container" style ="margin-top:20px";>
  <h2>Update Article</h2>
   <?php echo form_open('Update_Article/updateartical'); ?>
   <?=  form_hidden('art_id',$artical->id);?>
    <div class ="row">
      <div class ="col-lg-8">
        <?php echo form_error('artical_title');?>
        <div class="form-group">
          <label for="login">Article Title:</label>
          <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Article Title','name'=>'artical_title'
          ,'value'=>set_value('artical_title',$artical->artical_title)]); ?>
        </div>
      </div>
   
      <div class ="col-lg-8 mt-3 mb-3">
        <?php echo form_error('artical_body');?>
        <div class="form-group">
          <label for="Body">Article Body:</label>
          <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Article Body',
          'name'=>'artical_body','value'=>set_value('artical_body',$artical->artical_body)]);?>
        </div>
      </div>
      <!-- row div close -->
   </div>
    
    <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']);?>
</form>
    </div>
    
     </body>
    </head>
</html> 
