<!-- Begin Project Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Causes</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <!-- Quotes -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Causes</h5>
                    <a class="btn btn-success" href="<?=base_url('admin/causes/add')?>">Add causes <b
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
                                    <th>Goal</th>
                                    <th>image</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($causes)) {
                                    $i = 1;
                                    foreach ($causes as $cause) {
                                        $row = '';
                                        $row .= '<tr>';
                                        $row .= '<td>' . $i++ . '</td>';
                                        $row .= '<td>' . $cause['title'] . '</td>';
                                        $row .= '<td>' . $cause['details'] . '</td>';
                                        $row .= '<td>' . $cause['goal'] . '</td>';
                                        $row .= '<td><img src="' . base_url() . $cause['img'] . '" height="100"></td>';
                                        $row .= '<td>';
                                        $row .= '<a href="'.base_url('admin/causes/edit?c_id=').$cause['uid'] .'" class="btn btn-info text-light">View & Edit</a>';
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