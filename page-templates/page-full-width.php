<?php 

/* Template Name: Fullwidth Page Template */ 

get_header();
?>

<main id="main" class="site-main">

  <div class="wrapper full-width-wrap">

    <div class="wrapper-content">

        <?php get_template_part('template-parts/content/content', 'page'); ?>

    </div>

  </div>

</main>

<?php get_footer(); ?>