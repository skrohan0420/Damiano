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
?>
<style>

.container2 {
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    overflow: hidden;
    margin: 5% auto; /* Center horizontally, 5% margin on top and bottom */
    padding: 20px;
    background-color: #f0f0f0;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 80%; /* Optional: Limit the width of the container */
    text-align: center; /* Center text inside the container */
}

.buttons {
    display: flex;
    flex-direction: row; /* Buttons will be displayed in a row */
    justify-content: center;
    margin-top: 20px; /* Space between buttons and container */
}

button {
    padding: 10px 20px;
    background-color: #76c04e;
    border-radius: 25px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
    height: 50px;
    color: white;
    font-size: 12px;
    font-weight: bold;
    margin: 0 5px; /* Space between buttons */
}

button:hover {
    background-color: #64a742;
}

.icon {
    padding: 10px;
    background-color: #76c04e;
    border-radius: 50%;
    color: white;
}




</style>
<style>
        .bg-breadcrumb {
        position: relative;
        background-image: url('https://shapath.org.in/assets/img/team6.jpg');
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
        <h3 class="text-white display-3 mb-4">Join Us</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
                <li class="breadcrumb-item active text-white">Join Us</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<div class="container2">
    <button>Volunteer Registration</button>
    <span class="icon">⚫</span>
    <button>Internship Registration</button>
</div>


<div class="text-center mx-auto pb-5" style="max-width: 800px;">
    <h1 class="mb-0">Help today because tomorrow you may be the one who needs more helping!
    </h1>
</div>

<!-- Donation Start -->
<div class="container-fluid donation py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
        </div>
        <div class="event-carousel owl-carousel">
            <?php foreach($volunteers as $volunteer){?>
            <div class="event-item">
                <div class="donation-item">
                    <img src="<?php echo base_url($volunteer['img'])?>" class="img-fluid w-100" alt="Image" style="height: 400px; object-fit: cover;">
                    <div class="donation-content d-flex flex-column">
                        <h5 class="text-uppercase text-primary" ><?php echo $volunteer['name']?></h5>
                        <p class="text-white mb-4"><?php echo $volunteer['volunteer_about']?></p>
                        <div class="donation-btn d-flex align-items-center justify-content-start"></div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<!-- Donation End -->
<!-- Image with Quote Start -->
<div class="quote-div">
    <div class="quote-2">
        <p><span>"</span>
            <?php echo $bottom_quote['quote'] ?><span>"</span>
        </p>
        <p class="author-2">-
            <?php echo $bottom_quote['quote_by'] ?>
        </p>
    </div>
    <div class="authimage">
        <img src="<?php echo base_url() . $bottom_quote['quote_img'] ?>" alt="">
    </div>
</div>