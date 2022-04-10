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
									<h4>Site List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped" id="table-2">
											<thead>
												<tr>
													<th class="text-center">
														No.
													</th>
													<th>Site Name</th>
													<th>Site Address</th>
												</tr>
											</thead>
											<tbody>
												<!-- My code starting -->
												<?php //echo $data;  	

if (isset($sitedata)){
	$n = 1; 
            foreach ($sitedata as $key) {
			
                ?>
               
              
<!-- My code ending -->
												
												<tr>
													<td class="text-center">
														<?php 
													
														echo $n;
														$n++;
														
														?>
													</td>
													<td><?php echo $key->sitename;?> </td>
													<td><?php echo $key->siteaddress;?> </td>											
												</tr>
												
												<?php
            }
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