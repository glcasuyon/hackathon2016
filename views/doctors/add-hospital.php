
<form role="form" method="post" action="<?php echo site_url()?>add-hospital/<?php echo $doctor_id;?>" >
<div class="modal-header">
		<h2>Add Hospital</h2>
	</div>
	<div class="modal-body">
    
    <div class="form-group">
		Select Hospital:
		<select class="form-control" id="hospital_id" name="hospital_id">
			<?php foreach($allhospitals as $hospital){ ?>
				<option value="<?php echo $hospital->hospital_id;?>"><?php echo $hospital->hospital_name;?></option>
			<?php } ?>
		</select>
	</div>
   
    </div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary" id="submitdoctor">Submit</button>
	</div>
	</form>