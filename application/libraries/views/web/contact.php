<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Contact Us</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                            <iframe 
                                class="w-100" 
                                style="height: 412px; margin-bottom: -6px;" 
                                src="https://www.google.com/maps"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->