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


?>
<div class="page-wrapper wrapper-main" id="home">
    <main id="primary" class="site-main">
        <div class="left">
            <div class="content">
                <div class="front-slide">
                    <a href="/contacto">
                        <img src="/wp-content/uploads/2022/08/IMG-20220519-WA0032.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="products">
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
                <div class="divider"></div>
                <div class="slick-products">
                    <div class="item">
                        <h2>Juvenil</h2>
                        <div class="equipo_local">

                        </div>
                        <div class="equipo_visitante">

                        </div>
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
