<?php

/**
 * Special walker class for distributed header type
 */
class DistributedWalker extends Walker_Nav_menu
{

  function start_el(&$output, $item, $depth=0, $args=array(), $id = 0){

    $obj = $item->object;
    $type = $item->type;
    $title = $item->title;
    $description = $item->description;
    $permalink = $item->url;

    $output = "<li class='"  .  implode(" ", $item->classes) .  "'>";
    // $output = the_custom_logo();
    $output = "</li>";

  }

}
