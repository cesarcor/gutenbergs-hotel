<?php

function gh_top_bar(){

  echo '<div class="top-bar">
    <div class="top-bar__contain push-to-right">';

        wp_nav_menu(
          array(
            'theme_location' => 'top-bar-menu',
            'container' => 'div',
            'container_class' => 'inline-list'
          )
        );

    echo '</div>
  </div>';

}
