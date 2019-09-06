<?php
  if ( have_posts() ):
    while ( have_posts() ): the_post();
  ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="page-heading">

        <div class="page-title-contain">
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        </div>

        <figure class="entry-img default-entry-img">
            <?php the_post_thumbnail(); ?>
        </figure>

    </header>

    <div class="wrapper wrapper-default">

        <div class="wrapper-content">

            <div class="single-entry-content">

                <?php the_content(); ?>

            </div>

        </div>

        <?php 
              /**
               * Get sidebar
               */
               get_sidebar(); 
            ?>

    </div>

</article>

<?php

    endwhile;
  endif;
  ?>