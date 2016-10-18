  
<form role="form" method="post" action="<?php echo site_url()?>/add-doctors-post" >
<div class="modal-header">
		<h2>Add Doctor</h2>
	</div>
	<div class="modal-body">
    
    <div class="form-group">
    <label for="province">First Name:</label>
    <input type="text" class="form-control" id="first_name" name="first_name">
	</div>
    <div class="form-group">
    <label for="city">Middle Name:</label>
    <input type="text" class="form-control" id="middle_name" name="middle_name">
	</div>
	<div class="form-group">
    <label for="city">Last Name:</label>
    <input type="text" class="form-control" id="last_name" name="last_name">
	</div>
   
    </div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary" id="submitdoctor">Submit</button>
	</div>
	</form>