<?php
/**
 * Template Name: Full Screen
 *
 * The template file for displaying page in full screen
 */

get_header(); ?>

<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		the_content();
	endwhile;
endif;
?>

<?php get_footer(); ?>
