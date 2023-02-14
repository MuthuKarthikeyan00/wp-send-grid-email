<?php

namespace App\Controllers;

class EnqueueController 
{
    public function enqueue(){
        wp_enqueue_script('mypluginstyle',PLUGIN_URL.'Assets/Js/script.js');
    }
}

?>