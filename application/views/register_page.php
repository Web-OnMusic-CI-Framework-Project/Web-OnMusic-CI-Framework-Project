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
                                            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="Password">
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
                                        <button type="submit" class="btn btn-warning btn-lg btn-block" style="background-color: #FAFF00; border-color:#FAFF00; color: black">
                                            <b>Register</b>
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