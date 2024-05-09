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
                    <h5 class="m-0 font-weight-bold text-primary">Add New Cause</h5>
                    <a class="btn btn-danger" href="<?= base_url('admin/Admin/delete_cause?c_id='). $cause['uid']?>">DELETE</a>
                </div>
                <!-- Card Body -->
                <form class="card-body row" enctype="multipart/form-data"
                    action="<?= base_url('admin/Admin/update_cause') ?>" method="POST">
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Causes Title</label>
                            <input type="text" class="form-control" name="name" placeholder="Cause Name" required value="<?= $cause['title']?>">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Cause Details</label>
                            <textarea rows="6" cols="30" class="form-control" placeholder="Cause Details" required name="details"><?= $cause['details'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="row">
                            <div class="form-group col-xl-6 col-lg-6">
                                <label for="formGroupExampleInput">Cause Goal</label>
                                <input type="number" class="form-control" name="goal" placeholder="Cause Goal" required value="<?= $cause['goal']?>">
                            </div>
                            <div class="form-group col-xl-6 col-lg-6">
                                <label for="formGroupExampleInput">Raised</label>
                                <input type="number" class="form-control" name="raised" placeholder="Raised"  value="<?= $cause['raised']?>">
                            </div>
                        </div>
                        <div class='form-group' id="aboutDonor">
                            <div>
                                <label for="formGroupExampleInput2">Cause Image</label>
                            </div>
                            <img src="<?=base_url() . $cause['img'] ?>"
                                height="150" id="donor_img" />
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control-file" placeholder="work image" name="cause_img[]"/>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" value="<?= $cause['uid']?>" hidden name="uid">
                            <input type="submit" class="btn btn-success" value="Submit" />
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </div>
    <!-- /.container-fluid -->