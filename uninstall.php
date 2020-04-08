<?php 
defined('ABSPATH') || die("Nice Try!");
delete_option('updateTitle');
unregister_post_type('news');
global $wpdb;
$prefix = $wpdb->prefix;
$sql = "DROP TABLE IF EXIST `{$prefix}likesdislikes`;";
$wpdb->query($sql);