<?php

function gh_footer_type($footerType){

  $columnNum = 1;

  switch ($footerType) {
    case 'footer-1':

      $columnNum = 1;

      break;

    case 'footer-2':

      $columnNum = 2;

      break;

    case 'footer-3':

      $columnNum = 3;

      break;

    case 'footer-4':

      $columnNum = 4;

      break;

    default:

      $columnNum = 3;

      break;
  }

  for ($i=1; $i <= $columnNum; $i++) {

    echo "<div class='footer-col footer-$i'>";

     dynamic_sidebar( 'footer-' . $i );

    echo "</div>";

  }


}
