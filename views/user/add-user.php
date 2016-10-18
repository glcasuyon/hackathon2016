<form role="form" method="post" action="<?php echo site_url()?>/add-user-post" >
<div class="modal-header">
		<h2>Add User</h2>  
	</div>
	<div class="modal-body">
      <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
    <div class="form-group">
    <label for="firstname">Firstname:</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
  </div>
    <div class="form-group">
    <label for="lastname">Lastname:</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
  </div>
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
    <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>    
</div>
<div class="modal-footer">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
	</form>
