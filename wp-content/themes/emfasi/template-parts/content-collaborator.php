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
<a>
    <div class="cont__info">
        <header class="entry-header">
            <?php $classification = get_field('classification'); ?>
                <?php if($classification): ?>
                    <p class="entry-classification"><?php echo $classification; ?></p>
                <?php endif; ?>
            <?php
            the_title('<h2 class="entry-title">','</h2>');
            ?>
        </header><!-- .entry-header -->

        <div class="entry-content">

            <?php the_excerpt(); ?>

        </div><!-- .entry-content -->

        <div class="cont--img-info">
            <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
        </div>

    </div>
    <div class="cont--img">
        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
    </div>
</a>
</article><!-- #post-<?php the_ID(); ?> -->
