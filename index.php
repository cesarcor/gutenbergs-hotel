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
 * @since 0.1
 */

get_header();
?>

  <main>

    <div class="wrapper">

      <div class="wrapper-content">

        <?php

          get_template_part( '/template-parts/content/content', '');

        ?>

      </div>


      <?php get_sidebar(); ?>

    </div>

  </main>


<?php get_footer(); ?>
