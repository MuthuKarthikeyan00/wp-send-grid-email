<?php
namespace App;

use \App\Controllers\EnqueueController;
use \App\Controllers\SendGridMailController;
use \App\Controllers\AddAdminMenuController;


class Router
{
    public static $enqueue_controller, $send_grid_mail_controller, $add_admin_menu_controller;


    public function register()
    {
        self::$enqueue_controller = empty( self::$enqueue_controller) ?  new EnqueueController() : self::$enqueue_controller;
        self::$send_grid_mail_controller = empty( self::$send_grid_mail_controller) ?  new SendGridMailController() : self::$send_grid_mail_controller;
        self::$add_admin_menu_controller = empty( self::$add_admin_menu_controller) ?  new AddAdminMenuController() : self::$add_admin_menu_controller;

        add_action('admin_menu',array( $this->add_admin_menu_controller, 'addAdminMenu'));
        add_action('admin_enqueue_scripts',array($this->enqueue_controller,'enqueue'));
        add_action( 'wp_ajax_my_action', array( $this->send_grid_mail_controller,'getPostData'));
    }

}


