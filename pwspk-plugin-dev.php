<?php 
/**
 * Plugin Name: PWSPK Dev Plugin
 * Plugin Uri: https://bestsoftpro.com
 * Author: Muhammad Azfar Aslam
 * Author Uri: http://perfectwebsolutions.info
 * Version: 1.0.0
 * Description: This is for education purpose.
 * Tags: tag1, tag2
 * Lisence: GPL V2
 */

defined('ABSPATH') || die("You cant access this file path");

add_action('init', 'pwspk_init');

function pwspk_init(){
    add_shortcode('test', 'pwspk_my_shortcode');
}

function pwspk_my_shortcode($atts){
    $atts = shortcode_atts(array(
        'message' => 'Hello World',
    ), $atts, 'test');
    return $atts['message'];
}