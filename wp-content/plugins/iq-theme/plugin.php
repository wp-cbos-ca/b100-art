<?php

/*
Plugin Name:    IQ Theme
Plugin URI:     http://wp.cbos.ca
Description:    Intelligently adjusts existing theme to suit.
Version:        1.0.0
Author:         wp.cbos.ca
Author URI:     http://wp.cbos.ca

*/ 

defined( 'ABSPATH' ) || die();

define( 'IQ_THEME_BREAKER_ON', true );

if ( IQ_THEME_BREAKER_ON ) {
    add_action( 'wp_enqueue_scripts', 'enqueue_iq', 45 );
    add_filter( 'body_class', 'add_body_class' );
}

function enqueue_iq() {
    wp_enqueue_style( 'iq-theme', plugin_dir_url(__FILE__) . 'css/style.css' );    
}

function add_body_class( $classes ) {
    $theme = get_option( 'template' );
    if ( $theme = 'twentytwelve' ) {
        $classes[] = 'twentytwelve art';
    return $classes;
    }
}
