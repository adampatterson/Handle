<?php

namespace Handle\Core;

class Media extends \Axe\Core\Media
{

    public function register()
    {
        parent::__construct();

        add_image_size('background', 1600, 900, true);

        if (is_admin()) {
            // Add image sizes to the editor
            add_filter('image_size_names_choose', [$this, 'add_image_sizes_editor']);
        }
    }

    public function add_image_sizes_editor($sizes)
    {
        return array_merge($sizes, [
            'background' => __('Background'),
        ]);
    }
}
