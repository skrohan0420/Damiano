<!-- Begin Project Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Our Team</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <!-- Quotes -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Add New Member</h5>
                </div>
                <!-- Card Body -->
                <form class="card-body row" enctype="multipart/form-data"
                            action="<?= base_url('admin/Pages/add_new_our_team_member') ?>" method="POST">
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Member Type</label>
                                    <select class="form-control" name="member_type" id="member_type" require>
                                        <option value="board_of_trustees">Board of Trustees</option>
                                        <option value="trustees">Trustees</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Member Name</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Donor Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">About Member</label>
                                    <textarea rows="6" cols="30" class="form-control" placeholder="Write About The Donor..." required
                                        name="about_member"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class='form-group' id="aboutTeam">
                                    <div>
                                        <label for="formGroupExampleInput2">Member Image</label>
                                    </div>
                                    <img src="https://usercontent.one/wp/www.vocaleurope.eu/wp-content/uploads/no-image.jpg?media=1642546813"
                                        height="200" id="member_img" />
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" placeholder="member image"
                                        name="member_img[]" required />
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