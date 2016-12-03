<?php
/****************************************
 * Misc Theme Functions
 *****************************************/

// Custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	    h1 a { background-image: url(' . get_bloginfo( 'template_directory' ) . '/assets/img/adminlogo.png) !important; height: auto;}
	    body.login{ background: #fff; }
	    </style>';
}

add_action( 'login_head', 'custom_login_logo' );