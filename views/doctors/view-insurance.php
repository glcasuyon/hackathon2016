
<?php if(!empty($insurance)){ ?>
	<ul class="timeline timeline-inverse">
	<?php foreach($insurance as $insure){ ?>		
		<li>			
			<div class="timeline-item">			 
			  <h3 class="timeline-header"><?php echo $insure->company_name;?></h3>
			  <div class="timeline-body">
				<?php echo $insure->company_address;?>
			  </div>			  
			</div>
		</li>
	<?php } ?>
	</ul>
<?php
	}else{ ?>
	 <div class="alert alert-info" role="alert">
			<strong>No Insurance Company Found!</strong>
		</div>
<?php }
//$this->output->enable_profiler(true);
?>