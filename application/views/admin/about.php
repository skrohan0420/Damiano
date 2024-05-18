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
                    <h5 class="m-0 font-weight-bold text-primary">About</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-12 col-lg-12 card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">About</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/pages/update_about_text') ?>" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">About text </label>
                                    <textarea type="text" class="form-control" name="about_text"
                                        required><?= $about_text['about_text'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Vision text </label>
                                    <textarea type="text" class="form-control" name="vision_text"
                                        required><?= $about_text['vision_text'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Mission text </label>
                                    <textarea type="text" class="form-control" name="mission_text"
                                        required><?= $about_text['mission_text'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Products text </label>
                                    <textarea type="text" class="form-control" name="products_text"
                                        required><?= $about_text['products_text'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Facilities text </label>
                                    <textarea type="text" class="form-control" name="facilities_text"
                                        required><?= $about_text['facilities_text'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Global Presence text </label>
                                    <textarea type="text" class="form-control" name="global_presence_text"
                                        required><?= $about_text['global_presence_text'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" id="" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>


            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">About banners</h5>
                    <form action="<?= base_url("admin/pages/add_new_about_banner") ?>" method="POST"
                        enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="file" class="form-control-file" placeholder="about image"
                                name="about_banner_img[]" required />
                        </div>
                        <div id="productBannerImagePreview"></div>
                        <input type="submit" class="btn btn-success" id="" value="Add Banner img" />
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-info" id="dataTableBanner" width="100%"
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($about_banner)) {
                                    foreach ($about_banner as $index => $item) {
                                        ?>
                                        <tr>
                                            <td>
                                                <img src="<?= base_url() . $item['img_path'] ?>" alt="" height="100px">
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin/pages/delete_about_banner_img?uid=') . $item['uid']?> "
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
    <!-- /.container-fluid -->