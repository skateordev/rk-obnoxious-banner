<?php

/**
* Plugin Name: Obnoxious Banner
* Plugin URI: https://github.com/skateordev/rk-obnoxious-banner
* Description: Add a banner or announcement at the top of the page, optionally with scrolling text.
* Version: 0.0.1
* Author: Rob Kerr
* Author URI: http://skateor.dev
* License: GPL3
* Text Domain: rk_obnoxious_banner
*/

// WordPress is not initialized, abort
if ( ! defined('ABSPATH') ) {
	die;
}

class ObnoxiousBanner {
	function __construct(string $message) {
		add_action('wp_head', array($this, 'obnoxious_banner'));
	}

	function obnoxious_banner($message) {
		echo "<div id='obnoxious-banner'>
			<span class='banner-text'>$message</span>
		</div>";
	}
}

// Initialize the class
if (class_exists('ObnoxiousBanner')) {
	$obnoxiousBanner = new ObnoxiousBanner('hello bonjour!');
}

wp_enqueue_style('rk_obnoxious_banner_styles', plugin_dir_url( __FILE__ ) . '/public/css/rk_obnoxious_banner.css');
