<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gutenbergs-hotel
 * 
 * @since 1.0.0
 */

get_header();
?>

  <main id="main" role="main">

    <div class="wrapper <?php echo get_theme_mod( 'gh_set_layout_type', 'wrapper-default' ); ?>">

      <div class="wrapper-content">

        <?php

          get_template_part( '/template-parts/content/content', '');

        ?>

      </div>


      <?php get_sidebar(); ?>

    </div>

  </main>


<?php get_footer(); ?>
