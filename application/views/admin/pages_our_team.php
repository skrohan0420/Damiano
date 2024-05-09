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
                    <h5 class="m-0 font-weight-bold text-primary">Our Team</h5>
                    <a class="btn btn-success" href="<?= base_url('admin/pages/our/team/add') ?>">Add Members <b
                            style="font-size: 20px;">+</b></a>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="table-responsive">
                        <table class="table table-bordered table-info" id="project_table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>About Our Team</th>
                                    <th>Image</th>
                                    <th>Type</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (!empty($our_team)) {
                                        $i = 1;
                                        foreach ($our_team as $members) {
                                            $row = '';
                                            $row .= '<tr>';
                                            $row .= '<td>' . $i++ . '</td>';
                                            $row .= '<td>' . $members['name'] . '</td>';
                                            $row .= '<td>' . $members['about_member'] . '</td>';
                                            $row .= '<td><img src="' . base_url($members['img'] ). '" height="100"></td>';
                                            $row .= '<td>' . $members['type'] . '</td>';
                                            $row .= '<td>';
                                            $row .= '<a href="'.base_url('admin/Pages/delete_our_team_member?our_team_member_id=').$members['uid'] .'" class="btn btn-danger text-light">Delete</a>';
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