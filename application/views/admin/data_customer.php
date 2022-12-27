<div class="main-content">
    <section class="section px-3">
        <div class="section-header shadow" style="border-radius: 1.2em;">
            <h1>Data Customer</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive p-3">
                            <a class="btn btn-lg btn-warning text-dark font-weight-bold mb-3" href="<?php echo base_url('admin/data_customer/create_customer') ?>" style="border-radius: 1.2em;">Add Customer</a>
                            <?php echo $this->session->flashdata('pesan') ?>
                            <table class="table table-bordered table-md text-center">
                                <thead>
                                    <th width="20">No</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($user as $us) :
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $us->Nama ?></td>
                                            <td><?php echo $us->Username ?></td>
                                            <td><?php echo $us->Email ?></td>
                                            <td><?php echo $us->Alamat ?></td>
                                            <td><?php echo $us->NoTelp ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/data_customer/update_data/') . $us->id_user ?>" class="btn btn-primary"><i class="fa fa-lg fa-pen-alt text-white"></i></a>
                                                <a href="<?php echo base_url('admin/data_customer/delete_data/') . $us->id_user ?>" class="btn btn-danger"><i class="fa fa-lg fa-trash-alt text-white"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>