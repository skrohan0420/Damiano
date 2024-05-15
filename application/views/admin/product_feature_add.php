

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-lg-12">

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Update Product</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-12 col-lg-12 ">
                        <form action="<?= base_url('admin/pages/add_product_feature') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Feature Title</label>
                                        <input type="text" class="form-control" name="title" value=""
                                            placeholder="Feature Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Feature Details</label>
                                        <textarea type="text" class="form-control" name="details" placeholder="Feature Details" required></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class='form-group'>
                                        <div>
                                            <label for="formGroupExampleInput2">Upload Feature image</label>
                                        </div>
                                        <div id="imagePreview">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="<?=$_GET['uid']?>" hidden name="product_id">
                                        <input type="file" class="form-control-file" placeholder="Features image"
                                            name="feature_img[]" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" id="" value="Update">
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>