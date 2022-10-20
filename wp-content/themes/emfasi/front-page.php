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
                    <!--<a href="/contacto">
                        <img src="/wp-content/uploads/2022/08/IMG-20220519-WA0032.jpg" alt="">
                    </a>-->
                    <a href="/tienda">
                        <img src="/wp-content/uploads/2022/10/tiendahome.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="products">
                <div class="divider"></div>
                <div class="features-products">
                    <h3 class="title bar"><?php _e('Tienda', 'venfilter'); ?></h3>
                    <div class="slick-products">
                        <?php
                        foreach ($featured_products as $featured_product) {
                            $product = wc_get_product($featured_product);
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($featured_product), 'single-post-thumbnail');

                        ?>
                            <div class="item">
                                <img class="item-product-features" src="<?php echo $image[0]; ?>" data-id="">
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="features-products-more">
                        <a href="/tienda">
                            <?php _e('Ver todos', 'atico'); ?>
                        </a>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="tiles-box">
                    <div class="tiles">
                        <a class="tile" href="/#">
                            <h3 class="title bar">
                            </h3>
                            <p></p>
                            <div class="img">
                                <img src="/wp-content/uploads/2022/10/formulario.png">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="divider"></div>

            </div>
        </div>
</div>
</main><!-- #main -->
</div><!-- #index-wrapper -->

<?php
get_sidebar();
get_footer();
