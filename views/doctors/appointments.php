<script type="text/javascript" src="<?php echo base_url();?>assets/js/modaljs.js"></script>
<?php $doctor = $doctors[0];?>
	<section class="content-header">
          <h1>Dr. <?php echo $doctor->first_name." ".$doctor->middle_name." ".$doctor->last_name;?></h1>
			
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>doctors"><i class="fa fa-dashboard"></i> Doctors</a></li>            
            <li><a href="<?php echo base_url();?>view-doctors/<?php echo $doctor_id;?>"><i class="fa fa-user"></i>Profile</a></li>
            <li class="active">Appointments</li>
          </ol>
        </section>
		
<br/>
<div class="box box-primary">
	<div class="box-header">Appointments</div>
	<?php 
	if(!empty($appointments)){ ?>
		<table class="table table-hover" id="tablebranch">
		<thead>
		  <tr>
			<th>#</th>
			<th>Patient's Name</th>
			<th>Mobile</th>
		   <th>Appointment Date</th>
		   <th> Time</th>
		    <th>Date Posted</th>
		    <th>View</th>
		  </tr>
		</thead>
		<tbody>
		<?php $i = 1; foreach($appointments as $appoint) { ?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $appoint->first_name." ".$appoint->middle_name." ".$appoint->last_name;?></td>
				<td><?php echo $appoint->mobile_no;?></td>
				<td><?php echo $appoint->date_of_appointment;?></td>
				<td><?php echo $appoint->time_of_appointment;?></td>
				<td><?php echo $appoint->date_reserved;?></td>
				<td><a href="<?php echo base_url();?>view-appointment/<?php echo $appoint->appointments_id;?>" title='Update' data-target='#' data-toggle='modal'>View Details</a></td>
			</tr>
		<?php $i++;} ?>
		</tbody>			
		</table>
	<?php }	?>
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