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

<style>
        .bg-breadcrumb {
        position: relative;
        background-image: url('https://shapath.org.in/assets/img/team2.jpg');
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

<div class="navbar-end-gap"></div>

<!--<div class="quote-video-wrapper">-->
<!--    <div class="quote">-->
<!--        <p>"<?php echo $top_quote['quote'] ?>"</p>-->
<!--        <p class="author">- <?php echo $top_quote['quote_by'] ?></p>-->
<!--    </div>-->
<!--    <div class="video">-->
<!--        <iframe id="ytplayer" type="text/html" width="720" height="405"-->
<!--            src="https://www.youtube.com/embed/ox3VFMNBXjA?autoplay=1&unmute=1&loop=1&playlist=ox3VFMNBXjA"-->
<!--            frameborder="0" allow="autoplay; encrypted-media; loop" allowfullscreen></iframe>-->
<!--    </div>-->

<!--</div>-->
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Annual Report</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
                <li class="breadcrumb-item active text-white">Annual Report</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- PDF Viewer Start -->
<div class="pdf-viewer-container">
    <iframe src="<?=base_url('assets/img/shapath-annual-report-2022-2023-FINAL-1.pdf')?>" frameborder="0"></iframe>
</div>
<!-- PDF Viewer End -->


<!-- Image with Quote Start -->
<div class="quote-div">
    <div class="quote-2">
        <p><span>"</span> <?php echo $bottom_quote['quote'] ?><span>"</span></p>
        <p class="author-2">- <?php echo $bottom_quote['quote_by'] ?></p>
    </div>
    <div class="authimage">
        <img src="<?php echo base_url($bottom_quote['quote_img']) ?>" alt="">
    </div>
</div>


<!-- Image with Quote End -->