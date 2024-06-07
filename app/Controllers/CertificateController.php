<?php
namespace App\Controllers;
use App\Models\CourseModel;
use App\Models\CertificateModel;

class CertificateController extends BaseController
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

         // highlight the career nave py passing the page name 
         $data['passedLink'] = "certificates";

         $courses = new CourseModel();
         $certificateModel  = new CertificateModel();

         $data['certificates'] = $certificateModel->orderBy('dateAdded', 'desc')->findAll();
         $data['courses'] = $courses->findAll();

           // set the validation rules for the form to be submitted 
        $validationRules = [

            'studentName' => [
                    'rules' => 'required',
                    'label' => 'Name of Student',
                    'errors' => [
                        'required' => 'The name of the student/Receiver',
                    ]
                ],
            
            'duration' => [
                    'rules' => 'required',
                    'label' => 'Course Duration',
                    'errors' => [
                        'required' => 'The duration of the course',
                    ]
                ],
            
            'certificateType' => [
                    'rules' => 'required',
                    'label' => 'Certificate Name',
                    'errors' => [
                        'required' => 'The type of certificate is a must',
                    ]
                ],
            
            'course' => [
                    'rules' => 'required',
                    'label' => 'Course',
                    'errors' => [
                        'required' => 'Please indicate the course',
                    ]
                ],
            
            'dateIssued' => [
                    'rules' => 'required',
                    'label' => 'Issuance Date',
                    'errors' => [
                        'required' => 'You must include the date the certificate was issued',
                    ]
                ],
                
            'certId' => [
                    'rules' => 'required|max_length[6]',
                    'label' => 'Certificate Id',
                    'errors' => [
                        'required' => 'The Certificate ID',
                        'max_length' => 'The maximum length of the certificate id is 6'
                    ]
                ],
        ];

        if($this->request->getMethod() == "post"){
            
            if(!$this->validate($validationRules)){
                $data['validation'] = $this->validator;
            }else{
                
                $formData['certId'] = $this->request->getPost('certId');
                $formData['dateIssued'] = $this->request->getPost('dateIssued');
                $formData['course'] = $this->request->getPost('course');
                $formData['certificateType'] = $this->request->getPost('certificateType');
                $formData['studentName'] = $this->request->getPost('studentName');
                $formData['duration'] = $this->request->getPost('duration');

                //save the data in the database 
                if($certificateModel->save($formData)){
                    return redirect()->back()->with('success', 'You successfully issued a certificate');
                }else{
                    return redirect()->back()->with('error', 'There is an error while issuing the certificate');
                }
            }
        }

        return view('dashboard/certificate', $data);
    }

    // view certificate info on the admin dashboard
    public function view_certificate($cert_id){
        // highlight the career nave py passing the page name 
        $data['passedLink'] = "certificates";

        $courses = new CourseModel();
        $certificateModel  = new CertificateModel();

        $data['certificate'] = $certificateModel->where("certId", $cert_id)->find();

        return view('dashboard/certificate_view', $data);

    }

    // verify certificate
    public function vfy($certificate_serial){

        $data['request'] = [];

        $courses = new CourseModel();
        $certificateModel  = new CertificateModel();

        if($certificate_serial == 'v'){
            $data['request'] = "verify_certificate";
        }else{
            $data['certificate'] = $certificateModel->where("certId", $certificate_serial)->find();
        }

        return view("public/verify_certificate", $data);
    }


    
}
