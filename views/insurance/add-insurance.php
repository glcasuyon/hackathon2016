  
<form role="form" method="post" action="<?php echo site_url()?>/add-insurance-post" >
<div class="modal-header">
		<h2>Add Insurance</h2>
	</div>
	<div class="modal-body">
    
    <div class="form-group">
    <label for="province">Insurance Company</label>
    <input type="text" class="form-control" id="company_name" name="company_name">
	</div>
    <div class="form-group">
    <label for="city">Company Address</label>
    <input type="text" class="form-control" id="company_address" name="company_address">
	</div>
	
   
    </div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary" id="submitinsurance">Submit</button>
	</div>
	</form>