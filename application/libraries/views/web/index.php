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

$mission = [];
$vision = [];
if (!empty($mission_vision)) {
    foreach ($mission_vision as $val) {
        if ($val['type'] == 'mission') {
            $mission = $val;
        } else if ($val['type'] == 'vision') {
            $vision = $val;
        }
    }
}



$video_home = '';
if (!empty($video)) {
    foreach ($video as $val) {
        if ($val['page'] == 'home') {
            $video_home = $val['path'];
        }
    }
}
?>

<div class="navbar-end-gap"></div>
<div class="quote-video-wrapper">
    <div class="quote">
        <p>"
            <?php echo $top_quote['quote'] ?>"
        </p>
        <p class="author">-
            <?php echo $top_quote['quote_by'] ?>
        </p>
    </div>
    <div class="video">
        <iframe id="ytplayer" type="text/html" width="720" height="405" src="<?= $video_home ?>" frameborder="0"
            allow="encrypted-media; loop" allowfullscreen></iframe>
    </div>
</div>
<!-- About Start -->
<div class="container-fluid about  py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-5">
                <div class="h-100">
                    <img src="<?php echo base_url($about['about_img']) ?>" class="img-fluid w-100 h-80" alt="Image">
                </div>
            </div>
            <div class="col-xl-7" style="text-align: center;">
                <h5 class="text-uppercase text-primary">About Us</h5>
                <h1 class="mb-4">
                    <?php echo $about['about_title'] ?>
                </h1>
                <p class="fs-5 mb-4">
                    <?php echo $about['about'] ?>
                </p>
                <div class="tab-class bg-secondary p-4">
                    <ul id="nav" class="nav d-flex mb-2">
                        <li class="nav-item mb-3">
                            <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">Mission</span>
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">Vision</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <h5 class="text-uppercase mb-3">
                                                <?php echo $mission['title'] ?>
                                            </h5>
                                            <p class="mb-4">
                                                <?php echo $mission['description'] ?>
                                            </p>
                                            <!-- <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                    href="#">Read More</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <h5 class="text-uppercase mb-3">
                                                <?php echo $vision['title'] ?>
                                            </h5>
                                            <p class="mb-4">
                                                <?php echo $vision['description'] ?>
                                            </p>
                                            <!-- <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                    href="#">Read More</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <h5 class="text-uppercase mb-3"><?php echo $vision['title'] ?></h5>
                                            <p class="mb-4"><?php echo $vision['description'] ?></p>
                                            <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                    href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid service py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">What we do</h5>
            <h1 class="mb-0">Shapath: Empowering Lives, Transforming Communities</h1>
        </div>
        <div class="row g-4">
            <?php foreach ($services as $service) { ?>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="<?php echo base_url($service['img']) ?>" class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="<?= base_url() ?>" class="h4 mb-0">
                                <?php echo $service['title'] ?>
                            </a>
                        </div>
                    </div>
                    <p class="my-4">
                        <?php echo $service['description'] ?>
                    </p>
                </div>
            <?php } ?>
            <!-- <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="service-item">
                    <img src="img/service-2.png" class="img-fluid w-100" alt="Image">
                    <div class="service-link">
                        <a href="#" class="h4 mb-0">Women Empowerment</a>
                    </div>
                </div>
                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="service-item">
                    <img src="img/service-3.png" class="img-fluid w-100" alt="Image">
                    <div class="service-link">
                        <a href="#" class="h4 mb-0">Livelihood</a>
                    </div>
                </div>
                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="service-item">
                    <img src="img/service-4.png" class="img-fluid w-100" alt="Image">
                    <div class="service-link">
                        <a href="#" class="h4 mb-0">Child Education</a>
                    </div>
                </div>
                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
            </div>
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-center">
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Donation Start -->
<div class="container-fluid donation py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Our Projects</h5>
            <h1 class="mb-0">Shapath's Projects Gallery</h1>
        </div>
        <div class="row g-4">
            <?php foreach ($projects as $project) { ?>
                <div class="col-lg-4">
                    <div class="donation-item">
                        <img src="<?php echo base_url($project['project_img']) ?>" class="img-fluid w-100" alt="Image"
                            style="height: 350px;">
                        <div class="donation-content d-flex flex-column">
                            <h1 class="text-uppercase text-primary mb-4">
                                <?php echo $project['project_title'] ?>
                            </h1>
                            <p class="text-white mb-4">
                                <?php echo $project['project_cover_details'] ?>
                            </p>
                            <div class="donation-btn d-flex align-items-center justify-content-start">
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                    href="<?= base_url('donate/?id=' . $project['uid']) ?>">Donate !</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Donation End -->


<!-- Counter Start -->
<div class="container-fluid counter py-5"
    style="background: linear-gradient(rgba(0, 0, 0), rgba(0, 0, 0)), url() center center; background-size: cover;">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Achievements</h5>

        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="counter-item text-center border p-5">
                    <i class="fas fa-thumbs-up fa-4x text-white"></i>
                    <h3 class="text-white my-4">Beavers Saved</h3>
                    <div class="counter-counting">
                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">3600</span>
                        <span class="h1 fw-bold text-primary">+</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="counter-item text-center border p-5">
                    <i class="fas fa-file-invoice-dollar fa-4x text-white"></i>
                    <h3 class="text-white my-4">Funds Collected</h3>
                    <div class="counter-counting text-center border-white w-100"
                        style="border-style: dotted; font-size: 30px;">
                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">51300</span>
                        <span class="h1 fw-bold text-primary"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="counter-item text-center border p-5">
                    <i class="fas fa-user fa-4x text-white"></i>
                    <h3 class="text-white my-4">Our Volunteer</h3>
                    <div class="counter-counting text-center border-white w-100"
                        style="border-style: dotted; font-size: 30px;">
                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">85</span>
                        <span class="h1 fw-bold text-primary">+</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="counter-item text-center border p-5">
                    <i class="fas fa-heart fa-4x text-white"></i>
                    <h3 class="text-white my-4">Days of Help</h3>
                    <div class="counter-counting text-center border-white w-100"
                        style="border-style: dotted; font-size: 30px;">
                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">487</span>
                        <span class="h1 fw-bold text-primary">+</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Counter End -->


<!-- Causes Start -->
<div class="container-fluid causes py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Recent Causes</h5>
            <h1 class="mb-4">How You Can Help?</h1>

        </div>
        <div class="row g-4">
            <!-- <div class="col-lg-6 col-xl-3">
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="img/causes-4.png" class="img-fluid w-100" alt="Image">
                        <div class="causes-link pb-2 px-3">
                            <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Goal:
                                3600</small>
                            <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Raised:
                                4000</small>
                        </div>
                        <div class="causes-dination p-2">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Donate Now</a>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                            aria-valuemax="100">
                            <span>65%</span>
                        </div>
                    </div>
                    <div class="causes-content p-4">
                        <h4 class="mb-3">First environments activity of</h4>
                        <p class="mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3">
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="img/causes-2.png" class="img-fluid w-100" alt="Image">
                        <div class="causes-link pb-2 px-3">
                            <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Goal:
                                3600</small>
                            <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Raised:
                                4000</small>
                        </div>
                        <div class="causes-dination p-2">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Donate Now</a>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100">
                            <span>75%</span>
                        </div>
                    </div>
                    <div class="causes-content p-4">
                        <h4 class="mb-3">Build school for poor children.</h4>
                        <p class="mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3">
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="img/causes-3.png" class="img-fluid w-100" alt="Image">
                        <div class="causes-link pb-2 px-3">
                            <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Goal:
                                3600</small>
                            <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Raised:
                                4000</small>
                        </div>
                        <div class="causes-dination p-2">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Donate Now</a>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                            aria-valuemax="100">
                            <span>85%</span>
                        </div>
                    </div>
                    <div class="causes-content p-4">
                        <h4 class="mb-3">Building clean-water system.</h4>
                        <p class="mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3">
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="img/causes-1.png" class="img-fluid w-100" alt="Image">
                        <div class="causes-link pb-2 px-3">
                            <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Goal:
                                3600</small>
                            <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Raised:
                                4000</small>
                        </div>
                        <div class="causes-dination p-2">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Donate Now</a>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                            aria-valuemax="100">
                            <span>95%</span>
                        </div>
                    </div>
                    <div class="causes-content p-4">
                        <h4 class="mb-3">First environments activity.</h4>
                        <p class="mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div> -->
            <?php
            if (!empty($causes)) {
                foreach ($causes as $cause) {

                    ?>
                    <div class="col-lg-6 col-xl-3">
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="<?= base_url() . $cause['img'] ?>" class="img-fluid w-100" alt="Image"
                                    style="object-fit: cover; height: 250px;">
                                <div class="causes-link pb-2 px-3">
                                    <small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Goal:
                                        <?= $cause['goal'] ?>
                                    </small>
                                    <small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Raised:
                                        <?= empty($cause['raised']) ? 0 : $cause['raised'] ?>
                                    </small>
                                </div>
                                <div class="causes-dination p-2">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Donate Now</a>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                    aria-valuenow="<?= intval($cause['raised']) / intval($cause['goal']) * 100 ?>"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <span>
                                        <?= intval(intval($cause['raised']) / intval($cause['goal']) * 100) ?>%
                                    </span>
                                </div>
                            </div>
                            <div class="causes-content p-4">
                                <h4 class="mb-3">
                                    <?= $cause['title'] ?>
                                </h4>
                                <p class="mb-4">
                                    <?= $cause['details'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php

                }
            }
            ?>


        </div>
    </div>
</div>
<!-- Causes End -->


<!-- Events Start -->
<div class="container-fluid event py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Upcoming Events</h5>
            <h1 class="mb-0">Help today because tomorrow you may be the one who needs more helping!</h1>
        </div>
        <div class="event-carousel owl-carousel">
            <!-- <div class="event-item">
                <img src="img/events-1.jpg" class="img-fluid w-100" alt="Image">
                <div class="event-content p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>Kolkata India</span>
                        <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                    </div>
                    <h4 class="mb-4">How To Build A Cleaning Plan</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed
                        eiusmod tempor.</p>
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                </div>
            </div>
            <div class="event-item">
                <img src="img/events-2.jpg" class="img-fluid w-100" alt="Image">
                <div class="event-content p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>Kolkata India</span>
                        <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                    </div>
                    <h4 class="mb-4">How To Build A Cleaning Plan</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed
                        eiusmod tempor.</p>
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                </div>
            </div>
            <div class="event-item">
                <img src="img/events-3.jpg" class="img-fluid w-100" alt="Image">
                <div class="event-content p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>Kolkata India</span>
                        <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                    </div>
                    <h4 class="mb-4">How To Build A Cleaning Plan</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed
                        eiusmod tempor.</p>
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                </div>
            </div>
            <div class="event-item">
                <img src="img/events-4.jpg" class="img-fluid w-100" alt="Image">
                <div class="event-content p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>Kolkata India</span>
                        <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                    </div>
                    <h4 class="mb-4">How To Build A Cleaning Plan</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed
                        eiusmod tempor.</p>
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                </div>
            </div> -->
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
<!-- Events End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5 mb-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Latest News</h5>
            <h1 class="mb-0">Read our blogs
            </h1>
        </div>
        <div class="row g-4">
            <?php foreach ($blogs as $blog) { ?>
                <div class="col-lg-6 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo base_url($blog['img']) ?>" class="img-fluid w-100" height="" alt=""
                                style="height: 200px; object-fit: cover;">
                            <div class="blog-info">
                                <span><i class="fa fa-clock"></i>
                                    <?php $dateTime = new DateTime($blog['created_at']);
                                    $dateOnly = $dateTime->format('d-m-Y');
                                    echo $dateOnly ?>
                                </span>
                            </div>
                            <div class="search-icon">
                                <a href="<?php echo base_url($blog['img']) ?>" data-lightbox="Blog-1" class="my-auto"><i
                                        class="fas fa-search-plus btn-primary text-white p-3"></i></a>
                            </div>
                        </div>
                        <div class="text-dark border p-4 ">
                            <h4 class="mb-4">
                                <?php echo $blog['title'] ?>
                            </h4>
                            <p class="mb-4"
                                style="overflow: hidden; text-overflow: ellipsis; white-space: normal; line-height: 1.2em; /* Adjust line height as needed */ max-height: 3.6em;">
                                <?php echo $blog['description'] ?>
                            </p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                href="<?php echo base_url('web/Activity/blog?blog_id=' . $blog['uid']) ?>">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Blog End -->


<!-- Gallery Start -->
<div class="container-fluid gallery py-5 my-5 px-0">
    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
        <h5 class="text-uppercase text-primary">Our work</h5>
        <h1 class="mb-4">gallery</h1>
    </div>
    <div class="row g-0">

        <section class="content"  style="width: 100%; overflow-x: auto; white-space: nowrap;">
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
</div>
<!-- Gallery End -->


<!-- Volunteers Start -->
<div class="container-fluid volunteer py-5 mt-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="volunteer-img">
                            <img src="assets/img/volunteers-1.jpg" class="img-fluid w-100" alt="Image">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="volunteer-img">
                            <img src="assets/img/volunteers-3.jpg" class="img-fluid w-100" alt="Image">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="volunteer-img">
                            <img src="assets/img/volunteers-2.jpg" class="img-fluid w-100" alt="Image">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="volunteer-img">
                            <img src="assets/img/volunteers-4.jpg" class="img-fluid w-100" alt="Image">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <h5 class="text-uppercase text-primary">Become a Volunteer?</h5>
                <h1 class="mb-4">Join your hand with us for a better life and beautiful future.</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod
                    tempor amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor amet consectur adip
                    sed eiusmod amet consectur adip sed eiusmod tempor.
                </p>
                <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> We are friendly to each other.</p>
                <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> If you join with us,We will give you
                    free training.</p>
                <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Its an opportunity to help Homeless
                    People.</p>
                <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> No goal requirements.</p>
                <p class="text-dark mb-5"><i class=" fa fa-check text-primary me-2"></i> Joining is tottaly free. We
                    dont need any money from you.</p>
                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Join With Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Volunteers End -->


<!-- Image with Quote Start -->
<div class="quote-div">
    <div class="quote-2">
        <p><span>"</span>
            <?php echo $bottom_quote['quote'] ?> <span>"</span>
        </p>
        <p class="author-2">-
            <?php echo $bottom_quote['quote_by'] ?>
        </p>
    </div>
    <div class="authimage">
        <img src="<?php echo base_url($bottom_quote['quote_img']) ?>" alt="" height="200">
    </div>
</div>


<!-- Image with Quote End -->
<audio id="background-music" loop>
    <source src="<?= base_url() . 'assets/audio1.mp3' ?>" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<button id="music-toggle"
    style="position: fixed; bottom: 10px; left: 50%; transform: translateX(-50%); z-index: 1000; display: none;"
    onclick="toggleMusic()">Do you want Play a Music?</button>ggle"
    style="position: fixed; bottom: 10px; left: 50%; transform: translateX(-50%); z-index: 1000; display: none;"
    onclick="toggleMusic()">Do you want Play a Music?</button>