<?php 

function get_ajax_posts_handler() {
    // Query Arguments

    if(strlen($_POST['id'])) {
        global $post;
        $post = get_post( $_POST['id']); 
        $type = $_POST['type']; 
        $type = ($type == 'post') ? '' : $type;
        setup_postdata($post);
        get_template_part( 'template-parts/content-single', $type  );

        wp_reset_postdata();
    }
    die;
    
    // The Query


    exit; // exit ajax call(or it will return useless information to the response)
}
add_action('wp_ajax_get_ajax_posts', 'get_ajax_posts_handler');
add_action('wp_ajax_nopriv_get_ajax_posts', 'get_ajax_posts_handler');