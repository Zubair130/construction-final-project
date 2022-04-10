<?php $this->load->view("include/head");?>
<!-- main content  -->
<div id="app">
	<section class="section">
		<div class="container mt-5">
			<div class="row">
				<div
					class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
					<div class="card card-primary">
						<div class="card-header">
							<h4>Register</h4>
						</div>
						<div class="card-body">
							<form method="POST" action="<?php echo base_url() ?>authentication/registerUser" > 
							<?php 
							if($this->uri->segment(2) == "inserted"){
							echo' <p class="text-success">Account created successfully.</p>';
							}
							?>
								<div class="row">
									<div class="form-group col-6">
										<label for="first_name">First Name</label>
										<input id="first_name" type="text" class="form-control" name="first_name"
											autofocus>
											<span class="text-danger"><?php echo form_error("first_name");?> </span>
									</div>
									<div class="form-group col-6">
										<label for="last_name">Last Name</label>
										<input id="last_name" type="text" class="form-control" name="last_name">
										<span class="text-danger"><?php echo form_error("last_name");?> </span>
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email">
									<div class="invalid-feedback">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-6">
										<label for="password" class="d-block">Password</label>
										<input id="password" type="password" class="form-control pwstrength"
											data-indicator="pwindicator" name="password">
										<div id="pwindicator" class="pwindicator">
											<div class="bar"></div>
											<div class="label"></div>
										</div>
									</div>
									<div class="form-group col-6">
										<label for="password2" class="d-block">Password Confirmation</label>
										<input id="password2" type="password" class="form-control"
											name="password-confirm">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12">
										<label for="construction" class="d-block">Site Name</label>
										<input id="construction" type="text" class="form-control " name="sitename">
									</div>
								</div>
								<div class="row">
									<div class="col-12 form-group">
										<label for="">Construction Address</label>
										<textarea name="" id="" class="form-control"></textarea>
									</div>
								</div>
								<div class="form-group">
									<button type="submit" name="registration"class="btn btn-primary btn-lg btn-block">
										Register
									</button>
								</div>
							</form>
						</div>
						<div class="mb-4 text-muted text-center">
							Already Registered? <a href="<?php echo base_url('')?>authentication/loginProcess">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- main content  -->
<?php $this->load->view("include/footer");?>