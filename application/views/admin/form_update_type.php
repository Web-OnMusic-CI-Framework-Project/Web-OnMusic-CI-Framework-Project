<div class="main-content">
  <section class="section px-3">
    <div class="section-header shadow" style="border-radius: 1.2em;">
      <h1>Form Update Type</h1>
    </div>
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-body">
            <?php foreach ($type as $tp) : ?>
            <form method="POST" action="<?php echo base_url('admin/data_type/update_type_action/') . $tp->id_type ?>">
            <div class="form-group">
                <label>Kode Type</label>
                <input type="hidden" name="id_type" value="<?php echo $tp->id_type ?>">
                <input type="text" name="kode_type" class="form-control" value="<?php echo $tp->kode_type ?>">
                <?php echo form_error('kode_type','<div class="text-small text-danger">','</div') ?>
            </div>
            <div class="form-group">
                <label>Nama Type</label>
                <input type="text" name="nama_type" class="form-control" value="<?php echo $tp->nama_type ?>">
                <?php echo form_error('nama_type','<div class="text-small text-danger">','</div') ?>
            </div>
            <div class="form-group mt-5">
                <button type="submit" class="btn btn-lg btn-round btn-warning">Save</button>
                <button type="reset" class="btn btn-lg btn-round border-warning">Reset</button>
            </div>
            </form>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>