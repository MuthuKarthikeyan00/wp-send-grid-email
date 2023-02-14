<?php

/**
 * Plugin name: Sendgrid Email
 * Plugin URI: http://www.SendgridEmail.org
 * Description:SendgridEmail
 * Author: SendgridEmail
 * Author URI: https://www.SendgridEmail.org
 * Version: 1.0
 * Slug: SendgridEmail
 * Text Domain: SendgridEmail
 * Domain Path: /i18n/languages/
 * Requires at least: 4.6.1
 * WC requires at least: 3.0
 * WC tested up to: 7.3
 */


defined('ABSPATH') or die('not access');

if(!defined('PLUGIN_PATH')){
    define('PLUGIN_PATH',plugin_dir_path(__FILE__));
} 
if(!defined('PLUGIN_URL')){
    define('PLUGIN_URL',plugin_dir_url(__FILE__));
} 
if(!defined('PLUGIN')){
    define('PLUGIN', plugin_basename(__FILE__));
} 

if(file_exists(  dirname(__FILE__).'/vendor/autoload.php' )){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

if(class_exists('App\\Router')){
     new App\Router();
}










