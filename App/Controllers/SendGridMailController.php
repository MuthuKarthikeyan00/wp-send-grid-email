<?php

namespace App\Controllers;
use SendGrid\Mail\Mail;

class SendGridMailController 
{

    private $api_key = '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';
    private $email ;
    private $sendgrid ;
    private $response ;

    
    public function send($to, $subject, $body ){

        $this->email = new Mail();
        $this->email->setFrom('personalaccounet@gmail.com', 'Example');
        $this->email->addTo($to);
        $this->email->setSubject($subject);
        $this->email->addContent("text/plain", $body);
        
        $this->sendgrid = new \SendGrid($this->api_key);
        $this->response = $this->sendgrid ->send($this->email);
        
        echo "<pre>";
        print_r($this->response);
        echo "</pre>";       

        echo  wp_json_encode($this->response);

    }

}
