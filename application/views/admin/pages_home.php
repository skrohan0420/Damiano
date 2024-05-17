<?php
//echo "<pre>";
//print_r($infrastructure);
//die()
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Home</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-lg-12">

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Banners</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-6 col-lg-6 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Banners Text</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/pages/update_banner_text') ?>" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Heading</label>
                                    <input type="text" class="form-control" name="heading"
                                        value="<?= $banner_text['heading'] ?>" placeholder="Heading" required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Second Heading</label>
                                    <input type="text" class="form-control" name="heading_two"
                                        value="<?= $banner_text['heading_two'] ?>" placeholder="Second Heading"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Corner text </label>
                                    <input type="text" class="form-control" name="corner_text"
                                        value="<?= $banner_text['corner_text'] ?>" placeholder="corner text " required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Second Corner text</label>
                                    <input type="text" class="form-control" name="corner_text_two"
                                        value="<?= $banner_text['corner_text_two'] ?>" placeholder="Second Corner text"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" id="" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Banner Image</h6>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data"
                                action="<?= base_url('admin/pages/upload_home_banner_img') ?>" method="POST">
                                <div class='form-group'>
                                    <div>
                                        <label for="formGroupExampleInput2">Upload image</label>
                                    </div>
                                    <div id="imagePreview"></div>
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" placeholder="Banner image"
                                        name="home_banner_img[]" />
                                </div>
                                <div class="form-group">
                                    <input type="text" hidden value="" name="uid">
                                    <input type="submit" class="btn btn-success" id="" value="Upload">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">All Banners</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-info" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($banner_images)) {
                                    foreach ($banner_images as $index => $item) {
                                        ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td>
                                                <img src="<?= base_url() . $item['img_path'] ?>" alt="" height="100px">
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin/pages/delete_banner_img?uid=') . $item['uid'] ?>"
                                                    class="btn btn-danger">
                                                    DELETE
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

          

          



        

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Appreciation</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-4 col-lg-4 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Add Appreciation</h6>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="<?= base_url('admin/pages/add_appreciation') ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Appreciation Title" name="home_appreciation_text" required/>
                                </div>
                                <div class='form-group'>
                                    <div id="appreciationImagePreview"></div>
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" placeholder="Banner image" name="home_appreciation_img[]" required/>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" id="" value="Upload">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">All Appreciation</h6>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table table-bordered table-info" id="dataTable_appreciation" width="100%"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($appreciation)) {
                                        foreach ($appreciation as $index => $item) {
                                            ?>
                                            <tr>
                                                <td><?= $index + 1 ?></td>
                                                <td><?= $item['title'] ?></td>
                                                <td>
                                                    <img src="<?= base_url() . $item['img_path'] ?>" alt="" height="100px">
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('admin/pages/delete_appreciation?uid=') . $item['uid'] ?>"
                                                        class="btn btn-danger">
                                                        DELETE
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



        </div>


    </div>
    <!-- /.container-fluid -->