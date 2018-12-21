<?php
/**
 * Gutenberg's Hotel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gutenbergs-hotel
 * @since 0.1
 */

 add_filter( 'block_categories', function( $categories, $post ) {
 	return array_merge(
 		$categories,
 		array(
 			array(
 				'slug' => 'gh-blocks',
 				'title' => __( 'Gutenberg\'s Hotel', 'gh-blocks' ),
 			),
 		)
 	);
 }, 10, 2 );

 include_once ('blocks/hero-block/hero-block.php');

 include_once ('admin/custom-post-types/cpt-rooms.php');
