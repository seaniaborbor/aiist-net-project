<?=$this->extend('public/partials/common/layout2')?>

<?=$this->section('content')?>
 <!-- breadcrumb start-->
 <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                           <h2 data-aos="fade-up" data-aos-duration="2000"><?=$blog_details['title']?> </h2>
                            <p><?=site_url()?></p>
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
                     <img class="img-fluid w-100 " 
                     data-aos="fade-up" data-aos-duration="2000" src="<?=base_url('uploads/'.$blog_details['featureImg'])?>" 
                     style="border-radius:15px" alt="">
                  </div>
                  <?php //print_r($course_details); ?>
                  <div class="blog_details">
                     <h2 data-aos="fade-up" data-aos-duration="2000"><?=$blog_details['title']?> </h2>
                     <?=$blog_details['postbody']?>
                  </div>
               </div>
               
               
               <div class="comments-area">
                  <h4 data-aos="fade-up" data-aos-duration="2000"><?=count($post_comments)?> Comment(s)</h4>
                  <?php if(count($post_comments) == 0) : ?>
                     <div class="alert alert-info" data-aos="fade-up" data-aos-duration="2000">
                        <p>Be the first to comment on this post! Share your thought with thousands of readers who visit our site everyday. </p>
                     </div>
                  <?php endif; ?>
                  
                  <?php if(isset($post_comments) && !empty($post_comments)) : ?>
                     <?php foreach($post_comments as $single_comment) : ?>
                        <div class="comment-list" data-aos="fade-up" data-aos-duration="2000">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="/imgs/personPlaceHolder.jpg" alt="user icon" class="rounded-circle shadow-sm" >
                           </div>
                           <div class="desc">
                              <p class="comment">
                                <?= htmlspecialchars($single_comment['comment']); ?>
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#"><?= htmlspecialchars($single_comment['name'])?></a>
                                    </h5>
                                    <p class="date"><?= htmlspecialchars($single_comment['posted_at'])?> </p>
                                 </div>
                                 <div class="reply-btn">
                                    <!-- <a href="#" class="btn-reply text-uppercase">reply</a> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                     <?php endforeach; ?>
                  <?php endif; ?>

                </div>

                <div class="comment-form">
                  <h4 data-aos="fade-up" data-aos-duration="2000">Leave a comment </h4>
                  <form class="form-contact comment_form" method="post" action="/blog/blog_details/<?=$blog_details['id']?>" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group" data-aos="fade-up" data-aos-duration="2000">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                                 <?php if(isset($validation) && $validation->hasError('comment')) : ?>
                                    <div class="text-danger"><?=$validation->getError('comment')?></div>
                                 <?php endif; ?>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group" data-aos="fade-up" data-aos-duration="2000">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                              <?php if(isset($validation) && $validation->hasError('name')) : ?>
                                    <div class="text-danger"><?=$validation->getError('name')?></div>
                                 <?php endif; ?>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group" data-aos="fade-up" data-aos-duration="2000">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                              <?php if(isset($validation) && $validation->hasError('email')) : ?>
                                    <div class="text-danger"><?=$validation->getError('email')?></div>
                              <?php endif; ?>
                           </div>
                        </div>
                     </div>
                     <div class="form-group" data-aos="fade-up" data-aos-duration="2000">
                        <button type="submit" class="button btn_1 button-contactForm">Post comment</button>
                     </div>
                  </form>
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
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search Blog</button>
                     </form>
                  </aside>

                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 data-aos="fade-up" data-aos-duration="2000" class="widget_title">Recent Post</h3>
                     <?php if(isset($latest_blog_post) && !empty($latest_blog_post)) : ?>
                        <?php foreach($latest_blog_post as $blpost) : ?>
                           <div class="card mt-2" data-aos="fade-up" data-aos-duration="2000">
                              <img src="<?=base_url('uploads/'.$blpost->featureImg)?>"
                              style="border-radius:15px !important" class="img-thumbnail m-3 d-block" alt="post">
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

                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 data-aos="fade-up" data-aos-duration="2000" class="widget_title">Our Career Paths </h4>
                     <ul class="list cat-list" data-aos="fade-up" data-aos-duration="2000">
                        <?php if(isset($careerPaths) && !empty($careerPaths)) :?>
                           <?php foreach($careerPaths as $crpath): ?>
                              <li class="">
                                 <a href="/career_path/career_path_details/<?=$crpath['careerId']?>" class="d-flex justify-content-between ">
                                    <p><?=$crpath['careerName']?></p>
                                    <p>(<?=$crpath['total_courses']?> courses)</p>
                                 </a>
                              </li>
                           <?php endforeach; ?>
                        <?php endif; ?>

                     </ul>
                  </aside>
               
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->

<?=$this->endSection()?>