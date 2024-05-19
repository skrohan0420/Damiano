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
                    <h5 class="m-0 font-weight-bold text-primary">Quality</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-12 col-lg-12 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Add Quality</h6>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data"
                                action="<?= base_url('admin/pages/add_quality') ?>" method="POST" class="row">
                                <div class="form-group col-xl-6 col-lg-6">
                                    <label for="">Quality Title</label>
                                    <input type="text" class="form-control" placeholder="Quality Title"
                                        name="quality_text" required />
                                </div>
                                <div class="form-group col-xl-6 col-lg-6">
                                    <label for="">Quality Details</label>
                                    <textarea class="form-control" placeholder="Quality Details"
                                        name="quality_details" required></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class='form-group'>
                                        <div id="qualityImagePreview"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" placeholder="Banner image"
                                            name="quality_img[]" required />
                                    </div>
                                </div>
                                <div class="form-group col-xl-12 col-lg-12">
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
                    <h5 class="m-0 font-weight-bold text-primary">Quality banners</h5>
                    <form action="<?= base_url("admin/pages/add_new_quality_banner") ?>" method="POST"
                        enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="file" class="form-control-file" placeholder="Quality image"
                                name="quality_banner_img[]" required />
                        </div>
                        <div id="qualityBannerImagePreview"></div>
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
                                if (!empty($quality_banner)) {
                                    foreach ($quality_banner as $index => $item) {
                                        ?>
                                        <tr>
                                            <td>
                                                <img src="<?= base_url() . $item['img_path'] ?>" alt="" height="100px">
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin/pages/delete_quality_banner_img?uid=') . $item['uid'] ?> "
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

            <div class="col-xl-12 col-lg-12 card shadow">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">All Quality</h6>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered table-info" id="dataTable_quality" width="100%"
                        cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Image</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($quality)) {
                                foreach ($quality as $index => $item) {
                                    ?>
                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td><?= $item['title'] ?></td>
                                        <td><?= $item['description'] ?></td>
                                        <td>
                                            <img src="<?= base_url() . $item['img_path'] ?>" alt="" height="100px">
                                        </td>
                                        <td>
                                            <a href="<?= base_url('admin/pages/view_quality?uid=') . $item['uid'] ?>"
                                                class="btn btn-info m-2">
                                                VIEW
                                            </a>
                                            <a href="<?= base_url('admin/pages/delete_quality?uid=') . $item['uid'] ?>"
                                                class="btn btn-danger m-2">
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