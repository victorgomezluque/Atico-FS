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
            <img class="home-banner-mobile" src="<?php the_field("banner_home_mobile"); ?>" alt="/wp-content/uploads/2022/10/bannerhome.png">
            <img class="home-banner-desktop" src="<?php the_field("banner_home"); ?>" alt="/wp-content/uploads/2022/10/bannerhome.png">
        </div>
        <div class="home-text">
        </div>
        <div class="home-categories">
            <div class="home-categories-tienda">
                <!--<p class="home-categories-cta">Tienda</p> -->
                <a href="/tienda"> <img class="home-categories-contact-mobile" src="<?php the_field("imagen_tienda_mobile"); ?>" alt="wp-content/uploads/2022/10/Mini-banner.png"></a>
                <a href="/tienda"> <img class="home-categories-contact-desktop" src="<?php the_field("imagen_tienda_"); ?>" alt="wp-content/uploads/2022/10/Mini-banner.png"></a>
            </div>
            <div class="home-categories-contact">
                <!-- <p class="home-categories-cta">Contacto</p>-->
                <a href="/contacto"> <img class="home-categories-contact-mobile" src="<?php the_field("imagen_contacto_mobile"); ?>" alt="wp-content/uploads/2022/10/Mini-banner.png"></a>
                <a href="/contacto"> <img class="home-categories-contact-desktop" src="<?php the_field("imagen_contacto"); ?>" alt="wp-content/uploads/2022/10/Mini-banner.png"></a>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #index-wrapper -->