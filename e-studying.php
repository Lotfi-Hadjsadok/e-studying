<?php

/**
 * Plugin Name: E-Studying
 * Description: E-Studying Plugin
 * Author: Lotfi Hadjsadok
 * Domain Name: e-studying
 * Version: 1.6
 */

use Inc\Config;

if ( ! defined( 'ABSPATH' ) ) {
	die;
}
require_once plugin_dir_path( __FILE__ ) . '/vendor/autoload.php';

define( 'API_POSTS_PER_PAGE', 10 );
define( 'PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
// START SERVICES
( new Config() )->start();

// SEARCH BAR
add_shortcode(
	'search-bar',
	function () {
		ob_start();
		require PLUGIN_DIR . '/templates/search-specialities.php';
		return ob_get_clean();
	}
);