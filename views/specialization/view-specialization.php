<?php $specialization = $specialization[0];?>
<h1><?php echo $specialization->specialization_desc;?></h1>

<div class="box box-default with-nav-tabs	">
	<div class="box-header">
		<h4>Doctors</h4>
	</div>
		<div class="box-body">
		<?php 
		if(!empty($doctors)){ ?>
			<table class="table table-hover" id="docs">
				<thead>
				  <tr>
					<th>#</th>
					<th>Doctor</th>					
					<th>Action</th>		  
				  </tr>
				</thead>
			<tbody>
			<?php $i = 1; foreach($doctors as $docs) {
				
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td>DR. <?php echo $docs->first_name." ".$docs->middle_name." ".$docs->last_name;?></td>
									  
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

<script>
    $(document).ready(function() {
        $('#docs').dataTable({
			"scrollY" : "250px",
			"dom": 'T<"clear">lfrtip',
			"tableTools": {
				"sSwfPath": "/swf/copy_csv_xls_pdf.swf"
			}
		});
		});
</script>

 <script type='text/javascript'>
            function loadMapScenario() {
                var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
                    credentials: 'Your Bing Maps Key'
                });
                Microsoft.Maps.loadModule('Microsoft.Maps.Search', function () {
                    var searchManager = new Microsoft.Maps.Search.SearchManager(map);
                    var requestOptions = {
                        bounds: map.getBounds(),
                        where: '<?php echo $specialization->specialization_address;?>',
                        callback: function (answer, userData) {
                            map.setView({ bounds: answer.results[0].bestView });
                            map.entities.push(new Microsoft.Maps.Pushpin(answer.results[0].location));
                        }
                    };
                    searchManager.geocode(requestOptions);
                });
                
            }
        </script>
        <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?branch=release&callback=loadMapScenario' async defer></script>