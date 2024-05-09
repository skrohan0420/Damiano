<?php
$top_quote = [];
$bottom_quote = [];
if (!empty($quotes)) {
    foreach ($quotes as $quote) {
        if ($quote['type'] == 'home' && $quote['position'] == 'top') {
            $top_quote = $quote;
        } else if ($quote['type'] == 'home' && $quote['position'] == 'bottom') {
            $bottom_quote = $quote;
        }
    }
}
?>
<a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="<?= base_url('donate/?id=' . $project['uid']) ?>"
    id="donate_btn" style="
    position: fixed;
    bottom: 20px;
    left: 50%;
    z-index: 100;
    transform: translateX(-50%);
    padding: 10px 30px 10px 30px !important;
">DONATE</a>
<div class="logo-container" style="margin-top: 100px; margin-bottom: -50px;">
    <img src="<?= base_url($project['project_logo']) ?>" alt="Website Logo" />
</div>

<div class="quote-video-wrapper">
    <div class="quote">
        <p>
            <?php echo $top_quote['quote'] ?>
        </p>
        <p class="author">-
            <?php echo $top_quote['quote_by'] ?>
        </p>
    </div>

    <div class="video">
        <iframe id="ytplayer" type="text/html" width="720" height="405"
            src="<?php echo $project['project_page_video'] ?>" frameborder="0" allow="encrypted-media; loop"
            allowfullscreen>
        </iframe>
    </div>
</div>

<!-- About Start -->
<div class="container-fluid event py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">project details</h5>
        </div>
        <p style="text-align: justify;">
            <?=$project['project_cover_details']?>
        </p>
    </div>
</div>
<!-- About End -->

<!-- About Start -->
<div class="container-fluid event py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Events</h5>
        </div>
        <div class="event-carousel owl-carousel">
            <?php

            if (!empty($events)) {
                foreach ($events as $event) {
                    ?>
                    <div class="event-item">
                        <img src="<?= base_url() . $event['img'] ?>" class="img-fluid w-100" alt="Image"
                            style="height: 250px;object-fit: cover;">
                        <div class="event-content p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>
                                    <?= $event['place'] ?>
                                </span>
                                <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>
                                    <?= $event['date'] ?>
                                </span>
                            </div>
                            <h4 class="mb-4">
                                <?= $event['title'] ?>
                            </h4>
                            <p class="mb-4">
                                <?= $event['details'] ?>
                            </p>
                        </div>
                    </div>


                    <?php
                }
            }

            ?>

        </div>
    </div>
</div>
<!-- About End -->

<!-- Gallery Start -->
<div class="container-fluid gallery py-5 my-5 px-0">
    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
        <h1 class="mb-4">project gallery</h1>
    </div>
    <div class="row g-0">

        <section class="content">
            <?php
            if (!empty($gallery_img)) {
                foreach ($gallery_img as $img) {
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
</div>
<!-- Gallery End -->

<!-- Image with Quote Start -->
<div class="quote-div">
    <div class="quote-2">
        <p><span>"</span>
            <?php echo $bottom_quote['quote'] ?><span>"</span>
        </p>
        <p class="author-2">-
            <?php echo $bottom_quote['quote_by'] ?>
        </p>
    </div>
    <div class="authimage">
        <img src="<?php echo base_url() . $bottom_quote['quote_img'] ?>" alt="">
    </div>
</div>