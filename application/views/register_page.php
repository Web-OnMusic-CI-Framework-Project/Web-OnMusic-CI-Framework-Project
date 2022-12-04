<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="http://localhost/stisla-codeigniter/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/stisla-codeigniter/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="http://localhost/stisla-codeigniter/assets/modules/jquery-selectric/selectric.css">

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
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

                        <div class="card card-warning">
                            <div class="pt-4">
                                <h4 class="text-center">Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="Name">Name</label>
                                            <input type="text" class="form-control" name="Name" autofocus>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="Username">Username</label>
                                            <input type="text" class="form-control" name="Username">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="NoTelp">Phone Number</label>
                                        <input type="text" class="form-control" name="NoTelp">
                                    </div>

                                    <div class="form-group">
                                        <label for="Alamat">Address</label>
                                        <input type="text" class="form-control" name="Alamat">
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password2" class="d-block">Password Confirmation</label>
                                            <input id="password2" type="password" class="form-control" name="password-confirm">
                                        </div>
                                    </div>

                                    <div class="form-group px-5">
                                        <button type="submit" class="btn btn-warning btn-lg btn-block">
                                            Register
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

    <!-- General JS Scripts -->
    <script src="http://localhost/stisla-codeigniter/assets/modules/jquery.min.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/popper.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/tooltip.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/moment.min.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="http://localhost/stisla-codeigniter/assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="http://localhost/stisla-codeigniter/assets/js/page/auth-register.js"></script>

    <!-- Template JS File -->
    <script src="http://localhost/stisla-codeigniter/assets/js/scripts.js"></script>
    <script src="http://localhost/stisla-codeigniter/assets/js/custom.js"></script>
</body>

</html>