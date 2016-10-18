
<?php if(!empty($doctorss)) {?>
  <table class="table table-hover" id="tablebranch">
    <thead>
      <tr>
        <th>#</th>
        <th>Doctor</th>
        <th>Specialization</th>
       <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($doctorss as $doctors) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <a href="<?php echo site_url()?>view-doctors/<?php echo $doctors->doctors_id?>" > Dr. <?php echo $doctors->first_name." ".$doctors->middle_name." ".$doctors->last_name?> </a> </td>
        <td><?php 
		$special = $this->Specialization->getDataByDocId($doctors->doctors_id);
		if(!empty($special)){
			foreach($special as $sp){
				echo $sp->specialization_desc." / " ;
			}
		}; 
		?>  </td>
        <td>
			<a href="<?php echo site_url()?>change-status-doctors/<?php echo $doctors->doctors_id ?>" > <?php if($doctors->status==0){ echo "Activate"; } else { echo "Deactivate"; } ?></a>
			<a href="<?php echo site_url()?>edit-doctors/<?php echo $doctors->doctors_id?>" >Edit</a>        
        </td>

      </tr>
    <?php $i++; } ?>
    </tbody>
  </table>
  <?php } else {?>
  <div class="alert alert-info" role="alert">
                    <strong>No Doctors Found!</strong>
                </div>
  <?php } ?>
</div>
<script>
    $(document).ready(function() {
        $('#tablebranch').dataTable({
			"dom": 'T<"clear">lfrtip',
			"scrollY" : "250px",
			"tableTools": {
				"sSwfPath": "/swf/copy_csv_xls_pdf.swf"
			}
		});
    });
   </script>