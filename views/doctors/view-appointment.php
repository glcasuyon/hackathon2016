
<?php $appointment = $appointment[0];?>
<div class="modal modal-primary fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
	<form class="form-horizontal" method="post" action="<?php echo base_url();?>update-appointment">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Edit Hospital</h4>
		</div>
		<div class="modal-body">
			<div class="form-group">
				<div class="col-md-6">
					Patient's Name: <?php echo $appointment->first_name." ".$appointment->middle_name." ".$appointment->last_name;?>
				</div>
				<div class="col-md-6">
					Date of Appointment: <?php echo $appointment->date_of_appointment;?> &nbsp; <?php echo $appointment->time_of_appointment;?>
				</div>				
			</div>
			<div class="form-group">
				<div class="col-md-6">
					Contact Number: <?php echo $appointment->mobile_no;?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					Concern/s: <?php echo $appointment->complaints;?>
				</div>
			</div>
			<hr/>
			<div class="form-group">
				<div class="col-md-12">
					Remark/s: 
					<textarea class="form-control" name="remarks"><?php echo $appointment->remarks;?></textarea>
				</div>
			</div>
		
		</div>
		<div class="modal-footer">
			<input type="hidden" class="form-control" id="appointments_id" name="appointments_id" value="<?php echo $appointment_id;?>">
			<input type="hidden" class="form-control" id="doctors_id" name="doctors_id" value="<?php echo $appointment->doctors_id;?>">
			<button type="submit" class="btn btn-primary" id="submithospital">Submit</button>
		</div>
		</form>
	</div>

</div>

</div>
