<body style="background: url('<?php echo base_url() ?>assets/image/background.jpg'); background-repeat:no-repeat; background-size: cover">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-warning mt-5 rounded-0" style="border-top: 4px solid #FAFF00;">
                            <div class="text-center pt-3">
                                <h4 class="">Login</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="#">
                                    <div class="form-group">
                                        <label for="Username" class="font-weight-bold">Username</label>
                                        <input id="username" type="text" class="form-control" name="Username" tabindex="1" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label font-weight-bold">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="Password" tabindex="2">
                                    </div>

                                    <div class="form-group p-3">
                                        <button type="submit" class="btn btn-warning btn-lg btn-block font-weight-bold" style="background-color: #FAFF00; border-color:#FAFF00; color: black" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="text-muted text-center">
                            Don't have an account? <a href="<?php echo base_url('register_page') ?>">Register</a>
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