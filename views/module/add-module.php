
	<form role="form" method="post" action="<?php echo site_url()?>/add-module-post" >
	<div class="modal-header">
		<h2>Add Module</h2>  
	</div>
	<div class="modal-body">
	
		 <div class="form-group">
		<label for="module_name">Module_name:</label>
		<input type="text" class="form-control" id="module_name" name="module_name">
	  </div>
		<div class="form-group">
		<label for="module_link">Module_link:</label>
		<input type="text" class="form-control" id="module_link" name="module_link">
	  </div>
		<div class="form-group">
		<label for="description">Description:</label>
		<input type="text" class="form-control" id="description" name="description">
	  </div>
		<div class="form-group">
		<label for="parent">Parent:</label>
		<select class="form-control" id="parent" name="parent">
			<option value=''>none</option>
			<?php 
			if(!empty($modules)) {
				foreach($modules as $mod){ ?>
				<option value="<?php echo $mod->id?>"><?php echo $mod->module_name ?></option>
				<?php }
			}
			?>
		</select>
	  </div>	   		
		</div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
	</form>

