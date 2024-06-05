<?=$this->extend('public/partials/common/layout2')?>

<?=$this->section('content')?>

<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                           <h2 data-aos="fade-up" data-aos-duration="2000">Our Blog Posts</h2>
                            <p>Home<span>/</span>Blogs </p>
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
                
            <?php if(isset($all_blogs)) : ?>
                <?php foreach($all_blogs as $lbp) : ?>
                <div class="col-sm-6 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="<?=base_url('uploads/'.$lbp['featureImg'])?>" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="<?=base_url('/blog/blog_details/'.$lbp['blg_id'])?>" class="btn_4"><?=$lbp['category']?></a>
                                <a href="<?=base_url('/blog/blog_details/'.$lbp['blg_id'])?>">
                                    <h5 class="card-title"><?=$lbp['title']?></h5>
                                </a>
                                <p><?=substr($lbp['postbody'], 0, 125).'...'?></p>
                                <ul class="d-flex justify-content-between align-items-center">
                                    <li><a href="<?=base_url('/blog/blog_details/'.$lbp['blg_id'])?>" class="btn btn-outline-secondary bg-white text-dark rounded-pill">Read More</a></li>
                                    <li> <span class="ti-comments"></span> &nbsp<?=$lbp['comment_count']?> &nbsp Comments</li>
                                </ul>
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