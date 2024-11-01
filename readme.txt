=== Translate This gTranslate Shortcode ===
Contributors: reubenthiessen
Donate link: http://reubenthiessen.com/
Tags: google, translate, shortcode, ajax, plugin
Requires at least: 2.0.2
Tested up to: 3.2.1
Stable tag: trunk

Insert a shortcode to use Google Translate's AJAX text block translator.

== Description ==

This is a Wordpress plugin allows you to use a shortcode like this,`[translate_this lang="fr"]un texte en français[/translate_this]`,

to automatically insert Google's Translate Web Element which creates an AJAX-enabled link that will translate the block of text in-line.

For more information about the Google Translate Web Element, [click here.](http://translate.google.com/translate_tools)

== Installation ==

1. Upload `translate_this_plugin.php` to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Use the shortcode `[translate_this][/translate_this]`

Parameters:
* `lang="xx"` - **Required.** Where xx is the two character language code (i.e. en for English).
* `background="#XXXXXX"` - *Optional.*  Where #XXXXXXX is a hexadecimal color code. Defaults to *transparent*.
* `base_lang="xx"` - *Optional.*  Where xx is the two character language code (i.e. en for English).  Defaults to "en" for English.


== Frequently Asked Questions ==

Why doesn't it work?

The default base language is English.  If you put the short code around a block of English it doesn't need to translate it.
Also, check the two character language code is supported by Google Translate.  Make sure you have the *lang* parameter in there and the value is language you want to translate from.

== Screenshots ==

== Changelog ==

= 1.0 =
* Initial Version.