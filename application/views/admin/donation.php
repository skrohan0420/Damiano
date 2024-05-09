<!-- Begin Project Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Donations</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <!-- Quotes -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Donations</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="table-responsive">
                        <table class="table table-bordered table-info" id="project_table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Pin</th>
                                    <th>Date of Birth</th>
                                    <th>Pan</th>
                                    <th>Project</th>
                                    <th>Amount</th>
                                    <th>Payment Id</th>
                                    <th>Status</th>
                                    <th>Method</th>
                                    <th>Wallet</th>
                                    <th>Payment Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if (!empty($payments)) {
                                    $i = 1;
                                    foreach ($payments as $donation) {
                                        $project ="";
                                        $amount_in_rupee = $donation['amount'] /100;
                                        if(!empty( $donation['project_title'])){
                                            $project = $donation['project_title'];
                                        }else if(!empty( $donation['cause_title'])){
                                            $project = $donation['cause_title'];
                                        }else if(!empty( $donation['event_title'])){
                                            $project = $donation['event_title'];
                                        }
                                        $dateTime = new DateTime($donation['created_at']); 
                                        $dateOnly = $dateTime->format('d-m-Y');
                                        $row = '';
                                        $row .= '<tr>';
                                        $row .= '<td>' . $i++ . '</td>';
                                        $row .= '<td>' . $donation['name'] . '</td>';
                                        $row .= '<td>' . $donation['email'] . '</td>';
                                        $row .= '<td>' . $donation['phone'] . '</td>';
                                        $row .= '<td>' . $donation['address'] . '</td>';
                                        $row .= '<td>' . $donation['pin'] . '</td>';
                                        $row .= '<td>' . $donation['date_of_birth'] . '</td>';
                                        $row .= '<td>' . $donation['pan'] . '</td>';
                                        $row .= '<td>' . $project . '</td>';
                                        $row .= '<td>' . $amount_in_rupee . '</td>';
                                        $row .= '<td>' . $donation['payment_id'] . '</td>';
                                        $row .= '<td>' . $donation['status'] . '</td>';
                                        $row .= '<td>' . $donation['method'] . '</td>';
                                        $row .= '<td>' . $donation['wallet'] . '</td>';
                                        $row .= '<td>' . $dateOnly. '</td>';
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