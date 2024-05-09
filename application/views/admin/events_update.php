<!-- Begin Project Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Event</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <!-- Quotes -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Update Event</h5>
                    <a class="btn btn-danger" href="<?= base_url('admin/Admin/delete_event?e_id='). $event['uid']?>">DELETE</a>
                </div>
                <!-- Card Body -->
                <form class="card-body row" enctype="multipart/form-data"
                    action="<?= base_url('admin/Admin/update_event') ?>" method="POST">
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Event Title</label>
                            <input type="text" class="form-control" name="name" placeholder="Event Title" required value="<?=$event['title']?>">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Event Details</label>
                            <textarea rows="6" cols="30" class="form-control" placeholder="Event Details" required
                                name="details"><?=$event['details']?></textarea>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="row">
                            <div class="form-group col-xl-6 col-lg-6">
                                <label for="formGroupExampleInput">Event Location</label>
                                <input type="text" class="form-control" name="place" required placeholder="place" value="<?=$event['place']?>">
                            </div>
                            <div class="form-group col-xl-6 col-lg-6">
                                <label for="formGroupExampleInput">Event date</label>
                                <input type="date" class="form-control" name="date" required value="<?=$event['date']?>">
                            </div>
                        </div>
                        <div class='form-group' id="aboutDonor">
                            <div>
                                <label for="formGroupExampleInput2">Event Image</label>
                            </div>
                            <img src="<?= base_url().$event['img'] ?>"
                                height="150" id="donor_img" />
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control-file" placeholder="work image" name="event_img[]" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            <input type="text"name="uid" hidden value="<?= $event['uid'] ?>">
                            <input type="submit" class="btn btn-success" value="Submit" />
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </div>
    <!-- /.container-fluid -->