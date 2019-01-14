<?php
/**
 * Gutenberg's Hotel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gutenbergs-hotel
 * @since 0.1
 */

define('GH_THEME_DIR', get_template_directory());
define('GH_THEME_URI', get_template_directory_uri());


function gh_enqueue_assets()
{
    wp_enqueue_script('main-script-gh', GH_THEME_URI . '/js/gh.js', array(), false, true);
    wp_enqueue_style('hamburger-gh', GH_THEME_URI . '/assets/hamburger/hamburger.min.css', array(), false);
    wp_enqueue_style('main-style-gh', GH_THEME_URI . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'gh_enqueue_assets');

 /**
  * Register navigation menus
  *
  * @link https://codex.wordpress.org/Function_Reference/register_nav_menus
  **/

function gh_register_navs()
{
    register_nav_menus(
    array(
      'top-bar-menu' => esc_html__('Header Top Bar Menu', 'gutenbergs-hotel'),
      'header-menu' => esc_html__('Header Menu', 'gutenbergs-hotel'),
      'footer-menu' => esc_html__('Footer Menu', 'gutenbergs-hotel')
    )
  );
}
add_action('init', 'gh_register_navs');

/**
 * Add support for custom logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 **/

add_theme_support(
  'custom-logo',
   array(
     'width' => 50,
    'height' => 50,
    'flex-width' => true,
    'flex-height' => true
)
);

require_once(GH_THEME_DIR . '/inc/customizer/customizer.php');
require_once(GH_THEME_DIR . '/components/gh-components.php');
