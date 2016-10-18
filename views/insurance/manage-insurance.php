<script type="text/javascript" src="<?php echo base_url();?>assets/js/modaljs.js"></script>
<?php if(!empty($insurances)) {?>
  <table class="table table-hover" id="insurance">
    <thead>
      <tr>
        <th>#</th>
        <th>Company Name</th>        
        <th>Company Address</th>        
       <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($insurances as $insurance) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <a href="<?php echo site_url()?>view-insurance/<?php echo $insurance->insurance_company_id?>" > <?php echo $insurance->company_name?> </a> </td>
        <td>  <?php echo $insurance->company_address?>  </td>
		<td>
			<a href="<?php echo site_url()?>change-status-insurance/<?php echo $insurance->insurance_company_id ?>" > <?php if($insurance->status==0){ echo "Activate"; } else { echo "Deactivate"; } ?></a>
			<a href="<?php echo site_url()?>edit-insurance/<?php echo $insurance->insurance_company_id?>" title='Update' data-target='#' data-toggle='modal' >Edit</a>&nbsp;
        </td>

      </tr>
    <?php $i++; } ?>
    </tbody>
  </table>
  <?php } else {?>
  <div class="alert alert-info" role="alert">
		<strong>No Insurance Company Found!</strong>
	</div>
  <?php } ?>

<script>
    $(document).ready(function() {
        $('#insurance').dataTable({
			"scrollY" : "250px",
			"dom": 'T<"clear">lfrtip',
			"tableTools": {
				"sSwfPath": "/swf/copy_csv_xls_pdf.swf"
			}
		});
   });
   </script>