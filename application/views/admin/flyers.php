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
                    <h5 class="m-0 font-weight-bold text-primary">Add New Flyers</h5>
                    <form action="<?= base_url("admin/pages/add_new_flyer") ?>" method="POST"
                        enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="file" class="form-control-file" placeholder="flyer image"
                                name="flyer_img[]" required />
                        </div>
                        <div id="flyerImagePreview"></div>
                        <input type="submit" class="btn btn-success" id="" value="Add flyer img" />
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-info" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($flyers)) {
                                    foreach ($flyers as $index => $item) {
                                        ?>
                                        <tr>
                                            <td>
                                                <img src="<?= base_url() . $item['img_path'] ?>" alt="" height="100px">
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin/pages/delete_flyer_img?uid=') . $item['uid'] ?> "
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