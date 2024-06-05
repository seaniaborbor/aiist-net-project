
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=site_url()?></title>
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
    

.blog_details ul {
  list-style: none;
  padding-left: 0;
}

.blog_details ul li {
  border-bottom: 1px solid #dee2e6;
}

.blog_details ul li:last-child {
  border-bottom: none;
}

.blog_details ul li a {
  display: block;
  padding: .75rem 1.25rem;
  text-decoration: none;
  color: #000; /* Change color as needed */
}

.blog_details ul li a:hover {
  background-color: #f8f9fa; /* Change background color on hover as needed */
}

    /* Pagination Styles */
.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
}

.pagination > li {
    display: inline;
}

.pagination > li > a,
.pagination > li > span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}

.pagination > li:first-child > a,
.pagination > li:first-child > span {
    margin-left: 0;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
}

.pagination > li:last-child > a,
.pagination > li:last-child > span {
    border-bottom-right-radius: 4px;
    border-top-right-radius: 4px;
}

.pagination > li.active > a,
.pagination > li.active > span,
.pagination > li.active > a:hover,
.pagination > li.active > span:hover,
.pagination > li.active > a:focus,
.pagination > li.active > span:focus {
    z-index: 2;
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7;
    cursor: default;
}

.pagination > li.disabled > span,
.pagination > li.disabled > span:hover,
.pagination > li.disabled > span:focus,
.pagination > li.disabled > a,
.pagination > li.disabled > a:hover,
.pagination > li.disabled > a:focus {
    color: #777;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd;
}

.pagination > li:first-child > span,
.pagination > li:first-child > a {
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
}

.pagination > li:last-child > span,
.pagination > li:last-child > a {
    border-bottom-right-radius: 4px;
    border-top-right-radius: 4px;
}
    </style>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand logo_1" href="/"> <img src="<?=base_url('public_asset/img/logo-removebg-preview.png')?>"> </a>
                        <a class="navbar-brand logo_2" href="/"> <img src="<?=base_url('public_asset/img/logo-removebg-preview.png')?>" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/courses">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/career_path">Career Paths</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/blog">Blog</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/about">About AIIST</a>
                                        <a class="dropdown-item" href="/contact">Contacts</a>
                                    </div>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="#">Enroll</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

   


    <?=$this->renderSection("content")?> 
   

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3" >
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="/public_asset/img/logo.png" data-aos="fade-up" data-aos-duration="2000" alt=""> </a>
                        <p>Led by industry experts, our cutting-edge curriculum ensures
                             you stay ahead. Whether beginner or advanced, get ready to 
                             transform your future with 
                            hands-on learning and state-of-the-art resources."</p>
                        <p>But when shot real her hamber her </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4 data-aos="fade-up" data-aos-duration="2000">Newsletter</h4>
                        <p data-aos="fade-up" data-aos-duration="2000">Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
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
                        <div class="social_icon" data-aos="fade-up" data-aos-duration="2000">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4 data-aos="fade-up" data-aos-duration="2000">Contact us</h4>
                        <div data-aos="fade-up" data-aos-duration="2000" class="contact_info">
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
                                <p data-aos="fade-up" data-aos-duration="2000" class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. Published by <a href="<?=base_url()?>">Aiist.net</a>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
    <script>
        $(document).ready(function(){
            $('blog_details').addClass('ul list-group')
            });
   </script>
</body>

</html>