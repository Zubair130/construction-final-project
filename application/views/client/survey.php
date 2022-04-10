<?php $this->load->view("admin/include/head");?>
<!-- main content  -->
<div id="app">
	<div class="main-wrapper main-wrapper-1">
		<div class="navbar-bg"></div>
		<?php $this->load->view('include/header') ?>
		<?php $this->load->view('include/sidebar') ?>
		<div class="main-content">
			<!-- main content start -->
			<section class="section ">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="card card-primary">
						<div class="card-header">
							<h4>INSPECTION FORM</h4>
						</div>
						<div class="card-body">
							<div class="row mt-2 d-flex justify-content-between mx-2">
								<a href="#" class="col-lg-5 btn btn-primary buttonlabel  text-white py-4 mb-2">New Site
									Inspection</a>
								<a href="#" class="col-lg-5 btn btn-primary buttonlabel text-white py-4 mb-2">Site
									Inspection
									List</a>

							</div>

							<form action="<?php echo base_url().'sites/submitsurvey';?>" method="POST" enctype="multipart/form-data">
							<div class="row mt-2  py-2 mx-auto">
								<div class="col-lg-6">
									<label for="" class="mb-0">
										Select Site
									</label>
									<select name="siteid" id="" class="form-control col-lg-6 col-sm-12">
																	<!-- My code starting -->
				<?php //echo $data;  	
