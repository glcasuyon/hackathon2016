<?php $insure = $insurance[0];?>
<h1><?php echo $insure->company_name;?></h1>
Address: <?php echo $insure->company_address;?>
<div class="box box-default with-nav-tabs	">
<div class="panel-heading" style="margin-bottom: 0px; padding-bottom:0px;">	
	<ul class="nav nav-tabs" style="margin-bottom: 0px;">
		<li class="active"><a data-toggle="tab" href="#map" ><i class="fa fa-map-marker"></i> Map</a></li>
		<li><a data-toggle="tab" href="#doctors" ><i class="fa fa-users"></i> Doctors</a></li>			
	</ul>
</div>
<div class="tab-content">
	<div class="tab-pane active" id="map">
		<div class="panel-body">
		<div id='myMap' ></div>
		</div>
    </div>
	<div class="tab-pane " id="doctors">
		<div class="panel-body">
		<?php 
		if(!empty($doctors)){ ?>
			<table class="table table-hover" id="doctors">
				<thead>
				  <tr>
					<th>#</th>
					<th>Doctor</th>
					<th>Specialization</th>		  
					<th>Action</th>		  
				  </tr>
				</thead>
			<tbody>
			<?php $i = 1; foreach($doctors as $docs) {
				$special = $this->Specialization->getDataByDocId($docs->doctors_id); 
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td>DR. <?php echo $docs->first_name." ".$docs->middle_name." ".$docs->last_name;?></td>
					<td><?php if(!empty($special)){
						foreach($special as $sp){
							echo $sp->specialization_desc." / " ;
						}
					}; ?></td>				  
					<td><a href="<?php echo base_url();?>view-doctors/<?php echo $docs->doctors_id;?>" target="_blank">View Doctor</a></td>				  
				  </tr>
			<?php $i++; } ?>
			</tbody>
			</table>
		<?php }else{?>
		<div class="alert alert-info" role="alert">
			<strong>No Doctors Found!</strong>
		</div>
		<?php } ?>
		</div>
    </div>
	
</div>
