<?php include 'header.php';?>

<div class="container" style ="margin-top:50px;">
<div class="row">
<div class ="col-lg-6">
  <a href="<?= base_url('index.php/Add_Article/adduser') ?>" class="btn btn-lg btn-primary">Add Article</a>
</div>
</div>
</div>
  
<div class="container" style="margin-top:50px;">
<?php if($msg=$this->session->flashdata('msg')):
  $msg_class=$this->session->flashdata('msg_class')?>
    <div class="row">
    <div class ="col-lg-8">
    <div class="alert <?=$msg_class ?>">
    <?php //echo $error;?>
    <?= $msg; ?>
  </div>
  </div>
  </div>
  <?php endif;?>
    <div >
      <table class="table">
        <thead>
        <tr>
          <th>Title</th>
          <th>Article Body</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php if(count($data)):?>
          <?php //echo "<pre>";
          //print_r($data) ?>
        <?php foreach ($data as $d):?>
        <tr>
          <td><?php echo $d->artical_title ?></td>
          <td><?php echo $d->artical_body ?></td>
          <td><a href="<?= base_url('index.php/Update_Article/update/'.$d->id) ?>" class="btn btn-primary">Update</a></td>
           <td>
          <?=
          form_open('Admin1/deleteartical'),
          form_hidden('id',$d->id),
          form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
          form_close();
          
          ?>  
          </td>
       </tr>
       <?php endforeach; ?> 
       <?php else: ?>
        <tr>
          <td colspan="3">Not data available</td>
        </tr>
       <?php endif; ?> 
     </tbody>
      </table>
      <?= $this->pagination->create_links(); ?>

</div>
    <?php include 'footer.php';?>
   