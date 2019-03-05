<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gutenbergs-hotel
 * @since 0.1
 */

get_header();
?>

  <main id="main" role="main">

    <div class="wrapper">

      <div class="wrapper-content">

      <?php
        get_template_part('/template-parts/content/content', 'single');
      ?>

      </div>

    </div>

  </main>

<?php get_footer(); ?>
