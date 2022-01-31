<?php

namespace Handle\Custom;

class Model extends \Axe\Core\Model
{

    /*
    Add a field group in ACF Options to keep the data nice and clean,
    then add a key to /theme-name/lib/Custom/Options.php
    */
    static function options()
    {
        return Options::get();
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