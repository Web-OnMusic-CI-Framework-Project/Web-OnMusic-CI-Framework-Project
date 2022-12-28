<body style="background: url('<?php echo base_url() ?>assets/image/background.jpg'); background-repeat:no-repeat; background-size: cover">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    
                        <div class="card card-warning" style="border-top: 4px solid #FAFF00;">
                            <div class="pt-4">
                                <h4 class="text-center">Register</h4>
                            </div>

                            <div class="card-body">
                                
                                <?php echo form_open('register_page/register_action'); ?>
                                    
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="font-weight-bold" for="Name">Name</label>
                                        <input type="text" class="form-control" name="Nama" autofocus>
                                        <?php echo form_error('Nama', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="font-weight-bold" for="Username">Username</label>
                                        <input type="text" class="form-control" name="Username">
                                        <?php echo form_error('Username', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold" for="NoTelp">Phone Number</label>
                                    <input type="text" class="form-control phone-number" name="NoTelp">
                                    <?php echo form_error('NoTelp', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold" for="NoTelp">Email</label>
                                    <input type="text" class="form-control" name="Email">
                                    <?php echo form_error('Email', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold" for="Alamat">Address</label>
                                    <input type="text" class="form-control" name="Alamat">
                                    <?php echo form_error('Alamat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="font-weight-bold" for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="Password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                        <?php echo form_error('Password', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="font-weight-bold" for="password2" class="d-block">Password Confirmation</label>
                                        <input id="password2" type="password" class="form-control" name="password-confirm">
                                    </div>
                                </div>

                                <div class="form-group px-5">
                                    <button type="submit" class="btn btn-warning btn-lg btn-block" style="background-color: #FAFF00; border-color:#FAFF00; color: black">
                                        <b>Register</b>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <span style="position: absolute; bottom: 8px; right: 16px;">
            <img src="<?php echo base_url() ?>assets/image/img-logo-onmusic.png" class="sidebar-gone-hide mr-2" width="40px" />
            <a href="index.html" style="color: white; text-transform: none;" class="navbar-brand"><span class="text-warning">On</span>Music</a>
            <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </span>
    </footer>
    <!-- General JS Scripts -->
    <script src="http://localhost/stisla-codeigniter/assets/modules/jquery.min.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/moment.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="<?php echo base_url() ?>assets/assets_stisla/js/page/index-0.js"></script>

    <!-- Template JS File -->
    <script src="<?php echo base_url() ?>assets/assets_stisla/js/scripts.js"></script>
    <script src="<?php echo base_url() ?>assets/assets_stisla/js/custom.js"></script>
</body>

</html>