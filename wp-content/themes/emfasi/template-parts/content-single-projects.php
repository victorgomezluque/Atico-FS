<?php

/**
 * Single post partial template.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
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
                <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
            </div>
            <div class="cont-text-data">
                <div class="cont--text-container container">
                    <div class="cont--text">

                        <header class="entry-header">

                            <?php
                            $logo = get_field('logo');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            ?>
                            <div class="type-web">
                                <?php echo get_field("tipus_web", $post->ID); ?>
                            </div>


                            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                            <?php if (has_excerpt()) : ?>
                                <h2 class="cont--text-container-excerpt"><?php the_excerpt() ?></h2>
                            <?php endif ?>

                        </header><!-- .entry-header -->



                        <div class="entry-content">
                            <?php

                            $content_post = get_post();
                            $content = $content_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                            ?>

                            <?php if (get_field('more_info')) : ?>


                                <p class="see-more"><?php _e('See more', 'emfasi'); ?></p>
                                <div class="cont-info-overlay">
                                    <div class="see-more-content cont--overlay">
                                        <div class="cont--close"><i class="icon icon-font-icon-icn-close"></i></div>
                                        <div class="cont--info">
                                            <div class="cont--body">
                                                <div class="type-web">
                                                    <?php echo get_field("tipus_web", $post->ID); ?>
                                                </div>
                                                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                                                <?php if (has_excerpt()) : ?>
                                                    <h2 class="cont--text-container-excerpt"><?php the_excerpt() ?></h2>
                                                <?php endif ?>
                                                <?php the_field('more_info'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endif; ?>

                            <?php if (get_field('link_web')) : ?>
                                <div class="link-page">                                    
                                    <a href="<?php echo get_field("link_web", $post->ID); ?>" target="_blank">
                                        <div class="icon icon-font-icono-icn-link"></div>
                                        <span><?php echo get_field("link_web", $post->ID); ?></span>
                                    </a>
                                </div>
                            <?php endif; ?>


                        </div><!-- .entry-content -->
                    </div>
                </div>

                <?php if (have_rows('data')) : ?>
                    <div class="cont--data container">
                        <div class="cont--data-inner owl-carousel">
                            <?php while (have_rows('data')) : the_row();
                                $cifra = get_sub_field('data_number');
                                $dato = get_sub_field('data_text');
                            ?>
                                <div class="cont--data-item">
                                    <div class="cont--data-cifra"><?php echo $cifra ?></div>
                                    <div class="cont--data-dato"><?php echo $dato ?></div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if (have_rows('features_project')) : ?>
            <?php

            $i = 1;
            ?>
            <div class="cont--features container">
                <div class="cont--features-inner">
                    <div class="cont--features-inner-grid">
                        <?php while (have_rows('features_project')) : the_row();
                            $taxonomy_id = get_sub_field('features_project_feature')[0];
                            $taxonomy = get_term($taxonomy_id);
                            $icon = get_field('icon', $taxonomy);
                            $info = get_sub_field('features_project_info');
                        ?>
                            <div class="cont--features-item">
                                <div class="cont--features-icon"><?php echo wp_get_attachment_image($icon, 'full'); ?></div>
                                <div class="cont--features-title"><?php echo $taxonomy->name ?></div>
                                <div class="cont--features-info"><?php echo $info ?></div>
                                <?php $i++; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

        <?php endif; ?>


        <?php
        $video = get_field('video');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($video) : ?>

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
        if ($images) : ?>
            <div class="owl-carousel-gallery">
                <div class="slider-scroll-container slider-scroll-container-content">
                    <div class="slider-scroll-content scroll-lateral">
                        <?php foreach ($images as $image_id) : ?>
                            <div class="item panel">
                                <div class="cont__img">
                                    <?php echo wp_get_attachment_image($image_id, $size); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="cont--link--item"></div>
                </div>
            </div>
        <?php endif; ?>

        <?php
        //$services_related = get_field('services_related');


        $services_related = get_posts(array(
            'post_type' => 'services',
            'meta_query' => array(
                array(
                    'key' => 'project_related', // name of custom field
                    'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
                    'compare' => 'LIKE'
                )
            )
        ));

        ?>



    </article><!-- #post-## -->
</div>