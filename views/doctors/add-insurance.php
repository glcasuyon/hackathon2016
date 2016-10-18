  
<form role="form" method="post" action="<?php echo site_url()?>add-insurance/<?php echo $doctor_id;?>" >
<div class="modal-header">
		<h2>Add Insurance Company</h2>
	</div>
	<div class="modal-body">
    
    <div class="form-group">
		Select Insurance Company:
		<select class="form-control" id="insurance_company_id" name="insurance_company_id">
			<?php foreach($allInsurance as $insurance){ ?>
				<option value="<?php echo $insurance->insurance_company_id;?>"><?php echo $insurance->company_name;?></option>
			<?php } ?>
		</select>
	</div>
   
    </div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary" id="submitdoctor">Submit</button>
	</div>
	</form>