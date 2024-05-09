<!-- Begin Project Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Projects</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <!-- Quotes -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Add New Project</h5>
                </div>
                <!-- Card Body -->
                <form class="card-body row" enctype="multipart/form-data"
                    action="<?= base_url('admin/Pages/add_new_project') ?>" method="POST">

                    <div class="form-group col-12">
                        <label for="formGroupExampleInput2">Project name</label>
                        <input type="text" class="form-control" name="project_title" value="" placeholder="Project name"
                            required>
                    </div>
                    <div class="form-group col-12">
                        <label for="formGroupExampleInput">Project Detils</label>
                        <textarea rows="6" cols="30" class="form-control" value="" placeholder="Project  Detils"
                            required name="project_cover_details"></textarea>
                    </div>
                    <div class="form-group col-12">
                        <div>
                            <label for="formGroupExampleInput2">Project Logo</label>
                        </div>
                        <div class='form-group' id="projectLogo">
                            <img src="https://usercontent.one/wp/www.vocaleurope.eu/wp-content/uploads/no-image.jpg?media=1642546813"
                                height="200" id="project_logo" />
                        </div>
                        <div class="form-group">
                            <input multiple type="file" class="form-control-file" placeholder="projects logo"
                                name="project_logo[]" required />
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <div>
                            <label for="formGroupExampleInput2">Cover image</label>
                        </div>
                        <div class='form-group' id="projectPrev">
                            <img src="https://usercontent.one/wp/www.vocaleurope.eu/wp-content/uploads/no-image.jpg?media=1642546813"
                                height="200" id="project_img" />
                        </div>
                        <div class="form-group">
                            <input multiple type="file" class="form-control-file" placeholder="projects image"
                                name="project_img[]" required />
                        </div>
                    </div>

                    
                    <div class="form-group col-12">
                        <label for="formGroupExampleInput">Project Video Url</label>
                        <input type="text" class="form-control" name="project_page_video" value=""
                            placeholder="Project Video Url" required>
                    </div>



                    <div class="col-xl-12 col-lg-12 p-2" style="border: 1px solid lightgray">
                        <div class="col-xl-12 col-lg-12">
                            <div class="form-group">
                                <h3 align="center">Project Galary Images</h3>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12"
                            style="display: flex;align-items: center;justify-content: center;">
                            <div class="form-group">
                                <label class="btn btn-info" for="image_uploads">Choose image to upload</label>
                                <input type="file" id="image_uploads" name="galary_img[]" multiple hidden required />
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="preview">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 mt-4"
                        style="display: flex;align-items: center;justify-content: center;">
                        <div class="form-group">
                            <button class="btn btn-success" style="width: 200px;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </div>
    <!-- /.container-fluid -->