<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')) :
    function chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);

if (!function_exists('Atico_scripts')) {
    function Atico_scripts()
    {
        $the_theme = wp_get_theme();

        // CUSTOM JS
       // wp_register_script('Atico', (get_stylesheet_directory_uri() . '/js/script.js'), true, '1.0', true);
        //wp_enqueue_script('Atico');


        wp_enqueue_style('custom-styles', get_stylesheet_directory_uri() . '/scss/css/styles.css', array(), '1.1');
    }
}
add_action('get_footer', 'Atico_scripts');

// END ENQUEUE PARENT ACTION
