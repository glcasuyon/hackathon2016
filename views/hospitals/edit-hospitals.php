<div class="modal modal-primary fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
	<form class="form-horizontal" method="post" action="<?php echo base_url();?>edit-hospitals-post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Hospital</h4>
      </div>
      <div class="modal-body">
		<?php $hospital = $hospital[0];?>
		
			<div class="">
				<label for="branchname">Hospital type</label>
				<select class="form-control" name="hospital_type">
					<option value="1">PRIVATE</option>
					<option value="2">PUBLIC</option>
				</select>
			</div>
			 <div class="">
				<label for="province">Hospital Name:</label>
				<input type="text" class="form-control" id="hospital_name" name="hospital_name" value="<?php echo $hospital->hospital_name;?>">
			  </div>
			<div class="">
				<label for="city">Address:</label>
				<input type="text" class="form-control" id="hospital_address" name="hospital_address" value="<?php echo $hospital->hospital_address;?>">
		  </div>
		
		</div>
		<div class="modal-footer">
			<input type="hidden" class="form-control" id="hospital_id" name="hospital_id" value="<?php echo $hospital_id;?>">
			<button type="submit" class="btn btn-primary" id="submithospital">Submit</button>
		</div>
		</form>
	</div>

</div>

</div>