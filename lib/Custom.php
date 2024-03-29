<?php

namespace Handle;

class Custom
{

    public function __construct()
    {
        add_action('acf/init', [$this, 'acf_init']);

//        add_filter('acf/settings/save_json', [$this, 'acf_save']);
//        add_filter('acf/settings/load_json', [$this, 'acf_load']);
    }

    public function acf_init()
    {
//        acf_update_setting('google_api_key', '{key}');
    }

    public function acf_save()
    {
        return get_template_directory() . '/acf-json';
    }

    public function acf_load()
    {
        $paths = array(get_template_directory() . '/acf-json');

        if (is_child_theme()) {
            $paths[] = get_stylesheet_directory() . '/acf-json';
        }

        return $paths;
    }
}
