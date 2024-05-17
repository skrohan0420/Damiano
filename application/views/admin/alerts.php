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
                    <h5 class="m-0 font-weight-bold text-primary">Allerts</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-3 col-lg-3 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Add Allerts</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/pages/add_alert') ?>" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Message</label>
                                    <input type="text" class="form-control" name="message" value=""
                                        placeholder="Message" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" id="" value="Add">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">All Alerts</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-info" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Message</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($alerts)) {
                                            foreach ($alerts as $index => $item) {
                                                ?>
                                                <tr>
                                                    <td><?= $index + 1 ?></td>
                                                    <td>
                                                    <?= $item['message'] ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url('admin/pages/delete_alert?uid=') . $item['uid'] ?>"
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

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Action Buttons</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-12 col-lg-12 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Update Action Buttons</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/pages/add_alert') ?>" method="POST" class="row">          

                                <div class="form-group col-xl-6 col-lg-6">
                                    <label for="formGroupExampleInput">Button 1 Title</label>
                                    <input type="text" class="form-control" name="btn_title_1" value=""
                                        placeholder="Button 1 Title" required>
                                </div>
                                <div class="form-group col-xl-6 col-lg-6">
                                    <label for="formGroupExampleInput">Button 1 link</label>
                                    <input type="text" class="form-control" name="btn_link_1" value=""
                                        placeholder="Button 1 link" required>
                                </div>
                                <div class="form-group col-xl-6 col-lg-6">
                                    <label for="formGroupExampleInput">Button 2 Title</label>
                                    <input type="text" class="form-control" name="btn_title_2" value=""
                                        placeholder="Button 2 Title" required>
                                </div>
                                <div class="form-group col-xl-6 col-lg-6">
                                    <label for="formGroupExampleInput">Button 2 link</label>
                                    <input type="text" class="form-control" name="btn_link_2" value=""
                                        placeholder="Button 2 link" required>
                                </div>
                                <div class="form-group col-xl-6 col-lg-6">
                                    <input type="submit" class="btn btn-success" id="" value="update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>