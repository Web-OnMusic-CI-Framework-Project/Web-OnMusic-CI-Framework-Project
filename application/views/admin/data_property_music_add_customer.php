<div class="main-content">
  <section class="section px-3">
    <div class="section-header shadow" style="border-radius: 1.2em;">
      <h1>Form Input Property Customer</h1>
    </div>
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-body">

          <?php echo form_open('admin/data_customer/create_customer_action'); ?>

            <div class="form-group">
              <label class="font-weight-bold" for="Nama">Name</label>
              <input type="text" class="form-control" name="Nama">
              <?php echo form_error('Name', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
              <label class="font-weight-bold" for="Username">Username</label>
              <input type="text" class="form-control" name="Username">
              <?php echo form_error('Username', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
              <label class="font-weight-bold" for="Password">Password</label>
              <input type="password" class="form-control" name="Password" data-indicator="pwindicator">
              <?php echo form_error('Password', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
              <label class="font-weight-bold" for="Email">Email</label>
              <input type="text" class="form-control" name="Email" data-indicator="pwindicator">
              <?php echo form_error('Email', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
              <label class="font-weight-bold" for="NoTelp">Phone</label>
              <input type="text" class="form-control phone-number" name="NoTelp" data-indicator="pwindicator">
              <?php echo form_error('Phone', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
              <label class="font-weight-bold" for="Alamat">Address</label>
              <textarea class="form-control" name="Alamat"></textarea>
              <?php echo form_error('Address', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group mt-5">
              <button type="submit" class="btn btn-lg btn-round btn-warning">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>