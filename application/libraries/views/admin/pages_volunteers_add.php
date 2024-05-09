<!-- Begin Project Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Volunteers</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <!-- Quotes -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Add New Volunteers</h5>
                </div>
                <!-- Card Body -->
                <form class="card-body row" enctype="multipart/form-data"
                            action="<?= base_url('admin/Pages/add_new_volunteer') ?>" method="POST">
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Volunteer Name</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Volunteer Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">About Volenteer</label>
                                    <textarea rows="6" cols="30" class="form-control" placeholder="Write About The Volunteer..." required
                                        name="volunteer_about"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class='form-group' id="aboutVolentrees">
                                    <div>
                                        <label for="formGroupExampleInput2">Volenteer Image</label>
                                    </div>
                                    <img src="https://usercontent.one/wp/www.vocaleurope.eu/wp-content/uploads/no-image.jpg?media=1642546813"
                                        height="200" id="volunteers_img" />
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" placeholder="volenteer image"
                                        name="volunteers_img[]" required />
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