<?php

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
                    <div class="col-xl-12 col-lg-12 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Add Allerts</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/pages/update_alert') ?>" method="POST" class="row" enctype="multipart/form-data">
                                <div class="form-group col-6">
                                    <label for="formGroupExampleInput">Title</label>
                                    <input type="text" class="form-control" name="title" value="<?=$alerts['title']?>" placeholder="Title"
                                        required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="formGroupExampleInput">Message</label>
                                    <input type="text" class="form-control" name="message" value="<?=$alerts['message']?>"
                                        placeholder="Message" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="formGroupExampleInput">Link</label>
                                    <input type="text" class="form-control" name="link" value="<?=$alerts['link']?>" placeholder="Link"
                                        required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="formGroupExampleInput">Allerts image</label>
                                    <div id="allertsImagePreview">
                                        <img src="<?=base_url().$alerts['img_path']?>" height="100"/>
                                    </div>
                                    <input type="file" class="form-control-file" placeholder="Allerts image"
                                        name="allerts_img[]" />
                                </div>
                                <div class="form-group col-6">
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
                                    <input type="text" class="form-control" name="btn_title_1"
                                        value="<?= $action_buttons['btn_title_1'] ?>" placeholder="Button 1 Title"
                                        required>
                                </div>
                                <div class="form-group col-xl-6 col-lg-6">
                                    <label for="formGroupExampleInput">Button 1 link</label>
                                    <input type="text" class="form-control" name="btn_link_1"
                                        value="<?= $action_buttons['btn_link_1'] ?>" placeholder="Button 1 link"
                                        required>
                                </div>
                                <div class="form-group col-xl-6 col-lg-6">
                                    <label for="formGroupExampleInput">Button 2 Title</label>
                                    <input type="text" class="form-control" name="btn_title_2"
                                        value="<?= $action_buttons['btn_title_2'] ?>" placeholder="Button 2 Title"
                                        required>
                                </div>
                                <div class="form-group col-xl-6 col-lg-6">
                                    <label for="formGroupExampleInput">Button 2 link</label>
                                    <input type="text" class="form-control" name="btn_link_2"
                                        value="<?= $action_buttons['btn_link_2'] ?>" placeholder="Button 2 link"
                                        required>
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