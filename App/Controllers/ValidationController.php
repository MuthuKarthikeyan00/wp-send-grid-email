<?php


namespace App\Controllers;

class ValidationController
{
    /**
     * @param $input
     * @return void
     */
    public function validate($input){
        self::sanitize_input($input);
    }

    /**
     * @param $input
     * @return string
     */
    public function sanitize_input($input) {
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        return wp_kses_post(trim($input));
    }

}