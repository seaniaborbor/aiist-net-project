<?=$this->extend('public/partials/common/layout2')?>

<?=$this->section('content')?>

<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                           <h2 data-aos="fade-up" data-aos-duration="2000">Our Courses </h2>
                            <p>Home<span>/</span>Courses </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

    <!--::review_part start::-->
    <section class="special_cource pt-3">
        <div class="container" >
            <div class="row">
                
        <?php //print_r($course_data); exit(); ?>
            <?php if(isset($course_data)) : ?>
                <?php foreach($course_data as $srv_data) : ?>
                    <div class="col-sm-6 col-lg-4 mb-3">
                    <div class="single_special_cource" data-aos="fade-up" data-aos-duration="2000">
                        <img src="<?=base_url('uploads/'.$srv_data['coursePic'])?>"
                        style="border-radius:15px" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4"><?= $srv_data['careerName'] ?> Career Path</a>
                            <a href="courses/course_details/<?=$srv_data['courseId']?>">
                                <h3><?= $srv_data['courseName'] ?></h3>
                            </a>
                            <p><?=substr($srv_data['courseDescription'],0,150)?>...</p>
                            <div class="author_info">
                                <a href="courses/course_details/<?=$srv_data['courseId']?>" class="btn_2">Course Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
        <?php endif; ?>
       
    
            </div>
           <div class="col-md-12 py-3">
                <?= $pager->links() ?>
           </div>
        </div>
    </section>
    <!--::blog_part end::-->


<?=$this->endSection()?>