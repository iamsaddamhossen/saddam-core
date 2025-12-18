<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function saddam_core_assets() {
    wp_enqueue_style(
        'saddam-core-style',
        SADDAM_CORE_URI . '/assets/css/main.css',
        [],
        SADDAM_CORE_VERSION
    );

    wp_enqueue_script(
        'saddam-core-script',
        SADDAM_CORE_URI . '/assets/js/main.js',
        ['jquery'],
        SADDAM_CORE_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'saddam_core_assets' );