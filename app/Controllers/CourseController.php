<?php

namespace App\Controllers;
use App\Models\CourseModel;
use App\Models\CareerModel;
use App\Models\BlogModel;




class CourseController extends BaseController
{

       // initialize some functionalities 
       public function __construct()
       {
           helper(['form', 'url']);
       }
       // THE INDEX METHOD 
       public function index()
       {
           $data = [];
           // get all the courses 
           $courseModel = new courseModel();
          
            $data = [
                'course_data' => $courseModel
                                ->join('career_table', 'career_table.careerId = course_table.coursecareer')
                                ->groupBy('course_table.courseId')
                                ->orderBy('course_table.courseId', 'desc')
                                ->paginate(4),
                'pager' => $courseModel->pager,
            ];
            // this will highlight the couse link as active
           $data['passedLink'] = "course";

           // get all the career items 
           $careerModel = new careerModel();
           $data['career_data'] = $careerModel->findAll();

           // set the validation rules for the form to be submitted 
           $validationRules = [
   
               'courseName' => [
                       'rules' => 'required|max_length[100]',
                       'label' => 'course Name',
                       'errors' => [
                           'required' => 'course name is required',
                           'max_length' => 'course name cannot be more than 20 characters'
                       ]
                   ],

   
               'courseStatus' => [
                   'rules'=>'required',
                   'label' => 'course Status or Visibility',
                   'errors' => [
                       'required' =>'Please choose the course status or visibility setting'
                   ]
                   ],

                'courseDuration' => [
                    'rules'=>'required|integer',
                    'label' => 'course duration',
                    'errors' => [
                        'required' =>'Please indicate the duration in months'
                    ]
                    ],

               'coursecareer' => [
                'rules'=>'required',
                'label' => 'course career or Visibility',
                'errors' => [
                    'required' =>'Please indicate the career under which this course should be'
                ]
                ],
   
               'courseDescription' => [
                   'rules'=>'required|max_length[60000]',
                   'label' => 'course description',
                   'errors' => [
                       'required' =>'Give the general course description.',
                       'max_length' =>'The details cannot be more than 60000 characters'
                   ]
               ],
   
                'coursePic' => [
                   'rules' => 'uploaded[coursePic]|max_size[coursePic,6024]|is_image[coursePic]|mime_in[coursePic,image/jpeg,image/jpg,image/png]',
                       'label' => 'course Banner',
                       'errors' => [
                       'required' => 'This field must be a valid file',
                       'max_size'  => 'The file is too large',
                       'is_image' => 'Only image files is allowed',
                       'mime_in' => 'Only of type jpeg, jpg & png are allowed'
                       ]
               ]
           ];
   
           if($this->request->getMethod() == "post")
           {

           
               $formData = [];
   
               if($this->validate($validationRules))
               {
           
                     $courseBanner_new_name  = "";
                   // process and upload the image here 
                    if($this->request->getFile('coursePic'))
                    {
                       $coursePic = $this->request->getFile('coursePic');
                       $courseBanner_new_name = $coursePic->getRandomName(); // random image name 
                        if(!$coursePic->move('uploads/', $courseBanner_new_name))
                        {
                           return redirect()->to('/dashboard/course')->with('error', 'There was an error in processing the course banner');
                           
                        }    
                     }
   
                   $formData['courseName'] = $this->request->getPost('courseName');
                   $formData['courseStatus'] = $this->request->getPost('courseStatus');
                   $formData['courseDescription'] = $this->request->getPost('courseDescription');
                   $formData['coursecareer'] = $this->request->getPost('coursecareer');
                   $formData['courseDuration'] = $this->request->getPost('courseDuration');
                   $formData['coursePic'] = $courseBanner_new_name;

                   if($courseModel->save($formData)){
                       return redirect()->to('/dashboard/course')->with('success', 'A sub surcourse was added and published');
                   }else{
                       return redirect()->to('/dashboard/course')->with('error', 'an error occured while adding a course. ');
                   }
   
               }else{
                   $data['validation'] = $this->validator;
               }
           }
   
           return view('dashboard/course', $data);
       }
   
   
       //EDIT ROUTE 
       public function edit($courseId)
           {
 
               $data = [];
               $data['passedLink'] = "course";
               $courseModel = new courseModel();
               $course  = $courseModel->find($courseId);
               $data['course_data'] = $course;


   
               if (!$course) {
                   return redirect()->to('/dashboard/course')->with('error', 'course not found');
               }
   
               $careerModel = new careerModel();
               $data['career_data'] = $careerModel->findAll();
    
               // set the validation rules for the form to be submitted 
               $validationRules = [
       
                   'courseName' => [
                           'rules' => 'required|max_length[100]',
                           'label' => 'course Name',
                           'errors' => [
                               'required' => 'course name is required',
                               'max_length' => 'course name cannot be more than 20 characters'
                           ]
                       ],
       
                   'courseStatus' => [
                       'rules'=>'required',
                       'label' => 'course Status or Visibility',
                       'errors' => [
                           'required' =>'Please choose the course status or visibility setting'
                       ]
                       ],
    
                   'coursecareer' => [
                    'rules'=>'required',
                    'label' => 'course career or Visibility',
                    'errors' => [
                        'required' =>'Please indicate the career under which this course should be'
                    ]
                    ],

                    'courseDuration' => [
                        'rules'=>'required|integer',
                        'label' => 'course duration',
                        'errors' => [
                            'required' =>'Please indicate the duration in months'
                        ]
                        ],
       
                   'courseDescription' => [
                       'rules'=>'required|max_length[60000]',
                       'label' => 'course description',
                       'errors' => [
                           'required' =>'Give the general course description.',
                           'max_length' =>'The details cannot be more than 60000 characters'
                       ]
                   ]
               ];

               //check if the file is submitted 
               $updateImg = false;
   
               if($this->request->getFile('coursePic') && $this->request->getFile('coursePic')->isValid())
               {
                   $updateImg = true; 
   
                   $validationRules['coursePic'] = [
                           'rules' => 'uploaded[coursePic]|max_size[coursePic,6024]|is_image[coursePic]|mime_in[coursePic,image/jpeg,image/jpg,image/png]',
                           'label' => 'course Banner',
                           'errors' => [
                           'required' => 'This field must be a valid file',
                           'max_size'  => 'The file is too large',
                           'is_image' => 'Only image files is allowed',
                           'mime_in' => 'Only of type jpeg, jpg & png are allowed'
                           ]
                           ];
               }
   
               // get handle post if the file is submitted 
               if ($this->request->getMethod() == 'post') {
                   
                   $formData = [];
   
                   if ($this->validate($validationRules)) {
   
                       if ($updateImg) {
                           $coursePic = $this->request->getFile('coursePic');
                           $courseBanner_new_name = $coursePic->getRandomName();
                           $data['course_data']['coursePic'] = $courseBanner_new_name;
   
                           if (!$coursePic->move('uploads/', $courseBanner_new_name)) {
                               return redirect()->to('/dashboard/course/edit/'.$data['course_data']['courseId'])->with('error', 'Error in processing the course banner');
                               exit();
                           }
                       }
   
                       $data['course_data']['courseName'] = $this->request->getPost('courseName');
                       $data['course_data']['courseStatus'] = $this->request->getPost('courseStatus');
                       $data['course_data']['courseDescription'] = $this->request->getPost('courseDescription');
                       $data['course_data']['courseDuration'] = $this->request->getPost('courseDuration');
                       $data['course_data']['coursecareer'] = $this->request->getPost('coursecareer');
                      
   
                       // Update the course entry
                       if ($courseModel->update($courseId, $data['course_data'])) {
                           return redirect()->to('/dashboard/course')->with('success', 'course updated successfully');
                       } else {
                           return redirect()->to('/dashboard/course/edit/'.$data['course_data']['courseId'])->with('error', 'Error in updating the course');
                       }
                   } else {
                       $data['validation'] = $this->validator;
                   }
               }

   
               return view('dashboard/edit_course', $data); // Create an edit_course view for editing
           }

