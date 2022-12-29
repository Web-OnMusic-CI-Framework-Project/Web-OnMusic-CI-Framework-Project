<body class="layout-3">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-color-navbar">
            <img src="<?php echo base_url() ?>assets/image/img-logo-onmusic.png" class="sidebar-gone-hide mr-2" width="40px" />
            <a href="index.html" style="color: white; text-transform: none;" class="navbar-brand"><span class="text-warning">On</span>Music</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-right ml-auto">
                    <li class="nav-item active"><a href="<?php echo base_url('customer/dashboard/') ?>" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('customer/customer_my_transaction_page/') ?>" class="nav-link text-white">My Transaction</a></li>
                    
                    <?php if ($this->session->userdata('username')) { ?>
                        <li class="nav-item">
                            <span class="font-weight-bold" style="color: white;">Welcome, <?php echo $this->session->userdata('username'); ?></span>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-sm btn-warning text-white" style="margin-left: 10px;" href="<?php echo base_url('login_page/logout') ?>">Logout</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="btn btn-sm btn-outline-dark text-white" href="<?php echo base_url('register_page'); ?>" class="nav-link">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-sm btn-outline-dark text-white" style="margin-left: 10px;" href="<?php echo base_url('login_page'); ?>" class="nav-link">Login</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </header>