<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//putting this here for now!
// class gh_cont_radio extends WP_Customize_Control{
//
// render(){
//
// }
//
// }

add_action( 'customize_register', 'gh_customizer' );
function gh_customizer( $wp_customize ) {

	$wp_customize->add_panel( 'gh_panel_header', array(
				'title' => __( 'Header Options', 'gh' ),
				'priority' => 10
) );

	$wp_customize->add_section('gh_header_type_section', array(
				'title' => 'Header Type',
				'panel' => 'gh_panel_header',
				'priority' => 10
	));

	$wp_customize->add_setting('gh_set_header_type', array(
		    'default' => 'distributed'
	));

	$wp_customize->add_control('gh_cont_header_type', array(
				'label' => __('Header Type', 'gh'),
				'section' => 'gh_header_type_section',
				'settings' => 'gh_set_header_type',
				'type' => 'radio',
				'choices' => array(
						'traditional' => 'Traditional',
						'centered' => 'Centered',
						'distributed' => 'Distributed'
				)
	));

	$wp_customize->add_section('gh_header_colors_section', array(
				'title' => 'Header Colors',
				'panel' => 'gh_panel_header',
				'priority' => 10
	));

	$wp_customize->add_setting('gh_set_header_text_color', array(
				'default' => 'C8553D'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
	 'gh_cont_header_text_color', array(
		'label'        => 'Header Link Colors',
		'section'    => 'gh_header_colors_section',
		'settings'   => 'gh_set_header_text_color'
		)
	));

	$wp_customize->add_setting('gh_set_header_bg_color', array(
				'default' => 'FFFFFF',
				'sanitize_callback' => 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
	 'gh_cont_header_bg_color', array(
			'label' => 'Header Background Color',
			'section' => 'gh_header_colors_section',
			'settings' => 'gh_set_header_bg_color'
		)
	));


	/*
		Top Bar
	 */
	$wp_customize->add_section('gh_top_bar_section', array(
				'title' => __('Top Bar', 'gh'),
				'panel' => 'gh_panel_header',
				'priority' => 10
	));

	$wp_customize->add_setting('gh_set_top_bar', array(
				'default' => '#C8553D;'
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
		

}
