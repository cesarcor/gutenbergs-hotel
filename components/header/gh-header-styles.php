<?php

add_action('wp_head', 'gh_custom_header_styles');
function gh_custom_header_styles()
{
    ?>

  <style type="text/css">

     /* TOP BAR STYLES */
    .top-bar{
      background-color: <?php echo get_theme_mod('gh_set_top_bar_color'); ?>
    }

    .top-bar ul li a{
      color: <?php echo '#' . get_theme_mod('gh_set_top_bar_text_color'); ?>;
      font-size: <?php echo get_theme_mod('gh_set_top_bar_text_size') . 'px'; ?>;
    }

    .main-nav a,
    .nav-panel a,
    #left-nav a{
      color: <?php echo get_theme_mod('gh_set_header_text_color'); ?>
    }

    .site-header,
    .nav-panel{
      background-color: <?php echo get_theme_mod('gh_set_header_bg_color'); ?>
    }

    .site-header nav ul:not(.sub-menu) li a{
      font-size: <?php echo get_theme_mod('gh_set_header_font_size') . 'px'; ?>
    }

    .hamburger.is-active .hamburger-inner,
    .hamburger.is-active .hamburger-inner:after,
    .hamburger.is-active .hamburger-inner:before,
    .hamburger-inner,
    .hamburger-inner::before,
    .hamburger-inner::after{
      background-color: <?php echo get_theme_mod('gh_set_header_text_color'); ?>
    }

    <?php if (get_theme_mod('gh_set_header_scroll') == 1 &&
             get_theme_mod('gh_set_top_bar') == 1): ?>

       #masthead, .top-bar{
         position: fixed;
         z-index: 100;
       }

       #masthead{
         top: 28px;
       }

    <?php endif; ?>

    <?php if (get_theme_mod('gh_set_header_transparency') == 1): ?>

     #masthead{
       z-index: 100;
       background-color: transparent;
       box-shadow: none;
     }

    <?php endif; ?>

  </style>

<?php
}
?>

<?php if (get_theme_mod('gh_set_header_resize') == 1): ?>

  <?php
    function custom_header_js()
    {
  ?>

    <script>

    window.onscroll = function() {ghScrollFunction()};

    function ghScrollFunction() {

      let headerContainer = document.querySelector('#masthead .container');
      let headerLogo = document.querySelector('.site-logo a img');

      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
          headerLogo.style.height = '33px';
          headerLogo.style.transition = '.3s ease height';
          headerContainer.style.transition = ".3s ease all";
      } else {
          headerLogo.style.height = '45px';
      }

    }

    </script>


  <?php
    }
    add_action('wp_footer', 'custom_header_js');
   ?>

<?php endif; ?>
