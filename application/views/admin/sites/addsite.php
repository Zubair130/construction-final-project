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
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="card card-primary">
								<div class="card-header">
									<h4>Add Site</h4>
								</div>
								<div class="card-body">
									<form method="POST" action="<?php echo base_url() ?>sites/createsite">
									<?php 
							if($this->uri->segment(2) == "inserted"){
							echo' <p class="text-success">Site created successfully.</p>';
							}
							?>
										<div class="row">
											<div class="form-group col-12">
												<label for="site_name">Site Name</label>
												<input id="site_name" type="text" class="form-control"
													name="sitename" autofocus>
											</div>
											<div class="form-group col-12">
												<label for="siteaddress">Site Address</label>
												<input id="siteaddress" type="text-area" class="form-control" name="siteaddress">
											</div>
										</div>

										<!-- <div class="row">
											<div class="form-group col-6">
												<label for="email">Email</label>
												<input id="email" type="email" class="form-control" name="email">
												<div class="invalid-feedback">
												</div>
											</div>
											<div class="form-group col-6">
												<label for="password" class="d-block">Password</label>
												<input id="password" type="password" class="form-control pwstrength"
													data-indicator="pwindicator" name="password">

											</div>
										</div>

										<div class="row">
											<div class="form-group col-6">
												<label for="User Type">User Type</label>
												<select name="userType" id="user" class="form-control">
													
													<option value="2">Manager</option>
													<option value="3">Inspector</option>
												</select>
											</div>

										</div> -->
										<div class="form-group">
											<button type="submit"  name="addsite" class="btn btn-primary btn-lg btn-block">
												Save
											</button>
										</div>
									</form>
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