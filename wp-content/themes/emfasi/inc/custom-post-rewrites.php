<?php

// Agregamos la condición de rewrite sin considerar el texto del slug del CPT
function custom_post_type_rewrites()
{
    add_rewrite_rule('([^/]+)/?$', 'index.php?landing=$matches[1]');
}
add_action('init', 'custom_post_type_rewrites');


// Establecemos URLs amigables
function custom_post_type_permalinks($post_link, $post, $leavename)
{
    if (isset($post->post_type) && 'landing' == $post->post_type) {
        $post_link =  str_ireplace("?landing=", "", $post_link);
    }
    return $post_link;
}
add_filter('post_type_link', 'custom_post_type_permalinks', 10, 3);
