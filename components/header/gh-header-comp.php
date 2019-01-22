<?php

function gh_top_bar(){

  echo '<div class="top-bar">
    <div class="top-bar__contain push-to-right">';

        wp_nav_menu(
          array(
            'theme_location' => 'top-bar-menu',
            'container' => 'div',
            'container_class' => 'inline-list'
          )
        );

    echo '</div>
  </div>';

}

function gh_nav_menu(){

  echo '<div class="nav-panel">';

      wp_nav_menu(
        array(
          'theme_location' => 'header-menu',
          'container' => 'nav',
          'container_id' => 'navigation-contain'
        )
      );

  echo '</div>';

}

function gh_header_type($headerType) {
    echo '<header id="masthead" class="site-header header-' . $headerType . '">';
      echo '<div class="container">';

        switch ($headerType) {

        case 'centered':
          gh_header_centered();
        break;

        case 'distributed':
          gh_header_distributed();
        break;

        case 'burger':
          gh_header_burger();
        break;

        default:
          gh_header_traditional();
        break;

        }

      echo '</div>';

      gh_nav_menu();

    echo '</header>';
}

function gh_header_traditional() {

  echo '<div class="site-logo">';
    the_custom_logo();
  echo '</div>';

  echo '<div class="main-nav push-to-right">

    <div class="mobile-nav-btn">
      <button class="hamburger hamburger--squeeze" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>';

      wp_nav_menu(
        array(
          'theme_location' => 'header-menu',
          'container' => 'nav',
          'container_id' => 'desk_nav',
          'container_class' => 'inline-list'
        )
      );

  echo '</div>';

}


function gh_header_centered() {

  echo '<div class="site-logo">';
    the_custom_logo();
  echo '</div>';

  echo '<div class="main-nav">

    <div class="mobile-nav-btn">
      <button class="hamburger hamburger--squeeze" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>';

      wp_nav_menu(
        array(
          'theme_location' => 'header-menu',
          'container' => 'nav',
          'container_id' => 'desk_nav',
          'container_class' => 'inline-list'
        )
      );

  echo '</div>';

}

function gh_header_distributed() {

  echo '<div class="header-distributed__left">';

      wp_nav_menu(
        array(
          'theme_location' => 'distributed-left',
          'container' => 'nav',
          'container_id' => 'left-nav',
          'container_class' => 'inline-list'
        )
      );

  echo '</div>';

  echo '<div class="site-logo">';
    the_custom_logo();
  echo '</div>';

  echo '<div class="main-nav header-distributed__right">

    <div class="mobile-nav-btn">
      <button class="hamburger hamburger--squeeze" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>';

      wp_nav_menu(
        array(
          'theme_location' => 'header-menu',
          'container' => 'nav',
          'container_id' => 'desk_nav',
          'container_class' => 'inline-list'
        )
      );

  echo '</div>';

}

function gh_header_burger() {

  echo '<div class="site-logo">';
    the_custom_logo();
  echo '</div>';

  echo '<div class="main-nav push-to-right">

    <div class="burger-nav-btn">
      <button class="hamburger hamburger--squeeze" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>';

      // wp_nav_menu(
      //   array(
      //     'theme_location' => 'header-menu',
      //     'container' => 'nav',
      //     'container_id' => 'desk_nav',
      //     'container_class' => 'inline-list'
      //   )
      // );

  echo '</div>';

}
