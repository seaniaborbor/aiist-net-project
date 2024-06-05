<?=$this->extend('public/partials/common/layout2')?>

<?=$this->section('content')?>

<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                           <h2 data-aos="fade-up" data-aos-duration="2000"> Contact US</h2>
                            <p>Home<span>/</span>Blogs </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

    <!--::review_part start::-->
    <section class="special_cource py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    
                <div class="card shadow-sm">
                    <div class="card-body">
                    <h2 data-aos="fade-up" data-aos-duration="2000">Drop us your message!</h2>
                    <p data-aos="fade-up" data-aos-duration="2000">fugit earum, omnis dolorem vero? 
                    Accusamus expedita delectus nulla autem deserunt, iste sequi? Perferendis, 
                    exercitationem doloribus! Maxime debitis accusamus numquam cum obcaecatiel
                    ectus ex nihil. Fugiat, accusantium possimus, exercitationem aspernatur magni</p>
</p>
                    <div class="comment-form">
                  <form class="form-contact comment_form" method="post" action="" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group" data-aos="fade-up" data-aos-duration="2000">
                              <textarea class="form-control w-100" name="message" id="comment" cols="30" rows="9"
                                 placeholder="Write Message"></textarea>
                                 <?php if(isset($validation) && $validation->hasError('message')) : ?>
                                    <div class="text-danger"><?=$validation->getError('message')?></div>
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
                        <button type="submit" class="button btn_1 button-contactForm">Sent Message</button>
                     </div>
                  </form>
               </div>
                    </div>
                </div>

                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->


<?=$this->endSection()?>