<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Masuk Akun</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap-5.2.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css">

    <style>
        :root {
            --style-primary: #FAFF00;
            --style-600: 600;
        }

        body {
            background-size: cover;
            background-image: url("<?php echo base_url() ?>assets/image/background-login.jpg");
        }
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-top: .2em solid var(--style-primary);">
                        <div class="card-body p-4 text-center">
                            <form>
                                <h1 class="h3 mb-3" style="font-weight: var(--style-600);">Login</h1>

                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Username</label>
                                </div>

                                <!-- Checkbox -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check d-flex justify-content-start mb-4">
                                            <input class="form-check-input" style="margin-right: .5em;" type="checkbox" value="" id="form1Example3" />
                                            <label class="form-check-label" for="form1Example3">Remember password </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <a>Forgot Password?</a>
                                    </div>
                                </div>

                                <!-- Button Register -->
                                <button class="w-75 btn btn-lg" type="submit" style="background-color: var(--style-primary); font-weight: var(--style-600)">Login</button>
                                <p class="mt-2 mb-3 text-muted">Have not an account? <a style="font-weight: var(--style-600)">Register</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


</html>