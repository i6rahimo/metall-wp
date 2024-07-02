<?php






add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( get_template_directory() . '/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}


require __DIR__ . '/theme-options.php';
require __DIR__ . '/carbon-fields-index-page.php';
require __DIR__ . '/carbon-fields-about-page.php';
require __DIR__ . '/carbon-fields-contact-page.php';
require __DIR__ . '/carbon-fields-review-page.php';
require __DIR__ . '/carbon-fields-shipment-page.php';