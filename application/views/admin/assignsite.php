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
				<div class="row ">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="card card-primary">
							<div class="card-header">
								<h4>Assign Site</h4>
							</div>
							<div class="card-body">
								<form method="POST" action="<?php echo base_url().'sites/inspectorSite';?>">
								<?php 
							if($this->uri->segment(2) == "created"){
							echo' <p class="text-success">Inspector Assigned to Site Successfully.</p>';
							}
							?>
									<div class="row">
										<div class="form-group col-6">
											<label for="Inspector">Inspector</label>
											<select id="Inspector" class="form-control" name="inspector">
									<!-- My code starting -->
				<?php //echo $data;  	
if (isset($inspectors)){
	$n = 1; 
            foreach ($inspectors as $key) {
			
                ?>
												<option value="<?php echo $key->userid;?>"><?php echo $key->fullname;?></option>
											
												<?php
            }
        }
		?>

											</select>
										</div>
										<div class="form-group col-6">
											<label for="construction">Construction Site</label>
											<select id="construction" class="form-control" name="site">
												<!-- My code starting -->
				<?php //echo $data;  	
if (isset($sitenames)){
	$n = 1; 
            foreach ($sitenames as $key) {
			
                ?>
												<option value="<?php echo $key->siteid;?>"><?php echo $key->sitename;?></option>
												
												<?php
            }
        }
		?>
											</select>
										</div>
									</div>




									<div class="form-group">
										<button type="submit"  name ="btnsave" class="btn btn-primary btn-lg btn-block">
											Save
										</button>
									</div>
								</form>
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