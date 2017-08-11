<?php
// For composer dependencies
require 'vendor/autoload.php';

require_once( 'lib/init.php' );
require_once( 'lib/custom.php' );
require_once( 'lib/theme-helpers.php' );
//require_once( 'lib/theme-api.php' );
//require_once( 'lib/theme-rewrite.php' );

/*
add_filter('acf/settings/load_json', function($paths) {
    $paths = array(get_template_directory() . '/acf-json');

    if(is_child_theme()){
        $paths = array(
            get_stylesheet_directory() . '/acf-json',
            get_template_directory() . '/acf-json'
        );

    }

    return $paths;
});
*/

