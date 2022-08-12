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
        <div class="left">
            <?php echo do_shortcode('[contact-form-7 id="124" title="Formulario de inscripción"]'); ?>
        </div>
        <div class="right">
            <div class="front-slide-contact">
                <div>
                    <img src="/wp-content/uploads/2022/08/IMG-20220519-WA0029.jpg" alt="">
                </div>
                <div>
                    <img src="/wp-content/uploads/2022/08/IMG-20220519-WA0030.jpg" alt="">
                </div>
                <div>
                    <img src="/wp-content/uploads/2022/08/IMG-20220519-WA0031.jpg" alt="">
                </div>
                <div>
                    <img src="/wp-content/uploads/2022/08/IMG-20220519-WA0032.jpg" alt="">
                </div>
            </div>
        </div>
</div>
<?php

get_footer();
