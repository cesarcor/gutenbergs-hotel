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


    /* ========
     * Footer Type Section
     ========== */
    $wp_customize->add_section('gh_footer_type_section', array(
              'title' => __('Footer Types & Layout Options', 'gh'),
              'panel' => 'gh_panel_footer',
              'priority' => 10
    ));


    /*
     * Setting: Footer Type
     */
    $wp_customize->add_setting('gh_set_footer_type', array(
          'default' => 'footer-3'
    ));

    $wp_customize->add_control('gh_cont_footer_type', array(
              'label' => __('Footer Type', 'gh'),
              'section' => 'gh_footer_type_section',
              'settings' => 'gh_set_footer_type',
              'type' => 'select',
              'choices' => array(
                      'footer-1' => 'Single Column Footer',
                      'footer-2' => 'Two Column Footer',
                      'footer-3' => 'Three Column Footer',
                      'footer-4' => 'Four Column Footer'
              )
            ));

  }

}

return new GH_Footer_Settings();
