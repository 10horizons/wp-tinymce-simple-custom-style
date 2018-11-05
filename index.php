<?php
/*
Plugin Name: WP TinyMCE Custom Style
Plugin URI: https://tentenbiz.com
Description: A simple WordPress plugin to style WordPress editor (tinyMCE).
Author: Tentenbiz Solutions
Version: 0.1
*/

function ttb_custom_tinymce_style( $in ) {
	$in['content_css'] = plugin_dir_url( __FILE__ ) . "/tinymce-style.css";
	return $in;
}
add_filter( 'tiny_mce_before_init', 'ttb_custom_tinymce_style' );
?>
