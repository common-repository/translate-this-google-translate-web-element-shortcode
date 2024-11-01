<?php
/*
Plugin Name: Translate This - Google Translate Web Element Shortcode
Plugin URI: https://code.google.com/p/gtranslate-web-element-for-wordpress/
Description: Add the Google Translate Web Element using a shortcode
Version: 1.0
Author: Reuben Thiessen
Author URI: http://www.reubenthiessen.com
*/

/*
Translate This - Google Translate Web Element Shortcode (Wordpress Plugin)
Copyright (C) 2011 Reuben Thiessen
Contact me at http://www.reubenthiessen.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

/* Usage:  
[translate_this lang="fr" color="#fff" base_lang="en"]
un texte en français
[/translate_this]

lang="{language code}" to set the source language.
Optional Parameters:
background="{hex code}" - this sets the background of the text once it is translated to the base language (Defaults to none)
base_lang="{two-character language code}" - this sets the base language that your website is generally written in. (Defaults to English)
*/

//tell WordPress to register the translate_this shortcode
add_shortcode('translate_this', 'translate_this_shortcode');

function translate_this_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
		"lang" => 'en',
		"background" => 'transparent',
		"base_lang" => 'en'
	), $atts)); 
	  
   return '<script>
      function googleSectionalElementInit() {
        new google.translate.SectionalElement({
          sectionalNodeClassName: \'goog-trans-section\',
          controlNodeClassName: \'goog-trans-control\',
          background: \''.$background.'\'
        }, \'google_sectional_element\');
      }
    </script>
    <script src="http://translate.google.com/translate_a/element.js?cb=googleSectionalElementInit&ug=section&hl='.$base_lang.'"></script>
    <div class="goog-trans-section" lang="'.$lang.'"><div class="goog-trans-control"></div>'.$content.'</div>';
}
?>