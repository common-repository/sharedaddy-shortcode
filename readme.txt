=== Sharedaddy Shortcode ===
Contributors: rollingWolf
Tags: jetpack, social, widget, shortcode
Requires at least: 4.0
Tested up to: 4.0.1
Donate link: http://wolf.army
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Sharedaddy Shortcode removes standard Sharedaddy and puts it into [sharedaddy] shortcode instead.

== Description ==
Sharedaddy is a social sharing button plugin that nowadays ships with the Jetpack wordpress plugin re-labeled as Sharing Buttons. It doesn't offer much options on where to place it though so theres where this plugin comes in. It removes the default Jetpack trigger to place the sharebuttons and instead places it inside the [sharedaddy] shortcode.

== Installation ==
1. Configure Jetpack to use the Sharing Buttons (Dashboard -> Settings -> Sharing)
2. Upload the folder `sharedaddy-shortcode` to the `/wp-content/plugins/` directory
3. Enable the plugin
4. Use the [sharedaddy] shortcode where you now want the social sharing buttons to appear instead
5. (optional) enable widget shortcode in Settings -> General -> Sharedaddy Shortcode

== Frequently Asked Questions ==

= What is Sharedaddy =
Sharedaddy is an deprecated plugin that nowadays comes with the plugin Jetpack https://wordpress.org/plugins/jetpack/
and called Sharing Buttons. This plugin doesn't do anything unless Jetpack is installed.

= How do I enable shortcode in widgets =
Under Settings -> General theres a section called Sharedaddy Shortcode there you can enable widget shortcodes. This is global and not just for Sharedaddy Shortcode.

= Another set of sharebuttons doesnt work =
Du to limitations in Jetpacks Sharedaddy you can only have one set of sharebuttons.

== Screenshots ==

== Changelog ==

= 1.2.1 =
Small fixes

= 1.2.0 =
Put everything in a SharedaddyShortcode class and added a widget as an alternative to the shortcode.

= 1.1.0 =
Added settings in General to enable/disable shortcode in widgets

= 1.0.1 =
Fix for not displaying properly with empty posts

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.2.1 =
* Small fixes

= 1.2.0
* Major rewrite
* Added widget

= 1.1.0 =
* Settings added to

= 1.0.1 =
* Now displays properly even with no post

= 1.0 =
* Initial release