<div class="main-content container">
    <section class="section px-3">
        <div class="text-center mb-5">
            <h1>Detail Property</h1>
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
                                $no = 1;
                                foreach ($keranjang as $kr) : 

                                    $items = explode(", ", $kr->id_alat_musik_jasa);

                                    foreach($items as $item) : 
                                    
                                        foreach($alatmusikjasa as $amj) :

                                            if($amj->id_alat_musik_jasa == $item) { ?>
        
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td>
                                                        <img src="<?php echo base_url() . 'assets/upload/' . $amj->Gambar ?>" width="50" />
                                                    </td>
                                                    <td><?php echo $amj->Nama ?></td>
                                                    <td>Rp<?php echo number_format($amj->HargaSewa, 0, ',', '.') ?></td>
                                                    <td>
                                                        <a class="btn btn-round btn-danger text-white">Remove</a>
                                                    </td>
                                                </tr>
        
                                            <?php $no++; } ?>
                                            
                                        <?php endforeach; ?>
    
                                    <?php endforeach; ?>

                                <?php endforeach ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <?php
                $no = 1;
                        
                foreach ($keranjang as $kr) : ?>

                    <form class="form-group">
                        <label class="font-weight-bold" for="TanggalMulaiSewa">Rent From</label>
                        <input type="date" class="form-control datepicker" name="TanggalMulaiSewa" value="<?php echo $kr->TglAwalSewa ?>">
                        <label class="font-weight-bold" for="TanggalAkhirSewa">Until</label>
                        <input type="date" class="form-control datepicker" name="TanggalAkhirSewa" value="<?php echo $kr->TglAkhirSewa ?>">
                        <div class="text-right font-weight-bold px-5 pb-2 pt-5">
                            Total Payment : Rp<?php echo number_format($kr->TotalHarga, 0, ',', '.') ?>
                        </div>
                        <div class="form-group py-5">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-warning btn-lg w-50 btn-block" tabindex="4">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>

                <?php endforeach ?>
            </div>
        </div>
    </section>
</div>