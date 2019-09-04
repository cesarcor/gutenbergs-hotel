<?php
/**
 * The theme's header
 *
 * This is the template that displays all of the <head> content
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gutenbergs-hotel
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
  (get_theme_mod( 'gh_set_top_bar' ) == 1) ? gh_top_bar() : '';
?>

<?php gh_header_type( get_theme_mod( 'gh_set_header_type' ) ); ?>
