<?php
//require_once('lib/init.php');
//require_once('lib/theme-helpers.php');

//require_once('lib/theme-api.php');
//require_once('lib/theme-rewrite.php');


// For composer dependencies
require_once get_template_directory() . '/vendor/autoload.php';
require_once 'vendor/autoload.php';

class Admin extends \Axe\Setup\Admin
{

    public function __construct()
    {
        parent::__construct();
    }

    public function custom_login_logo()
    {
        echo '<style type="text/css">
        h1 a { background-image: url(' . get_stylesheet_directory_uri() . '/assets/img/adminlogo.png) !important; height: auto;}
        body.login{ background: #fff; }
        </style>';
    }
}

new Admin;





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

/*
 * Used to clear the permalinks so that the custom rewrite rules will work.
add_action( 'after_switch_theme', 'reflush_rules' );

function reflush_rules() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}
*/

/*
// update_option('siteurl','https://wordpress.local');
// update_option('home','https://wordpress.local');

global $wp_rewrite;
$wp_rewrite->flush_rules(
);
*/

/*
function my_acf_init()
{
    acf_update_setting('google_api_key', '{key}');
}

add_action('acf/init', 'my_acf_init');
*/