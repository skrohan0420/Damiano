<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Our Donor</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active text-white">Our Donor</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Donation Start -->
<div class="container-fluid donation py-5">
    <div class="container py-5">
        <div class="event-carousel owl-carousel">
            <?php foreach ($donors as $donor) { ?>
                <div class="event-item">
                    <div class="donation-item">
                        <img src="<?php echo base_url($donor['img']) ?>" class="img-fluid w-100" alt="Image"
                            style="height: 400px; object-fit: cover;">
                        <div class="donation-content d-flex flex-column">
                            <h5 class="text-uppercase text-primary mb-4">
                                <?php echo $donor['name'] ?>
                            </h5>
                            <p class="text-white mb-4">
                                <?php echo $donor['doner_about'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- Donation End -->
<style>
    .owl-next ,.owl-prev{
        display: none !important;
    }
    
</style>