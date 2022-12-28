<div class="main-content">
    <section class="section px-3">
        <div class="section-header shadow" style="border-radius: 1.2em;">
            <h1>Transaction</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Customer</th>
                                    <th>Property</th>
                                    <th>Status</th>
                                    <th>Payment Check</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    
                                <?php $no = 1;
                                foreach($transaction as $tr) : ?>

                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $tr->Nama?></td>
                                        <td>
                                            <form action="<?php echo base_url() .'admin/transaction_see_detail/getDataProperties' ?>" method="post">
                                                <button class="btn btn-sm btn-round btn-primary text-white" name="see-detail-transaction" value="<?php echo $tr->id_alat_musik_jasa?>">See Detail</button>
                                            </form>
                                        </td>
                                        <td>
                                            <span class="badge <?php echo $tr->status_transaksi == 'Finished' ? 'badge-success' : 'badge-info' ?> text-white"><?php echo $tr->status_transaksi ?></span>
                                        </td>
                                        <td>
                                            <form action="<?php echo base_url() .'admin/transaction_payment_check/getDataProperties' ?>" method="post">
                                                <button class="btn <?php echo $tr->status_pembayaran == '1' ? 'btn-success' : 'btn-danger' ?>" name="detail-transaction" value="<?php echo $tr->id_alat_musik_jasa?>"><i class="fa fa-lg <?php echo $tr->status_pembayaran == '1' ? 'fa-check-circle' : 'fa-times-circle' ?> text-white"></i></button>
                                                <input type="hidden" name="id-user" value="<?php echo $tr->id_user?>">
                                                <input type="hidden" name="name-user" value="<?php echo $tr->Nama?>">
                                                <input type="hidden" name="phone" value="<?php echo $tr->NoTelp?>">
                                            </form>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url() .'admin/transaction/transaction_completed' ?>" class="btn btn-success"><i class="fa fa-lg fa-check text-white"></i></a>
                                            <a href="<?php echo base_url() .'admin/transaction/transaction_canceled' ?>" class="btn btn-danger"><i class="fa fa-lg fa-times text-white"></i></a>
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