<?php
$data = get_fields();
$post = get_post();

/*
Add a field group in ACF Options to keep the data nice and clean,
then add a key to /theme-name/lib/Custom/Options.php
 */
$options = Handle\Custom\Options::get();
