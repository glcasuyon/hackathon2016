<div class="modal modal-primary fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
	<form class="form-horizontal" method="post" action="<?php echo base_url();?>edit-insurance-post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Insurance</h4>
      </div>
      <div class="modal-body">
		<?php $insure = $insurance[0];?>		
			
			 <div class="">
				<label for="province">Company Name:</label>
				<input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $insure->company_name;?>">
			  </div>
			<div class="">
				<label for="city">Address:</label>
				<input type="text" class="form-control" id="company_address" name="company_address" value="<?php echo $insure->company_address;?>">
		  </div>
		
		</div>
		<div class="modal-footer">
			<input type="hidden" class="form-control" id="insurance_company_id" name="insurance_company_id" value="<?php echo $insurance_company_id;?>">
			<button type="submit" class="btn btn-primary" id="submithospital">Submit</button>
		</div>
		</form>
	</div>

</div>

</div>