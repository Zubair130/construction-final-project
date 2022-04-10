<?php $this->load->view("admin/include/head");?>
<!-- main content  -->
<div id="app">
	<div class="main-wrapper main-wrapper-1">
		<div class="navbar-bg"></div>
		<?php $this->load->view('include/header') ?>
		<?php $this->load->view('include/sidebar') ?>
		<div class="main-content">
			<!-- Main Content -->
			<section class="section">
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
						<div class="card">
							<div class="card-header">
								<h4>Monthly Report</h4>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-lg-3">
										<label for="">Site</label>
										<select name="" id="" class="form-control">
											<option value="">All</option>
											<option value="">Tate and Lyle</option>
										</select>
									</div>
									<div class="col-lg-3">
										<label for="">Entered By</label>
										<select name="" id="" class="form-control">
											<option value="">All</option>
											<option value="">Ryan Morgan</option>
										</select>
									</div>
									<div class="col-lg-2">
										<label for="">Month</label>
										<select name="" id="" class="form-control">
											<option value="">Sep</option>
											<option value="">Oct</option>
											<option value="">Nov</option>
										</select>
									</div>
									<div class="col-lg-2">
										<label for="">Year</label>
										<select name="" id="" class="form-control">
											<option value="">2021</option>
											<option value="">2022</option>
											<option value="">2023</option>
										</select>
									</div>
									<div class="col-lg-2 d-flex justify-content-end " style="margin-top: 30px;">
										<button class="btn btn-primary">Search</button>&nbsp;
										<button class="btn btn-primary">Print</button>
									</div>
								</div>
								<div class="row mt-4">
									<div class="table-responsive">
										<table class="table table-striped" id="table-2">
											<thead>
												<tr>
													<th class="text-center">
														Date
													</th>
													<th>Site</th>
													<th>Work Area</th>
													<th>Inspector</th>
													<th>Entered By</th>
													<th>Total Interventions</th>
													<th>Outstanding?</th>
													<th>Inspection</th>
													<th>Attachment</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">
														1-sep-21
													</td>
													<td>Maham Javed</td>
													<td>Maham</td>
													<td>Raw Sugar</td>
													<td>ryan morgan</td>
													<td>2</td>
													<td></td>
													<td><a href="#"><i class="fa fa-eye text-success"
																aria-hidden="true"></i></a></td>
													<td><a href="#"><i class="fa fa-eye text-success"
																aria-hidden="true"></i></a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
						<div class="card">
							<div class="card-header">
								<h4>Inspection Graph</h4>
							</div>
							<div class="card-body">
								<canvas id="myChart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="text-center">Total Intervantions</h4>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-8">
										<h4>A. Working Standards</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-4">1. Work At Height</div>
									<div class="col-2">6</div>
								</div>
								<div class="row">
									<div class="col-4">2. Lifting Operation - Crane, Fork Lift Truck, Hoist etc</div>
									<div class="col-2">1</div>
								</div>
								<div class="row">
									<div class="col-4">3. Certification - Daily Checksheets for MEWP and FLT</div>
									<div class="col-2">1</div>
								</div>
								<div class="row">
									<div class="col-4">4. Confined Space Work</div>
									<div class="col-2">0</div>
								</div>
								<div class="row">
									<div class="col-4">5. Electrical Work</div>
									<div class="col-2">2</div>
								</div>
								<div class="row">
									<div class="col-8">
										<h4>B. Quality</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-4">6. Site Set Up & Appearance, Signage</div>
									<div class="col-2">26</div>
								</div>
								<div class="row">
									<div class="col-4">7. Paperwork (Permits, Risk Assessments, Method Statment,</div>
									<div class="col-2">7</div>
								</div>
								<div class="row">
									<div class="col-4">8. Certification - Training, Insurance Inspection, Induction
										Current</div>
									<div class="col-2">0</div>
								</div>
								<div class="row">
									<div class="col-8">
										<h4>C. Site Rules</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-4">9. Hot Work</div>
									<div class="col-2">0</div>
								</div>
								<div class="row">
									<div class="col-4">10. Isolation and Lock Offs</div>
									<div class="col-2">4</div>
								</div>
								<div class="row">
									<div class="col-4">11. Fire Exits and Escape Routes</div>
									<div class="col-2">2</div>
								</div>
								<div class="row">
									<div class="col-4">12. Awareness - Fire Exit, Assembly Point</div>
									<div class="col-2">6</div>
								</div>
								<div class="row">
									<div class="col-8">
										<h4>D. Environmental</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-4">13. Waste Management</div>
									<div class="col-2">4</div>
								</div>
								<div class="row">
									<div class="col-4">14. Product Contamination</div>
									<div class="col-2">4</div>
								</div>
								<div class="row">
									<div class="col-4">15. COSHH & Asbestos</div>
									<div class="col-2">0</div>
								</div>
								<div class="row">
									<div class="col-8">
										<h4>E. Protection Of Individuals</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-4">16. PPE</div>
									<div class="col-2">16</div>
								</div>
								<div class="row">
									<div class="col-4">17. Manual Handling</div>
									<div class="col-2">2</div>
								</div>
								<div class="row">
									<div class="col-4">18. Other Contractors</div>
									<div class="col-2">8</div>
								</div>
								<div class="row">
									<div class="col-8">
										<h4>F. Tools, Cables & Other Equipment</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-4">19. Power Tools, Cables & Other Equipment</div>
									<div class="col-2">3</div>
								</div>
								<div class="row">
									<div class="col-4">20. Voltage Detector Checked</div>
									<div class="col-2">1</div>
								</div>
								<div class="row">
									<div class="col-4">21. Tools Used Fit For Purpose</div>
									<div class="col-2">1</div>
								</div>
								<div class="row">
									<div class="col-8">
										<h4>G. Miscellaneous</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-4">22. Company Vehicles</div>
									<div class="col-2">0</div>
								</div>
								<div class="row">
									<div class="col-4">23. Fire Precautions</div>
									<div class="col-2">1</div>
								</div>
								<div class="row">
									<div class="col-4">24. Workshop Conditions</div>
									<div class="col-2">4</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');

var myChart = new Chart(ctx, {
	type: 'bar',
	data: {
		labels: ["AkzoNobel", "Musk Desin", "Project Safety Audits", "Tate and Lyle", "Weetabox Burton AP1",
			"Ronaled", "Acora", "Banoli", "Newo", "Nafros"
		],
		datasets: [{
			label: 'Series 1', // Name the series
			data: [500, 50, 2424, 14040, 14141, 4111, 4544, 47, 5555,
			6811], // Specify the data values array
			fill: false,
			borderColor: '#2196f3', // Add custom color border (Line)
			backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
			borderWidth: 1 // Specify bar border width
		}, {
			label: 'Series 2', // Name the series
			data: [1288, 88942, 44545, 7588, 99, 242, 1417, 5504, 75,
			457], // Specify the data values array
			fill: false,
			borderColor: '#4CAF50', // Add custom color border (Line)
			backgroundColor: '#4CAF50', // Add custom color background (Points and Fill)
			borderWidth: 1 // Specify bar border width
		}]
	},
	options: {
		responsive: true, // Instruct chart js to respond nicely.
		maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height
	}
});
</script>