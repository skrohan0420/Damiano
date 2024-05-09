<?php


?>
<style>
        .bg-breadcrumb {
        position: relative;
        background-image: url('https://shapath.org.in/assets/img/team5.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .bg-breadcrumb::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity (0.5) as needed */
        z-index: 1;
    }

    .container {
        position: relative; /* Ensure the container is on top of the pseudo-element */
        z-index: 2; /* Ensure the container is on top of the pseudo-element */
    }
</style>
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Image Gallery</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
                <li class="breadcrumb-item active text-white">Gallery</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Gallery Start -->
<div class="container-fluid gallery py-5 my-5 px-0">
    <div class="row g-0">
        <div class="container-fluid gallery py-5 my-5 px-0">

            <div class="row g-0">
                <h2 class="text-primary mb-4 text-center">All Gallery</h2>
                <section class="content">
                    <?php
                    if (!empty($gallery_img)) {
                        foreach ($gallery_img as $img) {
                            ?>
                            <a class="item" tabindex="0" href="<?= base_url() . $img['images'] ?>" target="self">
                                <img src="<?= base_url() . $img['images'] ?>" />
                            </a>
                            <?php
                        }
                    }
                    ?>
                </section>
            </div>

            <?php
            if (!empty($projects)) {
                foreach ($projects as $project) {
                    ?>
                    <div class="row g-0" style="margin-top: 150px;">
                        <h2 class="text-primary mb-4 text-center"><?=  $project['project_title']?> Gallery</h2>
                        <section class="content">
                            <?php
                            if (!empty($project['project_images'])) {
                                foreach ($project['project_images'] as $img) {
                                    ?>
                                    <a class="item" tabindex="0" href="<?= base_url() . $img['image'] ?>" target="self">
                                        <img src="<?= base_url() . $img['image'] ?>" />
                                    </a>
                                    <?php
                                }
                            }
                            ?>
                        </section>
                    </div>

                    <?php
                }
            }
            ?>


        </div>

    </div>
</div>
<!-- Gallery End -->