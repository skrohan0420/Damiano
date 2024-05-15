<?php
//echo "<pre>";
//print_r($product);
//exit();
?>

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
                        <form action="<?= base_url('admin/pages/update_product') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Product Name</label>
                                        <input type="text" class="form-control" name="product_name" value="<?=$product['name']?>"
                                            placeholder="Product Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Product Details</label>
                                        <textarea type="text" class="form-control" name="product_details" placeholder="Product Details" required><?=$product['details']?></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3">
                                    <div class='form-group'>
                                        <div>
                                            <label for="formGroupExampleInput2">Upload image</label>
                                        </div>
                                        <div id="imagePreview">
                                            <img src="<?= base_url(). $product['img_path'] ?>" height="100"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="product_uid"hidden  value="<?=$product['uid']?>" required>
                                        <input type="file" class="form-control-file" placeholder="product image"
                                            name="product_img[]" />
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3">
                                    <div class='form-group'>
                                        <div>
                                            <label for="formGroupExampleInput2">Upload Banner Image</label>
                                        </div>
                                        <div id="productBannerImagePreview">
                                            <img src="<?= base_url(). $product['banner_img_path'] ?>" height="100"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" placeholder="product image"
                                            name="product_banner_img[]" />
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


            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Banners</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-12 col-lg-12 ">
                        <form action="<?= base_url('admin/pages/update_product') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Product Name</label>
                                        <input type="text" class="form-control" name="product_name" value="<?=$product['name']?>"
                                            placeholder="Product Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Product Details</label>
                                        <textarea type="text" class="form-control" name="product_details" placeholder="Product Details" required><?=$product['details']?></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class='form-group'>
                                        <div>
                                            <label for="formGroupExampleInput2">Upload image</label>
                                        </div>
                                        <div id="imagePreview">
                                            <img src="<?= base_url(). $product['img_path'] ?>" height="100"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="product_uid"hidden  value="<?=$product['uid']?>" required>
                                        <input type="file" class="form-control-file" placeholder="product image"
                                            name="product_img[]" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" id="" value="Save">
                            </div>
                        </form>
                    </div>

                </div>


                
            </div>


        </div>



    </div>
</div>