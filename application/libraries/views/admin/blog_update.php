<!-- Begin Project Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Blog</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <!-- Quotes -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Add New Blog</h5>
                </div>
                <!-- Card Body -->
                <form class="card-body row" enctype="multipart/form-data"
                            action="<?= base_url('admin/Pages/update_blog?blog_id='.$blog['uid']) ?>" method="POST">
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Blog Title</label>
                                    <input type="text" class="form-control" name="title"
                                        value="<?php echo $blog['title']?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Description</label>
                                    <textarea rows="6" cols="30" class="form-control" placeholder="Write About Description..." required
                                        name="description"><?php echo $blog['description']?></textarea>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class='form-group' id="aboutBlog">
                                    <div>
                                        <label for="formGroupExampleInput2">Image</label>
                                    </div>
                                    <img src="<?php echo base_url($blog['img'])?>"
                                        height="200" id="blog_img" />
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" placeholder="blog image"
                                        name="blog_img[]" />
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Submit" />
                                </div>
                            </div>
                        </form>
            </div>

        </div>


    </div>
    <!-- /.container-fluid -->