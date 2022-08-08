<?php

//Shortcodes
require_once(get_stylesheet_directory() . '/vc-elements/vc-carousel/shortcode.php');
require_once(get_stylesheet_directory() . '/vc-elements/vc-image-text/shortcode.php');
require_once(get_stylesheet_directory() . '/vc-elements/vc-title-with-subtitle/shortcode.php');
require_once(get_stylesheet_directory() . '/vc-elements/vc-icontext/shortcode.php');
require_once(get_stylesheet_directory() . '/vc-elements/vc-projects/shortcode.php');
require_once(get_stylesheet_directory() . '/vc-elements/vc-collaborator/shortcode.php');
require_once(get_stylesheet_directory() . '/vc-elements/vc-services/shortcode.php');
require_once(get_stylesheet_directory() . '/vc-elements/vc-team/shortcode.php');
require_once(get_stylesheet_directory() . '/vc-elements/vc-infotwocolumns/shortcode.php');
require_once(get_stylesheet_directory() . '/vc-elements/vc-slider-home/shortcode.php');



// Before VC Init
add_action( 'vc_before_init', 'vc_before_init_actions' );

  
function vc_before_init_actions() {

	require_once(get_stylesheet_directory() . '/vc-elements/vc-carousel/map.php');
	require_once(get_stylesheet_directory() . '/vc-elements/vc-image-text/map.php');
	require_once(get_stylesheet_directory() . '/vc-elements/vc-title-with-subtitle/map.php');
	require_once(get_stylesheet_directory() . '/vc-elements/vc-icontext/map.php');
	require_once(get_stylesheet_directory() . '/vc-elements/vc-projects/map.php');
	require_once(get_stylesheet_directory() . '/vc-elements/vc-collaborator/map.php');
	require_once(get_stylesheet_directory() . '/vc-elements/vc-services/map.php');
	require_once(get_stylesheet_directory() . '/vc-elements/vc-team/map.php');
	require_once(get_stylesheet_directory() . '/vc-elements/vc-infotwocolumns/map.php');
	require_once(get_stylesheet_directory() . '/vc-elements/vc-slider-home/map.php');
	
} 