<!-- Footer Start -->
<div class="container-fluid footer bg-dark text-body py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="mb-4 text-white">About us</h4>
                    <p class="mb-4">We are a catalyst for sustainable impact in the area of nutrition, education,
                        and skill building amongst the underprivileged considering their family as a unit and
                        inclusions at the core.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Oucik Links</h4>
                    <a href="home"><i class="fas fa-angle-right me-2"></i> Home</a>
                    <a href="our-team"><i class="fas fa-angle-right me-2"></i> Our Team</a>
                    <a href="faq"><i class="fas fa-angle-right me-2"></i> F.A.Q</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Contact Details</h4>
                    <a href="tel:+919062009959"><i class="fas fa-angle-right me-2"></i> +91 9062009959</a>
                    <a href="mailto:info@shapath.org.in"><i class="fas fa-angle-right me-2"></i> info@shapath.org.in</a>
                    <a href="https://maps.app.goo.gl/cqFBxwDGwR9mssng7"><i class="fas fa-angle-right me-2"></i> 122 South Ghosh para, Sonarpur, Kolkata
                        -700150</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="mb-4 text-white">Newsletter</h4>
                    <form action="<?= base_url('admin/Pages/add_news_letter') ?>" method="POST">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" aria-label="Enter email" aria-describedby="Enter email" required>
                            <div class="input-group-append">
                                <button id="news_letter" class="btn btn btn-success" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-4 text-center text-md-start mb-md-0">
                <span class="text-body2"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Shapath</a>
                    , All right reserved. Developed By <a class="border-bottom" target="_blank"
                        href="https://quantumbrize.com/">Quantum Brize</a></span>
            </div>
            <div class="col-md-4 text-center">
                <div class="d-flex align-items-center justify-content-center">
                    <a target="_blank" href="https://www.facebook.com/people/Shapath-NGO/61555132809953/" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCGbECOHlItTYKzAIKitJaDg" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-youtube"></i></a>
                    <a target="_blank" href="https://www.instagram.com/shapath_ngo/" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-4 text-center text-md-end text-body">

            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    var base_url = <?php base_url()?>
     $("#news_letter").click(function() {
      var email = $("#email").val()
         
        alert(email);
       
        $.ajax({
            url: base_url+'news_letter',
            type: 'GET',
            data: email, 
            success: function(response) {
                $("#email").val("")
            },
        });
    });
</script> -->