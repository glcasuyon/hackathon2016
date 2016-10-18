
<?php if(!empty($clinics)){ ?>
	<ul class="timeline timeline-inverse">
	<?php foreach($clinics as $clinic){ ?>		
		<li>			
			<div class="timeline-item">			 
			  <h3 class="timeline-header"><?php echo $clinic->address;?></h3>
			  <div class="timeline-body">
				<?php $clinic = $this->Clinics->getContact($clinic->doctors_clinic_id); 
				if(!empty($clinic)){
					foreach($clinic as $c){
						echo "<i class='fa ";
						if($c->contact_type == "LANDLINE") echo "fa-phone'";
						elseif($c->contact_type == "MOBILE") echo "fa-mobile'";
						elseif($c->contact_type == "FAX") echo "fa-fax'";
						elseif($c->contact_type == "Email") echo "fa-send'";
						echo "></i>&nbsp;&nbsp;";
						echo $c->contact_info;
						echo "<br/>";
					}
				}
				?>
			  </div>			  
			</div>
		</li>
	<?php } ?>
	</ul>
<?php
	}else{ ?>
	 <div class="alert alert-info" role="alert">
			<strong>No Clinics Found!</strong>
		</div>
<?php }?>