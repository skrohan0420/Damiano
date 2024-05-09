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

<div class="navbar-end-gap"></div>

<div class="quote-video-wrapper">
    <div class="quote">
        <p>"<?php echo $top_quote['quote'] ?>"</p>
        <p class="author">- <?php echo $top_quote['quote_by'] ?></p>
    </div>
    <div class="video">
        <iframe id="ytplayer" type="text/html" width="720" height="405"
            src="https://www.youtube.com/embed/ox3VFMNBXjA?autoplay=1&unmute=1&loop=1&playlist=ox3VFMNBXjA"
            frameborder="0" allow="autoplay; encrypted-media; loop" allowfullscreen></iframe>
    </div>

</div>

<div class="text-center mx-auto pb-5 mt-4" style="max-width: 800px;">
    <h1 class="mb-0">Annual Report</h1>
</div>
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