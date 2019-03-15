<?php

add_action('wp_head', 'gh_custom_header_styles');
function gh_custom_header_styles()
{
    ?>

  <style type="text/css">

     /* TOP BAR STYLES */
    .top-bar{
      background-color: <?php echo get_theme_mod( 'gh_set_top_bar_color', '#C8553D'  ); ?>
    }

    .top-bar ul li a{
      color: <?php echo get_theme_mod(  'gh_set_top_bar_text_color', '#FFFFFF' ); ?>;
      font-size: <?php echo get_theme_mod( 'gh_set_top_bar_text_size', 12 ) . 'px'; ?>;
    }

      .main-nav a,
      .nav-panel a,
      #left-nav a{
        color: <?php echo get_theme_mod(  'gh_set_header_text_color', '#C8553D'  ); ?>
      }

      .hamburger.is-active .hamburger-inner,
      .hamburger.is-active .hamburger-inner:after,
      .hamburger.is-active .hamburger-inner:before,
      .hamburger-inner,
      .hamburger-inner::before,
      .hamburger-inner::after{
        background-color: <?php echo get_theme_mod( 'gh_set_header_text_color', '#C8553D'  ); ?>
      }


    #masthead .container {
      padding: <?php echo get_theme_mod( '15', 'gh_set_header_height' ) . 'px' ?> 0;
    }


    .site-header,
    .nav-panel{
      background-color: <?php echo get_theme_mod('gh_set_header_bg_color', '#FFFFFF'); ?>
    }

    .site-header nav ul:not(.sub-menu) li a{
      font-size: <?php echo get_theme_mod('gh_set_header_font_size') . 'px'; ?>
    }


    /* --- Fixed Header Setting --- */

    <?php ghHeaderScroll(); ?>

    /* --- Header Transparency Setting --- */

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


<?php
/*
*
* Handle fluid header resize on scroll:
*
*/


function ghHeaderScroll(){ ?>


  <?php

  if (get_theme_mod('gh_set_header_scroll') == 1
      && get_theme_mod( 'gh_set_top_bar' ) == 1): ?>

      #masthead, .top-bar{
        position: fixed;
        z-index: 100;
      }

      main{
        margin-top: calc(<?php echo get_theme_mod( 'gh_set_header_height' ) . 'px' ?> * 3);
      }

     #masthead{
       top: 28px;
     }

  <?php

  elseif(get_theme_mod('gh_set_header_scroll') == 1):

  ?>

  #masthead, .top-bar{
    position: fixed;
    z-index: 100;
  }

  main{
    margin-top: calc(<?php echo get_theme_mod( 'gh_set_header_height' ) . 'px' ?> * 3);
  }

  #masthead{
    top: 0px;
  }

  <?php
    endif;
  }
?>



<?php

/*
*
* Handle fluid header resize on scroll:
*
*/

  if (get_theme_mod('gh_set_header_resize') == 1):

?>

  <?php
    function gh_custom_header_js(){
  ?>

    <script>

    window.onscroll = function() {ghScrollFunction()};

    function ghScrollFunction() {

      let header = document.querySelector('#masthead');
      let headerContainer = document.querySelector('#masthead .container');
      let headerLogo = document.querySelector('.site-logo a img');

      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
          headerLogo.style.height = '33px';
          headerLogo.style.transition = '.3s ease height';
          headerContainer.style.transition = ".3s ease all";
          header.style.backgroundColor = "#FFF";
      } else {
          headerLogo.style.height = '45px';
      }

    }

    </script>


  <?php
    }
    add_action('wp_footer', 'gh_custom_header_js');
   ?>

<?php endif; ?>