           // this method is called only to public to view all the courses 
           public function view_courses(){

            $data = [];
            // get all the courses
            $courseModel = new courseModel();
           
             $data = [
                 'course_data' => $courseModel
                                 ->join('career_table', 'career_table.careerId = course_table.coursecareer')
                                 ->groupBy('course_table.courseId')
                                 ->orderBy('course_table.courseId', 'desc')
                                 ->paginate(6),
                 'pager' => $courseModel->pager,
             ];


            return view('public/courses', $data);
           }

           // view the course in details 
           public function course_details($courseId){
            $data = [];
            // get all the courses
            $courseModel = new courseModel();
            $careerModel = new CareerModel();

            if(!empty(!$courseId) && !is_int($courseId) && !$courseModel->find($courseId)){
                return redirect()->to('/course')->with('error', 'an error occured while adding a course. ');
            }
            $BlogModel = new BlogModel();
            $data['latest_blog_post'] = $BlogModel->recent_blogs();

            $data['course_details'] = $courseModel->find($courseId);// course details

            $data['careerPaths'] = $careerModel
                                    ->select('career_table.*, COUNT(course_table.coursecareer) as total_courses')
                                    ->join('course_table', 'career_table.careerId = course_table.coursecareer')
                                    ->groupBy('career_table.careerId, career_table.careerName')
                                    ->orderBy('career_table.careerId', 'desc')
                                    ->paginate(5);

            $data['similar_courses'] = $courseModel->where('coursecareer',$data['course_details']['coursecareer'])->findAll();
            
            return view('public/course_details', $data);
           }

}
