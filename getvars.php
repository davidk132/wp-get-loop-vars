<?php
/**
 * Simple shortcode to grab values from WP query object. Must be in the loop or this won't work.
 * This code fits into functions.php or a plug-in.
 * Best for text only - arrays, images etc not supported
 *
 * @license GPL 3.0
 */
function dk_get_var( $atts ) {
  // attribute defaults to title so that is returned it no atts are given
  global $post;
  $a = shortcode_atts( array(
		'fieldname' => 'title',
	 ), $atts );
}
add_shortcode( 'getpostvar', 'dk_get_var' );
