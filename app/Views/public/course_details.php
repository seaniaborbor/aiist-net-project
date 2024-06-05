<?=$this->extend('public/partials/common/layout2')?>

<?=$this->section('content')?>
 <!-- breadcrumb start-->
 <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                           <h2><?=$course_details['courseName']?> </h2>
                            <p><?=site_url()?> </p>
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
                  <div class="feature-img">
                     <img class="img-fluid w-100 " src="<?=base_url('uploads/'.$course_details['coursePic'])?>" 
                     style="border-radius:15px" alt="">
                  </div>
                  <?php //print_r($course_details); ?>
                  <div class="blog_details">
                     <h2><?=$course_details['courseName']?> </h2>
                     <?=$course_details['courseDescription']?>
                  </div>
               </div>

               <div class="row g-3 pt-5">
               <?php //print_r($course_data); exit(); ?>
            <?php if(isset($similar_courses)) : ?>
               <h2 class="m-3" >Similar courses in the same career paths </h2>

                <?php foreach($similar_courses as $srv_data) : ?>
                    <div class="col-sm-6 col-lg-6 mt-2">
                    <div class="single_special_cource ">
                        <img src="<?=base_url('uploads/'.$srv_data['coursePic'])?>"
                         class="special_img" style="border-radius:15px" alt="">
                        <div class="special_cource_text">
                            <a href="/courses/course_details/<?=$srv_data['courseId']?>">
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
                     <form action="#">
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
                     <h4 class="widget_title">Our Career Paths </h4>
                     <ul class="list cat-list">
                        <?php if(isset($careerPaths) && !empty($careerPaths)) :?>
                           <?php foreach($careerPaths as $crpath): ?>
                              <li>
                                 <a href="/careeparth/detail/<?=$crpath['careerId']?>" class="d-flex justify-content-between">
                                    <p><?=$crpath['careerName']?></p>
                                    <p><?=$crpath['total_courses']?> courses</p>
                                 </a>
                              </li>
                           <?php endforeach; ?>
                        <?php endif; ?>

                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     <?php if(isset($latest_blog_post) && !empty($latest_blog_post)) : ?>
                        <?php foreach($latest_blog_post as $blpost) : ?>
                           <div class="card mt-2">
                              <img src="<?=base_url('uploads/'.$blpost->featureImg)?>"
                              style="border-radius:15px !important" class=" img-thumbnail m-3 d-block" alt="post">
                              <div class="card-body ">
                                 <a href="blog/blog_details/<?=$blpost->blg_id?>">
                                    <h6><?=$blpost->title?></h6>
                                 </a>
                                 <p>Posted: <?=$blpost->createdAt?></p>
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