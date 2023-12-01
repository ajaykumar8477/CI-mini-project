<html>
    <head>
        <title>login</title>
        <?= link_tag("css/bootstrap.css")?>
        <script src="css/bootstrap.js"></script>
    </head>
       <body>
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('index.php/Admin1/welcome');?>">Hello </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    
    <ul class="nav navbar-nav navbar-right">
       <?php
        if($this->session->userdata('id'))
       
        {
          ?>
         <p class="text-white"><?php echo $this->session->userdata('user_name'); ?></p>
         <li><a href="<?= base_url('index.php/Logout');?>" class="btn btn-primary" style="text-decoration:none">logout</a></li>
         <?php
        }
        ?>
        
      </ul>
  </div>
</nav>
  