 
<?php if(!empty($users)) {?>
  <table class="table table-hover" id="tableuser">
    <thead>
      <tr>
        <th>No</th>
        <th>username</th>
        <th> Name</th>
        
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($users as $user) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <a href="<?php echo site_url()?>edit-user/<?php echo $user->id?>" > <?php echo $user->username ?> </a> </td>
        <td> <a href="<?php echo site_url()?>view-user/<?php echo $user->id?>" > <?php echo $user->lastname.", ".$user->firstname ?> </a> </td>
        <td>
		<a href="<?php echo site_url()?>change-status-user/<?php echo $user->id ?>" data-toggle="tooltip"  data-placement="left" <?php if($user->active==0){ ?> class="btn btn-sm btn-danger"  title="Activate"><i class="fa fa-close"></i> <?php } else { ?> class="btn btn-sm btn-success"  title="Deactivate"><i class="fa fa-check"></i> <?php } ?></a>			
			<a href="<?php echo site_url()?>delete-user/<?php echo $user->id?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash"></i></a>
        </td>

      </tr>
    <?php $i++; } ?>
    </tbody>
  </table>
  <?php } else {?>
  <div class="alert alert-info" role="alert">
		<strong>No Users Found!</strong>
	</div>
  <?php } ?>
<script>
    $(document).ready(function() {
        $('#tableuser').dataTable({
			"dom": 'T<"clear">lfrtip',
			"tableTools": {
				"sSwfPath": "/swf/copy_csv_xls_pdf.swf"
			}
		});
    });
   </script>