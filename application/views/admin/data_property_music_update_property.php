<div class="main-content">
    <section class="section px-3">
        <div class="section-header shadow" style="border-radius: 1.2em;">
            <h1>Form Update Property Music</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <?php foreach ($alatmusikjasa as $amj) : ?>
                    <form method="POST" action="<?php echo base_url('admin/data_property_music/update_property_music') ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="font-weight-bold" for="Nama">Name</label>
                            <input type="text" class="form-control" name="Nama" value="<?php echo $amj->Nama ?>">
                            <?php echo form_error('Nama', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="Brand">Merk</label>
                            <input type="text" class="form-control phone-number" name="Brand" value="<?php echo $amj->Brand ?>">
                            <?php echo form_error('Brand', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="HargaSewa">Price Rent</label>
                            <input type="number" class="form-control pwstrength" name="HargaSewa" data-indicator="pwindicator" value="<?php echo $amj->HargaSewa ?>">
                            <?php echo form_error('HargaSewa', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="kode_type" class="font-weight-bold">Kode Type</label>
                            <input type="hidden" name="id_alat_musik_jasa" value="<?php echo $amj->id_alat_musik_jasa ?>">
                            <select name="kode_type" class="form-control">
                                <option value="<?php echo $amj->kode_type ?>"><?php echo $amj->kode_type ?></option>
                                <?php foreach ($type as $tp) : ?>
                                    <option value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="Status">Status</label>
                            <select class="form-control" name="Status">
                                <option <?php if ($amj->Status == "1") {
                                            echo "selected='selectes'";
                                        }
                                        echo $amj->Status; ?> value="1">Available
                                </option>
                                <option <?php if ($amj->Status == "0") {
                                            echo "selected='selectes'";
                                        }
                                        echo $amj->Status; ?> value="0">Unavailable
                                </option>
                            </select>
                            <?php echo form_error('Status', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="Gambar">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="Foto">
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-lg btn-round btn-warning">Save</button>
                            <button type="reset" class="btn btn-lg btn-round border-warning">Reset</button>
                        </div>
                    </form>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</div>