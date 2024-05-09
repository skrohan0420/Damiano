</head>
<?php

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#6bbc53;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Shapath</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Content
            </div>


            <li class="nav-item">
                <a class="nav-link collapsed"
                    href="<?= base_url('/admin/pages/home') ?>">
                    <i class="fas fa-fw fa-home mr-1"></i>
                    <span> Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed"
                    href="<?= base_url('/admin/pages/projects') ?>">
                    <i class="fas fa-fw fa-project-diagram mr-1" ></i>
                    <span>Projects</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed"
                    href="<?= base_url('/admin/pages/donors') ?>">
                    <i class="fas fa-user mr-1" ></i>
                    <span>Donors</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed"
                    href="<?= base_url('/admin/pages/volunteers') ?>">
                    <i class="fas fa-user mr-1" ></i>
                    <span>Volunteers</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed"
                    href="<?= base_url('/admin/pages/our/team') ?>">
                    <i class="fas fa-users mr-1" ></i>
                    <span>Our Team</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('admin/gallery') ?>">
                    <i class="fas fa-image mr-1"></i>
                    <span>Gallery</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('admin/causes') ?>">
                    <i class="fas fa-star mr-1"></i>
                    <span>Causes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('admin/blog')?>">
                    <i class="fas fa-book mr-1"></i>
                    <span>Blog</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('admin/events') ?>">
                    <i class="fas fa-calendar mr-1"></i>
                    <span>Events</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('admin/messages') ?>">
                    <i class="fas fa-comment mr-1"></i>
                    <span>messages</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?= $this->session->userdata(SES_TYPE) == 'admin' ? $this->session->userdata(SES_ADMIN_NAME) : $this->session->userdata(SES_SUB_ADMIN_NAME) ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url('assets_admin/') ?>img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->