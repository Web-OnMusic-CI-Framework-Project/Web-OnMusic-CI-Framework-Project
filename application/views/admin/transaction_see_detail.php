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
                                

                                <?php 
                                $no = 1;
                                $totalPayment = 0;
                                foreach($properties as $pr) : ?>

                                <?php 
                                $properties  = $data_properties;
                                $items = explode(", ", $properties);

                                    foreach($items as $item) : ?>

                                        <?php if($pr->id_alat_musik_jasa == $item) { ?>

                                        <tr>
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $pr->Gambar?></td>
                                            <td><?php echo $pr->Nama?></td>
                                            <td>Rp<?php echo number_format($pr->HargaSewa, 0, ',', '.')?></td>
                                            <td>
                                                <form action="<?php echo base_url('admin/transaction_see_detail/detail_property/') . $pr->id_alat_musik_jasa ?>" method="post">
                                                    <button class="btn btn-round btn-success text-white" name="back-to-transaction" value="back_to_transaction">See Detail</button>
                                                </form>
                                            </td>

                                            <?php $totalPayment += $pr->HargaSewa?>
                                        </tr>

                                        <?php } ?>

                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <div class="text-right font-weight-bold pt-2 pr-5 pb-2">
                        Total price items : Rp<?php echo number_format($totalPayment, 0, ',', '.')?>
                    </div>
                    <div class="text-right font-weight-bold pt-2 pr-5 pb-2">
                        Tanggal Mulai Sewa : <?php echo $tgl_mulai_sewa ?>
                    </div>
                    <div class="text-right font-weight-bold pt-2 pr-5 pb-2">
                        Tanggal Akhir Sewa : <?php echo $tgl_akhir_sewa ?>
                    </div>
                    <div class="text-right font-weight-bold pt-2 pr-5 pb-2">
                        Jumlah Hari : <?php echo $total_day ?>
                    </div>
                    <?php $totalPayment = $total_harga ?>
                    <div class="text-right font-weight-bold pt-2 pr-5 pb-4">
                        Total Payment : Rp<?php echo number_format($totalPayment, 0, ',', '.')?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>