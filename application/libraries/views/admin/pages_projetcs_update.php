<?php
    $p_id = $this->input->get('p_id');
;
?>

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
                    <h5 class="m-0 font-weight-bold text-primary">Edit Project</h5>
                    <a class="btn btn-danger"  data-toggle="modal" data-target="#deletModel">DELETE</a>
                </div>
                <!-- Card Body -->
                <form class="card-body row" enctype="multipart/form-data"
                    action="<?= base_url('admin/Pages/update_project?p_id=').$p_id ?>" method="POST">
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Project Title</label>
                            <input type="text" class="form-control" name="project_title" value="<?= $project['project_title']?>"
                                placeholder="Project Title" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Project Cover Detils</label>
                            <textarea rows="6" cols="30" class="form-control" value=""
                                placeholder="Project Cover Detils" required name="project_cover_details"><?= $project['project_cover_details']?></textarea>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div>
                            <label for="formGroupExampleInput2">Cover image</label>
                        </div>
                        <div class='form-group' id="projectPrev">
                            <img src="<?= base_url($project['project_img'])?>"
                                height="200" id="project_img" />
                        </div>
                        <div class="form-group">
                            <input multiple type="file" class="form-control-file" placeholder="projects image"
                                name="project_img[]"  />
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div>
                            <label for="formGroupExampleInput2">Project Logo</label>
                        </div>
                        <div class='form-group' id="projectLogo">
                            <img src="<?= base_url($project['project_logo'])?>"
                                height="200" id="project_logo" />
                        </div>
                        <div class="form-group">
                            <input multiple type="file" class="form-control-file" placeholder="projects logo" name="project_logo[]"  />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Project Page Title</label>
                            <input type="text" class="form-control" name="project_page_title" value="<?= $project['project_page_title']?>" placeholder="Project Title" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Project Video Url</label>
                            <input type="text" class="form-control" name="project_page_video" value="<?= $project['project_page_video']?>" placeholder="Project Video Url" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Project Page Description</label>
                            <textarea rows="5" cols="30" class="form-control" value=""
                                placeholder="Project Page description" required
                                name="project_page_description"><?= $project['project_page_description']?></textarea>
                        </div>
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
                                <label class="btn btn-info" for="image_uploads">Choose multiple images to upload</label>
                                <input type="file" id="image_uploads" name="galary_img[]" multiple hidden/>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="preview">
                                <?php
                                    if(!empty($galary_img)){
                                        echo "<ol>";
                                        foreach ($galary_img as $key => $value) {
                                            echo "<li>";
                                            echo "<img src='".base_url($value['image'])."' class='gal_img' />";
                                            echo "</li>";
                                        }
                                        echo "</ol>";
                                    }
                                ?>
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
    <div class="modal fade" id="deletModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Do You Really Want To Delete This Project</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?= base_url('admin/Pages/delete_project?p_id=').$p_id ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->