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
                    <h5 class="m-0 font-weight-bold text-primary">Announcement</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-6 col-lg-6 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Updates Banner Image</h6>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data"
                                action="<?= base_url('admin/pages/upload_home_update_img') ?>" method="POST">
                                <div class='form-group'>
                                    <div id="updateImagePreview">
                                        <img src="<?= base_url() . $update_img['img_path'] ?>" height="100" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" placeholder="Updates Banner image"
                                        name="home_update_img[]" />
                                </div>
                                <div class="form-group">
                                    <input type="text" hidden value="" name="uid">
                                    <input type="submit" class="btn btn-success" id="" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Uploade Announcement File</h6>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data"
                                action="<?= base_url('admin/pages/upload_announcement_file') ?>" method="POST">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" placeholder="Updates Banner image"
                                        name="home_announcement_file[]" />
                                </div>
                                <div class="form-group">
                                    <input type="text" hidden value="" name="uid">
                                    <input type="submit" class="btn btn-success" id="" value="Upload">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 card shadow mt-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h5 class="m-0 font-weight-bold text-primary">All announcement</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-info" id="dataTable_announcement" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Date</th>
                                            <th>View</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($announcement)) {
                                            foreach ($announcement as $index => $item) {
                                                ?>
                                                <tr>
                                                    <td><?= $index + 1 ?></td>
                                                    <td><?= $item['created_at'] ?></td>
                                                    <td>
                                                        <a href="<?= base_url($item['path']) ?>" class="btn btn-info"
                                                            target="_blank">
                                                            VIEW
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url('admin/pages/delete_announcement_file?uid=') . $item['uid'] ?>"
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
    </div>