<div class="col-sm-12 col-sm-6 col-xl-6">
    <div class="row">
    <h5 class="mb-4">List of career paths</h5>
    <?php 
    // print_r($career_data);
    // exit();
    ?>
    <?php if(isset($career_data)) : ?>
        <?php 
        $visibility = "Visible";
        ?>
        <?php foreach($career_data as $mnu) : ?>
            <?php if($mnu['careerStatus'] == 2){
                $visibility = "Hidden";
                }
            ?>
            <div class="col-md-6 mt-3">
            <div class="card rounded shadow-sm" data-toggle="tooltip" data-html="true" 
              title="Total Courses: <?= $mnu['total_courses'] ?> Visibility Stitus: <?=$visibility?> ">
                <div class="card-body">
                    <h6><?= $mnu['careerName'] ?></h6>
                    <img src="<?= base_url('uploads/' . $mnu['careerPic']) ?>" class="img-fluid" alt="">
                    <a href="/dashboard/career/edit/<?=$mnu['careerId']?>" class="btn btn-primary mt-3 rounded-0 btn-sm">
                        <i class="fa fa-pen"></i> Edit
                    </a>
                    <button class="btn btn-danger mt-3 rounded-0 btn-sm">
                        <i class="fa fa-trash"></i> Delete
                    </button>
                </div>
            </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <?= $pager->links() ?>
    </div>
</div>