<?php $this->load->view("include/head");?>
<!-- main content  -->
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Reset Password</h4>
                        </div>
                        <div class="card-body">
                            <?php if ($this->session->flashdata('success')) {?>
                            <?php echo '<div class="mx-auto alert alert-success">'; ?>
                            <?php echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'; ?>
                            <?php echo '<strong>Success! </strong>' .
    $this->session->flashdata('success'); ?>
                            <?php echo '</div>'; ?>
                            <?php }?>
                            <?php if ($this->session->flashdata('error')) {?>
                            <?php echo '<div class="mx-auto alert alert-danger">'; ?>
                            <?php echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'; ?>
                            <?php echo '<strong>Error! </strong>' .
    $this->session->flashdata('error'); ?>
                            <?php echo '</div>'; ?>
                            <?php }?>

                            <form id="login" method="POST" action="<?php echo base_url(); ?>reset/process">

                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input id="newpassword" type="password" class="form-control pwstrength"
                                        data-indicator="pwindicator" name="newpassword" tabindex="2" required>
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input id="confirmpassword" type="password" class="form-control"
                                        name="confirmpassword" tabindex="2" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- main content  -->
<?php $this->load->view("include/footer");?>