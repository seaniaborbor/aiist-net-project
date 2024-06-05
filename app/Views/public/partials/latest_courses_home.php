
    <!--::review_part start::-->
    <section class="special_cource ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p class="mb-3">Looking for courses?</p>
                        <h2 class="mt-0">Here's Our Latest Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php //print_r($course_data); exit(); ?>
            <?php if(isset($course_data)) : ?>
                <?php foreach($course_data as $srv_data) : ?>
                    <div class="col-sm-6 col-lg-4 mb-3" data-aos="fade-up-right">
                    <div class="single_special_cource">
                        <img src="<?=base_url('uploads/'.$srv_data->coursePic)?>" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="/career_path_details/<?=$srv_data->careerId?>" class="btn_4"><?= $srv_data->careerName ?> Career Path</a>
                            <a href="courses/course_details/<?=$srv_data->courseId?>">
                                <h3><?= $srv_data->courseName ?></h3>
                            </a>
                            <p><?=substr($srv_data->courseDescription,0,150)?>...</p>
                            <div class="author_info">
                                <a href="courses/course_details/<?=$srv_data->courseId?>" class="btn_2">Course Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
        <?php endif; ?>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="col-md-6 pt-4 text-center">
                <a href="/courses" class="btn_1">View Moore Career Paths </a>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->
