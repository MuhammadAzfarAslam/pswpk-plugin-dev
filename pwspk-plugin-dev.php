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

add_action('admin_menu', 'pwspk_plugin_menu');
function pwspk_plugin_menu(){
    add_menu_page('PWSPK Options', 'PWSPK Options', 'manage_options', 'pwspk-options', 'pwspk_options_func', $icon_url, $position);
    add_submenu_page('pwspk-options', 'PWSPK Settings', 'PWSPK Settings', 'manage_options', 'pwspk-settings', 'pwspk_settings_func');
    add_submenu_page('pwspk-options', 'PWSPK Layout', 'PWSPK Layout', 'manage_options', 'pwspk-layout', 'pwspk_layout_func');
}
function pwspk_options_func(){
    echo "<h1> PWSPK Options Menu</h1>";
}
function pwspk_settings_func(){
    echo "<h1> PWSPK Settings Menu</h1>";
}
function pwspk_layout_func(){
    echo "<h1> PWSPK Layout Menu</h1>";
}