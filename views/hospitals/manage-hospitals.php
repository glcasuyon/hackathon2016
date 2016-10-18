<script type="text/javascript" src="<?php echo base_url();?>assets/js/modaljs.js"></script>
<?php if(!empty($hospitalss)) {?>
  <table class="table table-hover" id="tablebranch">
    <thead>
      <tr>
        <th>#</th>
        <th>Hospital Name</th>
        <th>Hospital Address</th>
       <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($hospitalss as $hospitals) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <a href="<?php echo site_url()?>view-hospitals/<?php echo $hospitals->hospital_id?>" > <?php echo $hospitals->hospital_name?> </a> </td>
        <td> <?php echo $hospitals->hospital_address?> </td>

        <td>
			<!--<a href="<?php echo site_url()?>change-status-hospitals/<?php echo $hospitals->hospital_id ?>" > <?php if($hospitals->status==0){ echo "On"; } else { echo "Off"; } ?></a>&nbsp;-->
			<a href="<?php echo site_url()?>edit-hospitals/<?php echo $hospitals->hospital_id?>" title='Update' data-target='#' data-toggle='modal' >Edit</a>&nbsp;
			<a href="<?php echo site_url()?>change-status-hospitals/<?php echo $hospitals->hospital_id?>" class="delete" >Delete</a>&nbsp;
			
        </td>

      </tr>
    <?php $i++; } ?>
    </tbody>
  </table>
  <?php } else {?>
  <div class="alert alert-info" role="alert">
                    <strong>No Hospitals Found!</strong>
                </div>
  <?php } ?>
</div>
<script>
    $(document).ready(function() {
        $('#tablebranch').dataTable({
			"scrollY" : "250px",
			"dom": 'T<"clear">lfrtip',
			"tableTools": {
				"sSwfPath": "/swf/copy_csv_xls_pdf.swf"
			}
		});
		
		$('.delete').on('click', function(e){
			e.preventDefault();
			var loc = $(this).attr('href');
			bootbox.confirm('Are you sure you want to delete this?', function(res){
				if(res == true){
					window.location = loc;
				}
			});
		})
    });
   </script>