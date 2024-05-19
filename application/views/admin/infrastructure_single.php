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
                    <div class="col-xl-12 col-lg-12 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Add Infrastructure</h6>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data"
                                action="<?= base_url('admin/pages/update_infrastructure') ?>" method="POST" class="row" enctype="multipart/form-data">
                                <div class="form-group col-xl-6 col-lg-6">
                                    <label for="">infrastructure Title</label>
                                    <input type="text" class="form-control" placeholder="infrastructure Title"
                                        name="title" required value="<?= $infrastructure['title'] ?>"/>
                                </div>
                                <div class="form-group col-xl-6 col-lg-6">
                                    <label for="">infrastructure Details</label>
                                    <textarea class="form-control" placeholder="infrastructure Details"
                                        name="details" required><?= $infrastructure['details'] ?></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12">

                                    <div class="form-group">
                                        <label for="">infrastructure Image</label>
                                        <div id="infrastructureImagePreview">
                                            <img src="<?=base_url().$infrastructure['img_path']?>" height="100"/>
                                        </div>
                                        <input type="text" name="uid" required value="<?= $infrastructure['uid'] ?>" hidden/>
                                        <input type="file" class="form-control-file" placeholder="Banner image"
                                            name="home_infrastructure_img[]"  />
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