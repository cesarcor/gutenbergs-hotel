<?php

if(has_nav_menu( 'header-menu' )):

  wp_nav_menu(
    array(
      'theme_location' => 'header-menu',
      'container' => 'nav',
      'container_id' => 'desk_nav',
      'walker' => new GH_Walker()
    )
  );

else:

  wp_nav_menu(
    array(
      'theme_location' => 'header-menu',
      'container' => 'nav',
      'container_id' => 'desk_nav'
    )
  );

endif;
