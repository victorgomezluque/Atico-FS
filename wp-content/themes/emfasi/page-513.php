<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscores
 */

get_header();
?>

<div class="page-wrapper wrapper-main container" id="home">
    <main id="primary" class="site-main">
        <h1>SPONSORS</h1>
        <div class="sponsors">
            <?php
            /**
             * Setup query to show the ‘services’ post type with ‘8’ posts.
             * Output the title with an excerpt.
             */
            $args = array(
                'post_type' => 'sponsor',
                'post_status' => 'publish',
                'posts_per_page' => 8,
                'orderby' => 'title',
                'order' => 'ASC',
            );

            $loop = new WP_Query($args);
            //print_r($loop);
            while ($loop->have_posts()) : $loop->the_post(); ?>

                <div class="sponsor">
                    <h1 class="sponsor-title"><?php echo the_title(); ?></h1>
                    <a href="<?php echo the_field('url_sponsor'); ?>">
                        <img src="<?php echo the_field('imagen_sponsor'); ?>" alt="">
                    </a>
                </div>

            <?php

            endwhile;

            wp_reset_postdata();

            ?>
        </div>
    </main>
</div>
<?php

get_footer();
