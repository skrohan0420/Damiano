</head>
<?php

?>
<style>
    .nav-link{
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }
</style>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#2596be;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Damiano</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Content
            </div>


            <li class="nav-item">
                <a class="nav-link"
                    href="<?= base_url('/admin/home') ?>">
                    <i class="fas fa-fw fa-home mr-1"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="<?= base_url('/admin/about') ?>">
                    <i class="fa fa-info-circle mr-1"></i>
                    <span>About</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="<?= base_url('/admin/products') ?>">
                    <i class="fas fa-fw fa-box-open mr-1"></i>
                    <span>Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="<?= base_url('/admin/infrastructure') ?>">
                    <i class="fas fa-building mr-1"></i>
                    <span>Infrastructure</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="<?= base_url('/admin/jobs') ?>">
                    <i class="fas fa-briefcase mr-1"></i>
                    <span>Jobs</span>   
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="<?= base_url('/admin/updates') ?>">
                    <i class="fas fa-fw fa-info mr-1"></i>
                    <span>Updates</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="<?= base_url('/admin/quality') ?>">
                    <i class="fas fa-check mr-1"></i>
                    <span>Quality</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="<?= base_url('/admin/flyers') ?>">
                    <i class="fa fa-file mr-1"></i>
                    <span>Flyers</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="<?= base_url('/admin/messages') ?>">
                    <i class="fas fa-fw fa-envelope mr-1"></i>
                    <span>Messages</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link"
                    href="<?= base_url('/admin/alerts') ?>">
                    <i class="fas fa-fw fa-bell mr-1"></i>
                    <span>Alerts</span>
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