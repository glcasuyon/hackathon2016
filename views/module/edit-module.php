<script type="text/javascript" src="<?php echo base_url();?>assets/js/modaljs.js"></script>
<div class="box box-default">
	<div class="box-header" >
		<h2>Update Module</h2>
		<div class="btn-group" id="links">
			
			<a href="<?php echo base_url()."module";?>" id="manage" class="btn btn-primary">Manage Module</a>			
		</div>		
	</div>
	<form role="form" method="post" action="<?php echo site_url()?>edit-module-post" enctype="multipart/form-data">
	<div class="box-body">
		<?php if($this->session->flashdata('success')){ ?>
		<div class="alert alert-success">
			<span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?>
		</div>
	  <?php } ?>
		<div id="module-view">
			

			 <input type="hidden" value="<?php echo $module[0]->id ?>"   name="module_id">


				  <div class="form-group">
				<label for="module_name">Module_name:</label>
				<input type="text" value="<?php echo $module[0]->module_name ?>" class="form-control" id="module_name" name="module_name">
			  </div>
				<div class="form-group">
				<label for="module_link">Module_link:</label>
				<input type="text" value="<?php echo $module[0]->module_link ?>" class="form-control" id="module_link" name="module_link">
			  </div>
				<div class="form-group">
				<label for="description">Description:</label>
				<input type="text" value="<?php echo $module[0]->description ?>" class="form-control" id="description" name="description">
			  </div>
				<div class="form-group">
				<label for="parent">Parent:</label>
				<select class="form-control" id="parent" name="parent">
					<option value="">-none-</option>
						<?php 
						if(!empty($modules)) {
							foreach($modules as $mod){ ?>
							<option value="<?php echo $mod->id?>" <?php if($mod->id ==  $module[0]->parent) echo 'selected';?>><?php echo $mod->module_name ?></option>
							<?php }
						}
						?>
					</select>
			  </div>
				
				
		</div>
	</div>
	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Submit</button>	
	</div>
	</form>
</div>



