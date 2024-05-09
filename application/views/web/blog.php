<style>
        .bg-breadcrumb {
        position: relative;
        background-image: url('https://shapath.org.in/assets/img/team7.jpg');
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
        <h3 class="text-white display-3 mb-4">Blog</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
                <li class="breadcrumb-item active text-white">Blog</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid about  py-5">
    <div class="container py-5">
        <div class="row g-5 blog_card">
            <div class="card mb-3">
                <img src="<?php echo base_url($blog['img']) ?>" style="height:80%">
                <div class="card-body text-center" style="display: flex; flex-direction: column; justify-content: center;">
                    <h3 class="card-title"><?php echo $blog['title']?></h3>
                    <p class="card-text" style="text-align: justify; margin: 40px 0px 40px 0px;"><?php echo $blog['description']?></p><br>
                    <img src="<?php echo base_url($blog['img2']) ?>" style="height:80%"> <br>
                    <p class="card-text" style="text-align: justify; margin: 40px 0px 40px 0px;"><?php echo $blog['description2']?></p>
                    <span><i class="fa fa-clock"></i> <?php $dateTime = new DateTime($blog['created_at']); $dateOnly = $dateTime->format('d-m-Y'); echo $dateOnly?></span>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- About End -->
