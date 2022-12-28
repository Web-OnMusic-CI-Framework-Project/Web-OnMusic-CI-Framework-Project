<div class="main-content">
    <section class="section px-3">
        <div class="section-header shadow" style="border-radius: 1.2em;">
            <h1>Payment Confirmation</h1>
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
                    <div class="text-right font-weight-bold p-5">
                        Total Payment : Rp<?php echo number_format($totalPayment, 0, ',', '.')?> (Untuk sementara belum diambil dari db untuk TotalHarga, karena biar nilainya dinamis, pake perkalian biasa dulu :v )
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12" style="border: dashed 1px black">
                <div class="card">
                    <div class="card-body">
                        <div class="empty-state" data-height="400">
                            <button class="btn btn-warning mt-4"><i class="fa fa-download"></i> Download Payment Proff</button>
                            <div class="form-group mt-5">
                                <label class="custom-switch">
                                    <input type="radio" name="option" value="1" class="custom-switch-input">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description font-weight-bold">Confirm Payment</span>
                                </label>
                            </div>
                            <button class="btn btn-success">Save</button>

                            <?php 
                                $url='https://wa.me/'.$user_phone.'/?text=Selamat%20siang%2C%20pelanggan%20dengan%20nomor%20ID%20'.$id_user.'%20atas%20nama%20'.$name_user.'%2C%20apakah%20sudah%20melampirkan%20bukti%20pembayaran%3F%20Karena%20kami%20akan%20segera%20memproses%20pesanan%20Anda.%20Terima%20Kasih.';
                            ?>

                            <p class="mt-4 bb">Have not payed yet? <a href="<?php echo $url ?>" class="font-weight-bold" target="_blank">Contact Them Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>