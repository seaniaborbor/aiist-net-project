<?php

namespace App\Controllers;

use App\Models\CareerModel;
use App\Models\CourseModel;
use App\Models\BlogModel;
use App\Models\CommentModel;


class BlogController extends BaseController
{
      // initialize some functionalities 
      public function __construct()
      {
          helper(['form', 'url']);
      }
    //admin dashboard for managing blog
    public function index()
    {
        $data = [];
        
        $BlogModel = new BlogModel();
        $data = [
            'all_blogs' => $BlogModel->orderBy('blog.id', 'desc')->paginate(6),
            'pager' => $BlogModel->pager,
        ];
        $data['passedLink'] = "blog";
        $data['userData'] = session()->get('userData');

        $CourseModel = new CourseModel();
        $data['all_categories'] = $CourseModel->findAll();

        // validata the form if submitted 
        $rules = [
            'title' => [
                'rules' => "required|min_length[6]|max_length[200]",
                'label' => "Post headline",
                'errors' => [
                    'required' => 'This headline field is a must',
                    'min_length'  => 'The headline is too short',
                    'max_length' => 'Title too long'
                ]
            ],

            'featureImg' => [
                'rules' => 'uploaded[featureImg]|max_size[featureImg,6024]|is_image[featureImg]|mime_in[featureImg,image/jpeg,image/jpg,image/png]',
                'label' => 'Feature Image',
                'errors' => [
                    'required' => 'This field must be a valid file',
                    'max_size'  => 'The file is too large',
                    'is_image' => 'Only image files is allowed',
                    'mime_in' => 'Only of type jpeg, jpg & pngs are allowed'
                ]
            ],

            'postbody' => [
                'rules' => "required|min_length[200]|max_length[5000]",
                'label' => "Blog content",
                'errors' => [
                    'required' => 'This blog content field is a must',
                    'min_length'  => 'The content is too short',
                    'max_length' => 'The content too long'
                ]
            ],

             'category' => [
                'rules' => "required|min_length[6]|max_length[200]",
                'label' => "Post category ",
                'errors' => [
                    'required' => 'This category field is a must',
                    'min_length'  => 'The category is too short',
                    'max_length' => 'category too long'
                ]
            ]
        ];

        // a post request is made
        if($this->request->getMethod() == "post")
        {
            // check if form is validated 
            if($this->validate($rules))
            {
                $formData = []; // array of data to be saved initialized 
                $featureImg_newname = "";
                // process and upload the image here 
                 if($this->request->getFile('featureImg'))
                 {
                    $featureImg = $this->request->getFile('featureImg');
                    $featureImg_newname = $featureImg->getRandomName(); // random image name 
                     if(!$featureImg->move('uploads/', $featureImg_newname))
                     {
                        return redirect()->to('/dashboard/blog')->with('error', 'Error in uploading the the feature image');
                        exit();
                     }    
                  }

                  // populate array to be save - say get form data to be save
                  $formData['title'] = $this->request->getPost('title');
                  $formData['featureImg'] = $featureImg_newname;
                  $formData['postbody'] = $this->request->getPost('postbody');
                  $formData['category'] = $this->request->getPost('category');

                  if($BlogModel->save($formData))
                  {
                        return redirect()->to('/dashboard/blog')->with('success', 'You successfully published a blog post');
                   }

            }else{
                $data['validation'] = $this->validator;
            }
        }

       return view("dashboard/blog", $data);
    }


    // ================= EDIT BLOG METHOD ==============

    public function edit($id)
    {
         if(empty($id) || !is_numeric($id))
         {
            return redirect()->to('/dashboard/blog')->with('error', 'Unknown Error');
            exit();
         }

        $data = [];
         $data['passedLink'] = "blog";
        $data['userData'] = session()->get('userData');
        
        $BlogModel = new BlogModel();
        $data['blog_data'] = $BlogModel->find($id);

        $CourseModel = new CourseModel();
        $data['all_categories'] = $CourseModel->findAll();

        if(empty($data['blog_data'])){
        return redirect()->to('/dashboard/blog')->with('error', 'Unknown Error');
        exit();

      }

        $CourseModel = new CourseModel();
        $data['all_categories'] = $CourseModel->findAll();

        // validata the form if submitted 
        $rules = [
            'title' => [
                'rules' => "required|min_length[6]|max_length[200]",
                'label' => "Post headline",
                'errors' => [
                    'required' => 'This headline field is a must',
                    'min_length'  => 'The headline is too short',
                    'max_length' => 'Title too long'
                ]
            ],

            'postbody' => [
                'rules' => "required|min_length[200]|max_length[5000]",
                'label' => "Blog content",
                'errors' => [
                    'required' => 'This blog content field is a must',
                    'min_length'  => 'The content is too short',
                    'max_length' => 'The content too long'
                ]
            ],

             'category' => [
                'rules' => "required|min_length[6]|max_length[100]",
                'label' => "Post category ",
                'errors' => [
                    'required' => 'This category field is a must',
                    'min_length'  => 'The category is too short',
                    'max_length' => 'category too long'
                ]
            ]
        ];

        $update_featureImg = false;

        if($this->request->getFile('featureImg') && $this->request->getFile('featureImg')->isValid())
         {
               $rules['featureImg'] = [
                'rules' => 'uploaded[featureImg]|max_size[featureImg,6024]|is_image[featureImg]|mime_in[featureImg,image/jpeg,image/jpg,image/png]',
                'label' => 'Feature Image',
                'errors' => [
                    'required' => 'This field must be a valid file',
                    'max_size'  => 'The file is too large',
                    'is_image' => 'Only image files is allowed',
                    'mime_in' => 'Only of type jpeg, jpg & pngs are allowed'
                ]
            ];

            $update_featureImg = true;

          }
        // a post request is made
        if($this->request->getMethod() == "post")
        {
            // check if form is validated 
            if($this->validate($rules))
            {
                $formData = []; // array of data to be saved initialized 
                $featureImg_newname = "";

                // process and upload the image here  if it is meant
                 if($update_featureImg)
                 {
                    $featureImg = $this->request->getFile('featureImg');
                    $featureImg_newname = $featureImg->getRandomName(); // random image name 
                     if(!$featureImg->move('uploads/', $featureImg_newname))
                     {
                        return redirect()->to('/dashboard/blog')->with('error', 'Error in uploading the the feature image');
                        exit();
                     }    
                  }

                  // populate array to be save - say get form data to be save
                  $formData['title'] = $this->request->getPost('title');
                  $formData['featureImg'] = $featureImg_newname;
                  $formData['postbody'] = $this->request->getPost('postbody');
                  $formData['category'] = $this->request->getPost('category');

                  if($BlogModel->update($id, $formData))
                  {
                        return redirect()->to('/dashboard/blog')->with('success', 'You successfully published a blog post');
                   }

            }else{
                $data['validation'] = $this->validator;
            }
        }

       return view("dashboard/edit_blog", $data);
    }


