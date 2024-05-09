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

?>

<div class="navbar-end-gap"></div>

<div class="quote-video-wrapper">
    <div class="quote">
        <p>"<?php echo $top_quote['quote'] ?>"</p>
        <p class="author">- <?php echo $top_quote['quote_by'] ?></p>
    </div>
    <div class="video">
        <iframe id="ytplayer" type="text/html" width="720" height="405"
            src="https://www.youtube.com/embed/ox3VFMNBXjA?unmute=1&loop=1&playlist=ox3VFMNBXjA"
            frameborder="0" allow="encrypted-media; loop" allowfullscreen></iframe>
    </div>

</div>




<!-- About Start -->
<div class="container-fluid about  py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-5">
                <div class="h-100">
                    <img src="<?php echo base_url($about['about_img'])?>" class="img-fluid w-100 h-80" alt="Image">
                </div>
            </div>
            <div class="col-xl-7" style="text-align: center;">
                <h5 class="text-uppercase text-primary">About Us</h5>
                <h1 class="mb-4"><?php echo $about['about_title']?></h1>
                <p class="fs-5 mb-4"><?php echo $about['about']?>
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
                                            <h5 class="text-uppercase mb-3"><?php echo $mission['title']?></h5>
                                            <p class="mb-4"><?php echo $mission['description']?></p>
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
                                            <h5 class="text-uppercase mb-3"><?php echo $vision['title']?></h5>
                                            <p class="mb-4"><?php echo $vision['description']?>
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
                                            <h5 class="text-uppercase mb-3"><?php echo $vision['title']?></h5>
                                            <p class="mb-4"><?php echo $vision['description']?></p>
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
                <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Its an opportunity to help poor
                    Environments.</p>
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
        <p><span>"</span> <?php echo $bottom_quote['quote'] ?><span>"</span></p>
        <p class="author-2">- <?php echo $bottom_quote['quote_by'] ?></p>
    </div>
    <div class="authimage">
        <img src="<?php echo base_url($bottom_quote['quote_img']) ?>" alt="">
    </div>
</div>


<!-- Image with Quote End -->