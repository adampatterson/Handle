<?php

namespace Handle\Custom;

class Custom
{

    public function __construct()
    {
        add_action('acf/init', [$this, 'acf_init']);
    }

    public function acf_init()
    {
//        acf_update_setting('google_api_key', '{key}');
    }
}
