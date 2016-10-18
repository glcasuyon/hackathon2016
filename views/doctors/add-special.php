<form role="form" method="post" action="<?php echo site_url()?>add-special/<?php echo $doctor_id;?>" >
<div class="modal-header">
		<h2>Add Hospital</h2>
	</div>
	<div class="modal-body">
    
    <div class="form-group">
		Select Hospital:
		<select class="form-control" id="specialization_id" name="specialization_id">
			<?php foreach($allSpecialization as $spec){ ?>
				<option value="<?php echo $spec->specialization_id;?>"><?php echo $spec->specialization_desc;?></option>
			<?php } ?>
		</select>
	</div>
   
    </div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary" id="submitdoctor">Submit</button>
	</div>
	</form>