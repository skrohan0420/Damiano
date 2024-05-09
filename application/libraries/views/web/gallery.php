<?php
$gallery_img = explode(",", $gallery_img['images']);


?>
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Image Gallery</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-white">Gallery</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Gallery Start -->
<div class="container-fluid gallery py-5 my-5 px-0">
    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
        <h3 class="text-uppercase text-primary">Our Gallery</h3>
    </div>
    <div class="row g-0">

        <!-- <div class="col-6 col-md-6 col-lg-4">
            <div class="gallery-item">
                <img src="<?= base_url('assets/img/gallery-4.jpg') ?>" class="img-fluid w-100" alt="">
                <div class="search-icon">
                    <a href="<?= base_url('assets/img/gallery-4.jpg') ?>" data-lightbox="gallery-4" class="my-auto"><i
                            class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                </div>
                <div class="gallery-content">
                    <div class="gallery-inner pb-5">
                        <a class="h4 text-white">Beauty Of Life</a>
                        <a class="text-white">
                            <p class="mb-0">Gallery Name</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-6 col-lg-4">
            <div class="gallery-item">
                <img src="<?= base_url('assets/img/gallery-4.jpg') ?>" class="img-fluid w-100" alt="">
                <div class="search-icon">
                    <a href="<?= base_url('assets/img/gallery-4.jpg') ?>" data-lightbox="gallery-4" class="my-auto"><i
                            class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                </div>
                <div class="gallery-content">
                    <div class="gallery-inner pb-5">
                        <a class="h4 text-white">Beauty Of Life</a>
                        <a class="text-white">
                            <p class="mb-0">Gallery Name</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-6 col-lg-4">
            <div class="gallery-item">
                <img src="<?= base_url('assets/img/gallery-4.jpg') ?>" class="img-fluid w-100" alt="">
                <div class="search-icon">
                    <a href="<?= base_url('assets/img/gallery-4.jpg') ?>" data-lightbox="gallery-4" class="my-auto"><i
                            class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                </div>
                <div class="gallery-content">
                    <div class="gallery-inner pb-5">
                        <a class="h4 text-white">Beauty Of Life</a>
                        <a class="text-white">
                            <p class="mb-0">Gallery Name</p>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->

        <?php
        if (!empty($gallery_img)) {
            foreach ($gallery_img as $img) {
                ?>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="gallery-item">
                        <img src="<?= base_url($img) ?>" class="img-fluid w-100" alt="" style="height: 450px; background-size: cover; background-position: center;">
                        <div class="search-icon">
                            <a href="<?= base_url($img) ?>" data-lightbox="gallery-4" class="my-auto"><i
                                    class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
        ?>

    </div>
</div>
<!-- Gallery End -->