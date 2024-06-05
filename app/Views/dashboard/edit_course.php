

<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>
    <div class="container-flow container-fluid pt-4 px-4" ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> Please be careful. You are about to update an important information on the site.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                        <div class="mt-3">
                            <h3><?=$course_data['courseName']?></h3>
                            <h4><span class="btn disabled btn-success">Duration: 
                                <i class="fa fa-clock" aria-hidden="true"></i>
                            </span> <?=$course_data['courseDuration']?> Months</h4>
                            <?=$course_data['courseDescription']?>
                            <img src="<?=base_url('uploads/'.$course_data['coursePic'])?>" alt="" class="img-fluid d-block w-100 img-thumbnail rounded shadow-sm">
                        </div>
                    </div>
                </div>
            </div>
        <?php include('partials/forms/edit_course_form.php')?>
        </div>
    </div>
<?=$this->endSection()?>