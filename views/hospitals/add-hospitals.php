  
<form role="form" method="post" action="<?php echo site_url()?>/add-hospitals-post" >
<div class="modal-header">
		<h2>Add Hospital</h2>
	</div>
	<div class="modal-body">
      <div class="form-group">
		<label for="branchname">Hospital type</label>
		<select class="form-control" name="hospital_type">
			<option value="1">PRIVATE</option>
			<option value="2">PUBLIC</option>
		</select>
	  </div>
    <div class="form-group">
		<label for="province">Hospital Name:</label>
		<input type="text" class="form-control" id="hospital_name" name="hospital_name">
	  </div>
    <div class="form-group">
    <label for="city">Address:</label>
    <input type="text" class="form-control" id="hospital_address" name="hospital_address">
  </div>
   
    </div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary" id="submithospital">Submit</button>
	</div>
	</form>