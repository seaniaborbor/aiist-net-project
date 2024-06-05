<?=$this->extend('public/partials/common/layout2')?>

<?=$this->section('content')?>

<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                           <h2 data-aos="fade-up" data-aos-duration="2000">Our Career Paths </h2>
                            <p data-aos="fade-down" data-aos-duration="2000">Home<span>/</span>Career Path </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
           
            <div class="row">
                <?php if(isset($career_pathways)) : ?>
                    <?php foreach($career_pathways as $crpws) : ?>
                        <div class="col-sm-6 col-lg-4">
                            <div class="single_special_cource" data-aos="fade-up" data-aos-duration="2000">
                                <img src="<?=base_url('uploads/'.$crpws['careerPic'])?>" class="special_img" alt="">
                                <div class="special_cource_text">
                                    <a href="<?=base_url('/career_path/career_path_details/'.$crpws['careerId'])?>" dsable class="btn_4 disable">Number of Courses</a>
                                    <h4><?=$crpws['total_courses']?></h4>
                                    <a href="<?=base_url('/career_path/career_path_details/'.$crpws['careerId'])?>"><h3><?=$crpws['careerName']?></h3></a>
                                    <?=substr($crpws['careerDescription'], 0, 150)?>...</p>
                                    <div class="author_info">
                                        <div class="author_rating">
                                            <div class="rating">
                                                <a href="<?=base_url('/career_path/career_path_details/'.$crpws['careerId'])?>" class="btn_2">Career Path</a>
                                            </div>
                                        </div>
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