<!DOCTYPE html>
<html lang="en">
<head>
  <title>Codeigniter Crud By Crud Generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://crudegenerator.in">Codeigniter Crud By Crud Generator</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url(); ?>manage-user">Manage User</a></li>
        <li><a href="<?php echo site_url(); ?>add-user">Add User</a></li>
      </ul>
  </div>
</nav>


<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   username  :  <?php echo $user[0]->username ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   firstname  :  <?php echo $user[0]->firstname ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   lastname  :  <?php echo $user[0]->lastname ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   email  :  <?php echo $user[0]->email ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   salt  :  <?php echo $user[0]->salt ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   contact  :  <?php echo $user[0]->contact ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   group_id  :  <?php echo $user[0]->group_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   branch_id  :  <?php echo $user[0]->branch_id ?>
  </div>
</div>

</div>

</body>
</html>