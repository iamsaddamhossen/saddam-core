<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function saddam_core_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', ['search-form','comment-form','gallery'] );

    register_nav_menus([
        'primary' => __( 'Primary Menu', 'saddam-core' ),
    ]);
}
add_action( 'after_setup_theme', 'saddam_core_setup' );