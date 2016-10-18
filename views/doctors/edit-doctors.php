<script type="text/javascript" src="<?php echo base_url();?>assets/js/modaljs.js"></script>
<section class="content-header">
	  <h1>
		Edit Doctors Information
	  </h1>
	  <ol class="breadcrumb">
		<li><a href="<?php echo base_url();?>doctors"><i class="fa fa-dashboard"></i> Doctors</a></li>            
		<li class="active">Doctor's profile</li>
	  </ol>
	</section>
	<?php if($this->session->flashdata('success')){ ?>
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?>
	</div>
  <?php } ?>
<?php $doctor = $doctor[0];?>
<!-- Main content -->
    <section class="content">
		<form role="form" method="post" action="<?php echo site_url()?>edit-doctors-post" >
		<div class="box box-primary">
		<div class="box-body box-profile">	
			<div class="row">
				<div class="col-lg-4 col-md-4">	
					<label for="first_name">First Name</label>
					<input type="text" name="first_name" class="form-control" value="<?php echo $doctor->first_name;?>">
				</div>
				<div class="col-lg-4 col-md-4">
					<label for="middle_name">Middle Name</label>
					<input type="text" name="middle_name" class="form-control" value="<?php echo $doctor->middle_name;?>">
				</div>
				<div class="col-lg-4 col-md-4">
					<label for="last_name">Last Name</label>
					<input type="text" name="last_name" class="form-control" value="<?php echo $doctor->last_name;?>">
				</div>			 
			</div><!-- /.box-body -->
		  </div><!-- /.box -->
		  <div class="box-footer">
			<input type="hidden" name="doctor_id" value="<?php echo $doctor_id;?>">
			<button type="submit" class="btn btn-primary" id="submitdoctor">Submit</button>
		  </div>
		</div>
		</form>
		
		<div class="box box-primary">
			
			<div class="box-body">
				<button  class="btn btn-primary btn-sm " data-toggle="modal" data-target="#addspecial"> <i class="fa fa-plus"></i> Add Specialization</button>
				<?php if(!empty($specialization)){ ?>
				<table class="table table-hover" id="tablebranch">
					<thead>
					  <tr>
						<th>#</th>
						<th>Specialization</th>						
					   <th>Action</th>
					  </tr>
					</thead>
					<tbody>
					<?php $i=1; foreach($specialization as $special){ ?>		
						<tr>
							<td> <?php echo $i; ?> </td>
							<td>  <?php echo $special->specialization_desc;?> </td>							
							<td>
								
							</td>

						  </tr>
					<?php $i++; } ?>
					</tbody>
					</table>
				<?php
					}else{ ?>
					 <div class="alert alert-info" role="alert">
							<strong>No Specialization Found!</strong>
						</div>
				<?php }?>
			</div>
		</div>
		
		<div class="box box-primary">
			
			<div class="box-body">	
				<button  class="btn btn-primary btn-sm " data-toggle="modal" data-target="#addclinic"> <i class="fa fa-plus"></i> Add Clinic</button>
				<?php if(!empty($clinics)){ ?>
					<table class="table table-hover">
					<thead>
					  <tr>
						<th>#</th>
						<th>Clinic</th>						
					   <th>Action</th>
					  </tr>
					</thead>
					<tbody>
					<?php $i=1; foreach($clinics as $clinic){ ?>		
						<tr>
							<td> <?php echo $i; ?> </td>
							<td>  <?php echo $clinic->address;?> </td>							
							<td> <a href="<?php echo base_url();?>clinic-contacts/<?php echo $clinic->doctors_clinic_id;?>" title='Update' data-target='#' data-toggle='modal' >View Contacts</a></td>

						  </tr>
					<?php $i++; } ?>
					</tbody>
					</table>
				<?php
					}else{ ?>
					 <div class="alert alert-info" role="alert">
							<strong>No Clinics Found!</strong>
						</div>
				<?php }?>
			</div>
		</div>
		
		<div class="box box-primary">
			
			<div class="box-body">
				<button  class="btn btn-primary btn-sm " data-toggle="modal" data-target="#addhospital"> <i class="fa fa-plus"></i> Add Hospital</button>
			<?php if(!empty($hospitals)){ ?>
				<table class="table table-hover" id="tablebranch">
					<thead>
					  <tr>
						<th>#</th>
						<th>Hospital</th>						
					   <th>Action</th>
					  </tr>
					</thead>
					<tbody>
				<?php $i = 1; foreach($hospitals as $hospital){ ?>
					<tr>
						<td> <?php echo $i; ?> </td>
						<td>  <?php echo $hospital->hospital_name;?> </td>							
						<td></td>

					  </tr>
					
				<?php $i++; } ?>
				</tbody>
				</table>
			<?php
				}else{ ?>
				 <div class="alert alert-info" role="alert">
						<strong>No Hospitals Found!</strong>
					</div>
			<?php }	?>
			</div>
		</div>
		
		<div class="box box-primary">
		
			<div class="box-body">
				<button  class="btn btn-primary btn-sm " data-toggle="modal" data-target="#addInsurance"> <i class="fa fa-plus"></i> Add Insurance Company</button>
				<?php  if(!empty($insurance)){ ?>
				<table class="table table-hover">
					<thead>
					  <tr>
						<th>#</th>
						<th>Insurance Company</th>						
					   <th>Action</th>
					  </tr>
					</thead>
					<tbody>
				<?php $i = 1; foreach($insurance as $insure){ ?>	
					<tr>
						<td> <?php echo $i; ?> </td>
						<td>  <?php echo $insure->company_name;?> </td>							
						<td></td>

					  </tr>
					
				<?php $i++; } ?>
				</tbody>
				</table>
			<?php
				}else{ ?>
				 <div class="alert alert-info" role="alert">
						<strong>No Insurance Company Found!</strong>
					</div>
			<?php } ?>
			</div>
		</div>
	</section>

<!-- ADD MODULE -->
<div class="modal modal-primary fade" id="addclinic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog ">
		 <div class="modal-content">
			
				<?php $this->load->view('clinics/add-clinic'); ?>
			
		</div>
	</div>
</div>

<div class="modal modal-primary fade" id="addhospital" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog ">
		 <div class="modal-content">
			
				<?php $this->load->view('doctors/add-hospital'); ?>
			
		</div>
	</div>
</div>

<div class="modal modal-primary fade" id="addInsurance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog ">
		 <div class="modal-content">
			
				<?php $this->load->view('doctors/add-insurance'); ?>
			
		</div>
	</div>
</div>

<div class="modal modal-primary fade" id="addspecial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog ">
		 <div class="modal-content">
			
				<?php $this->load->view('doctors/add-special'); ?>
			
		</div>
	</div>
</div>