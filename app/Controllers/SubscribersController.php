<?php

namespace App\Controllers;
use App\Models\SubscrsiberModel;


class SubscribersController extends BaseController
{
    public function index(): string
    {
        return view('in the subscriber controller ');
    }


    public function subscribe(){
        $SubscrsiberModel = new SubscrsiberModel();

        $validationRules['subscriberEmail'] = [
            'rules' => 'required|valid_email|is_unique[subscribers.subscriberEmail]',
            'label' => 'Subscriber Email',
                           'errors' => [
                           'required' => 'Your email is needed to add you to our subscription list. You forgot to provide one',
                           'valid_email'  => 'Please provide a valid email. You seem to have entered it in wrong format',
                           'is_unique' => 'The email you provide is already on our subscription list. ',
                           ]
        ];

        if($this->request->getMethod()=== 'post'){
            if($this->validate($validationRules)){
                $data['subscriberEmail'] = $this->request->getPost("subscriberEmail");
                if($SubscrsiberModel->save($data)){
                    // send the subscriber thank you message 
                    $to = $this->request->getPost("subscriberEmail");
                    $subject = "Subscription to Aiist.net";
                    $message = "Hi, <br> Your subscription to AIIST News letter is successful. <br> Thank you very much for subscribing to our site and we look forward to your visitation next time.";

                    $email = \Config\Services::email();
                    $email->setFrom("tarnuepb@gmail.com","Aiist.net");
                    $email->setTo($to);
                    $email->setSubject($subject);
                    $email->setMessage($message);
                    if($email->send()){
                        
                    }else{
                        print_r($email->printDebugger(['headers']));
                    }



                    return view('/public/subscribeber_success_page', $data);
                }else{
                    return view('/public/subscriber_failure_page',$data);
                }
            }else{
                $data['validation'] = $this->validator;
                return view('/public/subscriber_validation_error_page', $data);
            }
        }

        echo "Subscription successful";
    }
}
