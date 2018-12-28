<?php
/**
 * The template for displaying default page template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gutenbergs-hotel
 * @since 0.1
 */

get_header();
?>

<main>

  <?php
    get_template_part('template-parts/content/content', 'page');
  ?>

</main>


<?php get_footer(); ?>
