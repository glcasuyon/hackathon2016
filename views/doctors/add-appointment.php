<form role="form" method="post" action="<?php echo site_url()?>add-appointment-post" id="appointment">
<div class="modal-header">
		<h2>Add Appointment</h2>
	</div>
	<div class="modal-body">
		<div class="row">
		<div class="col-md-4">
			<div class="form-group">
			<label for="first_name">First Name:</label>
			<input type="text" class="form-control" id="first_name" name="first_name">
			</div>
			<div class="form-group">
			<label for="middle_name">Middle Name:</label>
			<input type="text" class="form-control" id="middle_name" name="middle_name">
			</div>
			<div class="form-group">
			<label for="last_name">Last Name:</label>
			<input type="text" class="form-control" id="last_name" name="last_name">
			</div>
			<div class="form-group">
				<label for="mobile_no">Mobile Number:</label>
				<input type="text" class="form-control" id="mobile_no" name="mobile_no">
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<label for="first_name">Concerns:</label>
				<textarea type="text" class="form-control" id="complaints" name="complaints"></textarea>
			</div>
			<div class="form-group">
				<label for="date_of_appointment">Date of Appointment:</label>
				<input type="date" name="date_of_appointment" class="form-control">
			</div>
			<div class="form-group">
				<label for="time_of_appointment">Time of Appointment:</label>
				<input type="time" name="time_of_appointment" class="form-control">
			</div>
		</div>
			
		</div>
		</div>
    </div>
	<div class="modal-footer">
		<input type="hidden" name="doctors_id" value="<?php echo $doctor_id;?>">
		<button type="submit" class="btn btn-primary" id="submitdoctor">Submit</button>
	</div>
</form>