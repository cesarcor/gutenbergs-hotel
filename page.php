<?php
/**
 * The template for displaying default page template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 *
 * @package gutenbergs-hotel
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main">

  <!-- <div class="wrapper <?php //echo is_front_page() ? 'full-width-wrap' : 'wrapper-default'; ?>"> -->

    <div class="wrapper-content">

      <?php
        if(is_front_page()):
          get_template_part('template-parts/content/content');
        else:
          get_template_part('template-parts/content/content', 'page');
        endif;
        ?>
  <div>

</main>


<?php get_footer(); ?>
