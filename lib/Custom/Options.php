<?php

namespace Handle\Custom;

class Options extends \Axe\Core\Options
{

    public function register()
    {
        parent::__construct();

        // Register new Admin option pages
        /*
        if (function_exists('acf_add_options_page')) {
            acf_add_options_page();
            acf_add_options_sub_page('More Settings');
        }
        */
    }

    static function get($key = null)
    {
        // Specify ACF Groups used on the options page
        $options = [
            //            'contact' => get_field('contact', 'option'),
        ];

        if (array_key_exists($key, $options)) {
            return $options[$key];
        }

        return $options;
    }

}
