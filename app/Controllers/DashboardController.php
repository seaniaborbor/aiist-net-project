<?php

namespace App\Controllers;

use App\Models\CareerModel;
use App\Models\CourseModel;
use App\Models\TeamModel;
use App\Models\BlogModel;
use App\Models\TestimonialsModel;
use App\Models\VisitorsModel;
use App\Models\CertificateModel;
use App\Models\SubscrsiberModel;




class DashboardController extends BaseController
{

    public function index()
    {
        $career = new CareerModel();
        $courses = new CourseModel();
        $testimonials = new TestimonialsModel();
        $team = new TeamModel();
        $blog = new BlogModel();
        $visitors = new VisitorsModel();
        $certificate = new CertificateModel();
        $subscribers = new SubscribersController();
        
    
        $data = [
            'career' => $career->findAll(),
            'courses' => $courses->findAll(),
            'testimonials' => $testimonials->findAll(),
            'team' => $team->findAll(),
            'visitors' => $visitors->visitors(),
            'blog' => $blog->visitors(),
            'certificate' => $certificate->visitors(),
            'subscribers' => $subscribers->findAll(),
        ];
        $data['passedLink'] = "dashboard";

    
        return view('dashboard/index', $data);
    }
    
}
