<h4>Dashboard</h4>
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-12">
		<div class="callout callout-success" align="center">
			<h1><i class="fa fa-building"></i></h1>
			<h4><a href="<?php echo base_url();?>hospitals">HOSPITALS</a></h4>
		</div>		
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<div class="callout callout-info" align="center">
			<h1><i class="fa fa-users"></i></h1>
			<h4><a href="<?php echo base_url();?>doctors">DOCTORS</a></h4>
		</div>		
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<div class="callout callout-danger" align="center">
			<h1><i class="fa fa-heart"></i></h1>
			<h4><a href="<?php echo base_url();?>medical_insurance">MEDICAL INSURANCE</a></h4>
		</div>		
	</div>
	
</div>

 <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Visitors Report</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                   
                   
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8">
                      <p class="text-center">
                        <strong>Visitor: 1 Jan, 2016 - 30 Sept, 2016</strong>
                      </p>
                      <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" style="height: 180px;"></canvas>
                      </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                      <p class="text-center">
                        <strong>Activity</strong>
                      </p>
                      <div class="progress-group">
                        <span class="progress-text">Active Doctors</span>
                        <span class="progress-number"><b>160</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Active Insurance Company</span>
                        <span class="progress-number"><b>310</b>/400</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Hospitals Inquiries</span>
                        <span class="progress-number"><b>480</b>/800</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Send Inquiries</span>
                        <span class="progress-number"><b>250</b>/500</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
               
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
<script src="<?php echo base_url();?>assets/js/dashboard2.js"></script>