<?php

/*
Plugin Name: Hide All Notices
Plugin URI: https://creativesguild.co
Description: By enabling this plugin, all dashboard notifications will be hidden (aka Nag-Be-Gone). If you wish you see the notifications again, simply disable this plugin.
Version: 0.1
Author: Duncan Platt
Author URI: https://creativesguild.co
License: GPL3
*/

function hide_admin_nags() {
    wp_enqueue_style( 'hide-notices',  plugin_dir_url( __FILE__ ) . 'css/admin.css');
}

add_action( 'admin_enqueue_scripts', 'hide_admin_nags' );