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
                                    <input type="submit" class="btn btn-success" id="" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php

                    if (!empty($about_img)) {
                        foreach ($about_img as $index => $item) {
                            ?>
                            <div class="col-xl-4 col-lg-4 card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Banner Image <?= $index + 1 ?></h6>
                                </div>
                                <div class="card-body">
                                    <form enctype="multipart/form-data"
                                        action="<?= base_url('admin/pages/upload_home_about_img?uid=' . $item['uid']) ?>"
                                        method="POST">
                                        <div class='form-group'>

                                            <div id="<?= $item['uid'] ?>">
                                                <img src="<?= base_url() . $item['img_path'] ?>" height="100" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control-file" placeholder="Banner image"
                                                id="inp_<?= $item['uid'] ?>" name="home_about_img[]" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" hidden value="" name="uid">
                                            <input type="submit" class="btn btn-success" id="" value="Update">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>

         



        


        </div>


    </div>
    <!-- /.container-fluid -->