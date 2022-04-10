<?php $this->load->view("admin/include/head");?>
<!-- main content  -->
<div id="app">
	<div class="main-wrapper main-wrapper-1">
		<div class="navbar-bg"></div>
		<?php $this->load->view('include/header') ?>
		<?php $this->load->view('include/sidebar') ?>
		<div class="main-content">
			<!-- Main Content -->
			<section class="section" >
				<div class="container mt-5">
					<div class="section-body">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="card card-primary">
								<div class="card-header">
									<h4>Inspection Detail</h4>
									<button class="btn btn-outline-primary" id="printreport"  onclick="printDiv()">Print Report</button>

								</div>
								<div class="card-body">
									<div class="card-body">
										<h2 class="title">Health, Safety, Quality and Environmental Site Inspection</h2>
										<div id="interven">
										<table class="table table-bordered table-striped table-responsive">
											<?php foreach ($surveydetaisl as $key ){ 
											?>
											
											<tr>
												<th>Site:</th>
												<td><?php echo $key->sitename;?></td>
												<th>Completed By: </th>
												<td><?php echo $key->fullname;?></td>
												<th>Date: </th>
												<td><?php echo $key->createdat;?></td>
											</tr>
											<tr>
												<th>Work Area:</th>
												<td><td><?php echo $key->workarea;?></td></td>
												<th>Job Description: </th>
												<td colspan="3"><?php echo $key->jobdesc;?></td>
											</tr>
											<tr>
												<th>Supervisor</th>
												<td><?php echo $key->supervisor;?></td>
												<th>Inspector: </th>
												<td><?php echo $key->fullname;?></td>
												<th>Type: </th>
												<td><?php echo $key->type;?></td>
											</tr>

											<?php
											}
											?>
										</table>
										<br>
										<table class="table table-bordered table-striped table-responsive">
											<tr>
												<th></th>
												<th>Interventions</th>
												<th>Comment</th>
												<th>Completed</th>
												<th>Action Taken</th>
											</tr>
											<?php foreach ($singleinspection as $key){
												?>
											<tr>
												<td><?php echo $key->interventiontype;?></td>
												<td style="text-align: center !important;"><?php echo $key->intervention;?></td>
												<td><?php echo $key->comments;?></td>
												<td style="text-align: center !important;"><?php echo $key->iscompleted;?></td>
												<td><?php echo $key->action;?></td>
											</tr>
											<?php 
										}
										 ?>
											
											<tr>
												<th>Overall</th>
												<td><?php echo $key->intersum;?></td>
											</tr>
										</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- Main Content End -->
			<?php $this->load->view('include/themesetting') ?>
		</div>

	</div>
</div>
<!-- main content  -->
<?php $this->load->view("admin/include/footer");?>

<!-- Script to print the content of a div -->
<script>
        function printDiv() {
            var divContents = document.getElementById("interven").innerHTML;
            var a = window.open('', '', 'height=800, width=500');
            a.document.write('<html>');
            a.document.write('<body > <h1>Intervention Report <br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>