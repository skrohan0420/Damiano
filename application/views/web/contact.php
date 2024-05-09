<style>
        .bg-breadcrumb {
        position: relative;
        background-image: url('https://shapath.org.in/assets/img/team1.jpg');
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
        <h3 class="text-white display-3 mb-4">Contact Us</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
                <li class="breadcrumb-item active text-white">Contact</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="contact p-5">
            <div class="row g-4">
                <div class="col-xl-5">
                    <h1 class="mb-4">Get in touch</h1>
                    <form action="<?=base_url('web/Activity/save_user_msg')?>" method="POST">
                        <div class="row gx-4 gy-3">
                            <div class="col-xl-6">
                                <input type="text" class="form-control bg-white border-0 py-3 px-4" name="name" required
                                    placeholder="Your Full Name">
                            </div>
                            <div class="col-xl-6">
                                <input type="email" class="form-control bg-white border-0 py-3 px-4" name="email" required
                                    placeholder="Your Email">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" class="form-control bg-white border-0 py-3 px-4" name="phone" required
                                    placeholder="Your Phone">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" class="form-control bg-white border-0 py-3 px-4" name="subject" required
                                    placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0 py-3 px-4" rows="7" cols="10" name="message" required
                                    placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn-hover-bg btn btn-primary w-100 py-3 px-5" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-7">
                    <div>
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="bg-white p-4">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                                    <h4>Address</h4>
                                    <p class="mb-0">122 South Ghosh para, Sonarpur, Kolkata -700150</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-white p-4">
                                    <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                                    <h4>Mail Us</h4>
                                    <p class="mb-0"> info@shapath.org</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-white p-4">
                                    <i class="fa fa-phone-alt fa-2x text-primary mb-2"></i>
                                    <h4>Telephone</h4>
                                    <p class="mb-0"> +91 9062009959</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.676502791338!2d88.4311099!3d22.4411986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0273ea3d81d30d%3A0x54dde1059fc6cf95!2sShapath(NGO)!5e0!3m2!1sen!2sin!4v1708183134281!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->