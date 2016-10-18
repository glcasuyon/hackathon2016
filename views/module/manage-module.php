<?php if(!empty($modules)) {?>
<table class="table table-hover table-bordered" id="tablemodule">
        <thead>
            <tr>
                
                <th>#</th>
                <th>Module Name</th>
                <th>Module Link</th>
                <th>Module Description</th>	
                <th>Status</th>
                
            </tr>
        </thead>
        <tbody>
	<?php 
	$count=1; foreach ($modules as $mod): ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><a href="<?php echo base_url().'edit-module/'.$mod->id?>" 	 class="modulelink"><?php echo $mod->module_name; ?></a></td>
			<td><a href="<?php echo base_url().$mod->module_link; ?>"><?php echo $mod->module_link; ?></a></td>
			<td><?php echo $mod->description; ?></td>
			<td><a href="<?php echo site_url()?>change-status-module/<?php echo $mod->id ?>" data-toggle="tooltip"  data-placement="left" <?php if($mod->active==0){ ?> class="btn btn-sm btn-danger"  title="Activate"><i class="fa fa-close"></i> <?php } else { ?> class="btn btn-sm btn-success"  title="Deactivate"><i class="fa fa-check"></i> <?php } ?></a>			
			<a href="<?php echo site_url()?>delete-module/<?php echo $mod->id?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash"></i></a></td>
		</tr>
	<?php 
	$count++;
	endforeach; ?>	
    </tbody>
	</table>
	
<?php } else {?>
  <div class="alert alert-info" role="alert">
                    <strong>No Modules Found!</strong>
                </div>
  <?php } ?>
	

<script>
    $(document).ready(function() {
        $('#tablemodule').dataTable({
			"scrollY":        "250px",
			"scrollCollapse": true,
			"dom": 'T<"clear">lfrtip',
			"tableTools": {
				"sSwfPath": "/swf/copy_csv_xls_pdf.swf"
			}
		});
    });
   </script>
