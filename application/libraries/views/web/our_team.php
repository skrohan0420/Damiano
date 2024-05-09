
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Our Team</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-white">Our Team</li>
            </ol>
    </div>
</div>
<!-- Header End -->
<!-- About Start -->
<div class="container-fluid about  py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-5">
                <div class="h-100">
                    <img src="assets/img/founder.jpeg" class="img-fluid w-100 h-100" alt="Image">
                </div>
            </div>
            <div class="col-xl-7">
                <h5 class="text-uppercase text-primary">Founder & President</h5>
                <h1 class="mb-4">Mr. Biswajit Ghosh</h1>
                <p class="fs-5 mb-4"></p>
                <div class="tab-class bg-secondary p-4">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <p class="mb-4">As the founder and president of Shapath, it is with immense
                                                gratitude and pride that I address you. Shapath, meaning ‘oath’ or
                                                ‘pledge,’ reflects the commitment we’ve made to drive sustainable change
                                                for underprivileged children, youth, and women across India.

                                                Our journey began with a simple yet profound vision: to transform the
                                                lives of the underprivileged, ensuring lasting positive change in every
                                                aspect. Today, Shapath stands as a beacon of hope and empowerment,
                                                guided by the principles of exemplary governance, innovation, and
                                                scalability.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<div class="text-center mx-auto pb-5" style="max-width: 800px;">
    <h1 class="mb-0" style="color: #b3d335;">BOARD OF TRUSTEES</h1>
</div>

<!-- About Start -->
<!-- <div class="container-fluid about  py-5">
    <div class="container py-5">
        <div class="row g-5">

            <div class="col-xl-7">
                <h5 class="text-uppercase text-primary">BOARD OF TRUSTEES</h5>
                <h1 class="mb-4">Mr. Anurag Halder</h1>
                <p class="fs-5 mb-4"></p>
                <div class="tab-class bg-secondary p-4">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <p class="mb-4">I am honored to serve as the Secretary of Shapath, working
                                                alongside dedicated individuals committed to driving positive change in
                                                the lives of the underprivileged.
                                                As we navigate our journey towards exemplary governance, innovation, and
                                                scalability, I look forward to supporting our mission and fostering
                                                collaboration within our community.
                                                Together, let’s continue to make a meaningful impact through Civic
                                                Driven Change.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="h-100">
                    <img src="img/about-1.jpg" class="img-fluid w-100 h-100" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- About End -->
<!-- <?php echo $content1?>
<?php echo $content2?> -->

<?php
$flag =1;
foreach($our_team_board_of_trustees as $b_o_t){
    if($flag){?>  

<div class="container-fluid about  py-5">
    <div class="container py-5">
        <div class="row g-5">

            <div class="col-xl-7">
                <h5 class="text-uppercase text-primary">BOARD OF TRUSTEES</h5>
                <h1 class="mb-4"><?php echo $b_o_t['name']?></h1>
                <p class="fs-5 mb-4"></p>
                <div class="tab-class bg-secondary p-4">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <p class="mb-4"><?php echo $b_o_t['about_member']?></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="h-100">
                    <img src="<?php echo base_url($b_o_t['img'])?>" class="img-fluid w-100 h-100" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div> 

<?php $flag = 0;}else{?>
    <div class="container-fluid about  py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-5">
                <div class="h-100">
                    <img src="<?php echo base_url($b_o_t['img'])?>" class="img-fluid w-100 h-100" alt="Image">
                </div>
            </div>
            <div class="col-xl-7">
                <h5 class="text-uppercase text-primary">BOARD OF TRUSTEES</h5>
                <h1 class="mb-4"><?php echo $b_o_t['name']?></h1>
                <p class="fs-5 mb-4"></p>
                <div class="tab-class bg-secondary p-4">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <p class="mb-4"><?php echo $b_o_t['about_member']?></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $flag = 1; }}?>

<!-- About Start -->
<!-- <div class="container-fluid about  py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-5">
                <div class="h-100">
                    <img src="img/about-1.jpg" class="img-fluid w-100 h-100" alt="Image">
                </div>
            </div>
            <div class="col-xl-7">
                <h5 class="text-uppercase text-primary">BOARD OF TRUSTEES</h5>
                <h1 class="mb-4">Mr. Rahul Gupta</h1>
                <p class="fs-5 mb-4"></p>
                <div class="tab-class bg-secondary p-4">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <p class="mb-4">It is with great dedication and responsibility that I take
                                                on the role of Treasurer for Shapath. As we strive for impactful
                                                initiatives and sustainable change, I am committed to ensuring
                                                transparent financial management.
                                                Together, let us uphold the highest standards of fiscal responsibility,
                                                making each contribution count towards our shared vision of a brighter,
                                                more equitable future.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- About End -->

<!-- Donation Start -->
<div class="container-fluid donation py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h1 class="mb-0" style="color: #b3d335;">TRUSTEES</h1>
        </div>
        <div class="row g-4">
            <?php foreach($our_team_trustees as $o_t_t){?>
            <div class="col-lg-4">
                <div class="donation-item">
                    <img src="<?php echo base_url($o_t_t['img'])?>" class="img-fluid w-100" alt="Image">
                    <div class="donation-content d-flex flex-column">
                        <h5 class="text-uppercase text-primary mb-4"><?php echo $o_t_t['name']?></h5>
                        <p class="text-white mb-4"><?php echo $o_t_t['about_member']?></p>
                        <div class="donation-btn d-flex align-items-center justify-content-start">
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
            <!-- <div class="col-lg-4">
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
            </div> -->
        </div>
    </div>
</div>
<!-- Donation End -->