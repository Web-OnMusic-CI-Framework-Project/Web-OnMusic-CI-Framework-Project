<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="http://localhost/stisla-codeigniter/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/stisla-codeigniter/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="http://localhost/stisla-codeigniter/assets/modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="http://localhost/stisla-codeigniter/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/stisla-codeigniter/assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body style="background: url('<?php echo base_url() ?>assets/image/background.jpg'); background-repeat:no-repeat; background-size: cover">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-warning mt-5 rounded-0">
                            <div class="text-center pt-3">
                                <h4 class="">Login</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="#" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="Username">Email</label>
                                        <input type="text" class="form-control" name="Username" tabindex="1" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                        <div class="float-right">
                                            <a href="http://localhost/stisla-codeigniter/dist/auth_forgot_password" class="text-small">
                                                Forgot Password?
                                            </a>
                                        </div>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group p-3">
                                        <button type="submit" class="btn btn-warning btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="text-muted text-center">
                            Have not an account? <a href="http://localhost/stisla-codeigniter/dist/auth_register">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="http://localhost/stisla-codeigniter/assets/modules/jquery.min.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/popper.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/tooltip.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/moment.min.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/js/stisla.js"></script>


    <!-- Template JS File -->
    <script src="http://localhost/stisla-codeigniter/assets/js/scripts.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/js/custom.js"></script>
</body>

</html>