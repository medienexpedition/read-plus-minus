<?php
/**
 * Plugin Name: ME More
 * Plugin URI: https://www.plugin-url.com
 * Description: Provides a Shortcode for a more link.
 * Version: 1.0
 * Author: Medienexpedition
 * Author URI: https://medienexpedition.de/
 * Licence: GPL2
*/

/* Make sure that plugin files can only be executed out of WordPress */
if ( ! defined( 'ABSPATH' ) ) exit;

add_shortcode( 'rpm', 'me_more' );
function me_more( $attr, $content ) {
    $string = '<div class="read-plus-minus">';
    $string .= '  <button class="me_more_title">';
    $string .= '    &plus;';
    $string .= '  </button><div class="me_more_body" style="display:none">';
    $string .= do_shortcode($content);
    $string .= '</span></div>';
    return $string;
}

add_action( 'wp_enqueue_scripts','me_more_scripts' );
function me_more_scripts() {
    $plugin_url = plugins_url( '/', __FILE__ );
    wp_enqueue_style(
        'me_more_style',
        $plugin_url . 'style.css'
    );

    wp_enqueue_script(
        'me_more_script',
        $plugin_url . 'script.js',
        array( 'jquery' ),
        '1.0.0',
        true
    );
}
