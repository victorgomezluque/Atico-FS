<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emfasi
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cont__info">
        <?php
        the_title('<h2 class="entry-title">', '<span class="cont__icon"></span></h2>');
        ?>
        <div class="block_cont__info">
            <div class="block_cont__info-two-columns">
                <div class="block_cont__info__content">
                    <?php the_content(); ?>
                </div>
                <div class="block_cont__info__list">
                <?php echo get_field('list_content'); ?>
                </div>
            </div>            
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->