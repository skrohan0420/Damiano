<?php

// getting quotes of the pages and sorting them accordingly
$top_quote = [];
$bottom_quote = [];
if (!empty($quotes)) {
    foreach ($quotes as $quote) {
        if ($quote['type'] == 'home' && $quote['position'] == 'top') {
            $top_quote = $quote;
        } else if ($quote['type'] == 'home' && $quote['position'] == 'bottom') {
            $bottom_quote = $quote;
        }
    }
}

$home_videos = [];
if (!empty($videos)) {
    foreach ($videos as $video) {
        if ($video['page'] == 'home') {
            $home_videos = $video;
        }
    }
}

$mission = [];
$vision = [];
if (!empty($mission_vision)) {
    foreach ($mission_vision as $val) {
        if ($val['type'] == 'mission') {
            $mission = $val;
        } else if ($val['type'] == 'vision') {
            $vision = $val;
        }
    }
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Home</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <!-- Quotes -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Quotes</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-6 col-lg-6 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Header Quote</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/Pages/update_quotes') ?>" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Quote</label>
                                    <textarea type="text" class="form-control" value="" placeholder="Quote" required
                                        name="quote"><?= $top_quote['quote'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Quote Author</label>
                                    <input type="text" class="form-control" name="quote_author"
                                        value="<?= $top_quote['quote_by'] ?>" placeholder="Quote Author" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" hidden value="<?= $top_quote['uid'] ?>" name="uid">
                                    <input type="submit" class="btn btn-success" id="" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Footer Quote</h6>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="<?= base_url('admin/Pages/update_quotes') ?>"
                                method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Quote</label>
                                    <textarea type="text" class="form-control" id="" value="" placeholder="Quote"
                                        name="quote" required><?= $bottom_quote['quote'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Quote Author</label>
                                    <input type="text" class="form-control" id="" name="quote_author"
                                        value="<?= $bottom_quote['quote_by'] ?>" placeholder="Quote Author" required />
                                </div>
                                <div class='form-group' id="imagePreview">
                                    <div>
                                        <label for="formGroupExampleInput2">Quote image</label>
                                    </div>
                                    <img src="<?= base_url($bottom_quote['quote_img']) ?>" height="100"
                                        id="quote_img" />
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" placeholder="Quote image"
                                        name="quote_img[]" />
                                </div>
                                <div class="form-group">
                                    <input type="text" hidden value="<?= $bottom_quote['uid'] ?>" name="uid">
                                    <input type="submit" class="btn btn-success" id="" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Audio and Video -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Audio and Video</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-6 col-lg-6 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Video</h6>
                        </div>
                        <div class="card-body">

                            <form action="<?= base_url('admin/Pages/update_video') ?>" method="POST">
                                <iframe id="ytplayer" type="text/html" height="200" src="<?= $home_videos['path'] ?>"
                                    frameborder="0" allow=" encrypted-media;" allowfullscreen></iframe>

                                <div class="form-group">
                                    <label for="formGroupExampleInput2">video url</label>
                                    <input type="text" class="form-control" name="url"
                                        value="<?= $home_videos['path'] ?>" placeholder="video url" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" hidden value="<?= $home_videos['uid'] ?>" name="uid">
                                    <input type="submit" class="btn btn-success" id="" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 card shadow">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Audio</h6>
                        </div>
                        <div class="card-body">

                            <form action="<?= base_url('admin/Pages/update_video') ?>" method="POST">
                                <iframe id="ytplayer" type="text/html" height="200" src="<?= $home_videos['path'] ?>"
                                    frameborder="0" allow="encrypted-media;" allowfullscreen></iframe>

                                <div class="form-group">
                                    <label for="formGroupExampleInput2">video url</label>
                                    <input type="text" class="form-control" name="url"
                                        value="<?= $home_videos['path'] ?>" placeholder="video url" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" hidden value="<?= $home_videos['uid'] ?>" name="uid">
                                    <input type="submit" class="btn btn-success" id="" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">About</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="col-xl-12 col-lg-12">
                        <form enctype="multipart/form-data" action="<?= base_url('admin/Pages/update_about') ?>"
                            method="POST">
                            <div class="row card shadow">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h5 class="m-0 font-weight-bold text-primary">About</h5>
                                </div>
                                <div class="card-body row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">About Title</label>
                                            <input type="text" class="form-control" name="about_title"
                                                value="<?= $about[0]['about_title'] ?>" placeholder="About Title"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">About</label>
                                            <textarea rows="6" cols="30" class="form-control" value=""
                                                placeholder="About" required
                                                name="about"><?= $about[0]['about'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class='form-group' id="aboutPrev">
                                            <div>
                                                <label for="formGroupExampleInput2">About image</label>
                                            </div>
                                            <img src="<?= base_url($about[0]['about_img']) ?>" height="200"
                                                id="about_img" />
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control-file" placeholder="about image"
                                                name="about_img[]" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 card shadow">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h5 class="m-0 font-weight-bold text-primary">Mission</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Mission Title</label>
                                            <input type="text" class="form-control" name="mission_title"
                                                value="<?= $mission['title'] ?>" placeholder="Mission Title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Mission</label>
                                            <textarea rows="6" cols="30" type="text" class="form-control"
                                                placeholder="Mission" required
                                                name="mission"><?= $mission['description'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 card shadow">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h5 class="m-0 font-weight-bold text-primary">Vision</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Vision Title</label>
                                            <input type="text" class="form-control" name="vision_title"
                                                value="<?= $vision['title'] ?>" placeholder="Vision Title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Vision</label>
                                            <textarea rows="6" cols="30" type="text" class="form-control"
                                                placeholder="Vision" required
                                                name="vision"><?= $vision['description'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group">
                                    <input type="text" hidden name="about_id" value="<?= $about[0]['uid'] ?>">
                                    <input type="text" hidden name="mission_id" value="<?= $mission['uid'] ?>">
                                    <input type="text" hidden name="vision_id" value="<?= $vision['uid'] ?>">
                                    <input type="submit" class="btn btn-success" id="" value="Update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Services</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row card shadow mb-2">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h5 class="m-0 font-weight-bold text-primary">Add Service</h5>
                        </div>
                        <form class="card-body row" enctype="multipart/form-data"
                            action="<?= base_url('admin/Pages/add_work') ?>" method="POST">
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Service Title</label>
                                    <input type="text" class="form-control" name="work_title"
                                        placeholder="Service Title" required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Description</label>
                                    <textarea rows="6" cols="30" class="form-control" placeholder="Description" required
                                        name="description"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class='form-group' id="aboutWork">
                                    <div>
                                        <label for="formGroupExampleInput2">Service Image</label>
                                    </div>
                                    <img src="https://usercontent.one/wp/www.vocaleurope.eu/wp-content/uploads/no-image.jpg?media=1642546813"
                                        height="200" id="about_img" />
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" placeholder="work image"
                                        name="work_img[]" required />
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Submit" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row card shadow">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h5 class="m-0 font-weight-bold text-primary">All Services</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-info" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(!empty($services)){
                                                $i = 1;
                                                foreach($services as $service){
                                                    $row = '';
                                                    $row .= '<tr>';
                                                    $row .= '<td>'. $i++ . '</td>';
                                                    $row .= '<td>'. $service['title'] . '</td>';
                                                    $row .= '<td>'. $service['description'] . '</td>';
                                                    $row .= '<td><img src="'.base_url() . $service['img'] . '" height="100"></td>';
                                                    $row .= '<td>';
                                                    $row .= '<a href="'.base_url('admin/Pages/delete_service?uid='.$service['uid']).'" class="btn btn-danger text-light"><i class="fa fa-trash"></i></a>';
                                                    $row .= '</td>';
                                                    $row .= '</tr>';
                                                    echo $row;;
                                                }
                                            }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
<!-- /.container-fluid -->