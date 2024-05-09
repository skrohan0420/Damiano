<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?= $title ? $title : 'Admin' ?>
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets_admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets_admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <?php

    if (!empty($header_link)) {
        foreach ($header_link as $link) {
            echo "<link href='" . base_url() . "assets_admin/css/" . $link . "' rel='stylesheet'>";
        }

    }
    ;


    ?>
    <style>
        #accordionSidebar {
            transition: 0.1s;
        }

        .sidebar_active {
            background-color: #3a60d0;
            color: #ffff !important;
        }

        .sidebar_item:hover {
            background-color: #3a60d0 !important;
            color: #ffff !important;
        }

        .sidebar_item {
            margin-top: 2px !important;
            margin-bottom: 2px !important;
        }
    </style>