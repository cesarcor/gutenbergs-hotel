<?php

add_action('wp_head', 'gh_custom_footer_styles');
function gh_custom_footer_styles()
{
    ?>

  <style type="text/css">

    #footer{
      background-color: <?php echo get_theme_mod( 'gh_set_footer_bg_color', '#FFD5C2'); ?>
    }

  </style>

<?php
}
