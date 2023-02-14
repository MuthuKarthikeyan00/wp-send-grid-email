<?php



namespace App;

use \App\Controllers\CallBacksController;
use \App\Controllers\EnqueueController;
use \App\Controllers\SendGridMailController;

class Router
{
    public $enqueue_controller;
    public $call_backs_controller;
    public $send_grid_mail_controller;
    public $to_mail='muthukarthikeyanpmk@gmail.com';
    public $response;

    public function __construct()
    {
        $this->register();
    }
    public function register()
    { 
        $this->enqueue_controller = new EnqueueController();
        $this->call_backs_controller = new CallBacksController();
        $this->send_grid_mail_controller = new SendGridMailController();

        add_action('admin_menu',array( $this, 'addAdminMenu'));
        add_action('admin_enqueue_scripts',array($this->enqueue_controller,'enqueue'));
        add_action( 'wp_ajax_my_action', array($this,'getPostData'));
    }

    public function addAdminMenu(){     

            add_menu_page("Register Form","Register Form","manage_options","SendgridEmail",array($this->call_backs_controller,'registerForm'), 'dashicons-store',110);
    }
    public function getPostData(){  
        
        $this->response = $this->send_grid_mail_controller->send($this->to_mail,$_POST['subject'],$_POST['body']);
        // echo $this->response;
    }    
}


