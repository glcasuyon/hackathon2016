<script type="text/javascript" src="<?php echo base_url();?>assets/js/modaljs.js"></script>
<?php if(!empty($specializations)) {?>
  <table class="table table-hover" id="special">
    <thead>
      <tr>
        <th>#</th>
        <th>Specialization</th>
       
       <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($specializations as $specialization) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <a href="<?php echo site_url()?>view-specialization/<?php echo $specialization->specialization_id?>" > <?php echo $specialization->specialization_desc?> </a> </td>
       
        <td>
			<!--<a href="<?php echo site_url()?>change-status-specialization/<?php echo $specialization->specialization_id ?>" > <?php if($specialization->status==0){ echo "On"; } else { echo "Off"; } ?></a>&nbsp;-->
			<a href="<?php echo site_url()?>edit-specialization/<?php echo $specialization->specialization_id?>" title='Update' data-target='#' data-toggle='modal' >Edit</a>&nbsp;
			<a href="<?php echo site_url()?>change-status-specialization/<?php echo $specialization->specialization_id?>" class="delete" >Delete</a>&nbsp;
			
        </td>

      </tr>
    <?php $i++; } ?>
    </tbody>
  </table>
  <?php } else {?>
  <div class="alert alert-info" role="alert">
                    <strong>No Specialization Found!</strong>
                </div>
  <?php } ?>
</div>
<script>
    $(document).ready(function() {
        $('#special').dataTable({
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