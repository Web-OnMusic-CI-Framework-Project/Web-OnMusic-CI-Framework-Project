<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap-5.2.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 d-none d-md-block sidebar vh-100" style="background-image: url(<?php echo base_url() ?>assets/image/background-sidebar.png); background-size: cover;">
                <div class="px-4">
                    <div class="sidebar-heading d-flex justify-content-between my-4">
                        <div class="row">
                            <div class="col-3">
                                <img src="<?php echo base_url() ?>assets/image/logo.png" style="width:100%">
                            </div>
                            <div class="col-6 d-flex justify-content-center align-items-start flex-sm-column pt-2">
                                <h5 class="fs-3" style="line-height: .5em;"><span class="text-custom">On</span><span class="text-primary-color">Music</span></h5>
                                <h6><span class="text-custom">Admin</span><span class="text-primary-color">Management</span></h6>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item rounded-3 my-1 p-1">
                                <a class="nav-link">
                                    <img class="icon-dashboard-size" src="<?php echo base_url() .'/assets/image/ic-dashboard.png' ?>" alt="icon dashboard">
                                    <span class="text-primary-color">Dasboard</span>
                                </a>
                            </li>
                            <li class="nav-item rounded-3 my-1 p-1">
                                <a class="nav-link">
                                <img class="icon-dashboard-size" src="<?php echo base_url() .'/assets/image/ic-data-property-music.png' ?>" alt="icon data property music">
                                    <span class="text-primary-color">Data Property Music</span>
                                </a>
                            </li>
                            <li class="nav-item rounded-3 my-1 p-1">
                                <a class="nav-link">
                                <img class="icon-dashboard-size" src="<?php echo base_url() .'/assets/image/ic-data-customer.png' ?>" alt="icon data customer">
                                    <span class="text-primary-color">Data Customer</span>
                                </a>
                            </li>
                            <li class="nav-item rounded-3 my-1 p-1">
                                <a class="nav-link">
                                <img class="icon-dashboard-size" src="<?php echo base_url() .'/assets/image/ic-transaction.png' ?>" alt="icon transaction">
                                    <span class="text-primary-color">Transaction</span>
                                </a>
                            </li>
                            <li class="nav-item rounded-3 my-1 p-1">
                                <a class="nav-link">
                                <img class="icon-dashboard-size" src="<?php echo base_url() .'/assets/image/ic-report.png' ?>" alt="icon report">
                                    <span class="text-primary-color">Report</span>
                                </a>
                            </li>
                            <li class="nav-item rounded-3 my-1 p-1">
                                <a class="nav-link">
                                <img class="icon-dashboard-size" src="<?php echo base_url() .'/assets/image/ic-logout.png' ?>" alt="icon logout">
                                    <span class="text-primary-color">Log-Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</body>

</html>