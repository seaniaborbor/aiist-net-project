   <!--::review_part start::-->
    <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2 data-aos="fade-up-right">Alumni Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="textimonial_iner owl-carousel " style="margin-left:-15px !important;">
                        <?php if(isset($testimonials_rescent)) :?>
                         <?php foreach ($testimonials_rescent as $item) : ?>
                                <div class="testimonial_slider bg-white" >
                                    <div class="row align-items-center justify-content-center col-equal-height">
                                                <div class="col-md-8 " style="border-radius:15px">
                                                <div class="testimonial_slider_text px-3 py-2 w-100">
                                                    <p><?=$item->customer_testimoney?></p>
                                                    <h4><?=$item->customer_name?></h4>
                                                    <h5> <?=$item->customer_title?></h5>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="testimonial_slider_img rounded-circle shadow-lg" 
                                                style="width:100px; height:100px; background-image:url(<?=base_url('public_asset/img/'.$item->customer_pic)?>); 
                                                background-position: top; background-size: cover;">
                                                    
                                                </div>
                                            </div>  
                                    </div>
                                </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>