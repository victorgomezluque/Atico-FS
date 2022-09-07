<?php

/**
 * The front page template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscores
 */

get_header();

$args = array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
    'exclude' => array(27),
    'parent' => 0
);
$cats = get_terms($args);

$featured_products = wc_get_featured_product_ids();

$args_sponsors = array(
    'post_type' => 'sponsor',
);
$sponsors = get_posts($args_sponsors);



?>
<div class="page-wrapper wrapper-main" id="home">
    <main id="primary" class="site-main">
        <div class="left">
            <div class="content">
                <div class="front-slide">
                    <a href="/contacto">
                        <img src="/wp-content/uploads/2022/08/IMG-20220519-WA0032.jpg" alt="">
                    </a>
                    <a href="/contacto">
                        <img src="/wp-content/uploads/2022/08/IMG-20220519-WA0032.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="products">
                <!-- <div class="products-categories">
                    <h3 class="title bar"><?php _e('Productos', 'venfilter'); ?></h3>
                    <p class="viewall"><a href="<?= get_permalink(get_page_by_title('productos')) ?>"><?php _e('Ver todos', 'venfilter'); ?></a></p>
                    <div class="slick-products">
                        <?php if ($cats) : foreach ($cats as $cat) : ?>
                                <?php $id = get_term_meta($cat->term_id, 'thumbnail_id', true); ?>
                                <div class="item">
                                    <a href="<?= get_term_link($cat->term_id, 'product_cat') ?>">
                                        <div class="img"><img src="<?php echo esc_url(wp_get_attachment_url($id)); ?>" alt=""></div>
                                        <div class="name"><?= $cat->name ?></div>
                                    </a>
                                </div>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div> -->
                <div class="divider"></div>
                <div class="features-products">
                    <h3 class="title bar"><?php _e('Productos Destacados', 'venfilter'); ?></h3>
                    <div class="slick-products">
                        <?php
                        foreach ($featured_products as $featured_product) {
                            $product = wc_get_product($featured_product);
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($featured_product), 'single-post-thumbnail');

                        ?>
                            <div class="item">
                                <img src="<?php echo $image[0]; ?>" data-id="">
                                <p><?php echo $product->get_name(); ?></p>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="tiles-box">
                <div class="tiles">
                        <a class="tile" href="/#">
                            <h3 class="title bar">Partidos</h3>
                            <p>Descubre los partidos del Atico FS</p>
                            <div class="img">
                                <img src="/wp-content/uploads/2022/08/images.png">
                            </div>
                        </a>
                        <a class="tile" href="/#">
                            <h3 class="title bar">Classificación</h3>
                            <p>Descubre la classificación y los Quintetos de cada jornada den nuestro club</p>
                            <div class="img">
                                <img src="/wp-content/uploads/2022/08/calendar-v3.png">
                            </div>
                        </a>
                    </div>
                    <div class="tiles">
                        <a class="tile" href="/#">
                            <h3 class="title bar">Plantilla</h3>
                            <p>Descubre la plantilla Atico FS</p>
                            <div class="img">
                                <img src="/wp-content/uploads/2022/08/png-transparent-football-team-sport-football-sport-team-human.png">
                            </div>
                        </a>
                        <a class="tile" href="/#">
                            <h3 class="title bar">Contactar</h3>
                            <p>Contacta con nuestro club</p>
                            <div class="img">
                                <img src="/wp-content/uploads/2022/08/5a452601546ddca7e1fcbc87-2.png">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="sponsors">
                    <h3 class="title bar"><?php _e('Sponsors', 'venfilter'); ?></h3>
                    <div class="slick-products-sponsors">
                        <?php
                        foreach ($sponsors as $sponsor) {
                            $nombre_sponsor = get_field("nombre_sponsor", $sponsor->ID);
                            $imagen_sponsor = get_field("imagen_sponsor", $sponsor->ID);
                            $url_sponsor = get_field("url_sponsor", $sponsor->ID);
                        ?>
                            <div class="item-sponsors">
                                <a href="<?php echo $url_sponsor; ?>">
                                    <img src="<?php echo $imagen_sponsor; ?>" alt="Nombre Sponsor">
                                    <p><?php echo $nombre_sponsor; ?></p>
                                </a>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
</div>
</main><!-- #main -->
</div><!-- #index-wrapper -->

<?php
get_sidebar();
get_footer();
