<?php
if (false) {
    echo "<pre>";
    print_r($banner_text);
    print_r($banner_images);
    print_r($about_text);
    print_r($about_img);
    print_r($update_img);
    print_r($announcement);
    print_r($infrastructure);
    print_r($appreciation);
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Damiano</title>
    <meta name="description"
        content="South City International School is a premier international school in Kolkata, India. We offer a high-quality education that prepares students for success in college and beyond. Our curriculum is rigorous, our teachers are experienced, and our facilities are state-of-the-art. We are committed to providing our students with a well-rounded education that includes academics, sports, arts, and extracurricular activities." />
    <meta name="keywords"
        content="South City International School, Kolkata, international school, ICSE, ISC, education, school, students, parents, co-educational, day school, english medium, academic excellence, social service" />

    <meta name="author" content="South City International School" />
    <link rel="image_src" href="https://www.scis.co.in/images/scisbanner1.jpg">
    <meta name="page-topic" content="Best International School Kolkata" />
    <meta name="copyright" content="South City International School" />
    <meta name="Author" content="South City International School" />
    <link rel="canonical" href="https://www.scis.co.in" />
    <meta name="robots" content="index, follow" />
    <meta name="rating" content="safe for kids" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow" />
    <meta name="reply-to" content="info@scis.co.in">
    <meta name="allow-search" content="yes" />
    <meta name="revisit-after" content="daily" />
    <meta name="distribution" content="global" />
    <meta name="expires" content="never" />

    <meta property="og:title" content="South City International School | Kolkata's Premier International School" />
    <meta property="og:description"
        content="South City International School is a premier international school in Kolkata, India. We offer a high-quality education that prepares students for success in college and beyond. Our curriculum is rigorous, our teachers are experienced, and our facilities are state-of-the-art. We are committed to providing our students with a well-rounded education that includes academics, sports, arts, and extracurricular activities." />
    <meta property="og:url" content="https://www.scis.co.in" />
    <meta property="og:image" content="https://www.scis.co.in/images/scisbanner1.jpg" />
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="scis.co.in">
    <meta property="twitter:url" content="https://www.scis.co.in">
    <meta name="twitter:title" content="South City International School | Kolkata's Premier International School">
    <meta name="twitter:description"
        content="South City International School is a premier international school in Kolkata, India. We offer a high-quality education that prepares students for success in college and beyond. Our curriculum is rigorous, our teachers are experienced, and our facilities are state-of-the-art. We are committed to providing our students with a well-rounded education that includes academics, sports, arts, and extracurricular activities.">
    <meta name="twitter:image" content="https://www.scis.co.in/images/scisbanner1.jpg">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Glory:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/aos.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.wizemen.net/fontawesome5-15-3/css/all.css" />
    <link rel="stylesheet" href="https://cdn.wizemen.net/fontawesome5-15-3/css/v4-shims.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    <link href="https://cdn.materialdesignicons.com/2.1.99/css/materialdesignicons.min.css" rel="stylesheet">

    <style type="text/css">
        .error_message {
            color: red;
            font-weight: 500;
        }

        .success_message {
            color: green;
            font-weight: 500;
        }
    </style>
    <style>
        .fixbuttoninapplynowmain {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%) !important;
            z-index: 9999;
        }

        .fixbuttoninapplynow {
            background: var(--blue);
            z-index: 9999;
            text-align: center;
            width: 36px;
            padding: 11px;
            height: 110px;
            display: block;
            border: 1px solid #fff;
            transition: .3s;
        }

        /*.fixbuttoninapplynow:hover {
                background: var(--blue);
                transition: .3s;
            }*/

        .textrotateviewapplynow {
            webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
            -webkit-transform-origin: 0 0;
            -moz-transform-origin: 0 0;
            -ms-transform-origin: 0 0;
            -o-transform-origin: 0 0;
            transform-origin: 0 0;
            width: 87px;
            position: relative;
            left: 16px;
        }

        .textrotateviewapplynow a {
            display: block;
            text-decoration: none;
            color: #fff;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1.2px;
        }

        .fixbuttoninapplynow.bookatour {
            height: 172px !important;
            background: var(--green);
        }

        /*.fixbuttoninapplynow.bookatour:hover {
                background: var(--green);
            }*/

        .fixbuttoninapplynow.bookatour .textrotateviewapplynow {
            width: 150px !important;
        }

        .fixbuttoninapplynow.applyadmissiontree .textrotateviewapplynow {
            width: 181px;
        }

        @media screen and (max-width:480px) {
            .fixbuttoninapplynow {
                top: 250px;
                transform: unset;
            }
        }
    </style>

    <style>
        .slider {
            overflow: hidden;
        }

        .slide {
            float: left;
            display: none;
        }

        img {
            width: 100%;
            height: auto;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- datepicker -->
    <script src="https://cdn.wizemen.net/plugins/datepicker/bootstrap-datepicker.js"></script>
</head>

<body id="topview">

    <div class="fixbuttoninapplynowmain" data-aos="zoom-in" data-aos-duration="3000">
        <div class="fixbuttoninapplynow applynowsticky">
            <div class="textrotateviewapplynow">
                <a href="#" target="_blank">Apply Now</a>
            </div>
        </div>

        <div class="fixbuttoninapplynow bookatour">
            <div class="textrotateviewapplynow">
                <a href="#">View All Products</a>
            </div>
        </div>
    </div>

    <!--header start-->

    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <header id="home">
        <div class="topheaderlogo">
            <a href="index.html"><img data-aos="fade-up" data-aos-duration="1500"
                    src="<?= base_url() ?>assets/images/logo.png" alt="logo"></a>
        </div>
        <div class="headertop">
            <div class="headertop_left" onclick="menuopneview();" data-aos="fade-right" data-aos-duration="1500">
                <p>Menu</p>
                <div class="burger">
                    <span></span>
                </div>
            </div>
            <a href="<?=base_url('contact-us')?>" onclick="activateGetInTouch();">
                <div class="headertop_right" data-aos="fade-left" data-aos-duration="1500">
                    <p>Contact</p>
                    <img src="<?= base_url() ?>assets/images/mail.png" alt="#">
                </div>
            </a>
        </div>
        <div class="intSchMenu">
            <div class="intSchMenu__overflow-area">
                <div class="intSchMenu__overflow-area-inner">
                    <div class="intSchMenu__menusWrapper">
                        <div class="first-level-navigation">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li data-tab="aboutmenu"><a href="<?=base_url('about')?>">About Us</a></li>
                                <li data-tab="academicsmenu"><a href="javascript:;">Products<span><i
                                                class="fa fa-angle-right"></i></span></a></li>
                                <li data-tab="beyondclassroom"><a href="javascript:;">Updates</a></li>
                                <li data-tab="infrastructure"><a href="javascript:;">Quality</a></li>
                                <li data-tab="admissionmenu"><a href="javascript:;">Infrastructure</a></li>
                                <li><a href="#">Career</a></li>
                                <li data-tab=""><a href="<?=base_url('contact-us')?>">Contact us </a></li>
                            </ul>
                        </div>

                        <div class="second-level-navigation">


                            <div id="academicsmenu" class="tab-content">
                                <ul>
                                    <li><a href="#">Abc Accessories</a></li>
                                    <li><a href="#">Conductor Accessories</a></li>
                                    <li><a href="#">Fuse Cutouts</a></li>
                                    <li><a href="#">Helical Fittings</a></li>
                                    <li><a href="#">Insulator Accessories</a></li>
                                    <li><a href="#">Pole lien Hardware and Accessories</a></li>
                                    <li><a href="#">Telecommunication Accessories</a></li>
                                </ul>
                            </div>

                            <div id="contact" class="tab-content">
                                <ul>
                                    <li><a href="/getintouch">Get In touch</a></li>
                                    <li><a href="https://maps.app.goo.gl/kWGu2T7zF4SM1oFw9" target="_blank">Driving
                                            Directions</a></li>
                                    <li><a href="/workwithus">Work with us</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <div class="mobilemenuforthis">




                        <ul class="navmobile">
                            <li class="nav__item"><a href="/" class="nav__link">Home</a></li>
                            <li class="nav__item"><a class="nav__link" href="#">About Us</a></li>
                            <li class="nav__item">
                                <a class="nav__link" href="#">Products <i class="fas fa-chevron-right"></i></a>
                                <ul class="nav__sub">
                                    <li class="nav__item"><a class="nav__link" href="#">Abc Accessories</a></li>
                                    <li class="nav__item"><a class="nav__link" href="#">Conductor Accessories</a></li>
                                    <li class="nav__item"><a class="nav__link" href="#">Fuse Cutouts</a></li>
                                    <li class="nav__item"><a class="nav__link" href="#">Helical Fittings</a></li>
                                    <li class="nav__item"><a class="nav__link" href="#">Insulator Accessories</a></li>
                                    <li class="nav__item"><a class="nav__link" href="#">Pole lien Hardware and
                                            Accessories</a></li>
                                    <li class="nav__item"><a class="nav__link" href="#">Telecommunication
                                            Accessories</a></li>
                                </ul>
                            </li>
                            <li class="nav__item"><a href="/" class="nav__link">Updates</a></li>
                            <li class="nav__item"><a class="nav__link" href="#">Quality</a></li>
                            <li class="nav__item"><a href="/" class="nav__link">Infrastructure</a></li>
                            <li class="nav__item"><a class="nav__link" href="#">Contact us</a></li>
                        </ul>

                    </div>

                    <div class="intSchMenu__extraContent">
                        <div class="menulogo">
                            <a href="/"><img src="<?= base_url() ?>assets/images/logo.png" alt="#" /></a>
                        </div>
                        <div class="rightsideonmenuview">
                            <div class="latestnewsview">
                                <div class="facebooknews samecolor">
                                    <div class="lower-content">
                                        <div class="newsname">
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                        <div class="newsinnertext">
                                            <img src="<?= base_url() ?>assets/images/newspage/1.jpg" alt="#" />
                                            <div class="hovertext">
                                                <a href="#">
                                                    <div class="newsmoreview">
                                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="instagramnews samecolor">
                                    <div class="lower-content">
                                        <div class="newsname">
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                        <div class="newsinnertext">
                                            <img src="<?= base_url() ?>assets/images/newspage/2.jpg" alt="#" />
                                            <div class="hovertext">
                                                <a href="#">
                                                    <div class="newsmoreview">
                                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="twitternews samecolor">
                                    <div class="lower-content">
                                        <div class="newsname">
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                        <div class="newsinnertext">
                                            <img src="<?= base_url() ?>assets/images/newspage/3.jpg" alt="#" />
                                            <div class="hovertext">
                                                <a href="#">
                                                    <div class="newsmoreview">
                                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="youtubenews samecolor">
                                    <div class="lower-content">
                                        <div class="newsname">
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                        <div class="newsinnertext">
                                            <img src="<?= base_url() ?>assets/images/newspage/4.jpg" alt="#" />
                                            <div class="hovertext">
                                                <a href="#">
                                                    <div class="newsmoreview">
                                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                    </div>
                                                </a>
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
    </header>
    <!--header end-->

    <!--banner start-->
    <section class="banner_main">
        <div class="bg-shadows"></div>
        <div class="bannerslider owl-carousel owl-theme">

            <?php
            if (!empty($banner_images)) {
                foreach ($banner_images as $index => $item) {
                    ?>
                    <div class="item">
                        <img src="<?= base_url() . $item['img_path'] ?>" alt="SCIS-Banner" />
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <div class="bannertextviewcurve">
            <div id="curved2" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <?= $banner_text['heading'] ?>
            </div>
            <div id="curved1" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <?= $banner_text['heading_two'] ?>
            </div>
        </div>
        <div class="fixtextbanner">

            <p><?= $banner_text['corner_text'] ?><br /> <?= $banner_text['corner_text_two'] ?></p>
        </div>
        <div class="toptobottomfixed">
            <a href="#aboutus">
                <div class="toptobottom pulse">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
            </a>
        </div>
    </section>
    <!--banner end-->


    <!--welcome start-->
    <section class="welcome_main" id="aboutus">
        <div class="auto-container">
            <div class="row welcome_view">
                <div class="image-column col-lg-6 col-md-6">
                    <div class="inner-column">
                        <div class="kids-title" data-aos="fade-left" data-aos-duration="1500"></div>
                        <div class="pattern-layer"
                            style="background-image:url(<?= base_url() ?>assets/images/pattern-15.png)">
                        </div>
                        <div class="patternleftright"
                            style="background-image:url(<?= base_url() ?>assets/images/pattern-4.png)"></div>
                        <div class="image-one" data-aos="fade-down" data-aos-duration="1000">
                            <img src="<?= base_url() . $about_img[0]['img_path'] ?>" />
                        </div>
                        <div class="image-two" data-aos="fade-right" data-aos-duration="1000">
                            <img src="<?= base_url() . $about_img[1]['img_path'] ?>" />
                        </div>
                        <div class="image-three" data-aos="fade-up" data-aos-duration="1000">
                            <img src="<?= base_url() . $about_img[2]['img_path'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-6 col-md-6">
                    <div class="inner-column">
                        <div class="sec-title-two">
                            <h2 data-aos="fade-up" data-aos-duration="1000">Welcome To <span
                                    class="hedingone">Damiano</span></h2>
                        </div>
                        <div class="dark-text" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="0">
                            <?= $about_text['about_text'] ?>
                        </div>
                        <div class="row">

                            <div class="feature-column col-lg-12">
                                <div class="feature-inner" data-aos="fade-up" data-aos-duration="2000"
                                    data-aos-offset="0">
                                    <div class="icon">
                                        <img src="<?= base_url() ?>assets/images/vision.png" alt="Awesome Image">
                                    </div>
                                    <strong>Vision</strong>
                                    <div class="showlinethree">
                                        <p><?= $about_text['vision_text'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="feature-column col-lg-12">
                                <div class="feature-inner" data-aos="fade-up" data-aos-duration="2000"
                                    data-aos-offset="0">
                                    <div class="icon"><img src="<?= base_url() ?>assets/images/mission.png" alt="#">
                                    </div>
                                    <strong>Mission</strong>
                                    <div class="showlinethree">
                                        <p><?= $about_text['mission_text'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Button Box -->
                        <!-- <div class="button-box" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="0">
                            <a class="allbtnview" href="about.html"><span>View More</span></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--welcome end-->


    <!--announcement-->
    <section class="announcement">
        <div class="crposition">
            <div class="auto-container">
                <div class="logorotate" style="opacity: 20%;">
                    <div class="logorotateinner">
                        <img src="<?= base_url() ?>assets/images/Without.png" />
                    </div>
                </div>
                <div class="subheding" data-aos="fade-down" data-aos-duration="1000">Updates</div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 announcement-leftmain">
                        <div class="announcement-left" data-aos="fade-left" data-aos-duration="1500">
                            <ul>
                                <?php
                                if (!empty($announcement)) {
                                    foreach ($announcement as $index => $item) {
                                        ?>
                                        <li>
                                            <a href="javascript:;" data-fancybox data-type="iframe"
                                                data-src="<?= base_url() . $item['path'] ?>">
                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                <span>Yours Announcement 1 <span class="newtag">New</span> </span>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                    <!-- <div class="image-column col-lg-6 col-md-6">
                        <div class="inner-column">
                            <div class="image-one" data-aos="fade-down" data-aos-duration="1000">
                                <img src="./images/qu-1.jpg" />
                            </div>
                        </div>
                    </div>-->

                    <div class="image-column col-lg-6 col-md-6">
                        <div class="inner-column">
                            <div class="slider" data-aos="fade-down" data-aos-duration="1000">
                                <div class="slide">
                                    <img src="<?= base_url() . $update_img['img_path'] ?>" alt="Slide 1">
                                </div>
                                <div class="slide">
                                    <img src="<?= base_url() . $update_img['img_path'] ?>" alt="Slide 1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="allnews" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="0">
                        <a href="#" class="allbtnview"><span>View All</span></a>
                    </div> -->
                </div>
            </div>
    </section>
    <!--announcement-->

    <!--achievement-->
    <section class="achievement">
        <div class="subheding" data-aos="fade-up" data-aos-duration="1500">Infrastructure</div>
        <div class="auto-container">
            <div class="toppers">

                <?php

                if (!empty($infrastructure)) {
                    foreach ($infrastructure as $index => $item) {
                        ?>
                        <div class="toppersbox" data-aos="fade-left" data-aos-duration="1600">
                            <div class="toppesrimgbox">
                                <img src="<?= base_url() . $item['img_path'] ?>" />
                            </div>
                            <div class="studentname"><?= $item['title'] ?></div>
                        </div>
                        <?php
                    }
                }

                ?>
            </div>
            <a href="#" class="arrowtopagetopper"></a>
            <!-- <div class="allnews" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="0">
                <a href="#" class="allbtnview"><span>VIEW ALL</span></a>
            </div> -->
        </div>
    </section>
    <!--achievement-->


    <!--Appreciation-->
    <section class="appreciationmain">
        <div class="auto-container">
            <div class="subheding" data-aos="fade-up" data-aos-duration="1000">Damiano Appreciation</div>
            <div class="appreciation owl-carousel owl-theme" data-aos="fade-up" data-aos-duration="2000">

                <?php
                    if(!empty($appreciation)){
                        foreach($appreciation as $index => $item){
                            ?>
                            <div class="item">
                                <div class="lower-content">
                                    <div class="border-layer"></div>
                                    <a href="<?= base_url() . $item['img_path'] ?>" data-fancybox="">
                                        <img src="<?= base_url() . $item['img_path'] ?>" alt="#" />
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                    }
                ?>
               
                <!-- <div class="item">
                    <div class="lower-content">
                        <div class="border-layer"></div>
                        <a href="<?= base_url() ?>assets/images/awards/certificate2.jpg" data-fancybox="">
                            <img src="<?= base_url() ?>assets/images/awards/certificate2.jpg" alt="#" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="lower-content">
                        <div class="border-layer"></div>
                        <a href="<?= base_url() ?>assets/images/awards/certificate3.jpg" data-fancybox="">
                            <img src="<?= base_url() ?>assets/images/awards/certificate3.jpg" alt="#" />
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="lower-content">
                        <div class="border-layer"></div>
                        <a href="<?= base_url() ?>assets/images/awards/certificate4.jpg" data-fancybox="">
                            <img src="<?= base_url() ?>assets/images/awards/certificate4.jpg" alt="#" />
                        </a>
                    </div>
                </div> -->

            </div>
            <!-- <div class="allnews" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="0">
                <a href="" class="allbtnview"><span>View All</span></a>
            </div> -->
        </div>
    </section>
    <!--Appreciation-->

    <!--contactus-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet"
        media="screen">
    <link rel="stylesheet" href=https://cdn.wizemen.net/plugins/datepicker/datepicker3.css />
    <style>
        .intl-tel-input {
            display: block !important;
        }

        .contactus-right .form-control {
            height: 42px;
            resize: none;
        }

        .datepicker table tr td.disabled,
        .datepicker table tr td.disabled:hover {
            color: #e4e4e4;
        }

        ul.gitmainclass {
            display: flex;
            flex-wrap: wrap;
        }

        .contactus-left ul li {
            font-size: 16px !important;
        }

        li.gitleftbox {
            width: 50% !important;
            padding-right: 5px;
        }

        li.gitrightbox {
            width: 50% !important;
            padding-left: 15px;
        }

        li.gitleftbox img,
        li.gitrightbox img {
            width: 17px !important;
            top: 3px !important;
        }

        @media screen and (max-width:1124px) {
            .contactus-main .contactus-left {
                padding: 40px 24px;
            }
        }

        @media screen and (max-width:991px) {
            .contactus-left ul li {
                font-size: 18px !important;
                width: 100%;
            }
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <section class="contactus" id="contactus">
        <div class="auto-container">
            <div class="row contactus-main">
                <div class="col-lg-6 contactus-left">
                    <div class="gettouch" data-aos="fade-up" data-aos-duration="2000">Connect with us</div>
                    <div class="gettouchtext" data-aos="fade-up" data-aos-duration="2200">We’d love to hear from you!
                    </div>
                    <ul class="gitmainclass" data-aos="fade-up" data-aos-duration="2000">
                        <li><a href="#" target="_blank"><img class="addressview"
                                    src="<?= base_url() ?>assets/images/location.png" alt="#">53, Dr. Meghnad Saha
                                Sarani,
                                Southern Avenue
                                <br>Kolkata-700 029, West Bengal, India.</a></li>
                        <li class="gitleftbox">
                            Admission Inquiry Number & Email<br />
                            <a href="#" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/739/739247.png"
                                    alt="#"> +91 33 4063 0070</a>
                            <a href="mailto:info@adamiano.com"><img src="<?= base_url() ?>assets/images/mail.png"
                                    alt="#">
                                info@adamiano.com</a>
                        </li>
                    </ul>
                    <div class="locationmap" data-aos="fade-up" data-aos-duration="2400">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14742.872579209226!2d88.3513139!3d22.5147558!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0271ceb65b520b%3A0x48b79fd4d955a45f!2sKRISHNA%20BHAVAN%2C%2053%2C%20SOUTHERN%20AVENUE!5e0!3m2!1sen!2sin!4v1714060179307!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 contactus-right">
                    <div class="gettouch" data-aos="fade-up" data-aos-duration="2000">Get In Touch</div>
                    <div class="gettouchtext" data-aos="fade-up" data-aos-duration="2200">Drop us your details for a quick response.</div>
                    <form class="form" data-aos="fade-up" data-aos-duration="2400"
                        action="<?= base_url('admin/pages/save_user_message') ?>" method="POST">
                        <div class="mb-3">
                            <label class="form-label">First Name*</label>
                            <div>
                                <input type="text" class="form-control" placeholder="" maxlength="100" id="txtstudentname" name="f_name">
                                <div class="icon">
                                    <img src="https://cdn-icons-png.flaticon.com/512/9187/9187475.png" alt="#" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Last Name*</label>
                            <div>
                                <input type="text" class="form-control" placeholder="" maxlength="100" id="txtparentname" name="l_name">
                                <div class="icon">
                                    <img src="https://cdn-icons-png.flaticon.com/512/547/547551.png" alt="#" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number*</label>
                            <div>
                                <input type="tel" class="form-control" maxlength="10" id="txtmobile" onkeypress="return isNumberKey(event)" name="mobile">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email*</label>
                            <div>
                                <input type="email" class="form-control" placeholder="" maxlength="100" id="txtemail" name="email">
                                <div class="icon">
                                    <img style="width:27px;"
                                        src="https://cdn-icons-png.flaticon.com/512/2549/2549872.png" alt="#" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your Inquiry*</label>
                            <div>
                                <input type="subject" class="form-control" placeholder="" maxlength="100" id="txtemail" style="height: 150px;" name="msg">
                                <div class="icon">
                                    <img style="width:27px;"
                                        src="https://cdn-icons-png.flaticon.com/512/9987/9987254.png" alt="#" />
                                </div>
                            </div>
                        </div>


                        <div class="mb-3 fullviewpart text-center">
                            <button type="submit" class="allbtnview" onclick="getintouchValidate(this);">
                                <span>Submit</span>
                            </button>
                        </div>

                        <div class="mb-3 fullviewpart d-none" id="div_message">
                            <!--append validation message-->
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
    <script>
        $(() => {
            var disabledDates = [];


            disabledDates.push("2024-04-25");




            disabledDates.push("2024-04-27");




            disabledDates.push("2024-04-28");




            disabledDates.push("2024-04-29");




            disabledDates.push("2024-04-30");




            disabledDates.push("2024-05-02");




            disabledDates.push("2024-05-04");




            disabledDates.push("2024-05-05");




            disabledDates.push("2024-05-06");




            disabledDates.push("2024-05-07");




            disabledDates.push("2024-05-09");




            disabledDates.push("2024-05-11");




            disabledDates.push("2024-05-12");




            disabledDates.push("2024-05-13");




            disabledDates.push("2024-05-14");




            disabledDates.push("2024-05-16");




            disabledDates.push("2024-05-18");




            disabledDates.push("2024-05-19");




            disabledDates.push("2024-05-20");




            disabledDates.push("2024-05-21");




            disabledDates.push("2024-05-23");




            disabledDates.push("2024-05-25");




            disabledDates.push("2024-05-26");




            disabledDates.push("2024-05-27");




            disabledDates.push("2024-05-28");




            disabledDates.push("2024-05-30");




            disabledDates.push("2024-06-01");




            disabledDates.push("2024-06-02");




            disabledDates.push("2024-06-03");




            disabledDates.push("2024-06-04");




            disabledDates.push("2024-06-06");




            disabledDates.push("2024-06-08");




            disabledDates.push("2024-06-09");




            disabledDates.push("2024-06-10");




            disabledDates.push("2024-06-11");




            disabledDates.push("2024-06-13");




            disabledDates.push("2024-06-15");




            disabledDates.push("2024-06-16");




            disabledDates.push("2024-06-17");




            disabledDates.push("2024-06-18");




            disabledDates.push("2024-06-20");




            disabledDates.push("2024-06-22");




            disabledDates.push("2024-06-23");




            disabledDates.push("2024-06-24");




            disabledDates.push("2024-06-25");




            disabledDates.push("2024-06-27");




            disabledDates.push("2024-06-29");




            disabledDates.push("2024-06-30");




            disabledDates.push("2024-07-01");




            disabledDates.push("2024-07-02");




            disabledDates.push("2024-07-04");




            disabledDates.push("2024-07-06");




            disabledDates.push("2024-07-07");




            disabledDates.push("2024-07-08");




            disabledDates.push("2024-07-09");




            disabledDates.push("2024-07-11");




            disabledDates.push("2024-07-13");




            disabledDates.push("2024-07-14");




            disabledDates.push("2024-07-15");




            disabledDates.push("2024-07-16");




            disabledDates.push("2024-07-18");




            disabledDates.push("2024-07-20");




            disabledDates.push("2024-07-21");




            disabledDates.push("2024-07-22");




            disabledDates.push("2024-07-23");




            disabledDates.push("2024-07-25");




            disabledDates.push("2024-07-27");




            disabledDates.push("2024-07-28");




            disabledDates.push("2024-07-29");




            disabledDates.push("2024-07-30");




            disabledDates.push("2024-08-01");




            disabledDates.push("2024-08-03");




            disabledDates.push("2024-08-04");




            disabledDates.push("2024-08-05");




            disabledDates.push("2024-08-06");




            disabledDates.push("2024-08-08");




            disabledDates.push("2024-08-10");




            disabledDates.push("2024-08-11");




            disabledDates.push("2024-08-12");




            disabledDates.push("2024-08-13");




            disabledDates.push("2024-08-15");




            disabledDates.push("2024-08-17");




            disabledDates.push("2024-08-18");




            disabledDates.push("2024-08-19");




            disabledDates.push("2024-08-20");




            disabledDates.push("2024-08-22");




            disabledDates.push("2024-08-24");




            disabledDates.push("2024-08-25");




            disabledDates.push("2024-08-26");




            disabledDates.push("2024-08-27");




            disabledDates.push("2024-08-29");




            disabledDates.push("2024-08-31");




            disabledDates.push("2024-09-01");




            disabledDates.push("2024-09-02");




            disabledDates.push("2024-09-03");




            disabledDates.push("2024-09-05");




            disabledDates.push("2024-09-07");




            disabledDates.push("2024-09-08");




            disabledDates.push("2024-09-09");




            disabledDates.push("2024-09-10");




            disabledDates.push("2024-09-12");




            disabledDates.push("2024-09-14");




            disabledDates.push("2024-09-15");




            disabledDates.push("2024-09-16");




            disabledDates.push("2024-09-17");




            disabledDates.push("2024-09-19");




            disabledDates.push("2024-09-21");




            disabledDates.push("2024-09-22");




            disabledDates.push("2024-09-23");




            disabledDates.push("2024-09-24");




            disabledDates.push("2024-09-26");




            disabledDates.push("2024-09-28");




            disabledDates.push("2024-09-29");




            disabledDates.push("2024-09-30");




            disabledDates.push("2024-10-01");




            disabledDates.push("2024-10-03");




            disabledDates.push("2024-10-05");




            disabledDates.push("2024-10-06");




            disabledDates.push("2024-10-07");




            disabledDates.push("2024-10-08");




            disabledDates.push("2024-10-10");




            disabledDates.push("2024-10-12");




            disabledDates.push("2024-10-13");




            disabledDates.push("2024-10-14");




            disabledDates.push("2024-10-15");




            disabledDates.push("2024-10-17");




            disabledDates.push("2024-10-19");




            disabledDates.push("2024-10-20");




            disabledDates.push("2024-10-21");




            disabledDates.push("2024-10-22");




            disabledDates.push("2024-10-24");




            disabledDates.push("2024-10-26");




            disabledDates.push("2024-10-27");




            disabledDates.push("2024-10-28");




            disabledDates.push("2024-10-29");




            disabledDates.push("2024-10-31");




            disabledDates.push("2024-11-02");




            disabledDates.push("2024-11-03");




            disabledDates.push("2024-11-04");




            disabledDates.push("2024-11-05");




            disabledDates.push("2024-11-07");




            disabledDates.push("2024-11-09");




            disabledDates.push("2024-11-10");




            disabledDates.push("2024-11-11");




            disabledDates.push("2024-11-12");




            disabledDates.push("2024-11-14");




            disabledDates.push("2024-11-16");




            disabledDates.push("2024-11-17");




            disabledDates.push("2024-11-18");




            disabledDates.push("2024-11-19");




            disabledDates.push("2024-11-21");




            disabledDates.push("2024-11-23");




            disabledDates.push("2024-11-24");




            disabledDates.push("2024-11-25");




            disabledDates.push("2024-11-26");




            disabledDates.push("2024-11-28");




            disabledDates.push("2024-11-30");




            disabledDates.push("2024-12-01");




            disabledDates.push("2024-12-02");




            disabledDates.push("2024-12-03");




            disabledDates.push("2024-12-05");




            disabledDates.push("2024-12-07");




            disabledDates.push("2024-12-08");




            disabledDates.push("2024-12-09");




            disabledDates.push("2024-12-10");




            disabledDates.push("2024-12-12");




            disabledDates.push("2024-12-14");




            disabledDates.push("2024-12-15");




            disabledDates.push("2024-12-16");




            disabledDates.push("2024-12-17");




            disabledDates.push("2024-12-19");




            disabledDates.push("2024-12-21");




            disabledDates.push("2024-12-22");




            disabledDates.push("2024-12-23");




            disabledDates.push("2024-12-24");




            disabledDates.push("2024-12-26");




            disabledDates.push("2024-12-28");




            disabledDates.push("2024-12-29");




            disabledDates.push("2024-12-30");




            disabledDates.push("2024-12-31");




            disabledDates.push("2025-01-02");




            disabledDates.push("2025-01-04");




            disabledDates.push("2025-01-05");




            disabledDates.push("2025-01-06");




            disabledDates.push("2025-01-07");




            disabledDates.push("2025-01-09");




            disabledDates.push("2025-01-11");




            disabledDates.push("2025-01-12");




            disabledDates.push("2025-01-13");




            disabledDates.push("2025-01-14");




            disabledDates.push("2025-01-16");




            disabledDates.push("2025-01-18");




            disabledDates.push("2025-01-19");




            disabledDates.push("2025-01-20");




            disabledDates.push("2025-01-21");




            disabledDates.push("2025-01-23");




            disabledDates.push("2025-01-25");




            disabledDates.push("2025-01-26");




            disabledDates.push("2025-01-27");




            disabledDates.push("2025-01-28");




            disabledDates.push("2025-01-30");




            disabledDates.push("2025-02-01");




            disabledDates.push("2025-02-02");




            disabledDates.push("2025-02-03");




            disabledDates.push("2025-02-04");




            disabledDates.push("2025-02-06");




            disabledDates.push("2025-02-08");




            disabledDates.push("2025-02-09");




            disabledDates.push("2025-02-10");




            disabledDates.push("2025-02-11");




            disabledDates.push("2025-02-13");




            disabledDates.push("2025-02-15");




            disabledDates.push("2025-02-16");




            disabledDates.push("2025-02-17");




            disabledDates.push("2025-02-18");




            disabledDates.push("2025-02-20");




            disabledDates.push("2025-02-22");




            disabledDates.push("2025-02-23");




            disabledDates.push("2025-02-24");




            disabledDates.push("2025-02-25");




            disabledDates.push("2025-02-27");




            disabledDates.push("2025-03-01");




            disabledDates.push("2025-03-02");




            disabledDates.push("2025-03-03");




            disabledDates.push("2025-03-04");




            disabledDates.push("2025-03-06");




            disabledDates.push("2025-03-08");




            disabledDates.push("2025-03-09");




            disabledDates.push("2025-03-10");




            disabledDates.push("2025-03-11");




            disabledDates.push("2025-03-13");




            disabledDates.push("2025-03-15");




            disabledDates.push("2025-03-16");




            disabledDates.push("2025-03-17");




            disabledDates.push("2025-03-18");




            disabledDates.push("2025-03-20");




            disabledDates.push("2025-03-22");




            disabledDates.push("2025-03-23");




            disabledDates.push("2025-03-24");




            disabledDates.push("2025-03-25");




            disabledDates.push("2025-03-27");




            disabledDates.push("2025-03-29");




            disabledDates.push("2025-03-30");




            disabledDates.push("2025-03-31");




            disabledDates.push("2025-04-01");




            disabledDates.push("2025-04-03");




            disabledDates.push("2025-04-05");




            disabledDates.push("2025-04-06");




            disabledDates.push("2025-04-07");




            disabledDates.push("2025-04-08");




            disabledDates.push("2025-04-10");




            disabledDates.push("2025-04-12");




            disabledDates.push("2025-04-13");




            disabledDates.push("2025-04-14");




            disabledDates.push("2025-04-15");




            disabledDates.push("2025-04-17");




            disabledDates.push("2025-04-19");




            disabledDates.push("2025-04-20");




            disabledDates.push("2025-04-21");




            disabledDates.push("2025-04-22");




            disabledDates.push("2025-04-24");



            $('.date_calender_custom').datepicker({
                startDate: new Date(),
                beforeShowDay: function (date) {
                    var dateString = date.getFullYear() + '-' + ('0' + (date.getMonth() + 1)).slice(-2) + '-' + ('0' + date.getDate()).slice(-2);
                    return disabledDates.indexOf(dateString) < 0;
                },
                format: 'dd/mm/yyyy',
                autoclose: true
            });

            $("#ddlschooltourrequired").val("No").trigger("change");
        });
    </script>

    <script>
        var telInput = $("#txtmobile,#txtwhatsapp"),
            errorMsg = $("#error-msg"),
            validMsg = $("#valid-msg");

        // initialise plugin
        telInput.intlTelInput({

            allowExtensions: true,
            formatOnDisplay: true,
            autoFormat: true,
            autoHideDialCode: true,
            autoPlaceholder: true,
            defaultCountry: "auto",
            ipinfoToken: "yolo",

            nationalMode: false,
            numberType: "MOBILE",
            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            //preferredCountries: ['sa', 'ae', 'qa', 'om', 'bh', 'kw', 'ma'],
            preventInvalidNumbers: true,
            separateDialCode: true,
            initialCountry: "in"


        });

        var reset = function () {
            telInput.removeClass("error");
            errorMsg.addClass("hide");
            validMsg.addClass("hide");
        };

        // on blur: validate
        telInput.blur(function () {
            reset();
            if ($.trim(telInput.val())) {
                if (telInput.intlTelInput("isValidNumber")) {
                    validMsg.removeClass("hide");
                } else {
                    telInput.addClass("error");
                    errorMsg.removeClass("hide");
                }
            }
        });

        // on keyup / change flag: reset
        telInput.on("keyup change", reset);
    </script>

    <script src="<?= base_url() ?>assets/js/getintouch.js?v=02122023"></script>

    <script>
        function formatDateInput(e) {
            var input = e.target;
            var value = input.value;
            var lastChar = value.slice(-1);

            if (e.inputType !== "deleteContentBackward") {
                if (value.length === 2 || value.length === 5) {
                    if (lastChar === '/') {
                        var parts = value.split('/');
                        if (parts[0].length === 1) {
                            parts[0] = '0' + parts[0];
                        }
                        if (parts[1] && parts[1].length === 1) {
                            parts[1] = '0' + parts[1];
                        }
                        input.value = parts.join('/');
                    }
                    if (lastChar !== '/') {
                        input.value += '/';
                    }
                }
                if (value.length > 10) {
                    input.value = value.slice(0, 10);
                }
            }
        }

        function changeschooltour(obj) {
            if ($(obj).val() == "Yes") {
                $("#txtscheduletour").removeAttr("disabled");
                $("#ddltimeslot").removeAttr("disabled");
            } else {
                $("#txtscheduletour").attr("disabled", "disabled");
                $("#ddltimeslot").attr("disabled", "disabled");
            }
            $('#txtscheduletour').datepicker('setDate', null);
            $("#ddltimeslot").val("");
        }

        function changeSOI(obj) {
            if ($(obj).val() == "Referral") {
                $("#divRefName").removeClass("d-none");
            } else {
                $("#divRefName").addClass("d-none");
            }
            $("#referringstudent").val("");
        }
    </script>


    <!--contactus-->
    <!--news-->
    <section class="stories">
        <div class="auto-container">
            <div class="subheding" data-aos="fade-up" data-aos-duration="2000">Latest News</div>
            <div class="row stories-main">
                <div class="col-lg-4 col-sm-4 stories-left">
                    <div class="schoolnews" data-aos="fade-right" data-aos-duration="2000">
                        <div class="lower-content">
                            <div class="newsname">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                            <div class="border-layer"></div>
                            <div class="newsinnertext">
                                <img src="<?= base_url() ?>assets/images/newspage/1.jpg" />
                                <div class="hovertext">
                                    <a href="#">
                                        <div class="newsmoreview">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-8 stories-right" data-aos="fade-left" data-aos-duration="2000">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-6 twonewsview">
                            <div class="schoolnews facebooknews">
                                <div class="lower-content">
                                    <div class="newsname">
                                        <i class="fa fa-newspaper-o"></i>
                                    </div>
                                    <div class="border-layer"></div>
                                    <div class="newsinnertext">
                                        <img src="<?= base_url() ?>assets/images/newspage/2.jpg" />
                                        <div class="hovertext">
                                            <a href="#">
                                                <div class="newsmoreview">
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="schoolnews instagramnews">
                                <div class="lower-content">
                                    <div class="newsname">
                                        <i class="fa fa-newspaper-o"></i>
                                    </div>
                                    <div class="border-layer"></div>
                                    <div class="newsinnertext">
                                        <img src="<?= base_url() ?>assets/images/newspage/3.jpg" />
                                        <div class="hovertext">
                                            <a href="#">
                                                <div class="newsmoreview">
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6 twonewsview">
                            <div class="schoolnews twitternews">
                                <div class="lower-content">
                                    <div class="newsname">
                                        <i class="fa fa-newspaper-o"></i>
                                    </div>
                                    <div class="border-layer"></div>
                                    <div class="newsinnertext">
                                        <img src="<?= base_url() ?>assets/images/newspage/4.jpg" />
                                        <div class="hovertext">
                                            <a href="#">
                                                <div class="newsmoreview">
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="schoolnews youtubenews">
                                <div class="lower-content">
                                    <div class="newsname">
                                        <i class="fa fa-newspaper-o"></i>
                                    </div>
                                    <div class="border-layer"></div>
                                    <div class="newsinnertext">
                                        <img src="<?= base_url() ?>assets/images/newspage/5.jpg" />
                                        <div class="hovertext">
                                            <a href="#">
                                                <div class="newsmoreview">
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="row stories-main">
        <div class="col-lg-4 col-sm-4 stories-left">
            <div class="schoolnews" data-aos="fade-right" data-aos-duration="2000">
                <div class="lower-content">
                    <div class="newsname">
                        <i class="fa fa-newspaper-o"></i>
                    </div>
                    <div class="border-layer"></div>
                    <div class="newsinnertext">
                        <img src="/images/small/pic1.webp" alt="#">
                        <div class="newsinnertextview">
                            <div class="sb-info">News</div>
                            <div class="sb-date">02/23</div>
                        </div>
                        <div class="hovertext">
                            <p>Shout out to Vyom of Grade 11! He started "The Yuva Foundation" - an initiative to provide sporting opportunities to children from underprivileged backgrounds. He is also holding a sports equipment drive at school - do</p>
                            <a href="/newsdetails">-->

            <!--<div class="newsmoreview">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-sm-8 stories-right" data-aos="fade-left" data-aos-duration="2000">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-6 twonewsview">
                    <div class="schoolnews facebooknews">
                        <div class="lower-content">
                            <div class="newsname">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                            <div class="border-layer"></div>
                            <div class="newsinnertext">
                                <img src="/images/post1.jpg" alt="#">
                                <div class="newsinnertextview">
                                    <div class="sb-info">News</div>
                                    <div class="sb-date">02/23</div>
                                </div>
                                <div class="hovertext">
                                    <p>Shout out to Vyom of Grade 11! He started "The Yuva Foundation" - an initiative to provide sporting opportunities to children from underprivileged backgrounds. He is also holding a sports equipment drive at school - do</p>
                                    <a href="/newsdetails">
                                        <div class="newsmoreview">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="schoolnews instagramnews">
                        <div class="lower-content">
                            <div class="newsname">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                            <div class="border-layer"></div>
                            <div class="newsinnertext">
                                <img src="/images/post2.jpg" alt="#">
                                <div class="newsinnertextview">
                                    <div class="sb-info">News</div>
                                    <div class="sb-date">02/23</div>
                                </div>
                                <div class="hovertext">
                                    <p>Shout out to Vyom of Grade 11! He started "The Yuva Foundation" - an initiative to provide sporting opportunities to children from underprivileged backgrounds. He is also holding a sports equipment drive at school - do</p>
                                    <a href="/newsdetails">
                                        <div class="newsmoreview">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-6 twonewsview">
                    <div class="schoolnews twitternews">
                        <div class="lower-content">
                            <div class="newsname">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                            <div class="border-layer"></div>
                            <div class="newsinnertext">
                                <img src="/images/pos3.jpg" alt="#">
                                <div class="newsinnertextview">
                                    <div class="sb-info">News</div>
                                    <div class="sb-date">02/23</div>
                                </div>
                                <div class="hovertext">
                                    <p>Shout out to Vyom of Grade 11! He started "The Yuva Foundation" - an initiative to provide sporting opportunities to children from underprivileged backgrounds. He is also holding a sports equipment drive at school - do</p>
                                    <a href="/newsdetails">
                                        <div class="newsmoreview">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="schoolnews youtubenews">
                        <div class="lower-content">
                            <div class="newsname">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                            <div class="border-layer"></div>
                            <div class="newsinnertext">
                                <img src="/images/post1.jpg" alt="#">
                                <div class="newsinnertextview">
                                    <div class="sb-info">News</div>
                                    <div class="sb-date">02/23</div>
                                </div>
                                <div class="hovertext">
                                    <p>Shout out to Vyom of Grade 11! He started "The Yuva Foundation" - an initiative to provide sporting opportunities to children from underprivileged backgrounds. He is also holding a sports equipment drive at school - do</p>
                                    <a href="/newsdetails">
                                        <div class="newsmoreview">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
            <div class="allnews" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="0">
                <a href="#" class="allbtnview"><span>All News</span></a>
            </div>
        </div>
    </section>

    <!--news-->
    <!--small popup-->

    <!--footer-->
    <footer>
        <div class="auto-container">
            <div class="row footer_top">
                <div class="col-lg-4 col-sm-12" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0">
                    <div class="footerlogo">
                        <a href="index.html"><img src="<?= base_url() ?>assets/images/logo.png" alt="#" /></a>
                    </div>
                    <p>Damiano was established in 1968 for manufacturing Pole Line Hardware's, Steel structures,
                        Insulator and Conductor accessories, Clamps and Connectors, ABC accessories, Fuse Cutouts and
                        Telecommunication OSP Hardware's.

                        The export performance dates back to 1972 and is continuing till date with exports spread out
                        across the globe touching more than 32 countries besides domestic acceptance.</p>
                    <div class="mobilecenter">
                        <a href="visionmission.html" class="allbtnview"><span>View More</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0">
                    <div class="quicklinks">
                        <div class="footerheading quicklinkview">Quick Links</div>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Updates</a></li>
                            <li><a href="#">Quality</a></li>
                            <li><a href="#">Infrastructure</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="connectus" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0">
                        <div class="footerheading">Connect with us</div>
                        <ul>

                            <li><a href="#" target="_blank"><img class="addressview"
                                        src="<?= base_url() ?>assets/images/location.png" alt="#">53, Dr. Meghnad Saha
                                    Sarani, Southern Avenue
                                    <br>Kolkata-700 029, West Bengal, India.</a></li>
                            <li>
                                Inquiry Number & Email<br />
                                <a href="#" target="_blank"><img
                                        src="https://cdn-icons-png.flaticon.com/512/739/739247.png" alt="#"> +91 33 4063
                                    0070</a>
                                <a href="mailto: info@adamiano.com"><img src="<?= base_url() ?>assets/images/mail.png"
                                        alt="#">
                                    info@adamiano.com</a>
                            </li>


                        </ul>
                        <div class="footerheading">Follow Us On</div>
                        <ul class="socialmedia">
                            <li class="facebook_color"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="linkedin_color"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li class="instagram_color"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="youtube_color"><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerbottom">
            <a href="#topview">
                <div class="arrowtoptobottom">
                    <img src="<?= base_url() ?>assets/images/navigation.png" alt="#" />
                </div>
            </a>
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6 col-sm-8">
                        <p>© 2024 Damiano. All Rights Reserved. | Developed by <a href="#" target="_blank">Quantum
                                Brize</a></p>
                    </div>
                    <div class="col-lg-6 col-sm-4">
                        <ul>
                            <li><a href="#">Sitemap</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-->

    <style>
        .overlay-main {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background: rgb(0 0 0 /50%);
            z-index: 9999999;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay-main-content {
            z-index: 999;
        }

        .close-button {
            text-align: right;
        }

        .close-button i {
            position: relative;
            top: 0;
            right: 0;
            color: var(--yellow);
            background: #fff;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            font-size: 15px;
            line-height: 1.5;
            text-align: center;
            border: 2px solid var(--yellow);
            cursor: pointer;
        }

        .img-and-content {
            background-color: #fff;
            border-radius: 70px;
            display: flex;
            justify-content: center;
            cursor: pointer;
            align-items: center;
            padding: 10px;
            box-shadow: 0px 0px 11px 0px #ccc;
            text-decoration: none !important;
        }

        .img-and-content img {
            width: 115px;
            margin-right: 12px;
            padding: 0;
            border-radius: 50%;
        }

        span.content__popup {
            width: 290px;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            margin-right: 10px;
        }

        .img-and-content .text-popup {
            font-size: 16px;
            font-family: 'Glory', sans-serif;
            text-align: center;
            margin-bottom: 0;
            margin-right: 10px;
            letter-spacing: 0px;
            font-style: normal;
            color: var(--textcolorblack);
            line-height: 22px;
        }

        .see_morew__btn {
            line-height: 1;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 2px 10px 3px 10px;
            font-weight: 600;
            text-shadow: 0 0 black;
            font-size: 14px;
            font-style: italic;
            width: auto;
            margin-top: 4px !important;
            margin: 0 auto;
            font-family: 'Glory', sans-serif;
            color: var(--textcolorblack);
            display: inline-block;
            white-space: nowrap;
            text-align: center;
            letter-spacing: 1px;
            transition: ease all 500ms;
        }

        span.see_morew__btn:hover {
            color: var(--green);
            transition: ease all 500ms;
        }

        .topheadingpopup {
            font-family: 'Glory', sans-serif;
            font-weight: 500;
            text-align: center;
            color: #333;
            font-size: 18px;
            line-height: 22px;
        }

        @media screen and (max-width:767px) {
            span.content__popup {
                width: 220px;
            }

            .topheadingpopup {
                font-size: 14px;
                line-height: 18px;
            }

            .img-and-content .text-popup {
                font-size: 13px;
                margin-right: 0px;
                line-height: 18px;
            }

            .see_morew__btn {
                font-size: 12px;
            }

            .img-and-content img {
                width: 98px;
            }
        }
    </style>




    <div class="overlay-main">
        <div class="overlay-main-content" data-aos="fade-down" data-aos-duration="2000">
            <div class="close-button" onclick="closePopup()">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
            <a href="#" target="_blank" class="img-and-content">
                <img src="<?= base_url() ?>assets/images/logo.png" alt="International School Gurgaon">
                <span class="content__popup">
                    <span class="topheadingpopup">Damiano</span>
                    <span class="text-popup">Your Update Message 1</span>
                    <span class="text-popup">Your Update Message 2</span>
                    <span class="text-popup">Your Update Message 3</span>

                    <span> <span class="see_morew__btn">Click here</span></span>
                </span>
            </a>
        </div>
    </div>
    <script>
        $(function () {
            $('.overlay-main-content').removeClass('display__none');
        });

        function closePopup() {
            $('.overlay-main').fadeOut(300);
        }
        $(document).ready(function () {
            $(".overlay-main").click(function () {
                $(this).css('display', 'none');
            });
        });
        $(document).keydown(function (e) {
            if (e.key === "Escape") {
                $(".overlay-main").css('display', 'none');
            }
        });

        new WOW().init()
    </script>
    <!--small popup-->
    <script>
        const expand = document.querySelector('.announcement');
        const makeClipPath = progress => {
            let size = Math.min(210 * progress, 100);
            let x = 50;
            let y = Math.min(100 + 0 * progress, 100);

            return `circle(${size}% at ${x}% ${y}%)`;
        };

        document.addEventListener('scroll', e => {
            const progress = window.scrollY / (document.body.clientHeight - window.innerHeight);
            const clipPath = makeClipPath(progress);

            expand.style.clipPath = clipPath;
            expand.style.opacity = Math.min(progress * 4, 1);
        });
    </script>
    <script>
        $(window).on('load', function () {
            let showFirst = true;
            if (showFirst) {
                $(".overlay-main").show();
                $(".applynowsticky").hide();
            }

            $(".overlay-main").click(function () {
                if (showFirst) {
                    $(".overlay-main").hide();
                    $(".applynowsticky").show();
                } else {
                    $(".overlay-main").show();
                    $(".applynowsticky").hide();
                }
                showFirst = !showFirst;
            });
        });
    </script>





    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js"></script>
    <script>
        $.fn.circleType = function (options) {

            var settings = {
                dir: 1,
                position: 'relative'
            };
            if (typeof ($.fn.lettering) !== 'function') {
                console.log('Lettering.js is required');
                return;
            }
            return this.each(function () {

                if (options) {
                    $.extend(settings, options);
                }
                var elem = this,
                    delta = (180 / Math.PI),
                    ch = parseInt($(elem).css('line-height'), 10),
                    fs = parseInt($(elem).css('font-size'), 10),
                    txt = elem.innerHTML.replace(/^\s+|\s+$/g, '').replace(/\s/g, '&nbsp;'),
                    letters,
                    center;

                elem.innerHTML = txt
                $(elem).lettering();

                elem.style.position = settings.position;

                letters = elem.getElementsByTagName('span');
                center = Math.floor(letters.length / 2)

                var layout = function () {
                    var tw = 0,
                        i,
                        offset = 0,
                        minRadius,
                        origin,
                        innerRadius,
                        l, style, r, transform;

                    for (i = 0; i < letters.length; i++) {
                        tw += letters[i].offsetWidth;
                    }
                    minRadius = (tw / Math.PI) / 2 + ch;

                    if (settings.fluid && !settings.fitText) {
                        settings.radius = Math.max(elem.offsetWidth / 2, minRadius);
                    } else if (!settings.radius) {
                        settings.radius = minRadius;
                    }

                    if (settings.dir === -1) {
                        origin = 'center ' + (-settings.radius + ch) / fs + 'em';
                    } else {
                        origin = 'center ' + settings.radius / fs + 'em';
                    }

                    innerRadius = settings.radius - ch;

                    for (i = 0; i < letters.length; i++) {
                        l = letters[i];
                        offset += l.offsetWidth / 2 / innerRadius * delta;
                        l.rot = offset;
                        offset += l.offsetWidth / 2 / innerRadius * delta;
                    }
                    for (i = 0; i < letters.length; i++) {
                        l = letters[i]
                        style = l.style
                        r = (-offset * settings.dir / 2) + l.rot * settings.dir
                        transform = 'rotate(' + r + 'deg)';

                        style.position = 'absolute';
                        style.left = '50%';
                        style.marginLeft = -(l.offsetWidth / 2) / fs + 'em';

                        style.webkitTransform = transform;
                        style.MozTransform = transform;
                        style.OTransform = transform;
                        style.msTransform = transform;
                        style.transform = transform;

                        style.webkitTransformOrigin = origin;
                        style.MozTransformOrigin = origin;
                        style.OTransformOrigin = origin;
                        style.msTransformOrigin = origin;
                        style.transformOrigin = origin;
                        if (settings.dir === -1) {
                            style.bottom = 0;
                        }
                    }

                    if (settings.fitText) {
                        if (typeof ($.fn.fitText) !== 'function') {
                            console.log('FitText.js is required when using the fitText option');
                        } else {
                            $(elem).fitText();
                            $(window).resize(function () {
                                updateHeight();
                            });
                        }
                    }
                    updateHeight();
                };

                var getBounds = function (elem) {
                    var docElem = document.documentElement,
                        box = elem.getBoundingClientRect();
                    return {
                        top: box.top + window.pageYOffset - docElem.clientTop,
                        left: box.left + window.pageXOffset - docElem.clientLeft,
                        height: box.height
                    };
                };

                var updateHeight = function () {
                    var mid = getBounds(letters[center]),
                        first = getBounds(letters[0]),
                        h;
                    if (mid.top < first.top) {
                        h = first.top - mid.top + first.height;
                    } else {
                        h = mid.top - first.top + first.height;
                    }
                    elem.style.height = h + 'px';
                }

                if (settings.fluid && !settings.fitText) {
                    $(window).resize(function () {
                        layout();
                    });
                }

                if (document.readyState !== "complete") {
                    elem.style.visibility = 'hidden';
                    $(window).on("load", function () {
                        elem.style.visibility = 'visible';
                        layout();
                    });
                } else {
                    layout();
                }
            });
        };
        $('#curved1').circleType({
            position: 'absolute',
            dir: 1,
            radius: 650
        });
        $('#curved2').circleType({
            position: 'absolute',
            dir: 1,
            radius: 650
        });

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }

        function ValidateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
    </script>


    <script type="text/javascript" src="<?= base_url() ?>assets/js/Carousel.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

    <script src="<?= base_url() ?>assets/js/fullcalendar/dist/index.global.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/aos.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>assets/js/coustom.js?v=3"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/common.js"></script>

    <script>
        $(document).ready(function () {
            $('.date_calender').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true
            });
        });

        function activateBookATour() {
            $("#ddlschooltourrequired").val("Yes").change();
            window.location.href = "#contactus";
        }

        function activateGetInTouch() {
            $("#ddlschooltourrequired").val("No").change();
            window.location.href = "#contactus";
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sliders = document.querySelectorAll('.slider');

            sliders.forEach(slider => {
                let slideIndex = 0;
                const slides = slider.querySelectorAll('.slide');

                function showSlide(index) {
                    if (index >= slides.length) {
                        slideIndex = 0;
                    } else if (index < 0) {
                        slideIndex = slides.length - 1;
                    } else {
                        slideIndex = index;
                    }
                    slides.forEach(slide => {
                        slide.style.display = "none";
                    });
                    slides[slideIndex].style.display = "block";
                }

                function changeSlide(n) {
                    showSlide(slideIndex += n);
                }

                showSlide(slideIndex);
            });
        });


    </script>

</body>

</html>