if (isset($sitesdata)){
	$n = 1; 
            foreach ($sitesdata as $key) {
			
                ?>
												<option value="<?php echo $key->siteid;?>"><?php echo $key->sitename;?></option>
											
												<?php
            }
        }
		?>
									</select>
								</div>
								<!-- <div class="col-lg-6">
									<div class="row">
										<div class="col-lg-2">
											<label for="" class="mb-0">
												Area</label>
											<select name="" id="" class="form-control col-lg-8 col-sm-12">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>

										</div>
										<div class="col-lg-2">
											<label for="" class="mb-0">
												Engineer </label>
											<select name="" id="" class="form-control col-lg-8 col-sm-12">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										<div class="col-lg-2">
											<label for="" class="mb-0">
												Type </label>
											<select name="" id="" class="form-control col-lg-8 col-sm-12">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										<div class="col-lg-2">
											<label for="" class="mb-0">
												CM Tech </label>
											<select name="" id="" class="form-control col-lg-8 col-sm-12">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										<div class="col-lg-2">
											<label for="" class="mb-0">
												Severity </label>
											<select name="" id="" class="form-control col-lg-8 col-sm-12">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										<div class="col-lg-2 buttonsearch ">
											<a href="#" class=" text-white btn btn-primary">Search</a>
										</div>
									</div>
								</div> -->
							</div>
							<div class="row my-5 mx-0">
								<div class="col-lg-9">
									<div class="row">
										<div class="col-lg-6 ">
											<div class="row">
												<div class="col-sm-4 my-auto my-2">
													<div class="bg-theme text-white buttonlabel p-2 ">
														<h6 class="mb-0">Work Area</h6>
													</div>
												</div>
												<div class="col-sm-8 my-2">
													<input type="text" name="workarea" id="" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-6 ">
											<div class="row ">
												<div class="col-sm-4 my-auto my-2">
													<div class="bg-theme text-white buttonlabel p-2 ">
														<h6 class="mb-0">Job Description</h6>
													</div>
												</div>
												<div class="col-sm-8 my-2">
													<input type="text" name="jobdesc" id="" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-6 ">
											<div class="row">
												<div class="col-sm-4 my-auto my-2">
													<div class="bg-theme text-white buttonlabel p-2 ">
														<h6 class="mb-0">Supervisor</h6>
													</div>
												</div>
												<div class="col-sm-8 my-2">
													<input type="text" name="supervisor" id=""  class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-6 ">
											<div class="row">
												<div class="col-sm-4 my-auto my-2">
													<div class="bg-theme text-white buttonlabel p-2 ">
														<h6 class="mb-0">Inspector</h6>
													</div>
												</div>
												
												<div class="col-sm-8 my-2">
													<input type="text" name="inpectrorname" id="" value="<?php echo $_SESSION['fullname'];?>"  disabled class="form-control">
													<input type="hidden" name="incpectorid" id=""  value="<?php echo $_SESSION['userid'];?>"  disabled class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-6 ">
											<div class="row">
												<div class="col-sm-4 my-auto my-2">
													<div class="bg-theme text-white buttonlabel p-2 ">
														<h6 class="mb-0">Inspection Date</h6>
													</div>
												</div>
												<div class="col-sm-8 my-2">
													<input type="Date" name="inspectiondetails" id="" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-6 ">
											<div class="row">
												<div class="col-sm-4 my-auto my-2">
													<div class="bg-theme text-white buttonlabel p-2 ">
														<h6 class="mb-0">Type</h6>
													</div>
												</div>
												<div class="col-sm-8 my-2">
													<select name="type" id="" class="form-control">
														<option value="Installation">Installation</option>
														<option value="Site">Site</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class=" px-0">
								<div class="row text-white d-flex justify-content-between">
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel"></div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">Intervention</h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">Comment</h6>
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">Completed</h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">Action Taken</h6>
									</div>
								</div>

							</div>
							<div class=" px-0">
								<div class="row text-white d-flex justify-content-between">
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">A. Working Student</h6>	
										
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"> </h6>
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">1. Work At Height</h6>
										<input type="hidden" name="stype[]" value="0">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">2. Lifting Operation - Crane, Fork Lift, Truck, Holats etc
										</h6>
										<input type="hidden" name="stype[]" value="1">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">3. Certification - Daily Check Sheets For MEWP and FLT
										</h6>
										<input type="hidden" name="stype[]" value="2">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">4. Confined Space Work</h6>
										<input type="hidden" name="stype[]" value="3">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">5. Electrical Work</h6>
										<input type="hidden" name="stype[]" value="4">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
							</div>
							<div class=" px-0">
								<div class="row text-white d-flex justify-content-between">
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">B. Qualiity</h6>
										
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"> </h6>
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">6. Site Set Up & Appearance, Signage</h6>
										<input type="hidden" name="stype[]" value="5">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">7. Paper Work (Permits, Risk, Assessments, Method
											Statment) </h6>
											<input type="hidden" name="stype[]" value="6">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">8. Certification - Training, Insurance Inspection,
											Induction
											Current
										</h6>
										<input type="hidden" name="stype[]" value="7">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>

							</div>
							<div class=" px-0">
								<div class="row text-white d-flex justify-content-between">
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">C. Site Rules</h6>
										
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"> </h6>
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">9. Hot Work</h6>
										<input type="hidden" name="stype[]" value="8">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">10. Isolation and Lock Offs</h6>
										<input type="hidden" name="stype[]" value="9">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">11. Fire Exits and Escape Routes</h6>
										<input type="hidden" name="stype[]" value="10">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">12. Awareness - Fire Exits, Assembly Points</h6>
										<input type="hidden" name="stype[]" value="11">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
									<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
							</div>
							<div class=" px-0">
								<div class="row text-white d-flex justify-content-between">
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">D. Environmental</h6>
										
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"> </h6>
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">13. Waste Management</h6>
										<input type="hidden" name="stype[]" value="12">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">14. Product Contamination</h6>
										<input type="hidden" name="stype[]" value="13">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">15. COSHH & Asbestos</h6>
										<input type="hidden" name="stype[]" value="14">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
							</div>
							<div class=" px-0">
								<div class="row text-white d-flex justify-content-between">
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">E. Production Of Individual</h6>
									
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"> </h6>
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">16. PPE</h6>
										<input type="hidden" name="stype[]" value="15">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">17. Manual Handling</h6>
										<input type="hidden" name="stype[]" value="16">

									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">18. Other Contractors</h6>
										<input type="hidden" name="stype[]" value="17">

									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
							</div>
							<div class=" px-0">
								<div class="row text-white d-flex justify-content-between">
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">F. Tools, Cabels and Other Equipment</h6>
										
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"> </h6>
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">19. Power Tools, Cabels and Other Equipment</h6>
										<input type="hidden" name="stype[]" value="18">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">20. Voltage Detector Checked</h6>
										<input type="hidden" name="stype[]" value="19">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">21. Tools Used Fit For Purpose</h6>
										<input type="hidden" name="stype[]" value="20">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
							</div>
							<div class=" px-0">
								<div class="row text-white d-flex justify-content-between">
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">G. Miscellaneous</h6>
										
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-1 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"></h6>
									</div>
									<div class="col-lg-3 bg-theme mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2"> </h6>
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">22. Company Vehicles</h6>
										<input type="hidden" name="stype[]" value="21">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">23. Fire Precaution</h6>
										<input type="hidden" name="stype[]" value="22">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
								<div class="row  text-dark d-flex justify-content-between">
									<div class="col-lg-3 bg-secondary mx-1 my-2 buttonlabel">
										<h6 class="mb-0 py-2">24. Workshop Conditions</h6>
										<input type="hidden" name="stype[]" value="23">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="intervention[]" id="" class="form-control">
											<option value=""></option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="comment[]" id="" class="form-control">
									</div>
									<div class="col-lg-1 bg-secondary mx-1  buttonlabel my-auto">
										<select name="yesno[]" id="" class="form-control">
											<option value=""></option>
											<option value="1">yes</option>
											<option value="2">no</option>
										</select>
									</div>
									<div class="col-lg-3 bg-secondary mx-1  buttonlabel my-auto">
										<input type="text" name="action[]" id="" class="form-control">
									</div>
								</div>
							</div>
							<div class="bg-theme  banner2 text-center text-white py-2 my-2">
								<h5>Optional Attachment (JPG)</h5>
							</div>
							<div class="mb-2">
								<input type="file" multiple="multiple" name="image_name[]" class="form-control">
							</div>
							<div class="mb-3 ml-3">
								<input name="submitsurvey" class="btn btn-primary text-white " type="submit">
								
							</div>
						</div>
					</div>
				</div>
			</section>
			</form>
			<!-- main content end -->
			<?php $this->load->view('include/themesetting') ?>
		</div>

	</div>
</div>
<!-- main content  -->
<?php $this->load->view("admin/include/footer");?>