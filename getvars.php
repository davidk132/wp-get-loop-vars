<?php
/**
 * Simple shortcode to grab values from WP query object. Must be in the loop or this won't work.
 * This code fits into functions.php or a plug-in
 * 
 *
 * @license GPL 3.0
 */
function get_var() {
  // Do stuff
}
add_shortcode( 'getpostvar', 'get_var' );
