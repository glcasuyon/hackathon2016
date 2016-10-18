<div class="modal modal-primary fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
	<form class="form-horizontal" method="post" action="<?php echo base_url();?>edit-specialization-post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Specialization</h4>
      </div>
      <div class="modal-body">
		<?php $specialization = $specialization[0];?>
		
			
			 <div class="">
				<label for="province">Specialization Desc:</label>
				<input type="text" class="form-control" id="specialization_desc" name="specialization_desc" value="<?php echo $specialization->specialization_desc;?>">
			  </div>
			
		
		</div>
		<div class="modal-footer">
			<input type="hidden" class="form-control" id="specialization_id" name="specialization_id" value="<?php echo $specialization_id;?>">
			<button type="submit" class="btn btn-primary" id="submitspecialization">Submit</button>
		</div>
		</form>
	</div>

</div>

</div>