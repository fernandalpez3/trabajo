<?php
function somos_switch(){
	wp_enqueue_script('extra js', get_stylesheet_directory_uri() . '/extra-js/jquery.jInvertScroll.min.js');
}
add_action('wp_enqueue_scripts', 'somos_switch');