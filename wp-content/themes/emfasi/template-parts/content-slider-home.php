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
    <div class="cont__info container">
        <div class="cont__info__info">
            <div class="cont--info-inner">
                <p class="cont__info__type_content"><?php echo get_field("slider_tipus_contenido", $post->ID); ?></p>
                <h1 class="cont__info__the_title"><?php the_title();?></h1>
                <p class="cont__info__the_excerpt"><?php the_excerpt();?></p>
            </div>
            <div class="cont--info-link">
                <a href="<?php echo get_field("slider_enlace", $post->ID); ?>" class="cont__info__enlace"><?php _e("Veure Projecte"); ?></a>
            </div>
        </div>
        <div class="cont__info__img">
            <img class="img-desktop" src="<?php echo get_field("slider_img", $post->ID); ?>" alt="img">
            <?php /* <img class="img-mobile" src="<?php echo get_field("slider_img_mobile", $post->ID); ?>" alt="img">*/ ?>
        </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->