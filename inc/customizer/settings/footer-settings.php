<?php

if (!defined('ABSPATH')) {
    exit;
}

class GH_Footer_Settings
{
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
                  'title' => __('Footer Options', 'gutenbergs-hotel'),
                  'priority' => 12
    ));


        /* ========
         * Footer Type Section
         ========== */
        $wp_customize->add_section('gh_footer_type_section', array(
              'title' => __('Footer Types & Layout Options', 'gutenbergs-hotel'),
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
              'label' => __('Footer Type', 'gutenbergs-hotel'),
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

        /*
         * Setting: Footer Copyright Text
         */
        $wp_customize->add_setting('gh_set_footer_copyright_text', array(
                'default' => '© Gutenberg\'s Hotel'
            ));

        $wp_customize->add_control('gh_cont_footer_copyright_text', array(
                'label' => 'Set Copyright Text',
                'section' => 'gh_footer_type_section',
                'settings' => 'gh_set_footer_copyright_text',
                'type' => 'text'
            ));


        /* ========
         * Footer Style Section
         ========== */
        $wp_customize->add_section('gh_footer_styles_section', array(
                  'title' => __('Footer Styles', 'gutenbergs-hotel'),
                  'panel' => 'gh_panel_footer',
                  'priority' => 10
                ));

        /*
         * Setting: Footer Background Color
         */
        $wp_customize->add_setting('gh_set_footer_bg_color', array(
                            'default' => 'FFD5C2',
                            'transport' => 'postMessage',
                            'sanitize_callback' => 'sanitize_hex_color'
                ));

        $wp_customize->add_control(new WP_Customize_Color_Control(
                    $wp_customize,
                 'gh_cont_footer_bg_color',
                    array(
                        'label' => 'Header Background Color',
                        'section' => 'gh_footer_styles_section',
                        'settings' => 'gh_set_footer_bg_color'
                    )
                ));
    }
}

return new GH_Footer_Settings();
