<?php
/*
Admin-Bar-in-Fullscreen-Mode
=== Admin Bar in Fullscreen Mode ===
Contributors: Chetan Plugin Name: Admin Bar in Fullscreen Mode Description: Adds the missing WordPress admin bar in WordPress Gutenberg editor when it is fullscreen. Author: Krish Dev Author URI: https://krish.dev

== Description == When a new Page or Post is being edited in the WordPress Gutenberg editor in Fullscreen mode the WordPress admin bar aka The Toolbar will not appear by default. This plugin fixes that and shows the admin bar even when the WordPress editor is Fullscreen. There are no settings for the plugin. Just install and activate.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'WEBNOLO_ADMIN_BAR_FULLSCREEN_MODE', '1.0.0' );

add_action( 'enqueue_block_editor_assets', 'wbnl_admin_css' );
/**
 * Loads custom CSS in the backend on WP editor pages.
 */
function wbnl_admin_css() {
	if ( ! is_admin_bar_showing() ) {
		return;
	}

	wp_enqueue_style( 'wbnl_admin_bar_fullscreen', plugin_dir_url( __FILE__ ) . 'assets/css/block-editor.css', array(), WEBNOLO_ADMIN_BAR_FULLSCREEN_MODE );
}