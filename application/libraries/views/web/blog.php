
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Blog</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-white">Blog</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid about  py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="card mb-3">
                <img src="<?php echo base_url($blog['img']) ?>" style="height:80%">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $blog['title']?></h3>
                    <p class="card-text" style="text-align: justify; margin: 40px 0px 40px 0px;"><?php echo $blog['description']?></p>
                    <span><i class="fa fa-clock"></i> <?php $dateTime = new DateTime($blog['created_at']); $dateOnly = $dateTime->format('d-m-Y'); echo $dateOnly?></span>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- About End -->
