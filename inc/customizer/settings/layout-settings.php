<?php

if (!defined('ABSPATH')) {
    exit;
}

class GH_Layout_Settings
{
    public function __construct()
    {
        add_action('customize_register', array($this, 'gh_customizer_options'));
    }

    public function gh_customizer_options($wp_customize)
    {

    /* ========
     * Layout Panel
     ========== */
        //     $wp_customize->add_panel('gh_panel_layout', array(
        //               'title' => __('Layout', 'gh'),
        //               'priority' => 12
        // ));

        /* ========
         * Layout Type Section
         ========== */
        $wp_customize->add_section('gh_layout_section', array(
          'title' => __('Layout', 'gutenbergs-hotel'),
          'priority' => 12
        ));

        $wp_customize->add_setting('gh_set_layout_type', array(
          'default' => 'layout-default'
        ));

        $wp_customize->add_control('gh_cont_layout_type', array(
              'label' => __('Page Layout', 'gutenbergs-hotel'),
              'section' => 'gh_layout_section',
              'settings' => 'gh_set_layout_type',
              'type' => 'select',
              'choices' => array(
                      'wrapper-default' => 'Default with Sidebar',
                      'wrapper-full-width' => 'Full Width'
              )
            ));
    }
}

return new GH_Layout_Settings();
