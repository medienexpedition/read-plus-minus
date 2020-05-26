<?php
/**
 * Plugin Name: Read Plus Minus
 * Plugin URI: https://www.plugin-url.com
 * Description: Provides a Shortcode for a more link.
 * Version: 1.0
 * Author: Medienexpedition
 * Author URI: https://medienexpedition.de/
 * Licence: GPL2
*/

/* Make sure that plugin files can only be executed out of WordPress */
if ( ! defined( 'ABSPATH' ) ) exit;

add_shortcode( 'rpm', 'read_plus_minus' );
function read_plus_minus( $attr, $content ) {
    $string = '<div class="read-plus-minus">';
    $string .= '  <span class="rpm_title">';
    $string .= '&plus;';
    $string .= '</span><div class="rpm_body" style="display:none">';
    $string .= $content;
    $string .= '</div></div>';
    return $string;
}

add_action( 'wp_enqueue_scripts','rpm_scripts' );
function rpm_scripts() {
    $plugin_url = plugins_url( '/', __FILE__ );
    wp_enqueue_style(
        'rpm-style',
        $plugin_url . 'style.css'
    );

    wp_enqueue_script(
        'rpm-script',
        $plugin_url . 'script.js',
        array( 'jquery' ),
        '1.0.0',
        true
    );
}
