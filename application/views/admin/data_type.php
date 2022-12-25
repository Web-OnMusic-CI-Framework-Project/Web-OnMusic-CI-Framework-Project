<div class="main-content">
    <section class="section px-3">
        <div class="section-header shadow" style="border-radius: 1.2em;">
            <h1>Data Property Music</h1>
        </div>
        <div class="card">
            <div class="card-body p-3">
                <div class="table-responsive">
                    <a href="<?php echo base_url('admin/data_type/tambah_type') ?>" class="btn btn-lg btn-warning text-dark font-weight-bold mb-3" style="border-radius: 1.2em;">Tambah Type</a>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th width="20">No</th>
                                <th>Code Type</th>
                                <th>Name Type</th>
                                <th width="200">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($type as $tp) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $tp->kode_type ?></td>
                                    <td><?php echo $tp->nama_type ?></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/data_type/update_type/' . $tp->id_type) ?>" class="btn btn-primary"><i class="fa fa-file-alt text-white"></i></a>
                                        <a href="<?php echo base_url('admin/data_type/delete_type/' . $tp->id_type) ?>" class="btn btn-danger"><i class="fa fa-trash-alt text-white"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>