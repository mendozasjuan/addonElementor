<?php
/**
 * Plugin Name: Elementor Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 */

function register_hello_world_widget( $widgets_manager ) {

    require_once( __DIR__ . '/widgets/hello-world-widget-1.php' );
    require_once( __DIR__ . '/widgets/hello-world-widget-2.php' );

    $widgets_manager->register( new \Elementor_Hello_World_Widget_1() );
    $widgets_manager->register( new \Elementor_Hello_World_Widget_2() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script(
        'rewrite-ajax',
        plugins_url( 'assets/rewrite-ajax.js', __FILE__ ),
        '',
        '',
        true
    );
});