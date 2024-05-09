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
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Our Donor</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
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