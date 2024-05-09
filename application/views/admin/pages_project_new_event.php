<?php
$p_id = $this->input->get('p_id');
//echo "<pre>";
//print_r($galary_img);
//die();
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
                    <h5 class="m-0 font-weight-bold text-primary">Add New Event</h5>
                </div>
                <!-- Card Body -->
                <form class="card-body row" enctype="multipart/form-data"
                    action="<?= base_url('admin/Pages/add_project_event?p_id=') . $p_id ?>" method="POST">

                    <div class="form-group col-12">
                        <label for="formGroupExampleInput2">Event Title</label>
                        <input type="text" class="form-control" name="event_title"
                            value="" placeholder="Event name" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="formGroupExampleInput">Event Detils</label>
                        <textarea rows="6" cols="30" class="form-control" value="" placeholder="Event Detils" required
                            name="event_details"></textarea>
                    </div>
                    <div class="form-group col-12">
                        <div>
                            <label for="formGroupExampleInput2">Project Logo</label>
                        </div>
                        <div class='form-group' id="projectLogo">
                            <img src="https://usercontent.one/wp/www.vocaleurope.eu/wp-content/uploads/no-image.jpg?media=1642546813" height="200" id="event_img" />
                        </div>
                        <div class="form-group">
                            <input multiple type="file" class="form-control-file" placeholder="projects logo"
                                name="event_img[]" required/>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->