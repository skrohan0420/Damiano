<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Our Volunteer</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-white">Our Volunteer</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Donation Start -->
<div class="container-fluid donation py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
        </div>
        <!-- <div class="row g-4">
            <div class="col-lg-4">
                <div class="donation-item">
                    <img src="img/donation-1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="donation-content d-flex flex-column">
                        <h5 class="text-uppercase text-primary mb-4">Mr.Prosenjit Mondal</h5>
                        <p class="text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's</p>
                        <div class="donation-btn d-flex align-items-center justify-content-start">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="donation-item">
                    <img src="img/donation-1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="donation-content d-flex flex-column">
                        <h5 class="text-uppercase text-primary mb-4">Mr.Prosenjit Mondal</h5>
                        <p class="text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's</p>
                        <div class="donation-btn d-flex align-items-center justify-content-start">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="donation-item">
                    <img src="img/donation-1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="donation-content d-flex flex-column">
                        <h5 class="text-uppercase text-primary mb-4">Mr.Prosenjit Mondal</h5>
                        <p class="text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's</p>
                        <div class="donation-btn d-flex align-items-center justify-content-start">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="event-carousel owl-carousel">
            <?php foreach($volunteers as $volunteer){?>
            <div class="event-item">
                <div class="donation-item">
                    <img src="<?php echo base_url($volunteer['img'])?>" class="img-fluid w-100" alt="Image" style="height: 400px; object-fit: cover;">
                    <div class="donation-content d-flex flex-column">
                        <h5 class="text-uppercase text-primary" ><?php echo $volunteer['name']?></h5>
                        <p class="text-white mb-4"><?php echo $volunteer['volunteer_about']?></p>
                        <div class="donation-btn d-flex align-items-center justify-content-start"></div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<!-- Donation End -->