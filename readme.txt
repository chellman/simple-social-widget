=== Plugin Name ===
Contributors: shooflydesign
Tags: widget, social sharing
Requires at least: 3.0.1
Tested up to: 3.8.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple widget that creates icon links to various popular social networks.

== Description ==

This plugin lets you include links to Twitter, Facebook, Google+, Pinterest, LinkedIn, YouTube, and/or Instagram in a widget.  The links will be displayed using the icons each of these companies recommends, at a default size of 32 pixel squares.  They will look good on retina or standard DPI displays, and there's no funny business.  No links back to the developer's website, no horribly bloated settings screens, just nice-looking links that you can easily re-style in your theme.

The plugin might be extended later to be more flexible, but for now, these are the ones most of the people I work with want to use, and maybe it will help you as well.

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Visit Appearance > Widgets, and add the widget to any region you like.
1. Fill in the fully-qualified URL (starting with https:// or http://) of your profile on the relevant site.  Any that you leave blank will not be shown.
1. Save the widget and look at your site to see the icons!

== Frequently Asked Questions ==

= What if I want to use a social site not included in the plugin? =

You could either modify the plugin yourself (yay GPL!) (also look at the .php file - it's short!), or add the link of interest to one of the other fields and change the image it places using CSS.  The text will be wrong, which won't be great for accessibility and SEO, but it could also be better than nothing.

= Why do the icons look cut off? =

In order to support high-DPI displays, the images are 64px squares, resized in CSS useing the background-size property, which is not supported in older versions of Internet Explorer, among other older browsers.  I might consider adding a compatibility mode that renders the icons differently in a future version to help with this, but in the meantime, you can override the CSS in your theme, using different images or whatever solution works for you.

== Screenshots ==

1. The widget settings screen.
2. The widget in action, with all social networks filled in.

== Changelog ==

= 1.0 =
* Initial release.