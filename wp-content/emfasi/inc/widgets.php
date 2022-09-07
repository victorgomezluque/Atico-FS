<?php 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function emfasi_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Menu lang', 'emfasi' ),
            'id'            => 'menu-lang',
            'description'   => __( 'Menu langr widget area', 'emfasi' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    // Footer Col left
    register_sidebar( array(
        'name' => __( 'Footer left', 'emfasi' ),
        'id' => 'footer-column-left',
        'description' => __( 'Footer Column left', 'emfasi' ),
        'before_widget' => '<div id="%1$s" class="footer-column-left-widget">',
        'after_widget'  => '</div>', 
        'before_title'  => '', 
        'after_title'   => '',
    ) );

    // Footer Col right
    register_sidebar( array(
        'name' => __( 'Footer right', 'emfasi' ),
        'id' => 'footer-column-right',
        'description' => __( 'Footer column right', 'emfasi' ),
        'before_widget' => '<div id="%1$s" class="footer-column-right-widget">',
        'after_widget'  => '</div>', 
        'before_title'  => '', 
        'after_title'   => '',
    ) );




}
add_action( 'widgets_init', 'emfasi_widgets_init' );
