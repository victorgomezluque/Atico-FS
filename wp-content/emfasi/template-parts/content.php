<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emfasi
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
<a href="<?php echo get_permalink() ?>"  data-post-type="<?php echo get_post_type(); ?>" data-post-id="<?php the_ID(); ?>">
    <div class="cont__info">
        <header class="entry-header">
            <div class="entry-type"><?php _e('Gratuita','emfasi'); ?></div>
            <?php
            the_title('<h2 class="entry-title">','</h2>');
            ?>
        </header><!-- .entry-header -->

        <div class="entry-content">

            <?php the_excerpt(); ?>

        </div><!-- .entry-content -->
    </div>
    <div class="cont--img">
        <?php echo get_the_post_thumbnail( get_the_ID(), 'medium' ); ?>
    </div>
</a>
</article><!-- #post-<?php the_ID(); ?> -->
