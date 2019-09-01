<?php

if (! defined('ABSPATH')) {
    exit;
}

class GH_Posts_Settings
{
    public function __construct()
    {
        add_action('customize_register', array($this, 'gh_customizer_options'));
    }

    public function gh_customizer_options($wp_customize)
    {

      /* ========
       * Posts Panel
       ========== */
          $wp_customize->add_panel('gh_panel_posts', array(
                    'title' => __('Posts', 'gutenbergs-hotel'),
                    'priority' => 13
      ));


       /* ========
       * Post Styles Section
       ========== */
          $wp_customize->add_section('gh_posts_styles_section', array(
                    'title' => 'Post Styles',
                    'panel' => 'gh_panel_posts',
                    'priority' => 10
        ));


          /*
           * Setting: Header Type
           */
          $wp_customize->add_setting('gh_set_post_skin', array(
                'default' => 'simple'
        ));

          $wp_customize->add_control('gh_cont_post_skin', array(
                    'label' => __('Post Skin', 'gutenbergs-hotel'),
                    'section' => 'gh_posts_styles_section',
                    'settings' => 'gh_set_post_skin',
                    'type' => 'select',
                    'choices' => array(
                            'simple' => 'Simple',
                            'cards' => 'Cards',
                            'masonry' => 'Masonry'
                    )
        ));


    }

  }

  return new GH_Posts_Settings();
