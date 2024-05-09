<!-- Begin Project Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Messages</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <!-- Quotes -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">All Messages</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="table-responsive">
                        <table class="table table-bordered table-info" id="project_table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>subject</th>
                                    <th>message</th>
                                    <th>date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($messages)) {
                                    $i = 1;
                                    foreach ($messages as $message) {
                                        $row = '';
                                        $row .= '<tr>';
                                        $row .= '<td>' . $message['name'] . '</td>';
                                        $row .= '<td>' . $message['email'] . '</td>';
                                        $row .= '<td>' . $message['phone'] . '</td>';
                                        $row .= '<td>' . $message['subject'] . '</td>';
                                        $row .= '<td>' . $message['message'] . '</td>';
                                        $row .= '<td>' . $message['created_at'] . '</td>';
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