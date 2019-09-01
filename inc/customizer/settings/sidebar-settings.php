<?php

if(!defined('ABSPATH')) exit;

class GH_Sidebar_Settings{

  public function __construct()
  {
      add_action('customize_register', array($this, 'gh_customizer_options'));
  }

  public function gh_customizer_options($wp_customize)
  {

    /* ========
     * Sidebar Panel
     ========== */
        $wp_customize->add_panel('gh_panel_sidebar', array(
                  'title' => __('Layout', 'gutenbergs-hotel'),
                  'priority' => 13
    ));

  }

}

return new GH_Sidebar_Settings();
