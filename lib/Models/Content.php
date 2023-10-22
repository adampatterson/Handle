<?php

namespace Handle\Models;

class Content extends \Axe\Models\Content
{

    public function register()
    {
        parent::__construct();
    }

    /*
   static function getFeaturedNews()
    {
        return new \WP_Query([
            'posts_per_page' => 4,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'category_name'  => 'featured'
        ]);
    }
 */
}
