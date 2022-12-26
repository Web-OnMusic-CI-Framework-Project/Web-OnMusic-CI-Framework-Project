<div class="main-content">
    <section class="section px-3">
        <div class="section-header shadow" style="border-radius: 1.2em;">
            <h1>Detail Transaction Property</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price Rent</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="<?php echo base_url() ?>assets/image/img-logo-onmusic.png" width="50" />
                                    </td>
                                    <td>Name</td>
                                    <td>
                                        Price Rent
                                    </td>
                                    <td>
                                        <a class="btn btn-round btn-success text-white">See Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <img src="<?php echo base_url() ?>assets/image/img-logo-onmusic.png" width="50" />
                                    </td>
                                    <td>Name</td>
                                    <td>
                                        Price Rent
                                    </td>
                                    <td>
                                        <a class="btn btn-round btn-success text-white">See Detail</a>
                                    </td>
                                </tr>

                                <?php 
                                $no = 1;
                                $totalPayment = 0;
                                foreach($properties as $pr) : ?>

                                <?php 
                                $properties  = $data_properties;
                                $items = explode(", ", $properties);

                                    foreach($items as $item) : ?>

                                        <?php if($pr->id_property == $item) { ?>

                                        <tr>
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $pr->gambar?></td>
                                            <td><?php echo $pr->nama_property?></td>
                                            <td>Rp<?php echo number_format($pr->harga_sewa, 0, ',', '.')?></td>
                                            <td>
                                                <a class="btn btn-round btn-success text-white">See Detail</a>
                                            </td>

                                            <?php $totalPayment += $pr->harga_sewa?>
                                        </tr>

                                        <?php } ?>

                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <div class="text-right font-weight-bold p-5">
                        Total Payment : Rp<?php echo number_format($totalPayment, 0, ',', '.')?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>