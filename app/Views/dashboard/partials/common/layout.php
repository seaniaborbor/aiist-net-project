<?php 
$userProfile = session()->get('userData');
//print_r($userProfile);
function activate($pageName, $passedLink){
    if($pageName == $passedLink){
        echo "active";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>aiist.net</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url('dashboard_asset/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('dashboard_asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url('dashboard_asset/css/bootstrap.min.css')?>" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <!-- Template Stylesheet -->
    <link href="<?=base_url('dashboard_asset/css/style.css')?>" rel="stylesheet">

    <!-- this line of code is gonna inport the data table from the cdn --> 
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<style>

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
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="/dashboard/" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>BARCUS</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?=base_url('uploads/'.$userProfile['profileImg'])?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?=$userProfile['fullName']?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?=base_url('/dashboard/')?>" class="nav-item nav-link <?php activate('dashboard', $passedLink)?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="<?=base_url('/dashboard/career')?>" class="nav-item nav-link <?php activate('career', $passedLink)?>"><i class="fa fa-th me-2"></i>Caree Path </a>
                    <a href="<?=base_url('/dashboard/course')?>" class="nav-item nav-link <?php activate('course', $passedLink)?>"><i class="fa fa-keyboard me-2"></i>Courses</a>
                    <a href="<?=base_url('/dashboard/blog')?>" class="nav-item nav-link <?php activate('blog', $passedLink)?>"><i class="fa fa-book me-2"></i>Blog</a>
                    <a href="<?=base_url('/dashboard/testimonials')?>" class="nav-item nav-link <?php activate('testimonials', $passedLink)?>"><i class="fa fa-quote-right me-2"></i>Testimonials</a>
                    <a href="<?=base_url('/dashboard/certificates')?>" class="nav-item nav-link <?php activate('certificates', $passedLink)?>"><i class="fa fa-certificate me-2"></i>Certificate</a>
                    <a href="<?=base_url('/dashboard/team')?>" class="nav-item nav-link <?php activate('team', $passedLink)?>"><i class="fa fa-users me-2"></i>Team/Users</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?=base_url('uploads/'.$userProfile['profileImg'])?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?=$userProfile['fullName']?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


           <!-- for each page, the dashboard content's will be rendered below --> 
           <!-- dashboard render place ends below --> 
                       <!-- Blank Start -->
           <?=$this->renderSection("content")?> 
               
            <!-- Blank End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Africa International Institute of Science & Technology</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://github.com/seaniaborbor">Tarnue Pythagoras Borbor</a>
                        </br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="<?=base_url('about')?>" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- script/file that contains the success modal --> 
    <?php include('success_message.php')?>

     <!-- script/file that contains the success modal --> 
     <?php include('error_message.php')?>

     <script>
  document.addEventListener('DOMContentLoaded', function () {
    // Select the first textarea with the class 'editor-textarea'
    var textarea = document.querySelector('#editor-textarea');
    
    if (textarea) {
      BalloonEditor
        .create(textarea, {
          plugins: [Image, ImageCaption, ImageStyle, ImageToolbar, Essentials, MediaEmbed],
          toolbar: ['image', 'mediaEmbed', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'undo', 'redo']
        })
        .catch(error => {
          console.error(error);
        });
    }
  });
</script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('dashboard_asset/lib/chart/chart.min.js')?>"></script>
    <script src="<?=base_url('dashboard_asset/lib/easing/easing.min.js')?>"></script>
    <script src="<?=base_url('dashboard_asset/lib/waypoints/waypoints.min.js')?>"></script>
    <script src="<?=base_url('dashboard_asset/lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('dashboard_asset/lib/tempusdominus/js/moment.min.js')?>"></script>
    <script src="<?=base_url('dashboard_asset/lib/tempusdominus/js/moment-timezone.min.js')?>"></script>
    <script src="<?=base_url('dashboard_asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')?>"></script>

    <!-- DataTables JS from CDN -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>


<!-- Initialize DataTable -->
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});



</script>
    <!-- Template Javascript -->
    <script src="<?=base_url('dashboard_asset/js/main.js')?>"></script>

  
</body>

</html>