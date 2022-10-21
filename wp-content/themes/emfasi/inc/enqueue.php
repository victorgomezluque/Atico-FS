<?php

/**
 * emfasi functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package emfasi
 */

add_action( 'wp_enqueue_scripts', 'emfasi_scripts_pace', 0 );

function emfasi_scripts_pace() {
	if( is_front_page() )
	{
		wp_register_script('pace', (get_stylesheet_directory_uri() . '/js/pace/pace.min.js'), true, '3.2.1',false);
		wp_enqueue_script( 'pace' );
		// PACE JS
		wp_register_script('loader', (get_stylesheet_directory_uri() . '/js/loader.js'), true, '1.0',false);
		wp_enqueue_script( 'loader' );
	} 
}

	function emfasi_scripts()
	{
		$the_theme = wp_get_theme();

		//FONTS
		wp_enqueue_style('modern-normalize', get_stylesheet_directory_uri() . '/css/modern-normalize/modern-normalize.css', array(), $the_theme->get('1.0'));

		//FONTS
		wp_enqueue_style('fonts-icon', get_stylesheet_directory_uri() . '/fonts/emfasi/styles.css', array(), $the_theme->get('1.x'));

		// OWL CAROUSEL CSS
		wp_enqueue_style('owl-style', get_stylesheet_directory_uri() . '/css/owl-carousel/owl.carousel.min.css', array(), $the_theme->get('2.x'));
		wp_enqueue_style('owl-theme', get_stylesheet_directory_uri() . '/css/owl-carousel/owl.theme.default.min.css', array(), $the_theme->get('2.x'));

		// OWL CAROUSEL JS
		wp_register_script('owl-carousel', (get_stylesheet_directory_uri() . '/js/owl-carousel/owl.carousel.min.js'), true, '3.2.1', true);
		wp_enqueue_script('owl-carousel');

		// jQuery
		wp_register_script('jquery', (get_stylesheet_directory_uri() . '/js/jquery/jquery-1.12.4.min.js'), true, '1.0', false);
		wp_enqueue_script('jquery');

		// JQUERY UI
		wp_register_script('jquery-ui', (get_stylesheet_directory_uri() . '/js/jquery-ui/jquery-ui.min.js'), true, '3.2.1', false);
		wp_enqueue_script('jquery-ui');
		wp_register_script('jquery.ui.touch-punch.min', (get_stylesheet_directory_uri() . '/js/jquery-ui/jquery.ui.touch-punch.min.js'), true, '3.2.1', false);
		wp_enqueue_script('jquery.ui.touch-punch.min');

		// CUSTOM JS
		wp_register_script('emfasi', (get_stylesheet_directory_uri() . '/js/emfasi.js'), true, '1.0', true);
		wp_enqueue_script('emfasi');

		// CUSTOM JS
		wp_register_script('menu', (get_stylesheet_directory_uri() . '/js/menu.js'), true, '1.0', true);
		wp_enqueue_script('menu');

		// FORMS JS
		wp_register_script('forms', (get_stylesheet_directory_uri() . '/js/forms.js'), true, '1.0', true);
		wp_enqueue_script('forms');

		// SCROLL MAGIC JS
		wp_register_script('scrollmagic', (get_stylesheet_directory_uri() . '/js/scrollmagic/ScrollMagic.min.js'), true, '3.2.1', true);
		wp_enqueue_script('scrollmagic');
		wp_register_script('tween-max', (get_stylesheet_directory_uri() . '/js/scrollmagic/plugins/TweenMax.min.js'), true, '3.2.1', true);
		wp_enqueue_script('tween-max');
		wp_register_script('animation', (get_stylesheet_directory_uri() . '/js/scrollmagic/plugins/animation.gsap.min.js'), true, '3.2.1', true);
		wp_enqueue_script('animation');
		wp_register_script('animation-velocity', (get_stylesheet_directory_uri() . '/js/scrollmagic/plugins/animation.velocity.min.js'), true, '3.2.1', true);
		wp_enqueue_script('animation-velocity');
		wp_register_script('addIndicators', (get_stylesheet_directory_uri() . '/js/scrollmagic/plugins/debug.addIndicators.min.js'), true, '3.2.1', true);
		wp_enqueue_script('addIndicators');
		wp_register_script('jq-scrollmagic', (get_stylesheet_directory_uri() . '/js/scrollmagic/plugins/jquery.ScrollMagic.min.js'), true, '3.2.1', true);
		wp_enqueue_script('jq-scrollmagic');

		// VC-CAROUSEL JS
		wp_register_script('vc-carousel', (get_stylesheet_directory_uri() . '/js/vc-carousel.js'), true, '1.0', true);
		wp_enqueue_script('vc-carousel');

		// PARALLAX JS
		wp_register_script('parallax', (get_stylesheet_directory_uri() . '/js/parallax/parallax.min.js'), true, '3.2.1', true);
		wp_enqueue_script('parallax');

		// BLOG JS
		wp_register_script('blog', (get_stylesheet_directory_uri() . '/js/blog.js'), true, '3.2.1', true);
		wp_enqueue_script('blog');
		wp_localize_script('blog', 'ajax_custom', array(
			'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		));

		//STYLES
		//wp_enqueue_style( 'underscores-style', get_template_directory_uri() . '/styles.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/css/animate/animate.css', array(), $the_theme->get('1.x'));
		wp_enqueue_style('jquery-ui-css', get_stylesheet_directory_uri() . '/js/jquery-ui/jquery-ui.min.css', array(), $the_theme->get('1.0.x'));
		wp_enqueue_style('custom-styles', get_stylesheet_directory_uri() . '/scss/css/styles.css', array(), $the_theme->get('1.x'));

		// SLICK CSS
		wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/css/slick.css', array(), $the_theme->get('2.x'));
		wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), $the_theme->get('2.x'));

		// SLICK JS
		wp_register_script('slick-js-defer', (get_stylesheet_directory_uri() . '/js/slick.min.js'), true, '1.8.0', true);
		wp_enqueue_script('slick-js-defer');

		//Scroll JS
		wp_register_script('scroll-home', (get_stylesheet_directory_uri() . '/js/scroll-home.js'), true, '1.0', true);
		wp_enqueue_script('scroll-home');
	}

add_action('wp_enqueue_scripts', 'emfasi_scripts');

