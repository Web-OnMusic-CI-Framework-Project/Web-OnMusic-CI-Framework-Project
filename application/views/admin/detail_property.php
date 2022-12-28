<div class="main-content">
    <section class="section px-3">
        <div class="section-header shadow" style="border-radius: 1.2em;">
            <h1>Detail Property Music</h1>
        </div>
    </section>
    <?php foreach ($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?php echo base_url() . 'assets/upload/.$dt->Gambar' ?>" alt="">
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td>Type</td>
                                <td>
                                    <?php if ($dt->kode_type == "PNO") {
                                        echo "Piano";
                                    } elseif ($dt->kode_type == "GTR") {
                                        echo "Gitar";
                                    } elseif ($dt->kode_type == "DRM") {
                                        echo "Drum";
                                    } else {
                                        echo "<span class='text-danger'>Type belum terdaftar</span>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td><?php echo $dt->Nama ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <?php
                                    if ($dt->Status == "0") {
                                        echo "<span class='badge badge-danger'>Unavailable</span>";
                                    } else {
                                        echo "<span class='badge badge-success'>Available</span>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Harga Sewa</td>
                                <td>Rp<?php echo number_format($dt->HargaSewa, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>Brand</td>
                                <td><?php echo $dt->Brand ?></td>
                            </tr>
                        </table>
                        <a href="<?php echo $back_to_transaction == 'back_to_transaction' ? base_url('admin/transaction') : base_url('admin/data_property_music') ?>" class="btn btn-sm btn-warning ml-4">Kembali</a>
                        <a href="<?php echo base_url('admin/data_property_music/update_data/' . $dt->id_alat_musik_jasa) ?>" class="btn btn-sm border-primary">Update</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>