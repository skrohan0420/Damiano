<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Events</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-white">Events</li>
            </ol>
    </div>
</div>
<!-- Header End -->

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
                        <img src="<?= base_url() . $event['img'] ?>" class="img-fluid w-100" alt="Image" style="height: 250px;object-fit: cover;">
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