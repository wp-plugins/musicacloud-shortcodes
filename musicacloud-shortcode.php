<?php

/*
Plugin Name: MusicaCloud ShortCode
Description: embed musicacloud track into wordpress project.
Version: 1.0
License: GPL
Author: MusicaCloud DC
Author URI: http://www.musicacloud.com
*/

function musicacloud_embed($atts, $content){
if (!$atts['width']) { $atts['width'] = 520; }
if (!$atts['height']) { $atts['height'] = 280; }
return '<iframe border="0" class="shortcode_iframe" src="' . $atts['url'] . '&brand=1&embed=1" width="' . $atts['width'] . '" height="' . $atts['height'] . '"></iframe>';
}
add_shortcode('musicacloud', 'musicacloud_embed');
?>