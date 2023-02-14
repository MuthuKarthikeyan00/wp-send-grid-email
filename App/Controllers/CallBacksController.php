<?php

namespace App\Controllers;

class CallBacksController
{
    public function registerForm()
    {
        return require_once "".PLUGIN_PATH."/App/Views/register-form.php";
    }
}