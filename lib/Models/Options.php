<?php

namespace Handle\Models;

class Options extends \Axe\Models\Options
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

    /**
     * This will overwrite Axe Options allowing you
     * to customize what's returned by Options
     *
     * @param $key
     * @return array|mixed
     */
    static function get($key = null)
    {
        // Specify ACF Groups used on the options page
        $options = [
//            'contact'       => get_field('contact', 'option'),
//            'theme'         => get_field('theme', 'option'),
//            '404_page'      => get_field('404', 'option'),
        ];

        if (_has($key, $options)) {
            return $options[$key];
        }

        return $options;
    }

}
