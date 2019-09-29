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



add_action('wp_enqueue_scripts', 'gh_enqueue_assets');
function gh_enqueue_assets()
{
    wp_enqueue_script('main-script-gh', GH_THEME_URI . '/js/gh.js', array(), false, true);
    wp_enqueue_style('hamburger-gh', GH_THEME_URI . '/assets/hamburger/hamburger.min.css', array(), false);
    wp_enqueue_style('main-style-gh', GH_THEME_URI . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}

/**
 * Enqueue assets for customizer
 *
 *
 **/

add_action('customize_preview_init', 'gh_enqueue_customizer_assets');
function gh_enqueue_customizer_assets()
{
    wp_enqueue_script(
    'gh_customizer_js',
     GH_THEME_URI . '/inc/customizer/customizer.js',
     array( 'jquery','customize-preview' ),
     filemtime(GH_THEME_DIR . '/inc/customizer/customizer.js'),
     true
  );
}


 /**
  * Register navigation menus
  *
  * @link https://codex.wordpress.org/Function_Reference/register_nav_menus
  **/

function gh_register_navs()
{
    register_nav_menus(
    array(
      'top-bar-menu'  => esc_html__('Header Top Bar Menu', 'gutenbergs-hotel'),
      'header-menu'   => esc_html__('Header Menu', 'gutenbergs-hotel'),
      'footer-menu'   => esc_html__('Footer Menu', 'gutenbergs-hotel')
    )
  );
}
add_action('init', 'gh_register_navs');

if (get_theme_mod('gh_set_header_type') == 'distributed') {
    add_action('init', 'gh_distributed_left_menu');
    function gh_distributed_left_menu()
    {
        register_nav_menu('distributed-left', __('Distributed Left', 'gutenbergs-hotel'));
    }
}

/**
 * Default Excerpt Length
 *
 * @link https://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length
 **/

function gh_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'gh_excerpt_length' );


/**
 * Add support for Custom Logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 **/

add_theme_support(
  'custom-logo',
   array(
    'width'       => 50,
    'height'      => 50,
    'flex-width'  => true,
    'flex-height' => true
)
);


/**
 * Setup theme support
 *
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/
 **/


if ( !function_exists( 'gh_setup' ) ) {

  function gh_setup() {

      //Support for thumbnails on posts and pages
      add_theme_support('post-thumbnails');

      //WordPress manages the title
      add_theme_support( 'title-tag' );

      //Image wide alignment
      add_theme_support( 'align-wide' );

      add_theme_support('responsive-embeds');

  }

  add_action( 'after_setup_theme', 'gh_setup' );

}


/**
 * Sidebar/Widget Areas setup
 *
 * @link https://codex.wordpress.org/Sidebars
 **/

function gh_widget_areas(){

  register_sidebar([
      'id'            => 'main-sidebar',
      'name'          => esc_html__('Main Sidebar', 'gutenbergs-hotel'),
      'description'   => esc_html__('Add widgets for main sidebar on the site', 'gutenbergs-hotel'),
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    ]);

    register_sidebar([
        'id'            => 'footer-1',
        'name'          => esc_html__('Footer Column 1', 'gutenbergs-hotel'),
        'description'   => esc_html__('Add widgets to first column of footer', 'gutenbergs-hotel'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
      ]);

      register_sidebar([
          'id'            => 'footer-2',
          'name'          => esc_html__('Footer Column 2', 'gutenbergs-hotel'),
          'description'   => esc_html__('Add widgets to second column of footer', 'gutenbergs-hotel'),
          'before_widget' => '<div class="widget">',
          'after_widget'  => '</div>',
          'before_title'  => '<h3>',
          'after_title'   => '</h3>'
        ]);

      register_sidebar([
            'id'            => 'footer-3',
            'name'          => esc_html__('Footer Column 3', 'gutenbergs-hotel'),
            'description'   => esc_html__('Add widgets to third column of footer', 'gutenbergs-hotel'),
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
          ]);

}

add_action( 'widgets_init', 'gh_widget_areas' );




  /**
   * Customizer settings
   *
   **/
  require_once(GH_THEME_DIR . '/inc/customizer/customizer.php');


  /**
   * Theme Components
   *
   **/
  require_once(GH_THEME_DIR . '/components/gh-components.php');