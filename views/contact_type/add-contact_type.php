
<form role="form" method="post" action="<?php echo site_url()?>/add-contact_type-post" >
<div class="modal-header">
		<h2>Add Contact_type</h2>  
	</div>
	<div class="modal-body">
      <div class="form-group">
    <label for="value">Value:</label>
    <input type="text" class="form-control" id="value" name="value">
  </div>
    <div class="form-group">
    <label for="description">Description:</label>
    <input type="text" class="form-control" id="description" name="description">
  </div>
     </div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
	</form>