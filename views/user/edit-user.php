<script type="text/javascript" src="<?php echo base_url();?>assets/js/modaljs.js"></script>
<div class="box box-default">
	<div class="box-header" >
		<h2>Update User</h2>
		<div class="btn-group" id="links">
			
			<a href="<?php echo base_url()."user";?>" id="manage" class="btn btn-primary">Manage User</a>			
		</div>		
	</div>
<form role="form" method="post" action="<?php echo site_url()?>edit-user-post" enctype="multipart/form-data">
<div class="box-body">
 <input type="hidden" value="<?php echo $user[0]->id ?>"   name="user_id">


      <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" value="<?php echo $user[0]->username ?>" class="form-control" id="username" name="username">
  </div>
    <div class="form-group">
    <label for="firstname">Firstname:</label>
    <input type="text" value="<?php echo $user[0]->firstname ?>" class="form-control" id="firstname" name="firstname">
  </div>
    <div class="form-group">
    <label for="lastname">Lastname:</label>
    <input type="text" value="<?php echo $user[0]->lastname ?>" class="form-control" id="lastname" name="lastname">
  </div>
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" value="<?php echo $user[0]->email ?>" class="form-control" id="email" name="email">
  </div>
    <div class="form-group">
    <label for="salt">Salt:</label>
    <input type="text" value="<?php echo $user[0]->salt ?>" class="form-control" id="salt" name="salt">
  </div>
    <div class="form-group">
    <label for="contact">Contact:</label>
    <input type="text" value="<?php echo $user[0]->contact ?>" class="form-control" id="contact" name="contact">
  </div>
    <div class="form-group">
    <label for="group_id">Group_id:</label>
    <input type="text" value="<?php echo $user[0]->group_id ?>" class="form-control" id="group_id" name="group_id">
  </div>
    <div class="form-group">
    <label for="branch_id">Branch_id:</label>
    <input type="text" value="<?php echo $user[0]->branch_id ?>" class="form-control" id="branch_id" name="branch_id">
  </div>    
</div>
<div class="box-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
