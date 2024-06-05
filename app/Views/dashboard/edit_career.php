

<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>
    <div class="container-flow container-fluid pt-4 px-4" ?>
        <div class="row">
        <?php include('partials/forms/edit_career_form.php')?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6>career Banner</h6>
                    </div>
                    <div class="card-body">
                    <img class="img img-fluid w-100" 
                    src="<?=base_url('uploads/'.$career_data['careerPic'])?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?=$this->endSection()?>