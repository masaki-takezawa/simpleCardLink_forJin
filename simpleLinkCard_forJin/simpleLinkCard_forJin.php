<?php
/*
Plugin Name: simpleCardLink_ForJin
*/
if ( ! defined( 'ABSPATH' ) ) exit;

function simpleCardLink($atts, $content=null){
    $a = shortcode_atts( array(
    'title' => '',
    'desc' => '',
    'url' => '#',
    'imgurl' => '',
    ), $atts, 'simpleCardLink');
    return '<div class="ly_linkCardWrap"><a href="' . esc_url($a['url']) . '" target="_blank" class="ly_linkCard" rel="noopener"><span class="bl_imgWrap" style="background-image: url(' . $a['imgurl'] . ');"></span><span class="bl_body"><span class="bl_title">' . esc_html($a['title']) . '</span><span class="bl_description">' . esc_html($a['desc']) . '</span></span></a></div>';
}
add_shortcode('SCL','simpleCardLink');