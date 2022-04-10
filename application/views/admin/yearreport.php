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
								<h4>Yearly Report</h4>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-lg-3">
										<label for="">Category</label>
										<select name="" id="" class="form-control">
											<option value="">All</option>
											<option value="">Tate and Lyle</option>
										</select>
									</div>
									<div class="col-lg-3">
										<label for="">Comapany</label>
										<select name="" id="" class="form-control">
											<option value="">All</option>
											<option value="">Ryan Morgan</option>
										</select>
									</div>
									<div class="col-lg-3">
										<label for="">Year</label>
										<select name="" id="" class="form-control">
											<option value="">2021</option>
											<option value="">2022</option>
											<option value="">2023</option>
										</select>
									</div>
									<div class="col-lg-3 d-flex justify-content-end " style="margin-top: 30px;">
										<button class="btn btn-primary">Search</button>&nbsp;
										<button class="btn btn-primary">Print</button>
									</div>
								</div>
								<div class="row mt-4">
									<div class="table-responsive">
										<table class="table table-striped" id="table-2">
											<thead>
												<tr>
													<th>
														Interventions by Sub Section
													</th>
													<th>Mar-21</th>
													<th>Apr-21</th>
													<th>May-21</th>
													<th>Jun-21</th>
													<th>Jul-21</th>
													<th>Aug-21</th>
													<th>Sep-21</th>
													<th>Oct-21</th>
													<th>Nov-21</th>
													<th>Dec-21</th>
													<th>Jan-21</th>
													<th>Feb-21</th>
													<th>%</th>
													<th>YTD</th>
													<th>Ave</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														6.Site Set Up/Apperance
													</td>
													<td>44</td>
													<td>42</td>
													<td>43</td>
													<td>35</td>
													<td>31</td>
													<td>42</td>
													<td>32</td>
													<td>29</td>
													<td>45</td>
													<td>51</td>
													<td>41</td>
													<td>56</td>
													<td>19</td>
													<td>491</td>
													<td>41</td>
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
								<h4>Top 3 positive Interventions</h4>
							</div>
							<div class="card-body">
								<canvas id="myChart"></canvas>
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
	type: 'line',
	data: {
		labels: ["AkzoNobel", "Musk Desin", "Project Safety Audits", "Tate and Lyle", "Weetabox Burton AP1",
			"Ronaled", "Acora", "Banoli", "Newo", "Nafros"
		],
		datasets: [{
			label: 'Series 1', // Name the series
			data: [500, 50, 2424, 14040, 14141, 4111, 4544, 47, 5555,
				6811
			], // Specify the data values array
			fill: false,
			borderColor: '#2196f3', // Add custom color border (Line)
			backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
			borderWidth: 1 // Specify bar border width
		}, {
			label: 'Series 2', // Name the series
			data: [1288, 88942, 44545, 7588, 99, 242, 1417, 5504, 75,
				457
			], // Specify the data values array
			fill: false,
			borderColor: '#4CAF50', // Add custom color border (Line)
			backgroundColor: '#4CAF50', // Add custom color background (Points and Fill)
			borderWidth: 1 // Specify bar border width
		}, {
			label: 'Series 3', // Name the series
			data: [1218, 58942, 24545, 9588, 199, 3342, 417, 4504, 1175,
				57
			], // Specify the data values array
			fill: false,
			borderColor: '#e60000', // Add custom color border (Line)
			backgroundColor: '#e60000', // Add custom color background (Points and Fill)
			borderWidth: 1 // Specify bar border width
		}]
	},
	options: {
		responsive: true, // Instruct chart js to respond nicely.
		maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height
	}
});
</script>