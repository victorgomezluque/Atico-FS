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
        <div class="home-banner">
            <img src="/wp-content/uploads/2022/10/Banner-1.png" alt="/wp-content/uploads/2022/10/Banner-1.png">
        </div>
        <div class="home-text">
        </div>
        <div class="home-categories">
            <div class="home-categories-tienda">
                <!--<p class="home-categories-cta">Tienda</p> -->
                <img src="wp-content/uploads/2022/10/Mini-banner.png" alt="wp-content/uploads/2022/10/Mini-banner.png">
            </div>
            <div class="home-categories-contact">
                <!-- <p class="home-categories-cta">Contacto</p>-->
                <img src="wp-content/uploads/2022/10/Mini-banner.png" alt="wp-content/uploads/2022/10/Mini-banner.png">
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #index-wrapper -->
<div class="instagram">
    p
    <img src="/wp-content/uploads/2022/10/instgram.png" alt="/wp-content/uploads/2022/10/instgram.png">
</div>