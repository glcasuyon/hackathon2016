<div class="modal modal-primary fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">	
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Clinic Contacts</h4>
      </div>
      <div class="modal-body">
		<?php if(!empty($contacts)) {?>
		  <table class="table table-condensed" id="tablebranch">
			<thead>
			  <tr>
				<th>#</th>
				<th>Contact Type</th>
				<th>Contact Info</th>
				<th>Action</th>
			  </tr>
			</thead>
			<tbody>
			<?php $i=1; foreach($contacts as $contact) { ?>
			  <tr>
				<td> <?php echo $i; ?> </td>
				<td> <?php echo $contact->contact_type;?> </td>
				<td>  <?php echo $contact->contact_info;?></td>
				<td></td>
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
		
	</div>

</div>

</div>
