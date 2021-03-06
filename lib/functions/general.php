<?php
/**
 * General Functions
 *
 * @package Blackbird\Developers
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
namespace Blackbird\Developers;



 //* Customize search form input box text
add_filter( 'genesis_search_text', __NAMESPACE__ . '\bb_search_text' );
function bb_search_text( $text ) {
	return esc_attr( 'Search this site...' );
}

//* Use dashicon for search button
//* http://melchoyce.github.io/dashicons/
add_filter( 'genesis_search_button_text', __NAMESPACE__ . '\bb_search_button_dashicon' );
function bb_search_button_dashicon( $text ) {
	
	return esc_attr( '&#xf179;' );
	
}

// Use shortcodes in widgets
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Back to top Button
 *
 * @author Jason Chafin
 * @uses  jquery
 *
 */

add_action ('genesis_before_footer', __NAMESPACE__ . '\blackbird_back_to_top');

function blackbird_back_to_top () {
     echo '<a class="topbutton" href="#"><i class="fa fa-chevron-up fa-2x"></i></a>';
}