<div class="container-fluid">
    <style>
        .img_bx_con{
            width: 100%;
            display: flex;
            flex-direction: row;
            gap: 10px; 
            flex-wrap: wrap;
        }
        .img_bx{
            width: fit-content;
            display: flex;
            flex-direction: column;
        }
        .img_bx img{
            height: 200px;
        }
    </style>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <!-- Quotes -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Edit Gallery</h5>

                </div>
                <!-- Card Body -->
                <form class="card-body row" enctype="multipart/form-data"
                    action="<?= base_url('admin/Admin/gallery_img_add') ?>" method="POST">

                    <div class="col-xl-12 col-lg-12 p-2" style="border: 1px solid lightgray">
                        <div class="col-xl-12 col-lg-12">
                            <div class="form-group">
                                <h3 align="center">Galary Images</h3>
                            </div>
                            <div class="form-group img_bx_con">

                                <?php
                                if (!empty($gallery_img)) {
                                    foreach ($gallery_img as $key => $val) {
                                        echo "<div class='img_bx'>";
                                        echo "<img src='".base_url($val["images"])."' />";
                                        echo "<a align='center' class='p-2 btn-danger btn_dl' href='".base_url('admin/Admin/delete_gal_img?gid=').$val['uid']."'>";
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
                                <input type="file" id="image_uploads" name="galary_img[]" hidden />
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
                    <a class="btn btn-danger"
                        href="<?= base_url('admin/Pages/delete_project?p_id=') . $p_id ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->