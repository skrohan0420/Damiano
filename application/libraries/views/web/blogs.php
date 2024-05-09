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

<!-- Blog Start -->
<div class="container-fluid blog py-5 mb-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Latest News</h5>
            <h1 class="mb-0">Help today because tomorrow you may be the one who needs more helping!
            </h1>
        </div>
        <div class="row g-4">
        <?php foreach($blogs as $blog){?>
            <div class="col-lg-6 col-xl-3">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?php echo base_url($blog['img']) ?>" class="img-fluid  image_size" alt="Square Image" style="height: 200px; object-fit: cover; "> 
                        <div class="blog-info">
                            <span><i class="fa fa-clock"></i> <?php $dateTime = new DateTime($blog['created_at']); $dateOnly = $dateTime->format('d-m-Y'); echo $dateOnly?></span>
                        </div>
                        <div class="search-icon">
                            <a href="img/blog-1.jpg" data-lightbox="Blog-1" class="my-auto"><i
                                    class="fas fa-search-plus btn-primary text-white p-3"></i></a>
                        </div>
                    </div>
                    <div class="text-dark border p-4 ">
                        <h4 class="mb-4"><?php echo $blog['title']?></h4>
                        <p class="mb-4" style="overflow: hidden; text-overflow: ellipsis; white-space: normal; line-height: 1.2em; /* Adjust line height as needed */ max-height: 3.6em;"><?php echo $blog['description']?></p>
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="<?php echo base_url('web/Activity/blog?blog_id='.$blog['uid'])?>">Read More</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<!-- Blog End -->