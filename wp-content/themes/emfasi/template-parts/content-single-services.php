<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/*
more_info - text
features - repeater
project_related - relation
video - url
icon
gallery
*/
?>

<?php
get_template_part('template-parts/content', 'more-info');
?>

<div class="ajax-post-single ajax-post-single-services">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <div class="cont--header">
            <div class="fixed-thumbnail cont--bg">
                <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
            </div>

            <div class="cont--text-container container">
                <div class="cont--text">

                    <header class="entry-header">

                        <p class="cont__subtitle"><?php _e('Service','emfasi'); ?></p>

                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>


                        <?php if(has_excerpt()): ?>
                            <h2><?php the_excerpt() ?></h2>
                        <?php endif?>

                    </header><!-- .entry-header -->
                    
                    


                    <div class="entry-content">
                        <?php 
                        
                            $content_post = get_post();
                            $content = $content_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                        ?>

                        <?php if(get_field('more_info')): ?>
                        

                        <p class="see-more"><?php _e('See more','emfasi'); ?></p>

                        <div class="see-more-content cont--overlay">
                            <div class="cont--close"><i class="icon icon-font-icon-icn-close"></i></div>
                            <div class="cont--info">
                                <div class="cont--body">
                                    <?php the_field('more_info'); ?>
                                </div>
                            </div>  
                        </div>
                        
                        <?php endif; ?>

                    

                    </div><!-- .entry-content -->
                </div>   
            </div>         
        </div>

        <?php if(have_rows('features')): ?>
        <?php 
            
            $i = 1;    
        ?>
        <div class="cont--features container">
            <div class="cont--features-inner owl-carousel">
                <?php while( have_rows('features') ): the_row(); 
                    $title = get_sub_field('features_title');
                    $info = get_sub_field('features_info');
                    ?>
                    <div class="cont--features-item">
                        <div class="cont--features-number"><?php echo $i ?></div>
                        <div class="cont--features-title"><?php echo $title ?></div>
                        <div class="cont--features-info"><?php echo $info ?></div>
                        <?php $i++; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

        <?php endif; ?>
        

        <?php 
        $video = get_field('video');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $video ): ?>

        <?php 
        $video = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "<iframe width=\"100%\" src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>", $video); 
        $video_cover = get_field('image_cover_video');
        ?>
        
            <div class="cont--video">
                <div class="item">
                    <div class="cont--play"></div>
                    <div class="cont--image-cover">
                        <img width="863" height="490" src="<?php echo $video_cover; ?>">                    
                    </div>
                    <div class="cont--video-inner">
                        <?php echo $video; ?>
                    </div>                    
                </div>
            </div>
        <?php endif; ?>


        <?php 
        $images = get_field('gallery');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $images ): ?>
            <div class="owl-carousel-gallery owl-carousel">
                <?php foreach( $images as $image_id ): ?>   
                    <div class="item" style="width:<?php echo wp_get_attachment_image_src($image_id,$size)[1] ?>px">                 
                        <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                    </div>
                <?php endforeach; ?>
                </div>
        <?php endif; ?>

        <?php
        $project_related = get_field('project_related');
        if( $project_related ): ?>
            <div class="container">
                <div class="cont--project-related oil-bg-index">
                    <p class="cont--title"><?php _e('Related projects','emfasi'); ?></p>
                    <div class="grid-index owl-carousel">
                        <?php foreach( $project_related as $post ): 

                            // Setup this post for WP functions (variable must be named $post).
                            setup_postdata($post); 
                            get_template_part( 'template-parts/content', 'projects');
                            ?>
                            
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php 
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>


    </article><!-- #post-## -->
</div>
