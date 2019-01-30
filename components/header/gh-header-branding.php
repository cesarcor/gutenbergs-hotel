<div class="site-logo">
  <?php

    if( has_custom_logo() ):

      the_custom_logo();

    else:

      echo "<a href='" . home_url( '/' ) .  "'><h1>" . bloginfo( 'name' ) . "</h1></a>";

    endif;

    ?>
</div>
