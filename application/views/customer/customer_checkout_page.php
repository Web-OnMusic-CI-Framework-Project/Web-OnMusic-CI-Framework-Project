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
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="<?php echo base_url() ?>assets/image/img-logo-onmusic.png" width="50" />
                                    </td>
                                    <td>Name Property</td>
                                    <td>Price Property</td>
                                    <td>
                                        <a class="btn btn-round btn-danger text-white">Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <img src="<?php echo base_url() ?>assets/image/img-logo-onmusic.png" width="50" />
                                    </td>
                                    <td>Name Property</td>
                                    <td>Price Property</td>
                                    <td>
                                        <a class="btn btn-round btn-danger text-white">Remove</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <form class="form-group">
                    <label class="font-weight-bold" for="TanggalMulaiSewa">Rent From</label>
                    <input type="date" class="form-control datepicker" name="TanggalMulaiSewa">
                    <label class="font-weight-bold" for="TanggalAkhirSewa">Until</label>
                    <input type="date" class="form-control datepicker" name="TanggalAkhirSewa">
                    <div class="text-right font-weight-bold px-5 pb-2 pt-5">
                        Total Income : xx.xxx.xxx
                    </div>
                    <div class="form-group py-5">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-warning btn-lg w-50 btn-block" tabindex="4">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>