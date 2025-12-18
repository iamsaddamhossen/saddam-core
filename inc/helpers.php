<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function saddam_get_excerpt( $length = 20 ) {
    return wp_trim_words( get_the_excerpt(), $length );
}