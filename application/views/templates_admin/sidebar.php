<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg color-background-navbar"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <div>
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fa fa-lg fa-bars text-white"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fa fa-3x fa-bars text-white"></i> -->
                <!-- <a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a> -->
                <form class="form-inline mr-auto">
                    <div class="search-element">
                        <input class="form-control" type="search" style="border-radius: 1.2em 0 0 1.2em ;" placeholder="Search data here" aria-label="Search" data-width="250">
                        <button class="btn" type="submit" style="border-radius: 0 1.2em 1.2em 0 ;"><i class="fa fa-lg fa-search"></i></button>
                        <div class="search-backdrop"></div>
                        <div class="search-result">
                            <div class="search-header">
                                Histories
                            </div>
                            <div class="search-item">
                                <a href="#">Kodinger.com</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-header">
                                Result
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product">
                                    oPhone S9 Limited Edition
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="navbar-nav navbar-right">
                    <h6 class="d-sm-none d-lg-inline-block text-white">
                        Welcome, <?php echo $this->session->userdata('username'); ?>
                    </h6>
                </div>
            </nav>
            <div class="main-sidebar sidebar-style-2 color-style-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <div class="row text-left">
                            <div class="col-md-3 pl-5 pt-1">
                                <img src="<?php echo base_url() ?>assets/image/img-logo-onmusic.png" width="40px" />
                            </div>
                            <div class="col-md-6 pl-4">
                                <a href="index.html" style="font-size: 1.5em; color: white; text-transform: none;"><span class="text-warning">On</span>Music</a>
                                <p class="text-white" style="line-height: 0; margin-top: -15px"><span class="text-warning">Admin</span>Management</p>
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu mx-3">
                        <li></li>
                        <li><a class="nav-link text-dark rounded" href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
                        <li><a class="nav-link text-dark rounded" href="<?php echo base_url('admin/data_property_music') ?>"><i class="fas fa-headphones"></i> <span>Data Property Music</span></a></li>
                        <li><a class="nav-link text-dark rounded" href="<?php echo base_url('admin/data_type') ?>"><i class="fas fa-headphones"></i> <span>Data Type</span></a></li>
                        <li><a class="nav-link text-dark rounded" href="<?php echo base_url('admin/data_customer') ?>"><i class="fas fa-users"></i> <span>Data Customer</span></a></li>
                        <li><a class="nav-link text-dark rounded" href="<?php echo base_url('admin/transaction') ?>"><i class="fas fa-money-bill"></i> <span>Transaction</span></a></li>
                        <li><a class="nav-link text-dark rounded" href="<?php echo base_url('admin/report') ?>"><i class="fas fa-file"></i> <span>Report</span></a></li>
                        <li><a class="nav-link text-dark rounded" href="<?php echo base_url('login_page/logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>Log-Out</span></a></li>
                    </ul>
                </aside>
            </div>