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

include plugin_dir_path(__FILE__)."inc/shortcodes.php";

//add_filter('the_title', 'pwspk_the_title');
function pwspk_the_title($title){
    return "<strong>{$title}</strong>";
}

add_action('wp_enqueue_scripts', 'pwspk_wp_enqueue_scripts');
function pwspk_wp_enqueue_scripts(){
    wp_enqueue_style('pwspk_dev_plugin', plugin_dir_url(__FILE__)."assets/css/style.css");
    wp_enqueue_script('pwspk_dev_script', plugin_dir_url(__FILE__)."assets/js/custom.js", array(), '1.0.0', true);
}