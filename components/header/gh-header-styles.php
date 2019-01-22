<?php

add_action( 'wp_head', 'gh_custom_header_styles' );
function gh_custom_header_styles(){
?>

  <style type="text/css">

    .top-bar{
      background-color: <?php echo get_theme_mod( 'gh_set_top_bar_color' ); ?>
    }

    .main-nav a,
    .nav-panel a,
    #left-nav a{
      color: <?php echo get_theme_mod( 'gh_set_header_text_color' ); ?>
    }

    .site-header,
    .nav-panel{
      background-color: <?php echo get_theme_mod( 'gh_set_header_bg_color' ); ?>
    }

    .site-header nav ul li a{
      font-size: <?php echo get_theme_mod( 'gh_set_header_font_size' ) . 'px'; ?>
    }

    .hamburger-inner,
    .hamburger-inner::before,
    .hamburger-inner::after{
      background-color: <?php echo get_theme_mod( 'gh_set_header_text_color' ); ?>
    }

    <?php if(get_theme_mod( 'gh_set_header_scroll' ) == 1): ?>

     #masthead{
       position: fixed;
       z-index: 100;
     }

    <?php endif; ?>

  </style>

<?php
}
