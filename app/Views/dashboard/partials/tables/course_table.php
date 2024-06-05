<div class="col-md-6">
    <div class="row">
        <?php //print_r($course_data); exit(); ?>
    <?php if(isset($course_data)) : ?>
                    <?php foreach($course_data as $srv_data) : ?>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body" data-toggle="tooltip" data-html="true" 
                                title="Career Path: <?= $srv_data['careerName'] ?> ">
                                    <h6><?=substr($srv_data['courseName'],0,60)?>...</h6>
                                    <img src="<?=base_url('uploads/'.$srv_data['coursePic'])?>" 
                                    alt="" class="img-fluid rounded shadow-sm">
                                    <div class="text-dark mt-3">
                                        <a class="btn btn-primary rounded-0 btn-sm" href="<?=base_url('/dashboard/course/edit/'.$srv_data['courseId'])?>"> 
                                        <i class="bi bi-pen"></i> Edit  </a>
                                        <a class="btn btn-danger btn-sm rounded-0" href="<?=base_url('/dashboard/course/edit/'.$srv_data['courseId'])?>"> 
                                        <i class="bi bi-trash"></i> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?= $pager->links() ?>
    </div>
</div>