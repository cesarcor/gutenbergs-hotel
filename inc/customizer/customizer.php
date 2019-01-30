<?php

if (! defined('ABSPATH')) {
    exit;
}

add_action('customize_register', 'gh_customizer');

function gh_customizer($wp_customize)
{


  /* ========
   * Header Panel
   ========== */
    $wp_customize->add_panel('gh_panel_header', array(
                'title' => __('Header Options', 'gh'),
                'priority' => 10
  ));


    /* ========
   * Header Type Section
   ========== */
    $wp_customize->add_section('gh_header_type_section', array(
                'title' => 'Header Types & Layout Options',
                'panel' => 'gh_panel_header',
                'priority' => 10
    ));


    /*
     * Setting: Header Type
     */
    $wp_customize->add_setting('gh_set_header_type', array(
            'default' => 'traditional'
    ));

    $wp_customize->add_control('gh_cont_header_type', array(
                'label' => __('Header Type', 'gh'),
                'section' => 'gh_header_type_section',
                'settings' => 'gh_set_header_type',
                'type' => 'select',
                'choices' => array(
                        'traditional' => 'Traditional',
                        'centered' => 'Centered',
                        'distributed' => 'Distributed',
                        'burger' => 'Burger'
                )
    ));

    /*
     * Setting: Header Scroll
     */
    $wp_customize->add_setting('gh_set_header_scroll', array(
        'default' => 0
    ));

    $wp_customize->add_control('gh_cont_header_scroll', array(
        'label' => 'Fixed When Scrolling',
        'section' => 'gh_header_type_section',
        'settings' => 'gh_set_header_scroll',
        'type' => 'radio',
        'choices' => array(
            1 => 'enabled',
            0 => 'disabled'
        )
    ));


    /*
     * Setting: Header Scroll
     */
    $wp_customize->add_setting('gh_set_header_resize', array(
        'default' => 0
    ));

    $wp_customize->add_control('gh_cont_header_resize', array(
        'label' => 'Resize Header when Scroll',
        'section' => 'gh_header_type_section',
        'settings' => 'gh_set_header_resize',
        'type' => 'radio',
        'choices' => array(
            1 => 'enabled',
            0 => 'disabled'
        )
    ));



    /* ========
     * Header Styles Section
     ========== */
    $wp_customize->add_section('gh_header_styles_section', array(
                'title' => 'Header Styles',
                'panel' => 'gh_panel_header',
                'priority' => 10
    ));


    /*
     * Setting: Header Transparency
     */
    $wp_customize->add_setting('gh_set_header_transparency', array(
        'default' => 0
    ));

    $wp_customize->add_control('gh_cont_header_transparency', array(
        'label' => 'Make Header Transparent',
        'section' => 'gh_header_styles_section',
        'settings' => 'gh_set_header_transparency',
        'type' => 'radio',
        'choices' => array(
            1 => 'enable',
            0 => 'disable'
        )
    ));


    /*
     * Setting: Header Background Color
     */
    $wp_customize->add_setting('gh_set_header_bg_color', array(
                'default' => 'FFFFFF',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
     'gh_cont_header_bg_color',
        array(
            'label' => 'Header Background Color',
            'section' => 'gh_header_styles_section',
            'settings' => 'gh_set_header_bg_color'
        )
    ));


		/*
		 * Setting: Header Text Color
		 */
		$wp_customize->add_setting('gh_set_header_text_color', array(
							'default' => 'C8553D',
							'transport' => 'postMessage',
							'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_control(new WP_Customize_Color_Control(
				$wp_customize,
		 'gh_cont_header_text_color',
				array(
				'label'        => 'Header Link Colors',
				'section'    => 'gh_header_styles_section',
				'settings'   => 'gh_set_header_text_color'
				)
		));


    /*
     * Setting: Header Font Size
     */
    $wp_customize->add_setting('gh_set_header_font_size', array(
        'default' => 14
    ));

    $wp_customize->add_control('gh_cont_header_font_size', array(
        'label' => 'Set Font Size (px)',
        'section' => 'gh_header_styles_section',
        'settings' => 'gh_set_header_font_size',
        'type' => 'text'
    ));

    /* ========
     * Header Responsive Section
     ========== */
    $wp_customize->add_section('gh_header_responsive_section', array(
                'title' => 'Responsive Options',
                'panel' => 'gh_panel_header',
                'priority' => 10
    ));

    $wp_customize->add_setting('gh_set_header_mob_text_size', array(
                'default' => 30
    ));

    $wp_customize->add_control('gh_cont_header_mob_text_size', array(
        'label' => 'Set Mobile Font Size (px)',
        'section' => 'gh_header_responsive_section',
        'settings' => 'gh_set_header_mob_text_size',
        'type' => 'text'
    ));

    /* ========
     * Top Bar Section
     ========== */
    $wp_customize->add_section('gh_top_bar_section', array(
                'title' => __('Top Bar', 'gh'),
                'panel' => 'gh_panel_header',
                'priority' => 1
    ));


    /*
     * Setting: Enable Top Bar
     */
    $wp_customize->add_setting('gh_set_top_bar', array(
                'default' => 0
    ));

    $wp_customize->add_control('gh_cont_top_bar', array(
                'label' => __('Enable Top Bar', 'gh'),
                'section' => 'gh_top_bar_section',
                'settings' => 'gh_set_top_bar',
                'type' => 'radio',
                'choices' => array(
                        1 => 'Enable',
                        0 => 'Disable'
                )
        ));


    /*
     * Setting: Top Bar Background Color
     */
    $wp_customize->add_setting('gh_set_top_bar_color', array(
            'default' => 'C8553D',
            'transport' => 'postMessage'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
     'gh_cont_top_bar_color',
        array(
            'label' => 'Top Bar Background Color',
            'section' => 'gh_top_bar_section',
            'settings' => 'gh_set_top_bar_color'
        )
    ));

    /*
     * Setting: Top Bar Link color
     */
    $wp_customize->add_setting('gh_set_top_bar_text_color', array(
            'default' => 'C8553D',
            'transport' => 'postMessage'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'gh_cont_top_bar_link_color',
        array(
            'label' => 'Top Bar Text Color',
            'section' => 'gh_top_bar_section',
            'settings' => 'gh_set_top_bar_text_color'
        )
    ));


   /*
    * Setting: Top bar text size
    */
   $wp_customize->add_setting('gh_set_top_bar_text_size', array(
       'default' => 12
   ));

   $wp_customize->add_control('gh_cont_top_bar_text_size', array(
       'label' => 'Set Font Size (px)',
       'section' => 'gh_top_bar_section',
       'settings' => 'gh_set_top_bar_text_size',
       'type' => 'text'
   ));



}
