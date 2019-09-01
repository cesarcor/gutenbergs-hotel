<?php

if (!defined('ABSPATH')) {
    exit;
}

class GH_Single_Settings
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
            $wp_customize->add_panel('gh_panel_single', array(
                      'title' => __('Single Post Settings', 'gutenbergs-hotel'),
                      'priority' => 12
        ));

    }
}

return new GH_Single_Settings();
