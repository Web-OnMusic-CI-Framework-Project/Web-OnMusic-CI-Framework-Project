<div class="main-content container">
    <section class="section px-3">
        <div class="text-center mb-5">
            <h1>My Transaction</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan')?></span>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Customer</th>
                                    <th>Property</th>
                                    <th>Bill</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <?php $no = 1;
                                foreach($transaction as $tr) : ?>

                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $tr->Nama?></td>
                                        <td>
                                            <form action="<?php echo base_url() .'customer/customer_my_transaction_page_detail_property/getDataProperties' ?>" method="post">
                                                <button class="btn btn-sm btn-round btn-primary text-white" name="see-detail-transaction" value="<?php echo $tr->id_keranjang?>">See Detail</button>
                                            </form>
                                        </td>
                                        <td>Rp<?php echo number_format($tr->TotalHarga, 0, ',', '.') ?></td>
                                        <td>
                                            <form action="<?php echo base_url() .'customer/customer_my_transaction_check_payment_page_upload_payment_proff' ?>" method="post">
                                                <?php 
                                                
                                                    if($tr->status_transaksi == 'Finished')
                                                    { ?>
                                                        <span class="badge badge-success text-white">Rent Finished</span>
                                                    <?php }
                                                    else
                                                    { ?>
                                                        <button class="btn btn-sm btn-round btn-primary text-white" name="get-detail-properties" value="<?php echo $tr->id_keranjang?>">Check Payment</button>
                                                    <?php }
                                                
                                                ?>
                                            </form>
                                        </td>
                                        <td>
                                        <a href="<?php echo base_url() .'customer/transaction/transaction_canceled' ?>" class="btn btn-danger <?php echo $tr->status_transaksi == 'Finished' ? 'disabled' : '' ?>" role="button" aria-disabled="<?php echo $tr->status_transaksi == 'Finished' ? '' : 'true' ?>">Cancel</a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>