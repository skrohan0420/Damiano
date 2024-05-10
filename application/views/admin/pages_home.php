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
                    <h5 class="m-0 font-weight-bold text-primary">Banners</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-6 col-lg-6 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Banners Text</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/Pages/update_quotes') ?>" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Heading</label>
                                   <input type="text" class="form-control" name="Heading" value=""
                                        placeholder="Heading" required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Second Heading</label>
                                    <input type="text" class="form-control" name="Heading_two" value=""
                                        placeholder="Second Heading" required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Corner text </label>
                                    <input type="text" class="form-control" name="corner_text" value=""
                                        placeholder="corner text " required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Second Corner text</label>
                                    <input type="text" class="form-control" name="corner_text_two" value=""
                                        placeholder="Second Corner text" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" id="" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Banner Image</h6>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="" method="POST">
                                <div class='form-group' id="imagePreview">
                                    <div>
                                        <label for="formGroupExampleInput2">Upload image</label>
                                    </div>
                                    <img src="" height="100" id="home_banner_img" />
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" placeholder="Banner image"
                                        name="home_banner_img[]" />
                                </div>
                                <div class="form-group">
                                    <input type="text" hidden value="" name="uid">
                                    <input type="submit" class="btn btn-success" id="" value="Upload">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">All Banners</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-info" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>


    </div>


</div>
<!-- /.container-fluid -->