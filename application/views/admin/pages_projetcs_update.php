<?php
$p_id = $this->input->get('p_id');
//echo "<pre>";
//print_r($events);
//die();
?>

<!-- Begin Project Content -->
<div class="container-fluid">
    <style>
        .img_bx_con {
            width: 100%;
            display: flex;
            flex-direction: row;
            gap: 10px;
            flex-wrap: wrap;
        }

        .img_bx {
            width: fit-content;
            display: flex;
            flex-direction: column;
        }

        .img_bx img {
            height: 200px;
        }
    </style>
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
                    action="<?= base_url('admin/Pages/update_project?p_id=') . $p_id ?>" method="POST">

                    <div class="form-group col-12">
                        <label for="formGroupExampleInput2">Project name</label>
                        <input type="text" class="form-control" name="project_title"
                            value="<?= $project['project_title'] ?>" placeholder="Project name" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="formGroupExampleInput">Project Detils</label>
                        <textarea rows="6" cols="30" class="form-control" value="" placeholder="Project Detils" required
                            name="project_cover_details"><?= $project['project_cover_details'] ?></textarea>
                    </div>
                    <div class="form-group col-12">
                        <div>
                            <label for="formGroupExampleInput2">Project Logo</label>
                        </div>
                        <div class='form-group' id="projectLogo">
                            <img src="<?= base_url($project['project_logo']) ?>" height="200" id="project_logo" />
                        </div>
                        <div class="form-group">
                            <input multiple type="file" class="form-control-file" placeholder="projects logo"
                                name="project_logo[]" />
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <div>
                            <label for="formGroupExampleInput2">Cover image</label>
                        </div>
                        <div class='form-group' id="projectPrev">
                            <img src="<?= base_url($project['project_img']) ?>" height="200" id="project_img" />
                        </div>
                        <div class="form-group">
                            <input multiple type="file" class="form-control-file" placeholder="projects image"
                                name="project_img[]" />
                        </div>
                    </div>


                    <div class="form-group col-12">
                        <label for="formGroupExampleInput">Project Video Url</label>
                        <input type="text" class="form-control" name="project_page_video"
                            value="<?= $project['project_page_video'] ?>" placeholder="Project Video Url" required>
                    </div>


                    <div class="form-group col-12">
                        <label for="formGroupExampleInput">Quote</label>
                        <textarea type="text" class="form-control" id="" value="" placeholder="Quote"
                            name="quote" required><?= $quote['quote'] ?></textarea>
                    </div>
                    <div class="form-group col-12">
                        <label for="formGroupExampleInput2">Quote Author</label>
                        <input type="text" class="form-control" id="" name="quote_author"
                            value="<?= $quote['quote_by'] ?>" placeholder="Quote Author" required />
                    </div>
                    <div class='form-group col-12' id="imagePreview">
                        <div>
                            <label for="formGroupExampleInput2">Quote image</label>
                        </div>
                        <img src="<?= base_url($quote['quote_img']) ?>" height="100"
                            id="quote_img" />
                    </div>
                    <div class="form-group col-12">
                        <input type="file" class="form-control-file" placeholder="Quote image"
                            name="quote_img[]" />
                    </div>









                    <div class="col-xl-12 col-lg-12 p-2" style="border: 1px solid lightgray">
                        <div class="col-xl-12 col-lg-12">
                            <div class="form-group">
                                <h3 align="center">Galary Images</h3>
                            </div>
                            <div class="form-group img_bx_con">

                                <?php
                                if (!empty($galary_img)) {
                                    foreach ($galary_img as $key => $val) {
                                        echo "<div class='img_bx'>";
                                        echo "<img src='" . base_url($val["image"]) . "' />";
                                        echo "<a align='center' class='p-2 btn-danger btn_dl' href='" . base_url('admin/Admin/delete_project_gal_img?gid=' . $val['uid'] . '&pid=' . $p_id) . "'>";
                                        echo "<i class='fas fa-trash'></i>";
                                        echo "</a>";
                                        echo "</div>";
                                    }
                                }
                                ?>

                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12"
                            style="display: flex;align-items: center;justify-content: center;">
                            <div class="form-group">
                                <label class="btn btn-info" for="image_uploads">Choose New Image to upload</label>
                                <input type="file" id="image_uploads" name="project_galary_img[]" hidden />
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="preview" align="center"></div>
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

            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">All Project Events</h5>
                    <a href="<?= base_url('admin/Pages/new_project_event?p_id=') . $p_id ?>" class="btn btn-primary">
                        Add New Event </a>
                </div>
                <div class="card-body">
                    <table class="table table-info" border="1">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($events)) {
                                foreach ($events as $key => $val) {
                                    ?>
                                    <tr>
                                        <td><?= $val['title']?></td>
                                        <td><?= $val['details']?></td>
                                        <td>
                                            <img src="<?= base_url().$val['img']?>" alt="" height="100px">
                                        </td>
                                        <td>
                                            <a 
                                                class="btn btn-danger" 
                                                href="<?=base_url('admin/Pages/delete_project_event?e_id='.$val['uid'].'&p_id='.$p_id)?>">
                                                DELETE
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->