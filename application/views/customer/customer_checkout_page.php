<div class="main-content container">
    <section class="section px-3">
        <div class="text-center mb-5">
            <h1>Checkout</h1>
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
                                    <th>Price Rent/day</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                $totalPayment = 0;
                                foreach ($detail as $dt) : 

                                    if(empty($item_id)) {?>

                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <img src="<?php echo base_url() . 'assets/upload/' . $dt->Gambar ?>" width="50" />
                                            </td>
                                            <td><?php echo $dt->Nama ?></td>
                                            <td>Rp<?php echo number_format($dt->HargaSewa, 0, ',', '.') ?></td>
                                            <td>
                                                <a class="btn btn-round btn-danger text-white">Remove</a>
                                            </td>
                                        </tr>

                                        <?php $totalPayment += $dt->HargaSewa; ?>

                                    <?php } else { 
                                        
                                        $no = 1;
                                        $items = explode(", ", $item_id);

                                        foreach($items as $item) :?>

                                            <?php if($dt->id_alat_musik_jasa == $item) { ?>

                                                <?php $totalPayment += $dt->HargaSewa; ?>

                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td>
                                                        <img src="<?php echo base_url() . 'assets/upload/' . $dt->Gambar ?>" width="50" />
                                                    </td>
                                                    <td><?php echo $dt->Nama ?></td>
                                                    <td>Rp<?php echo number_format($dt->HargaSewa, 0, ',', '.') ?></td>
                                                    <td>
                                                        <a class="btn btn-round btn-danger text-white">Remove</a>
                                                    </td>
                                                </tr>

                                            <?php } ?>

                                        <?php $no++; endforeach; ?>

                                    <?php } ?>

                                <?php endforeach ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="text-right font-weight-bold px-5 pb-2 pt-2">
                    <?php if(empty($total_day)) { ?>
                        Total Price Items : Rp<?php echo number_format($totalPayment, 0, ',', '.') ?>
                    <?php } else { ?>
                        $totalPayment *= $total_day;
                        Total Price Items : Rp<?php echo number_format($totalPayment, 0, ',', '.') ?>
                    <?php } ?>
                </div>
                <form action="<?php echo base_url() .'customer/customer_checkout_page/calculateTotalPayment' ?>" class="form-group" method="post">
                    <label class="font-weight-bold" for="TanggalMulaiSewa">Rent From</label>
                    <input type="date" class="form-control datepicker" name="TanggalMulaiSewa" value="<?php echo date("d/m/Y") ?>">
                    <label class="font-weight-bold" for="TanggalAkhirSewa">Until</label>
                    <input type="date" class="form-control datepicker" name="TanggalAkhirSewa" value="<?php echo date("d/m/Y") ?>">
                    <div class="form-group py-5">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-warning btn-lg w-50 btn-block" tabindex="4">
                                Rent
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>