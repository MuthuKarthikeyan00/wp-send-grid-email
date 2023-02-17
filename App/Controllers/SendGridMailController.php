<?php

namespace App\Controllers;
use SendGrid\Mail\Mail;

class SendGridMailController 
{

    private $api_key = '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';
    public $to_mail='muthukarthikeyanpmk@gmail.com';
    private $email ;
    private $sendgrid ;
    private $response ;
    public static $validation_controller;

    /**
     * @return void
     */

    public function getPostData(){

        self::$validation_controller = empty( self::$validation_controller) ?  new ValidationController() : self::$validation_controller;

        if ( isset( $_POST['subject'] )  &&  isset( $_POST['body'] )  && wp_verify_nonce( $_POST['my_form_nonce'], 'my_form_action' ) ) {
            $_POST['subject']= self::$validation_controller->validate( $_POST['subject']);
            $_POST['body']= self::$validation_controller->validate( $_POST['body']);
            $this->response = $this->send($this->to_mail,$_POST['subject'],$_POST['body']);
        }else{
            wp_send_json_error(array("response" => 0));
        }

        
    }


    /**
     * @param $to
     * @param $subject
     * @param $body
     * @return void
     * @throws \SendGrid\Mail\TypeException
     */

    public function send($to, $subject, $body ){

        $this->email = new Mail();
        $this->email->setFrom('personalaccounet@gmail.com', 'Example');
        $this->email->addTo($to);
        $this->email->setSubject($subject);
        $this->email->addContent("text/plain", $body);

        $this->sendgrid = new \SendGrid($this->api_key);
        $this->response = $this->sendgrid ->send($this->email);

        // echo "<pre>";
        // print_r($this->response);
        // echo "</pre>";

         wp_send_json_success(array("response" => $this->response->statusCode()));

    }

}
