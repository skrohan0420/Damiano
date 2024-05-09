</head>

<body>
    <!-- Floating Action Buttons Container -->
    <div class="custom-fab-container">
        <!-- Main Action Button -->
        <a href="javascript:void(0);" class="custom-fab-button custom-fab-main" id="customFabMain">
            <i class="fas fa-ellipsis-v"></i> <!-- Main FAB icon -->
        </a>

        <!-- Sub Action Buttons -->
        <ul class="custom-fab-options">
            <li>
                <a href="https://www.facebook.com" class="custom-fab-button custom-fab-facebook" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com" class="custom-fab-button custom-fab-instagram" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="tel:+1234567890" class="custom-fab-button custom-fab-call">
                    <i class="fas fa-phone"></i>
                </a>
            </li>
            <li>
                <a href="https://wa.me/1234567890" class="custom-fab-button custom-fab-whatsapp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </li>
        </ul>
    </div>


    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->

    <div class="container-fluid fixed-top px-0">
        <div class="container px-0">
            <nav class="navbar navbar-light bg-light navbar-expand-xl header-nav">
                <a href="<?= base_url('home')?>" class="navbar-brand ms-3">
                    <h1 class="text-primary display-5">Shapath</h1>
                </a>
                <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="<?= base_url('home')?>" class="nav-item nav-link <?= isset($home) ? 'active' : '' ?>">Home</a>
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle <?= isset($about) ? 'active' : '' ?>" data-bs-toggle="dropdown">About</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="<?= base_url('our-team')?>" class="dropdown-item">Our Team</a>
                                <a href="<?= base_url('mission-vision')?>" class="dropdown-item">Mission and Vision</a>
                                <a href="<?= base_url('annual_report')?>" class="dropdown-item">Annual Report</a>
                                <a href="<?= base_url('faq')?>" class="dropdown-item">FAQ</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?= isset($project) ? 'active' : '' ?>" data-bs-toggle="dropdown">Projects</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <?php foreach($projects as $project){?>
                                <a href="<?= base_url('project/?id='.$project['uid']) ?>" class="dropdown-item"><?php echo $project['project_title']?></a>
                                <?php }?>

                                <!-- <a href="<?= base_url('project') ?>" class="dropdown-item">Hope Canvas</a>
                                <a href="<?= base_url('project') ?>" class="dropdown-item">Uddan</a>
                                <a href="<?= base_url('project') ?>" class="dropdown-item">Saraswati Scholarship</a>
                                <a href="<?= base_url('project') ?>" class="dropdown-item">Bastra Bondhu</a>
                                <a href="<?= base_url('project') ?>" class="dropdown-item">Upohar</a>
                                <a href="<?= base_url('project') ?>" class="dropdown-item">Blanket Drive</a> -->
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?= isset($testimonial) ? 'active' : '' ?>" data-bs-toggle="dropdown">Testimonial</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="<?= base_url('our-volunteer') ?>" class="dropdown-item">Our Volunteer</a>
                                <a href="<?= base_url('our-donor') ?>" class="dropdown-item">Our Donor</a>
                            </div>
                        </div>
                        <a href="<?= base_url('gallery') ?>" class="nav-item nav-link <?= isset($gallery) ? 'active' : '' ?>">Gallery</a>
                        <a href="<?= base_url('events') ?>" class="nav-item nav-link <?= isset($event) ? 'active' : '' ?>">Events</a>
                        <a href="<?= base_url('blogs')?>" class="nav-item nav-link <?= isset($blogs) ? 'active' : '' ?>">Blog</a>
                        <a href="<?= base_url('contact-us')?>" class="nav-item nav-link <?= isset($contact) ? 'active' : '' ?>">Contact</a>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                        <a href="<?= base_url('donate')?>" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Donate Now</a>
                    </div>
                    <a class="navbar-close" aria-label="Close"></a>
                </div>
                                    
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    