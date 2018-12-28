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


<?php
  get_template_part('template-parts/content', 'single');
?>

<?php get_footer(); ?>
