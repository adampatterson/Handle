<?php

namespace Handle\Core;

class Media
{

    public function register()
    {
        add_image_size('post_movies', 400, 225, true);

        if (is_admin()) {
            // Add image sizes to the editor
            add_filter('image_size_names_choose', array($this, 'add_image_sizes_editor'));
        }
    }

    public function add_image_sizes_editor($sizes)
    {
        return array_merge($sizes, array(
            'featured' => __('Featured'),
            'gallery'  => __('Gallery'),
            'grid'     => __('Grid'),
            'Square'   => __('Square'),
        ));
    }
}
