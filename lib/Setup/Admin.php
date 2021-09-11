<?php

namespace Handle\Setup;

class Admin extends \Axe\Setup\Admin {

	public function __construct() {
		parent::__construct();
	}

	public function custom_login_logo() {
		echo '<style type="text/css">
    h1 a { 
    	background-image: url(' . get_stylesheet_directory_uri() . '/assets/img/adminlogo.png) !important; height: auto;
    }
    body.login{ 
    	background: #fff; 
    }
</style>';
	}
}

