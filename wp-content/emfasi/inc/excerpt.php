<?php

function understrap_all_excerpts_get_more_link( $post_excerpt ) {
    $limit=130;
    if (strlen($post_excerpt)>=$limit) {
      $post_excerpt = substr($post_excerpt,0,$limit).'...';
    } else {
      $post_excerpt = $post_excerpt;
    }	
	return $post_excerpt;
}

add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );