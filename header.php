<?php
/**
 * The theme's header
 *
 * This is the template that displays all of the <head> content
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gutenbergs-hotel
 * @since 0.1
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header id="masthead" class="site-header">

    <div class="container">

      <div class="site-logo">
        <?php the_custom_logo(); ?>
      </div>

      <div class="main-nav">

        <div class="mobile-nav-btn">
          <button class="hamburger hamburger--squeeze" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>

        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'header-menu',
              'container' => 'nav',
              'container_id' => 'navigation-contain'
            )
          );
        ?>

      </div>

    </div>


  </header>
