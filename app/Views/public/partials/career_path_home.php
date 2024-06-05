
    <!--::review_part start::-->
    <section class="special_cource ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p class="mb-3">Don't know where to start?</p>
                        <h2 class="mt-0">Pick from our Career Pathways</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if(isset($career_pathways)) : ?>
                    <?php foreach($career_pathways as $crpws) : ?>
                        <div class="col-sm-6 col-lg-4" data-aos="fade-up-right">
                            <div class="single_special_cource">
                                <img src="<?=base_url('uploads/'.$crpws['careerPic'])?>" class="special_img" alt="">
                                <div class="special_cource_text">
                                    <a href="#" class="btn_4">Number of Courses</a>
                                    <h4><?=$crpws['total_courses']?></h4>
                                    <a href="/career_path/career_path_details/<?=$crpws['careerId']?>"><h3><?=$crpws['careerName']?></h3></a>
                                    <?=substr($crpws['careerDescription'], 0, 150)?>...</p>
                                    <div class="author_info">
                                        <div class="author_rating">
                                            <div class="rating">
                                                <a href="/career_path/career_path_details/<?=$crpws['careerId']?>" class="btn_2">Career Path</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="col-md-6 pt-4 text-center">
                <a href="/career_path" class="btn_1">View Moore Career Paths </a>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->
