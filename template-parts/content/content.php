<?php
  if ( have_posts() ):
    while ( have_posts() ): the_post();
?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="post-entry-header">

      <h2 class="post-entry-title">

        <figure class="post-entry-thumbnail">

          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
          </a>
          
        </figure>

        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>

      </h2>

    </header>

    <div class="post-entry-content">

      <?php the_excerpt(); ?>

    </div>

    <footer class="post-entry-footer">
      <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
    </footer>

  </article>

  <?php
    endwhile;
  endif;
  ?>
