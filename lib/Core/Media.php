<?php

namespace Handle\Core;

class Media
{
    public function register()
    {
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
            'square'   => __('Square'),
        ));
    }
}
