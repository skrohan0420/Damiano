<!-- Begin Project Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Causes</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <!-- Quotes -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Add New Cause</h5>
                </div>
                <!-- Card Body -->
                <form class="card-body row" enctype="multipart/form-data"
                    action="<?= base_url('admin/Admin/add_new_cause') ?>" method="POST">
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Causes Title</label>
                            <input type="text" class="form-control" name="name" placeholder="Cause Name" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Cause Details</label>
                            <textarea rows="6" cols="30" class="form-control" placeholder="Cause Details" required name="details"></textarea>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Cause Goal</label>
                            <input type="number" class="form-control" name="goal" placeholder="Cause Goal" required>
                        </div>
                        <div class='form-group' id="aboutDonor">
                            <div>
                                <label for="formGroupExampleInput2">Cause Image</label>
                            </div>
                            <img src="https://usercontent.one/wp/www.vocaleurope.eu/wp-content/uploads/no-image.jpg?media=1642546813"
                                height="150" id="donor_img" />
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control-file" placeholder="work image" name="cause_img[]"
                                required />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Submit" />
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </div>
    <!-- /.container-fluid -->