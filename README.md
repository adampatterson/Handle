# Handle

Handle is a child theme of [Axe](https://github.com/adampatterson/Axe)

Opening `theme-helpers.php` and uncommenting the function on [line 6](https://github.com/adampatterson/Handle/blob/master/lib/theme-helpers.php#L6) and allows the child theme to serve all of your themes assets.

To see Handle in action checkout [Blade](https://github.com/adampatterson/Blade)

### Theme Structure

    Handle/
    ├── acf-json/
    │   └── ...
    ├── assets/
    │   └── ...
    │   └── css
    │   └── fonts
    │   └── img
    │   └── js
    │   └── vendor
    ├── lib/
    │   └── ...
    ├── src/
    │   └── ...
    │   └── js
    │   └── scss
    ├── templates/
    │   └── ...    
    │   └── partials/   
    │   └── content-{slug}.php
    │   └── sub-{parent_slug}.php
    ├── vendor/
    │   └── ...    
    ├── woocommerce/
    │   └── ...
    ├── bower.json
    ├── composer.json
    ├── package.json
    └── webpack.mix.js


#### Local Development

    ln -s ~/Sites/personal/Handle ~/Sites/personal/wordpress.test/wp-content/themes
