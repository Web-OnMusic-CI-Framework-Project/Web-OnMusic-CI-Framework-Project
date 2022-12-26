    <!-- Header-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" style="width: 15px;height: 15px;border-radius: 10px;" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" style="width: 15px;height: 15px;border-radius: 10px;" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" style="width: 15px;height: 15px;border-radius: 10px;" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height: 80vh;">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://cdn-cms.pgimgs.com/static/2020/11/FIMG-Studio-Musik.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://p4.wallpaperbetter.com/wallpaper/257/116/964/light-strings-music-sound-wallpaper-preview.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.superlive.id/storage/articles/6d093fb1-bc13-4ad4-9e88-46f94e9af5ae.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Section-->
    <section class="py-5">
        <h1 class="text-center fw-bolders text-dark">Services Products</h1>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-4 row-cols-xl-4 justify-content-center">
                <?php foreach ($alatmusikjasa as $amj) : ?>
                    <div class="col-md-4 mb-5">
                        <div class="card h-100 bg-color-product shadow" style="border-radius: 1.5em;">
                            <!-- Product image-->
                            <img class="card-img-top p-1" src="<?php echo base_url() . 'assets/upload/' . $amj->Gambar ?>" alt="..." style="border-radius: 1.5em;" />
                            <!-- Product details-->
                            <div class="card-body p-3">
                                <div class="text-center text-white">
                                    <!-- Status Product-->
                                    <span>
                                        <?php if ($amj->Status == 0) {
                                            echo "<span class='badge badge-danger'>Unavailable</span>";
                                        } else {
                                            echo "<span class='badge badge-success'>Available</span>";
                                        } ?>
                                    </span>
                                    <!-- Product name-->
                                    <h4 class="h4"><?php echo $amj->Nama ?></h4>
                                    <!-- Product price-->
                                    <span class="h2 fw-bolder">
                                        <?php echo $amj->HargaSewa ?>/day
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>