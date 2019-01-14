<?php

add_action( 'wp_head', 'gh_custom_header_styles' );
function gh_custom_header_styles(){
?>

  <style type="text/css">

    .main-nav a{
      color: <?php echo get_theme_mod( 'gh_set_header_text_color' ); ?>
    }

    .site-header{
      background-color: <?php echo get_theme_mod( 'gh_set_header_bg_color' ); ?>
    }

  </style>

<?php
}
