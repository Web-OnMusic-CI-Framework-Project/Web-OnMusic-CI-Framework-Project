<div class="main-content container">
    <section class="section px-3">
        <div class="text-center mb-5">
            <h1>My Transaction</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md text-center">
                                <?php echo $this->session->flashdata('pesan') ?>   
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
                                        <td><?php echo $tr->id_user?></td>
                                        <td>
                                            <a class="btn btn-sm btn-round btn-primary text-white" href="<?php echo base_url('customer/customer_my_transaction_page_detail_property/getDataProperties/') . $tr->id_transaksi . '/' . $tr->id_keranjang ?>">See Detail</a>
                                        </td>
                                        <td>Rp<?php echo number_format($tr->TotalHarga, 0, ',', '.') ?></td>
                                        <td>
                                            <span class="<?php echo $tr->status_transaksi == 'Finished' ? 'badge badge-success' : 'btn btn-sm btn-round btn-primary' ?> text-white"><?php echo $tr->status_transaksi == 'Finished' ? 'Rent Finished' : 'Check Payment' ?></span>
                                        </td>
                                        <td>
                                        <a href="<?php echo base_url() .'customer/customer_my_transaction_page/cancel_transaction/' . $tr->id_transaksi ?>" class="btn btn-danger <?php echo $tr->status_transaksi == 'Finished' ? 'disabled' : '' ?>" role="button" aria-disabled="<?php echo $tr->status_transaksi == 'Finished' ? '' : 'true' ?>">Cancel</a>
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