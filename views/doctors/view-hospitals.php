
<?php if(!empty($hospitals)){ ?>
	<ul class="timeline timeline-inverse">
	<?php foreach($hospitals as $hospital){ ?>		
		<li>			
			<div class="timeline-item">			 
			  <h3 class="timeline-header"><?php echo $hospital->hospital_name;?></h3>
			  <div class="timeline-body">
				<?php echo $hospital->hospital_address;?>
			  </div>			  
			</div>
		</li>
	<?php } ?>
	</ul>
<?php
	}else{ ?>
	 <div class="alert alert-info" role="alert">
			<strong>No Hospitals Found!</strong>
		</div>
<?php }
//$this->output->enable_profiler(true);
?>