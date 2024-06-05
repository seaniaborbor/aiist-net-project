<?=$this->extend('public/partials/common/layout')?>

<?=$this->section('content')?>
  
<!-- banner part start-->
<section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Level Up Your IT Game</h5>
                            <h1 data-aos="fade-up" data-aos-duration="2000">Experience Modern IT Training</h1>
                            <p>Led by industry experts, our cutting-edge curriculum ensures you stay ahead. 
                                Whether beginner or advanced, get ready 
                                to transform your future with hands-on learning and state-of-the-art resources."</p>
                            <a data-aos="fade-down" data-aos-duration="2000" href="/courses" class="btn_1">View Course </a>
                            <a data-aos="fade-down" data-aos-duration="2000" href="/career_path" class="btn_2">Career Path</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center" data-aos="fade-up" data-aos-duration="2000">
                    <div class="single_feature_text " >
                        <h2>What we offer </h2>
                        <p>"At the Africa International Institute of Science & Technology, we are dedicated to providing practical, hands-on training programs. Our mission is to equip you with the real-world skills
                             needed for success in the ever-evolving field of science and technology." </p>
                        <a href="#" class="btn_1">Read More</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3" data-aos="fade-up" data-aos-duration="2000">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Better Future</h4>
                            <p>"Experience cutting-edge tech with our
                                 better features, designed to supercharge your learning!"</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3" data-aos="fade-up" data-aos-duration="2000">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Qualified Trainers</h4>
                            <p>"Learn from the best! Our qualified trainers 
                                bring expertise and passion to every class."</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3" data-aos="fade-up" data-aos-duration="2000">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Job Oppurtunity</h4>
                            <p>"Unlock your future! Explore endless job
                                 opportunities with our industry connections and guidance."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img" data-aos="fade-up" data-aos-duration="2000">
                        <img src="<?=base_url('public_asset/img/careerpath-removebg-preview.png')?>" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text"  >
                        <h5 data-aos="fade-down" data-aos-duration="2000">About career path</h5>
                        <h2 data-aos="fade-up" data-aos-duration="2000">Take the right path to your career</h2>
                        <p data-aos="fade-down" data-aos-duration="2000">"Discover rewarding career paths at Africa International Institute of Science
                             & Technology! Explore our diverse programs in database technology, software
                              engineering, web development, graphic design, and business & accounting.
                               With expert guidance, dive into data, create innovative software, design 
                            captivating visuals, or master business essentials for a successful future."</p>
                        <ul data-aos="fade-up" data-aos-duration="2000">
                            <li><span class="ti-pencil-alt"></span>Hands-on training with industry-leading professionals</li>
                            <li><span class="ti-ruler-pencil"></span>Internship opportunities to apply your skills in real-world settings"</li>
                        </ul>
                        <a data-aos="fade-up" data-aos-duration="2000" href="/career_path" class="btn_1">See Career Paths</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">1024</span>
                        <h4>All Teachers</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">960</span>
                        <h4> All Students</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">1020</span>
                        <h4>Online Students</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">820</span>
                        <h4>Ofline Students</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->
        <section  class="padding_top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <ul class="nav nav-pills justify-content-center mb-5" id="myTab" role="tablist">
                    <li class="nav-item px-2 " data-aos="fade-up" data-aos-duration="2000">
                        <a class="nav-link btn_2 active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Career Paths</a>
                    </li>
                    <li class="nav-item px-2" data-aos="fade-down" data-aos-duration="3000">
                        <a class="nav-link btn_2" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Courses</a>
                    </li>
                   
                </ul>
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <?php include('partials/career_path_home.php')?>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <?php include('partials/latest_courses_home.php')?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- learning part start-->
    <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h5>Apply Now, Excel Tomorrow</h5>
                        <h2 data-aos="fade-up" data-aos-duration="2000">"Secure Your Course Spot!"</h2>
                        <p>"Apply now to secure your course spot and set yourself on the path to excel 
                            tomorrow! Don't miss out on this opportunity to invest in your future.
                             Whether it's database technology, software engineering, web development,
                              graphic design, or business & accounting, our programs are designed 
                              to empower you for success. 
                            Take the first step towards a rewarding career by applying today!"</p>
                        <div class="row">
                            <a data-aos="fade-down" data-aos-duration="2000" href="#" onclick="alert('do something for this link')" class="btn_2">Chat with registrar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img data-aos="fade-up" data-aos-duration="2000" src="<?=base_url('public_asset/img/female-student-listening-webinar-online_74855-6461-removebg-preview.png')?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

   <?php include('partials/home_page_testimonials.php')?>
    <!--::blog_part start::-->
    <?php include('partials/home_blog_section.php'); ?>
    <!--::blog_part end::-->

    
  


<?=$this->endSection()?>