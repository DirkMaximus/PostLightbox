<?php
	
	/**
	* Post Lightbox
	*
	* @package       PLB
	* @author        Sean Carner
	* @version       0.0.1
	*
	* @wordpress-plugin
	* Plugin Name:   PostLightbox
	* Plugin URI:    https://developub.com/post-lightbox
	* Description:   Actual simple plugin to lightbox-ify your posts 
	* Version:       0.0.1
	* Author:        Developub
	* Author URI:    https://developub.com
	* Text Domain:   plb
	* Domain Path:   /languages
	*/

	// Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) exit;
	
	define('ENVIRONMENT', 'production');//development|production
	define('ENQUEUE_PLUGIN_PATH', '/wp-content/plugins/post-lightbox/');
	
	function plb_enqueue_scripts() {
		
		switch(ENVIRONMENT) {
			case 'development':
				$ver = time();
			break;
			case 'production':
				$ver = '1.0.0';
			break;
		}
		
		wp_enqueue_script('post-lightbox-js', ENQUEUE_PLUGIN_PATH.'js/PostLightbox.js', null, $ver);
		wp_enqueue_script('lightbox2-js', ENQUEUE_PLUGIN_PATH.'lightbox/js/lightbox.min.js', null, $ver);
		
		wp_enqueue_style('lightbox2-css', ENQUEUE_PLUGIN_PATH.'lightbox/css/lightbox.min.css', null, $ver);
	}
	add_action('wp_enqueue_scripts', 'plb_enqueue_scripts', 20);
	
?>