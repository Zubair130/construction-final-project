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
				<div class="container mt-5">
					<div class="section-body">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="card card-primary">
								<div class="card-header">
									<h4>Inspection List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped" id="table-2">
											<thead>
												<tr>
													<th class="text-center">
														#
													</th>
													<th>Site Name</th>
													<th>Inspector Name</th>
													<th>Supervisor</th>
													<th>Work Address</th>
													<th>Job Description</th>
													<th>Date</th>													
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $c=1;?>
												<?php foreach($inspections as $key)
												{
													?>

													
												<tr>
													<td class="text-center">
													<?php echo $c;?>
													</td>
													<td><?php echo $key->sitename;?></td>
													<td><?php echo $key->fullname;?></td>
													<td><?php echo $key->supervisor;?></td>
													<td><?php echo $key->workarea;?></td>
													
													<td><?php echo $key->jobdesc;?></td>
													<td><?php echo $key->createdat;?></td>											
													<td>
														<a href="<?php echo base_url().'sites/showsurveydetails/'.$key->surveyid?>"><i class="fa fa-eye text-success"
																aria-hidden="true"></i></a>
													</td>
												</tr>
												<?php		
												$c++;

												}
												?>
											</tbody>
										</table>
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