    public function delete($id){
      if(!empty($id) && !is_numeric($id)){
        return redirect()->to('/dashboard/blog/')->with('error', 'Invalid perimeter');
      }

      $db = new BlogModel();
      if($db->find($id) && $db->delete($id)){
        return redirect()->to('/dashboard/blog/')->with('success', 'Blog post deleted successfully');
      }else{
        return redirect()->to('/dashboard/blog/')->with('error', 'Failed to delete blog');
      }
    }

    // view all blogs - first 6 latest 
    public function view_blogs(){
        $data = [];
            // get all the blogs
        $BlogModel = new BlogModel();
           
             $data = [
                 'all_blogs' => $BlogModel->table('blog')
                 ->select('blog_comments.id as coment_id, blog.*, blog.id as blg_id, 
                 blog.createdAt as posted_date, COUNT(blog_comments.id) AS comment_count')
                 ->join('blog_comments', 'blog_comments.postId = blog.id', 'left')
                 ->groupBy('blog.id')
                 ->orderBy('blog.id', 'desc')
                                ->paginate(6),
                 'pager' => $BlogModel->pager,
             ];

            return view('public/blog', $data);
    }

    // read blog in details 
    public function blog_details($blogId){
        $data = [];
        // get all the courses
        $courseModel = new courseModel();
        $careerModel = new CareerModel();
        $BlogModel = new BlogModel();
        $comment_db = new CommentModel();


        if(!empty(!$blogId) && !is_int($blogId) && !$BlogModel->find($blogId)){
            return redirect()->to('/course')->with('error', 'an error occured while adding a course. ');
        }
        $data['latest_blog_post'] = $BlogModel->recent_blogs();

        $data['blog_details'] = $BlogModel->find($blogId);// course details
        $data['post_comments'] = $comment_db->where('postId', $blogId)->findAll();

        $data['careerPaths'] = $careerModel
                                ->select('career_table.*, COUNT(course_table.coursecareer) as total_courses')
                                ->join('course_table', 'career_table.careerId = course_table.coursecareer')
                                ->groupBy('career_table.careerId, career_table.careerName')
                                ->orderBy('career_table.careerId', 'desc')
                                ->paginate(5);

        //SAVE COMMENT OF A POST REQUEST IS MADE 
                    if($this->request->getMethod() == 'post'){
                
                            //validation rules 
                            $validationRules = [
                                'comment' => [
                                    'rules' => "required|min_length[20]|max_length[1000]",
                                    'label' => "Comment",
                                    'errors' => [
                                        'required' => 'This comment field cannot be blank',
                                        'min_length'  => 'The headline is too short',
                                        'max_length' => 'The name too long'
                                    ]
                                ],
                                'name' => [
                                    'rules' => "required|min_length[5]|max_length[20]",
                                    'label' => "Name",
                                    'errors' => [
                                        'required' => 'This name field cannot be blank',
                                        'min_length'  => 'The name is too short',
                                        'max_length' => 'The name too long'
                                    ]
                                ],
                                'email' => [
                                    'rules' => "required|valid_email|max_length[20]",
                                    'label' => "Email",
                                    'errors' => [
                                        'required' => 'You need to have to provide your email',
                                        'valid_email'  => 'The email you provide is not valid',
                                        'max_length' => 'The email too long'
                                    ]
                                ],
                            ];
                            // check the validation
                            if($this->validate($validationRules)){
                                // if the validation is okay, get the data and save in the db
                                $formData['comment'] = $this->request->getPost('comment');
                                $formData['name'] = $this->request->getPost('name');
                                $formData['email'] = $this->request->getPost('email');
                                $formData['postId'] = $blogId;
                                
                                // check if the comment is save in the database 
                                if($comment_db->save($formData)){
                                    return redirect()->back()->with('success', 'Your coments have been save successfully.');
                                }else{
                                    return redirect()->back()->with('error', 'There was an error in saving your comments');
                                }
                
                            }else{
                                $data['validation'] = $this->validator;
                            }         
        }
        
        return view('public/read_blog', $data);
       }

       // this method allows comments on blog 
       public function comment_on_blog(){

       }

}
