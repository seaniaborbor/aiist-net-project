<?=$this->extend('public/partials/common/layout2')?>

<?=$this->section('content')?>

 <!-- breadcrumb start-->
 <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2 data-aos="fade-up" data-aos-duration="2000"><?=$career_path_details['careerName']?></h2>
                            <p data-aos="fade-down" data-aos-duration="2000">Home<span>/</span>Career Path /Read </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img" data-aos="fade-up" data-aos-duration="2000">
                     <img style="border-radius:15px !important" class="img-fluid w-100 " src="<?=base_url('uploads/'.$career_path_details['careerPic'])?>" alt="">
                  </div>
                  <?php //print_r($course_details); ?>
                  <div class="blog_details">
                     <h2 data-aos="fade-down" data-aos-duration="2000"><?=$career_path_details['careerName']?> </h2>
                     <?=$career_path_details['careerDescription']?>
                  </div>
               </div>

               <div class="row g-3 pt-5">
               <?php //print_r($course_data); exit(); ?>
            <?php if(isset($career_courses)) : ?>
               <h2 class="m-3" >Courses in this career Path: </h2>

                <?php foreach($career_courses as $srv_data) : ?>
                    <div class="col-sm-6 col-lg-6 mt-2" data-aos="fade-up" data-aos-duration="2000">
                    <div class="single_special_cource ">
                        <img src="<?=base_url('uploads/'.$srv_data['coursePic'])?>" class="special_img" style="border-radius:15px;" alt="">
                        <div class="special_cource_text">
                            <a class="mt-2" href="/courses/course_details/<?=$srv_data['courseId']?>">
                                <h3><?= $srv_data['courseName'] ?></h3>
                            </a>
                            <p><?=substr($srv_data['courseDescription'],0,150)?>...</p>
                            <div class="author_info">
                                <a href="/courses/course_details/<?=$srv_data['courseId']?>" class="btn_2">Course Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
        <?php endif; ?>
               </div>
                 
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#" data-aos="fade-up" data-aos-duration="2000">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title" data-aos="fade-up" data-aos-duration="2000">Our Career Paths </h4>
                     <ul class="list cat-list">
                        <?php if(isset($careerPaths) && !empty($careerPaths)) :?>
                           <?php foreach($careerPaths as $crpath): ?>
                              <li data-aos="fade-up" data-aos-duration="2000">
                                 <a href="/careeparth/detail/<?=$crpath['careerId']?>" class="d-flex justify-content-between">
                                    <p><?=$crpath['careerName']?></p>
                                    <p>(<?=$crpath['total_courses']?> courses)</p>
                                 </a>
                              </li>
                           <?php endforeach; ?>
                        <?php endif; ?>

                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title" data-aos="fade-down" data-aos-duration="2000">Recent Post</h3>
                     <?php if(isset($latest_blog_post) && !empty($latest_blog_post)) : ?>
                        <?php foreach($latest_blog_post as $blpost) : ?>
                           <div class="card mt-2" data-aos="fade-up" data-aos-duration="2000">
                              <img src="<?=base_url('uploads/'.$blpost->featureImg)?>" 
                              style="border-radius:15px !important" class="shadow-lg img-thumbnail m-3 d-block" alt="post">
                              <div class="card-body ">
                                 <a href="/blog/blog_details/<?=$blpost->blg_id?>">
                                    <h6><?=$blpost->title?></h6>
                                 </a>
                                 <p><?=$blpost->createdAt?></p>
                              </div>
                           </div>
                        <?php endforeach; ?>
                     <?php endif; ?>
                  </aside>
               
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->

<?=$this->endSection()?>