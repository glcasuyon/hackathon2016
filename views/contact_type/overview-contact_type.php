<script type="text/javascript" src="<?php echo base_url();?>assets/js/modaljs.js"></script>
<div class="box box-default">
	<div class="box-header" >
		<div class="btn-group" id="links">
			<button id="manage" class="btn btn-primary">Manage Contact Type Domains</button>
			<button  class="btn btn-primary " data-toggle="modal" data-target="#addrole"> <i class="fa fa-plus"></i> Add  Contact Type</button>
		</div>		
	</div>
	<div class="box-body">
		<?php if($this->session->flashdata('success')){ ?>
		<div class="alert alert-success">
			<span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?>
		</div>
	  <?php } ?>
		<div id="module-view">
			
		</div>
	</div>
</div>

<!-- ADD MODULE -->
<div class="modal modal-primary fade" id="addrole" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog ">
		 <div class="modal-content">
			
				<?php $this->load->view('contact_type/add-contact_type'); ?>
			
		</div>
	</div>
</div>


<script>
$(document).ready(function() {
	showModules();
	var manage = $('#manage');
	
	
	
	function showModules(){
		 // fade out effect first
		$('#module-view').fadeOut('slow', function(){
			$('#module-view').load('<?php echo base_url();?>manage-contact_type', function(){
				// hide loader image
				$('#loader-image').hide(); 
				 // hide read products button
					
				// fade in effect
				$('#module-view').fadeIn('slow');
			});
		});	
	}
});
</script>
