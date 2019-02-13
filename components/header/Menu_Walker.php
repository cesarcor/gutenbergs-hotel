<?php

/**
 *
 * Walker class for the main menu
 *
 */

 class GH_Walker extends Walker_Nav_menu
 {

    function start_lvl(&$output, $depth = 0, $args = array()){

      $indent = str_repeat("\t",$depth);
      $output .= "<div class=\" menu-dropdown-container \">";
      $output .= "\n$indent<ul class=\"sub-menu depth_$depth\">\n";

    }

    function end_lvl(&$output, $depth = 0, $args = array()){
      $indent = str_repeat("\t", $depth);
      $output .= "\n$indent</ul>";
      $output .= "</div>";
    }

 }
