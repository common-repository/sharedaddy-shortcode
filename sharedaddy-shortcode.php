<?php
/*
 * Plugin Name: Sharedaddy Shortcode
 * Description: Removes standard sharedaddy and lets you place it with the [sharedaddy] shortcode instead
 * Tags:  jetpack, social, widget, shortcode
 * Author: rollingWolf
 * Requires at least: 4.0
 * Tested up to: 4.0.1
 * Version: 1.2.1
 * Stable tag: 1.2.1
 * License: GPL2+
*/

require_once 'class.sharedaddy-shortcode.php';
require_once 'widget.sharedaddy-shortcode.php';

//$basepath = dirname(dirname(__FILE__));
//$sharedaddy = $basepath.'/jetpack/modules/sharedaddy/sharedaddy.php';

add_action('init', 'SharedaddyShortcode::init', 9999);
add_action('widgets_init', 'sharedaddyShortcode_widgetInit');

function sharedaddyShortcode_widgetInit()
{
    register_widget('SharedaddyShortcode_Widget');
}
