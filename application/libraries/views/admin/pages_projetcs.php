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
                    <h5 class="m-0 font-weight-bold text-primary">Projects</h5>
                    <a class="btn btn-success" href="<?= base_url('admin/pages/projects/add') ?>">Add Project <b
                            style="font-size: 20px;">+</b></a>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="table-responsive">
                        <table class="table table-bordered table-info" id="project_table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Project Logo</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($projects)) {
                                    $i = 1;
                                    foreach ($projects as $project) {
                                        $row = '';
                                        $row .= '<tr>';
                                        $row .= '<td>' . $i++ . '</td>';
                                        $row .= '<td>' . $project['project_title'] . '</td>';
                                        $row .= '<td>' . $project['project_cover_details'] . '</td>';
                                        $row .= '<td><img src="' . base_url() . $project['project_logo'] . '" height="100"></td>';
                                        $row .= '<td>';
                                        $row .= '<a href="'.base_url('admin/pages/projects/edit?p_id=').$project['uid'] .'" class="btn btn-info text-light">View & Edit</a>';
                                        $row .= '</td>';
                                        $row .= '<td>';
                                        $row .= '<a href="'.base_url('admin/pages/delete_project/edit?p_id=').$project['uid'] .'" class="btn btn-danger text-light">Delete</a>';
                                        $row .= '</td>';
                                        $row .= '</tr>';
                                        echo $row;
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
<!-- /.container-fluid -->