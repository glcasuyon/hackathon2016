  
<form role="form" method="post" action="<?php echo site_url()?>add-clinic/<?php echo $doctor_id;?>" >
<div class="modal-header">
		<h2>Add Clinic</h2>
	</div>
	<div class="modal-body">
    
    <div class="form-group">
    <label for="province">Address:</label>
    <input type="text" class="form-control" id="address" name="address">
	</div>   
   
    </div>
	<div class="modal-footer">	
		<button type="submit" class="btn btn-primary" id="submitdoctor">Submit</button>
	</div>
	</form>