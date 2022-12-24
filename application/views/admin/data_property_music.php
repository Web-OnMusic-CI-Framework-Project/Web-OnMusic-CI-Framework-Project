<div class="main-content">
    <section class="section px-3">
        <div class="section-header shadow" style="border-radius: 1.2em;">
            <h1>Data Property Music</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="buttons">
                    </div>
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <a class="btn btn-lg btn-warning text-dark font-weight-bold mb-3" href="<?php echo base_url('admin/data_property_music/add_property_music') ?>" style="border-radius: 1.2em;">Add Property</a>
                            <?php echo $this->session->flashdata('pesan') ?>
                            <table class="table table-bordered table-md text-center">
                                <thead>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($alatmusikjasa as $amj) : ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $amj->Gambar ?></td>
                                            <td><?php echo $amj->Nama ?></td>
                                            <td>
                                                <?php
                                                if ($amj->Status == "0") {
                                                    echo "<span class='badge badge-success'>Available</span>";
                                                } else {
                                                    echo "<span class='badge badge-danger'>Unavailable</span>";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('admin/data_property_music/see_data/') . $amj->id_alat_musik_jasa ?>" class="btn btn-success"><i class="fa fa-eye text-white"></i></a>
                                                <a href="<?php echo base_url('admin/data_property_music/delete_data/') . $amj->id_alat_musik_jasa ?>" class="btn btn-danger"><i class="fa fa-trash-alt text-white"></i></a>
                                                <a href="<?php echo base_url('admin/data_property_music/update_data/') . $amj->id_alat_musik_jasa ?>" class="btn btn-primary"><i class="fa fa-file-alt text-white"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>