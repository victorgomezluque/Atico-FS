<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="ajax-post-single">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <div class="container">
            <div class="cont--left">

                <header class="entry-header">

                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>


                </header><!-- .entry-header -->



                <div class="entry-content">
                    <?php 
                    
                        $content_post = get_post();
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        $content = str_replace(']]>', ']]&gt;', $content);
                        echo $content;
                    ?>

                

                </div><!-- .entry-content -->
            </div>

            <div class="fixed-thumbnail cont--right">
                <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
            </div>
        </div>
    </article><!-- #post-## -->
</div>
