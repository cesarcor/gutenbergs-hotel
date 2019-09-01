<?php
/**
 * The template for displaying default page template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 *
 * @package gutenbergs-hotel
 * @since 0.1
 */

get_header();
?>

<main id="main" class="site-main">

  <div class="wrapper wrapper-default">

    <div class="wrapper-content">

      <?php
        get_template_part('template-parts/content/content', 'page');
      ?>

      </div>

  <?php get_sidebar(); ?>

  <div>

</main>


<?php get_footer(); ?>
