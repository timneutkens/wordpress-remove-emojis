<?php
/*
Plugin Name:  Remove emojis
Description:  Remove emojis scripts from head
Version:      1.0.0
Author:       Tim Neutkens
Author URI:   https://github.com/timneutkens
License:      MIT License
*/

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

