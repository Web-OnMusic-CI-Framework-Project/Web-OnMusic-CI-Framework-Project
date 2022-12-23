<div class="main-content">
    <section class="section px-3">
        <div class="section-header shadow" style="border-radius: 1.2em;">
            <h1>Data Property Music</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="buttons">
                        <a class="btn btn-lg btn-warning text-dark font-weight-bold" style="border-radius: 1.2em;">Add Property</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md text-center">
                                <thead>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($alatmusikjasa as $amj) : ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $amj->Foto ?></td>
                                            <td><?php echo $amj->Nama ?></td>
                                            <td>
                                                <?php
                                                if ($amj->Status == "0") {
                                                    echo "<span class='badge badge-success'>Active</span>";
                                                } else {
                                                    echo "<span class='badge badge-danger'>Not Active</span>";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-success"><i class="fa fa-lg fa-eye text-white"></i></a>
                                                <a class="btn btn-danger"><i class="fa fa-lg fa-trash-alt text-white"></i></a>
                                                <a class="btn btn-primary"><i class="fa fa-lg fa-file-alt text-white"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>