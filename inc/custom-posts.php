<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function saddam_register_portfolio_cpt() {
    register_post_type('portfolio', [
        'labels' => [
            'name' => 'Portfolio',
            'singular_name' => 'Portfolio Item',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title','editor','thumbnail'],
    ]);
}
add_action('init', 'saddam_register_portfolio_cpt');