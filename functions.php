<?php

require_once( 'lib/init.php' );
require_once( 'lib/custom.php' );

// Custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	    h1 a { background-image: url(' . get_bloginfo( 'template_directory' ) . '/assets/img/adminlogo.png) !important; height: auto;}
	    body.login{ background: #fff; }
	    </style>';
}

add_action( 'login_head', 'custom_login_logo' );

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

