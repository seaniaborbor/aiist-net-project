<?php
namespace App\Controllers;
use App\Models\CareerModel;
use App\Models\CourseModel;
use App\Models\BlogModel;

class CareerController extends BaseController
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

        $careerModel = new CareerModel();
    // Assuming $careerModel is your Career model

        $data = [
            'career_data' => $careerModel
                                ->select('career_table.*, COUNT(course_table.coursecareer) as total_courses')
                                ->join('course_table', 'career_table.careerId = course_table.coursecareer')
                                ->groupBy('career_table.careerId, career_table.careerName')
                                ->orderBy('career_table.careerId', 'desc')
                                ->paginate(5),
            'pager' => $careerModel->pager,
        ];


        // highlight the career nave py passing the page name 
        $data['passedLink'] = "career";

        // set the validation rules for the form to be submitted 
        $validationRules = [

            'careerName' => [
                    'rules' => 'required|max_length[100]',
                    'label' => 'careere Name',
                    'errors' => [
                        'required' => 'career name is required',
                        'max_length' => 'career name cannot be more than 10 characters'
                    ]
                ],

            'careerStatus' => [
                'rules'=>'required',
                'label' => 'career Status or Visibility',
                'errors' => [
                    'required' =>'Please choose the career status or visibility setting'
                ]
            ],

            'careerDescription' => [
                'rules'=>'required|max_length[60000]',
                'label' => 'career description',
                'errors' => [
                    'required' =>'Give the general service description.',
                    'max_length' =>'The details cannot be more than 60000 characters'
                ]
            ],

             'careerPic' => [
                'rules' => 'uploaded[careerPic]|max_size[careerPic,6024]|is_image[careerPic]|mime_in[careerPic,image/jpeg,image/jpg,image/png]',
                    'label' => 'Service Banner',
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
                  $careerBanner_new_name  = "";
                // process and upload the image here 
                 if($this->request->getFile('careerPic'))
                 {
                    $careerPic = $this->request->getFile('careerPic');
                    $careerBanner_new_name = $careerPic->getRandomName(); // random image name 
                     if(!$careerPic->move('uploads/', $careerBanner_new_name))
                     {
                        return redirect()->to('/dashboard/career')->with('error', 'There was an error in processing the career banner');
                        exit();
                     }    
                  }

        		$formData['careerName'] = $this->request->getPost('careerName');
        		$formData['careerStatus'] = $this->request->getPost('careerStatus');
        		$formData['careerDescription'] = $this->request->getPost('careerDescription');
        		$formData['careerPic'] = $careerBanner_new_name;

        		if($careerModel->save($formData)){
        			return redirect()->to('/dashboard/career')->with('success', 'A career path added and published successfully');
        		}else{
        			return redirect()->to('/dashboard/career')->with('error', 'Error in saving and publishing a career path');
        		}

        	}else{
        		$data['validation'] = $this->validator;
        	}
        }

        return view('dashboard/career', $data);
    }


    //EDIT ROUTE 
    public function edit($careerId)
        {
            $data = [];
            $data['passedLink'] = "career";

            $careerModel = new careerModel();
            $career  = $careerModel->find($careerId);
            $data['career_data'] = $career;

            if (!$career) {
                return redirect()->to('/dashboard/career')->with('error', 'career not found');
            }

            // Validation rules for editing career
            $validationRules = [

                'careerName' => [
                        'rules' => 'required|max_length[100]',
                        'label' => 'careere Name',
                        'errors' => [
                            'required' => 'career name is required',
                            'max_length' => 'career name cannot be more than 10 characters'
                        ]
                    ],
    
                'careerStatus' => [
                    'rules'=>'required',
                    'label' => 'career Status or Visibility',
                    'errors' => [
                        'required' =>'Please choose the career status or visibility setting'
                    ]
                ],
    
                'careerDescription' => [
                    'rules'=>'required|max_length[60000]',
                    'label' => 'career description',
                    'errors' => [
                        'required' =>'Give the general service description.',
                        'max_length' =>'The details cannot be more than 60000 characters'
                    ]
                ]
            ];

            //check if the file is submitted 
            $updateImg = false;

            if($this->request->getFile('careerPic') && $this->request->getFile('careerPic')->isValid())
            {
                $updateImg = true; 

                $validationRules['careerPic'] = [
                        'rules' => 'uploaded[careerPic]|max_size[careerPic,6024]|is_image[careerPic]|mime_in[careerPic,image/jpeg,image/jpg,image/png]',
                        'label' => 'Service Banner',
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
                        $careerPic = $this->request->getFile('careerPic');
                        $careerBanner_new_name = $careerPic->getRandomName();
                        $data['career_data']['careerPic'] = $careerBanner_new_name;

                        if (!$careerPic->move('uploads/', $careerBanner_new_name)) {
                            return redirect()->to('/dashboard/career')->with('error', 'Error in processing the career banner');
                            exit();
                        }
                    }

                    $data['career_data']['careerName'] = $this->request->getPost('careerName');
                    $data['career_data']['careerStatus'] = $this->request->getPost('careerStatus');
                    $data['career_data']['careerDescription'] = $this->request->getPost('careerDescription');
                   

                    // Update the career entry
                    if ($careerModel->update($careerId, $data['career_data'])) {
                        return redirect()->to('/dashboard/career')->with('success', 'career updated successfully');
                    } else {
                        return redirect()->to('/dashboard/career')->with('error', 'Error in updating the career');
                    }
                } else {
                    $data['validation'] = $this->validator;
                }
            }

            $data['career'] = $career;

            return view('dashboard/edit_career', $data); // Create an edit_career view for editing
        }


        public function view_career_paths(){
            $data = [];

            $careerModel = new CareerModel();
            // Assuming $careerModel is your Career model

            $data = [
                'career_pathways' => $careerModel
                                    ->select('career_table.*, COUNT(course_table.coursecareer) as total_courses')
                                    ->join('course_table', 'career_table.careerId = course_table.coursecareer')
                                    ->groupBy('career_table.careerId, career_table.careerName')
                                    ->orderBy('career_table.careerId', 'desc')
                                    ->paginate(5),
                'pager' => $careerModel->pager,
            ];

            return view('public/career_paths', $data);
        }

        // read in detail about a career path 
        public function view_career_path_detail($careerPathId){
            $data = [];
            // get all the courses
            $courseModel = new CourseModel();
            $careerModel = new CareerModel();

            if(!empty(!$careerPathId) && !is_int($careerPathId) && !$careerModel->find($courcareerPathIdseId)){
                return redirect()->to('/career_paths')->with('error', 'The career path you requested no longer exists ');
            }
            $BlogModel = new BlogModel();
            $data['latest_blog_post'] = $BlogModel->recent_blogs();

            $data['career_path_details'] = $careerModel->find($careerPathId);// career path details

            $data['careerPaths'] = $careerModel
                                    ->select('career_table.*, COUNT(course_table.coursecareer) as total_courses')
                                    ->join('course_table', 'career_table.careerId = course_table.coursecareer')
                                    ->groupBy('career_table.careerId, career_table.careerName')
                                    ->orderBy('career_table.careerId', 'desc')
                                    ->paginate(5);

            $data['career_courses'] = $courseModel->where('coursecareer',$data['career_path_details']['careerId'])->findAll();
            
            // load view
            return view('public/career_path_details', $data);
        }

}
