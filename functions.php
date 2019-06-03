<?php
require_once('lib/Helpers.php');

// For composer dependencies
require_once get_template_directory() . '/vendor/autoload.php';
require_once 'vendor/autoload.php';

if (class_exists('Handle\\Init')) :
    Handle\Init::register_services();
endif;


//add_filter('acf/settings/load_json', function($paths) {
//    $paths = array(get_template_directory() . '/acf-json');
//
//    if(is_child_theme()){
//        $paths = array(
//            get_stylesheet_directory() . '/acf-json',
//            get_template_directory() . '/acf-json'
//        );
//
//    }
//
//    return $paths;
//});