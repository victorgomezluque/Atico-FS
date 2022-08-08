<?php 

function get_ajax_room_product_list_handler() {
    // Query Arguments

    if(strlen($_POST['id'])) {
        $term_id =$_POST['id']; 
        set_query_var( 'term_id', absint( $term_id) );
        get_template_part('ajax-templates/taxonomy-room','list-products');
        wp_reset_postdata();
    }
    die;
    
    // The Query


    exit; // exit ajax call(or it will return useless information to the response)
}
add_action('wp_ajax_get_ajax_room_product_list', 'get_ajax_room_product_list_handler');
add_action('wp_ajax_nopriv_get_ajax_room_product_list', 'get_ajax_room_product_list_handler');


function get_ajax_product_handler() {
    // Query Arguments

    if(strlen($_POST['id'])) {
        global $post;
        $post = get_post( $_POST['id']); 
        setup_postdata($post);
        set_query_var( 'is_ajax', 1);
        get_template_part('loop-templates/content','single-product-info');

        wp_reset_postdata();

    }
    die;
    
    // The Query


    exit; // exit ajax call(or it will return useless information to the response)
}
add_action('wp_ajax_get_ajax_product', 'get_ajax_product_handler');
add_action('wp_ajax_nopriv_get_ajax_product', 'get_ajax_product_handler');



function get_ajax_product_part_handler() {
    // Query Arguments
    if(strlen($_POST['part']) && strlen($_POST['id'])) {   
        
        global $post;
        $post = get_post( $_POST['id']); 
        setup_postdata($post);
        set_query_var( 'is_ajax', 1);
        error_log($_POST['part']);
        get_template_part('loop-templates/content-single-product',$_POST['part']);
    }

    if(strlen($_POST['reset']) && $_POST['reset']) {    
        wp_reset_postdata();
    }
    
    die;
    
    // The Query


    exit; // exit ajax call(or it will return useless information to the response)
}
add_action('wp_ajax_get_ajax_product_part', 'get_ajax_product_part_handler');
add_action('wp_ajax_nopriv_get_ajax_product_part', 'get_ajax_product_part_handler');