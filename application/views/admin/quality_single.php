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
                    <h5 class="m-0 font-weight-bold text-primary">quality</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-12 col-lg-12 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Update quality</h6>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data"
                                action="<?= base_url('admin/pages/update_quality') ?>" method="POST" class="row" enctype="multipart/form-data">
                                <div class="form-group col-xl-6 col-lg-6">
                                    <label for="">quality Title</label>
                                    <input type="text" class="form-control" placeholder="quality Title"
                                        name="title" required value="<?= $quality['title'] ?>"/>
                                </div>
                                <div class="form-group col-xl-6 col-lg-6">
                                    <label for="">quality Details</label>
                                    <textarea class="form-control" placeholder="quality Details"
                                        name="details" required><?= $quality['description'] ?></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12">

                                    <div class="form-group">
                                        <label for="">quality Image</label>
                                        <div id="qualityImagePreview">
                                            <img src="<?=base_url().$quality['img_path']?>" height="100"/>
                                        </div>
                                        <input type="text" name="uid" required value="<?= $quality['uid'] ?>" hidden/>
                                        <input type="file" class="form-control-file" placeholder="Banner image" name="quality_img[]"  />
                                    </div>
                                </div>
                                <div class="form-group col-xl-12 col-lg-12">
                                    <input type="submit" class="btn btn-success" id="" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>