<div class="site-logo">
  <?php

    if( has_custom_logo() ):

      the_custom_logo();

    else:

      echo "<h1><a href='" . home_url( '/' ) .  "'>";

        bloginfo( 'name' );

      echo "</a></h1>";

    endif;

    ?>
</div>
