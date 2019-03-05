<?php

if(!defined('ABSPATH')) exit;

class GH_Layout_Settings{

  public function __construct()
  {
      add_action('customize_register', array($this, 'gh_customizer_options'));
  }

  public function gh_customizer_options($wp_customize)
  {

    /* ========
     * Layout Panel
     ========== */
        $wp_customize->add_panel('gh_panel_layout', array(
                  'title' => __('Layout', 'gh'),
                  'priority' => 12
    ));

  }

}

return new GH_Layout_Settings();
