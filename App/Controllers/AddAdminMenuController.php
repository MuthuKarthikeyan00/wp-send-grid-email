<?php

namespace App\Controllers;

class AddAdminMenuController 
{
    public static $call_backs_controller;

    public function addAdminMenu()
    {
        self::$call_backs_controller = empty( self::$call_backs_controller) ?  new CallBacksController() : self::$call_backs_controller;
        add_menu_page("Register Form","Register Form","manage_options","SendgridEmail",array($this->call_backs_controller,'registerForm'), 'dashicons-store',110);
    }
}

?>