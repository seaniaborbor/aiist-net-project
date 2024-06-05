<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=base_url()?></title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('public_asset/css/bootstrap.min.css')?>">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?=base_url('public_asset/css/animate.css')?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?=base_url('public_asset/css/owl.carousel.min.css')?>">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?=base_url('public_asset/css/themify-icons.css')?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?=base_url('public_asset/css/flaticon.css')?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?=base_url('public_asset/css/magnific-popup.css')?>">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?=base_url('public_asset/css/slick.css')?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?=base_url('public_asset/css/style.css')?>">
</head>

<body>

    <section class="padding_top">
        <div class="container my-5 ">
            <div class="row">
                <div class="col-md-6 offset-md-3 mb-3">
                <div class="modal-content shadow-lg">
                <div class="modal-body text-center py-5 px-3 ">
                <h1 class="modal-title mb-4 text-danger">Subscription Error</h1>
                    <p style="font-size:18px">Your attempt to susbribe to our updates faile. Please fix the error mentioned below to try again </p>
                   <div class="alert alert-danger">
                   <?php if(isset($validation) && $validation->hasError('subscriberEmail')) : ?>
                 <div class="text-danger"><?=$validation->getError('subscriberEmail')?></div>
              <?php endif; ?>
                   </div>
                   <a href="#subscribe" class="btn mt-3 btn_2">Subscribe Again</a>
      </div>
      
    </div>
  
                </div>
            </div>
        </div>
    </section>

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/logo.png" alt=""> </a>
                        <p>Led by industry experts, our cutting-edge curriculum ensures
                             you stay ahead. Whether beginner or advanced, get ready to 
                             transform your future with 
                            hands-on learning and state-of-the-art resources."</p>
                        <p>But when shot real her hamber her </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2" id="subscribe">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                        </p>
                        <form action="/subscribe" method="post">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="subscriberEmail" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="submit"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                            <p><span> Phone :</span> +2 36 265 (8060)</p>
                            <p><span> Email : </span>info@colorlib.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?=base_url('public_asset/js/jquery-1.12.1.min.js')?>"></script>
    <!-- popper js -->
    <script src="<?=base_url('public_asset/js/popper.min.js')?>"></script>
    <!-- bootstrap js -->
    <script src="<?=base_url('public_asset/js/bootstrap.min.js')?>"></script>
    <!-- easing js -->
    <script src="<?=base_url('public_asset/js/jquery.magnific-popup.js')?>"></script>
    <!-- swiper js -->
    <script src="<?=base_url('public_asset/js/swiper.min.js')?>"></script>
    <!-- swiper js -->
    <script src="<?=base_url('public_asset/js/masonry.pkgd.js')?>"></script>
    <!-- particles js -->
    <script src="<?=base_url('public_asset/js/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('public_asset/js/jquery.nice-select.min.js')?>"></script>
    <!-- swiper js -->
    <script src="<?=base_url('public_asset/js/slick.min.js')?>"></script>
    <script src="<?=base_url('public_asset/js/jquery.counterup.min.js')?>"></script>
    <script src="<?=base_url('public_asset/js/waypoints.min.js')?>"></script>
    <!-- custom js -->
    <script src="<?=base_url('public_asset/js/custom.js')?>"></script>


    
</body>

</html>