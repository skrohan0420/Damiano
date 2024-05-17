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
                    <h5 class="m-0 font-weight-bold text-primary">Infrastructure</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-4 col-lg-4 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Add Infrastructure</h6>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data"
                                action="<?= base_url('admin/pages/add_infrastructure') ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="infrastructure Title"
                                        name="home_infrastructure_text" required />
                                </div>
                                <div class='form-group'>
                                    <div id="infrastructureImagePreview"></div>
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" placeholder="Banner image"
                                        name="home_infrastructure_img[]" required />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" id="" value="Upload">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">All Infrastructure</h6>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table table-bordered table-info" id="dataTable_infrastructure" width="100%"
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
                                    if (!empty($infrastructure)) {
                                        foreach ($infrastructure as $index => $item) {
                                            ?>
                                            <tr>
                                                <td><?= $index + 1 ?></td>
                                                <td><?= $item['title'] ?></td>
                                                <td>
                                                    <img src="<?= base_url() . $item['img_path'] ?>" alt="" height="100px">
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('admin/pages/delete_infrastructure?uid=') . $item['uid'] ?>"
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