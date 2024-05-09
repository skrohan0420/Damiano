<!-- Begin Project Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Donors</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <!-- Quotes -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Donors</h5>
                    <a class="btn btn-success" href="<?= base_url('admin/pages/donors/add') ?>">Add Donors <b
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
                                    <th>About Donor</th>
                                    <th>Image</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if (!empty($donors)) {
                                    $i = 1;
                                    foreach ($donors as $donor) {
                                        $row = '';
                                        $row .= '<tr>';
                                        $row .= '<td>' . $i++ . '</td>';
                                        $row .= '<td>' . $donor['name'] . '</td>';
                                        $row .= '<td>' . $donor['doner_about'] . '</td>';
                                        $row .= '<td><img src="' . base_url() . $donor['img'] . '" height="100"></td>';
                                        $row .= '<td>';
                                        $row .= '<a href="'.base_url('admin/Pages/delete_donor?donor_id=').$donor['uid'] .'" class="btn btn-danger text-light">Delete</a>';
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