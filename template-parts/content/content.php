<?php
  if ( have_posts() ):
    while ( have_posts() ): the_post();
  ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="">

        <?php the_content(); ?>

    </div>

</article>

<?php

    endwhile;
  endif;
  ?>