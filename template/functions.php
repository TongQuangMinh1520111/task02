<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if (!function_exists('twentytwentytwo_support')):

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support()
	{

		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Enqueue editor styles.
		add_editor_style('style.css');
	}

endif;

add_action('after_setup_theme', 'twentytwentytwo_support');

if (!function_exists('twentytwentytwo_styles')):

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles()
	{
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get('Version');

		$version_string = is_string($theme_version) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style('twentytwentytwo-style');
	}

endif;

add_action('wp_enqueue_scripts', 'twentytwentytwo_styles');
add_action('after_setup_theme', 'your_theme_features');

function your_theme_features()
{
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(1280, 720);
}
;
// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
if (!function_exists('mytheme_register_nav_menu')) {

	function mytheme_register_nav_menu()
	{
		register_nav_menus(
			array(
				'primary_menu' => __('Primary Menu', 'text_domain'),
				'footer_menu' => __('Footer Menu', 'text_domain'),
			)
		);
	}
	add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
}
