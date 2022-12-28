<div class="main-content">
  <section class="section px-3">
    <div class="section-header shadow" style="border-radius: 1.2em;">
      <h1>Form Input Property Music</h1>
    </div>
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="POST" action="<?php echo base_url('admin/data_property_music/add_property_music_action') ?>" enctype="multipart/form-data">
              <!-- <div class="form-group">
                <label for="kode_type" class="font-weight-bold">Kode Type</label>
                <? foreach ($type as $tp) : ?>
                  <select name="kode_type" id="" class="form-control">
                    <option value="">--Set Type--</option>
                    <option value="<?php echo $tp->kode_type ?>"></option>
                  </select>
                <? endforeach ?>
              </div> -->
              <div class="form-group">
                <label class="font-weight-bold" for="Nama">Name</label>
                <input type="text" class="form-control" name="Nama">
                <?php echo form_error('Nama', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              <div class="form-group">
                <label class="font-weight-bold" for="Brand">Merk</label>
                <input type="text" class="form-control phone-number" name="Brand">
                <?php echo form_error('Brand', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              <div class="form-group">
                <label class="font-weight-bold" for="HargaSewa">Price Rent</label>
                <input type="number" class="form-control pwstrength" name="HargaSewa" data-indicator="pwindicator">
                <?php echo form_error('HargaSewa', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              <div class="form-group">
                <label class="font-weight-bold" for="Status">Status</label>
                <select class="form-control" name="Status">
                  <option>-Set Status-</option>
                  <option value="1">Available</option>
                  <option value="0">Unavailable</option>
                </select>
                <?php echo form_error('Status', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              <div class="form-group">
                <label class="font-weight-bold" for="Gambar">Image</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="Foto">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
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