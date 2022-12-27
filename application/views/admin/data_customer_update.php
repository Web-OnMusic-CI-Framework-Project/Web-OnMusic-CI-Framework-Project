<div class="main-content">
    <section class="section px-3">
        <div class="section-header shadow" style="border-radius: 1.2em;">
            <h1>Edit Customer Form</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <?php foreach ($user as $user_row) : ?>
                    <form method="POST" action="<?php echo base_url('admin/data_customer/update_data_action/') . $user_row->id_user ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="font-weight-bold" for="Nama">Name</label>
                            <input type="text" class="form-control" name="Nama" value="<?php echo $user_row->Nama ?>">
                            <?php echo form_error('Nama', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="Brand">Username</label>
                            <input type="text" class="form-control phone-number" name="Username" value="<?php echo $user_row->Username ?>">
                            <?php echo form_error('Username', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="HargaSewa">Password</label>
                            <input type="password" class="form-control pwstrength" name="Password" data-indicator="pwindicator" value="<?php echo $user_row->Password ?>">
                            <?php echo form_error('Password', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="Email">Email</label>
                            <input type="text" class="form-control" name="Email" value="<?php echo $user_row->Email ?>">
                            <?php echo form_error('Email', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="NoTelp">Phone</label>
                            <input type="text" class="form-control phone-number" name="NoTelp" value="<?php echo $user_row->NoTelp ?>" >
                            <?php echo form_error('Phone', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="Alamat">Address</label>
                            <input type="text" class="form-control" name="Alamat" value="<?php echo $user_row->Alamat ?>">
                            <?php echo form_error('Address', '<div class="text-small text-danger">', '</div>') ?>
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