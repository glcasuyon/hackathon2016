<?php $doctor = $doctors[0];?>

<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Doctors Profile
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
<!-- Main content -->
    <section class="content">
	<div class="row">
		<div class="col-md-4">
		  <!-- Profile Image -->
		  <div class="box box-primary">
			<div class="box-body box-profile">
			  <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>dist/img/user4-128x128.jpg" alt="User profile picture">
			  <h3 class="profile-username text-center">Dr. <?php echo $doctor->first_name." ".$doctor->middle_name." ".$doctor->last_name;?></h3>
			  <p class="text-muted text-center"><?php if(!empty($specialization)){ 
			  foreach($specialization as $special){
				   echo $special->specialization_desc;
				   echo "/ ";
			  }
			  } ?></p>

			  

			 <button  class="btn btn-primary btn-block " data-toggle="modal" data-target="#addAppoint"> <i class="fa fa-plus"></i> Set Appointment</button>
			 <a href="<?php echo base_url()?>appointments/<?php echo $doctor_id;?>"  class="btn btn-success btn-block " > <i class="fa fa-open"></i> View Appointments</a>
			</div><!-- /.box-body -->
		  </div><!-- /.box -->
		</div><!-- /.col-md-3 -->
		<div class="col-md-8">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs" style="margin-bottom: 0px;">		
					<li class="active"><a data-toggle="tab" href="#clinic" ><i class="fa fa-user"></i> Clinics </a></li>
					<li><a data-toggle="tab" href="#hospitals" ><i class="fa fa-user"></i> Hospitals </a></li>
					<li><a data-toggle="tab" href="#insurance"><i class="fa fa-money"></i> Accredited Insurance Company</a></li>		
				</ul>
			
				<div class="tab-content">	
					<div class="tab-pane active " id="clinic">
						
						<?php $this->load->view("clinics/view-clinic");?>
						
					</div>
					<div class="tab-pane " id="hospitals">
						<?php $this->load->view("doctors/view-hospitals");?>
					</div>
					<div class="tab-pane " id="insurance">
						<?php $this->load->view("doctors/view-insurance");?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.row -->
	</section>

<div class="modal modal-primary fade" id="addAppoint" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		 <div class="modal-content">
			
				<?php $this->load->view('doctors/add-appointment'); ?>
			
			
			
		</div>
	</div>
</div>