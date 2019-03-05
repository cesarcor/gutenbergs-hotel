<?php

if(!defined('ABSPATH')) exit;

class GH_Footer_Settings{

  public function __construct()
  {
      add_action('customize_register', array($this, 'gh_customizer_options'));
  }

  public function gh_customizer_options($wp_customize)
  {

    /* ========
     * Footer Panel
     ========== */
        $wp_customize->add_panel('gh_panel_footer', array(
                  'title' => __('Footer Options', 'gh'),
                  'priority' => 12
    ));

  }

}

return new GH_Footer_Settings();
