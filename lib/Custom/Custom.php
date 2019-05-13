<?php

namespace Handle\Custom;

class Custom
{

    public function __construct()
    {
        add_action('acf/init', [$this, 'my_acf_init']);
    }

    public function my_acf_init()
    {
//        acf_update_setting('google_api_key', '{key}');
    }
}
