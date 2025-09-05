<?php

function menus()
{
	$locations = array(
		'primary_menu' => 'Menu Główne',
		'footer_menu_1' => 'Menu w stopce 1',
		'footer_menu_2' => 'Menu w stopce 2',
	);
	register_nav_menus($locations);
}
add_action('init', 'menus');

function add_styles()
{
	wp_enqueue_style('style', get_template_directory_uri() . '/scss/main.min.css', array(), '1.1');
}
add_action('wp_enqueue_scripts', 'add_styles', 55);

function add_scripts()
{
	wp_enqueue_script('lib', get_template_directory_uri() . '/js/script.js');
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.1');
}
add_action('wp_footer', 'add_scripts');

function remove_version_generator()
{
	return '';
}
add_filter('the_generator', 'remove_version_generator');

function remove_version_from_style_js($src)
{
	if (strpos($src, 'ver=' . get_bloginfo('version')))
		$src = remove_query_arg('ver', $src);
	return $src;
}
add_filter('style_loader_src', 'remove_version_from_style_js');
add_filter('script_loader_src', 'remove_version_from_style_js');

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

//add_filter('wp_calculate_image_srcset', '__return_false');

add_filter('nav_menu_link_attributes', function ($atts, $item, $args, $depth) {
	if (in_array('button', (array) $item->classes)) {
		$atts['class'] = (isset($atts['class']) ? $atts['class'] . ' ' : '') . 'button';
	}
	return $atts;
}, 10, 4);

add_filter('nav_menu_css_class', function ($classes, $item, $args, $depth) {
	return array_diff($classes, ['button']);
}, 10, 4);

$files = glob(get_template_directory() . '/inc/*.php');
foreach ($files as $file) {
	require_once $file;
}