<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * 
 */
$routes->set404Override('App\Controllers\Custom404Controller::index');

$routes->get('/', 'PublicController::index');
$routes->get('about/', 'PublicController::about');
$routes->get('/contact', 'PublicController::contact');

$routes->get('blog/', 'BlogController::view_blogs');
$routes->get('blog/blog_details/(:any)', 'BlogController::blog_details/$1');
$routes->post('blog/blog_details/(:any)', 'BlogController::blog_details/$1');

$routes->get('courses/', 'CourseController::view_courses');
$routes->get('courses/course_details/(:any)', 'CourseController::course_details/$1');

$routes->post("/subscribe", "SubscribersController::subscribe");

$routes->get('career_path/', 'CareerController::view_career_paths');
$routes->get('career_path/career_path_details/(:any)', 'CareerController::view_career_path_detail/$1');

$routes->get('/auth', 'AuthController::index');
$routes->post('/auth', 'AuthController::index');
$routes->get('/logout', 'AuthController::logout');


// ANY ROUTE BELOW IS ONLY MENT TO BE ACCESS BY ADMIN 

$routes->group("", ['filter'=>'agentProtector'], function($routes){

$routes->get('/dashboard', 'DashboardController::index');

$routes->get('/dashboard/career/', 'CareerController::index');
$routes->post('/dashboard/career/', 'CareerController::index');
$routes->get('/dashboard/career/edit/(:any)', 'CareerController::edit/$1');
$routes->post('/dashboard/career/edit/(:any)', 'CareerController::edit/$1');

$routes->get('/dashboard/course/', 'CourseController::index');
$routes->post('/dashboard/course/', 'CourseController::index');
$routes->get('/dashboard/course/edit/(:any)', 'CourseController::edit/$1');
$routes->post('/dashboard/course/edit/(:any)', 'CourseController::edit/$1');


$routes->get('/dashboard/gallery/', 'GalleryController::index');
$routes->get('/dashboard/user/', 'UserController::index');

// admin blog routes 
$routes->get('/dashboard/blog', 'BlogController::index');
$routes->post('/dashboard/blog', 'BlogController::index');
$routes->get('/dashboard/edit/blog/(:any)', 'BlogController::edit/$1');
$routes->post('/dashboard/edit/blog/(:any)', 'BlogController::edit/$1');
$routes->get('/dashboard/delete/blog/(:any)', 'BlogController::delete/$1');

// team members routes
$routes->get('/dashboard/team', 'TeamMemberController::index');
$routes->post('/dashboard/team', 'TeamMemberController::index');
$routes->get('/dashboard/edit/team/(:any)', 'TeamMemberController::edit/$1');
$routes->post('/dashboard/edit/team/(:any)', 'TeamMemberController::edit/$1');

// testimonials routes
$routes->get('/dashboard/testimonials', 'TestimonialsController::index');
$routes->post('/dashboard/testimonials', 'TestimonialsController::index');
$routes->get('/dashboard/edit/testimonials/(:any)', 'TestimonialsController::edit/$1');
$routes->post('/dashboard/edit/testimonials/(:any)', 'TestimonialsController::edit/$1');
$routes->get('/dashboard/delete/testimonials/(:any)', 'TestimonialsController::delete/$1');

// orders routes
$routes->get('/dashboard/certificates/', 'CertificateController::index');
$routes->get('dashboard/view-certificate/(:any)', 'CertificateController::view_certificate/$1');
$routes->post('/dashboard/certificates', 'CertificateController::index');

});