<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// Define constants
define( 'SADDAM_CORE_VERSION', '1.0.0' );
define( 'SADDAM_CORE_PATH', get_template_directory() );
define( 'SADDAM_CORE_URI', get_template_directory_uri() );

// Include files
require_once SADDAM_CORE_PATH . '/inc/setup.php';
require_once SADDAM_CORE_PATH . '/inc/enqueue.php';
require_once SADDAM_CORE_PATH . '/inc/custom-posts.php';
require_once SADDAM_CORE_PATH . '/inc/meta-fields.php';
require_once SADDAM_CORE_PATH . '/inc/shortcodes.php';
require_once SADDAM_CORE_PATH . '/inc/helpers.php';