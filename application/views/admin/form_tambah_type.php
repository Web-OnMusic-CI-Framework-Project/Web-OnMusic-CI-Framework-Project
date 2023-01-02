<div class="main-content">
  <section class="section px-3">
    <div class="section-header shadow" style="border-radius: 1.2em;">
      <h1>Form Tambah Type</h1>
    </div>
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="POST" action="<?php echo base_url('admin/data_type/tambah_type_aksi') ?>">
              <div class="form-group">
                <label>Kode Type</label>
                <input type="text" name="kode_type" class="form-control">
                <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div') ?>
              </div>
              <div class="form-group">
                <label>Nama Type</label>
                <input type="text" name="nama_type" class="form-control">
                <?php echo form_error('nama_type', '<div class="text-small text-danger">', '</div') ?>
              </div>
              <div class="form-group mt-5">
                <button type="submit" class="btn btn-lg btn-round btn-warning">Save</button>
                <button type="reset" class="btn btn-lg btn-round border-warning">Reset</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>