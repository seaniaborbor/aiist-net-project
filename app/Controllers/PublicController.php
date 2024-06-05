<?php

namespace App\Controllers;

use App\Models\CareerModel;
use App\Models\CourseModel;
use App\Models\CustomerModel;
use App\Models\OrderModel;
use App\Models\TeamModel;
use App\Models\BlogModel;
use App\Models\TestimonialsModel;



class PublicController extends BaseController
{
    //============home page 
    public function index()
    {
        $data = [];
        $TestimonialsModel = new TestimonialsModel();


        $careerModel = new careerModel();
    // Assuming $careerModel is your Career model

        $data = [
            'career_pathways' => $careerModel
                                ->select('career_table.*, COUNT(course_table.coursecareer) as total_courses')
                                ->join('course_table', 'career_table.careerId = course_table.coursecareer')
                                ->groupBy('career_table.careerId, career_table.careerName')
                                ->orderBy('career_table.careerId', 'desc')
                                ->paginate(10),
            'pager' => $careerModel->pager,
        ];
        $courseModel = new CourseModel();
        $data['course_data'] =  $courseModel
                                 ->join('career_table', 'career_table.careerId = course_table.coursecareer')
                                 ->groupBy('course_table.courseId')
                                 ->orderBy('course_table.courseId', 'desc')
                                 ->limit(6)
                                 ->get()
                                 ->getResult();

        $BlogModel = new BlogModel();
        $data['latest_blog_post'] = $BlogModel->recent_blogs();

        // testimonial 
        $data['testimonials_rescent'] = $TestimonialsModel->orderBy('id', 'desc')->limit(10)->get()->getResult();

        return view('public/index', $data);
        
    }


    public function about(){
        return view('public/about');
    }

    public function contact(){
        return view('public/contact');
    }

    
}
