<div class="main-content container">
    <section class="section px-3">
        <div class="text-center mb-5">
            <h1>Invoice Payment</h1>
        </div>
        <div class="row">
            <div class="col-8 col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Price Rent/day</th>
                                </tr>
                                
                                <?php
                                $no = 1;
                                foreach ($transaksi as $tr) : 

                                    $items = explode(", ", $tr->id_alat_musik_jasa);

                                    foreach($items as $item) : 
                                    
                                        foreach($alatmusikjasa as $amj) :

                                            if($amj->id_alat_musik_jasa == $item) { ?>
        
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $amj->Nama ?></td>
                                                    <td>Rp<?php echo number_format($amj->HargaSewa, 0, ',', '.') ?></td>
                                                    <?php 
                                                        $rent_from  = $tr->TglMulaiSewa;
                                                        $rent_until = $tr->TglAkhirSewa;
                                                        $date1      = date_create($rent_from);
                                                        $date2      = date_create($rent_until);
                                                        $diff       = date_diff($date1,$date2);
                                                        $total_day  = $diff->format("%a");
                                                        $total_payment = $tr->TotalHarga * $total_day;
                                                        $bukti_pembayaran = $tr->BuktiBayar;
                                                        $status_pembayaran = $tr->status_pembayaran;
                                                        $id_transaksi = $tr->id_transaksi
                                                    ?>
                                                </tr>
        
                                            <?php $no++; } ?>
                                            
                                        <?php endforeach; ?>
    
                                    <?php endforeach; ?>

                                <?php endforeach ?>
                            </table>
                            <table class="table table-md">
                                <tr>
                                    <th>Rent From</th>
                                    <td><?php echo $rent_from ?></td>
                                </tr>
                                <tr>
                                    <th>Rent Until</th>
                                    <td><?php echo $rent_until ?></td>
                                </tr>
                                <tr>
                                    <th>Total Days</th>
                                    <td><?php echo $total_day ?> Days</td>
                                </tr>
                                <tr>
                                    <th>Total Payment</th>
                                    <td><button class="btn btn-sm btn-dark" style="cursor: default">Rp<?php echo number_format($total_payment, 0, ',', '.') ?></button></td>
                                </tr>
                            </table>
                            <div class="m-5">
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-lg btn-warning text-dark font-weight-bold" style="border-radius: 1.2em;"><i class="fa fa-print"></i> Print Invoice</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Payment Information
                    </div>
                    <div class="card-body">
                        <p>Please make payment through one of the bank account numbers below :</p>
                        <table class="table table-md">
                            <tr>
                                <td class="text-right">BRI Account</td>
                                <td class="text-left">1234567890123</td>
                            </tr>
                            <tr>
                                <td class="text-right">Mandiri Account</td>
                                <td class="text-left">987654</td>
                            </tr>
                            <tr>
                                <td class="text-right">BCA Account</td>
                                <td class="text-left">123498765</td>
                            </tr>
                        </table>
                        <?php 
                        
                            if($bukti_pembayaran == 'belum ada')
                            { ?>
                                <div class="text-center">
                                    <button style="width: 100%" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Upload Payment Proff</button>
                                </div>
                                
                            <?php } elseif($status_pembayaran == '0')
                            { ?>
                                <div class="text-center">
                                    <button style="width: 100%; cursor: default" type="button" class="btn btn-warning"><i class="fa fa-clock"></i> Waiting For Payment Confirmation</button>
                                </div>
                            <?php } elseif($status_pembayaran == '1')
                            { ?>
                                <div class="text-center">
                                    <button style="width: 100%; cursor: default" type="button" class="btn btn-success"><i class="fa fa-check"></i> Payment Success</button>
                                </div>
                            <?php }
                        
                        ?>
                    </div>
                </div>
                <div class="text-center">
                    <p>For more information<br />You can <b>Contact Whatsapp 081290000000</b></p>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal untuk upload bukti pembayaran -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Your Payment Proff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('customer/customer_my_transaction_check_payment_page_upload_payment_proff/uploadBtn') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="form-group">
                <label>Upload Payment Proff Here!</label>
                <input type="file" name="BuktiBayar" class="form-control">
                <input type="hidden" name="id_transaksi" value="<?php echo $id_transaksi ?>">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">Upload</button>
        </div>
      </form>
    </div>
  </div>
</div>