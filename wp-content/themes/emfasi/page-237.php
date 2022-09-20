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
        <div class="partidos">
            <div class="partidos-categorias">
                <a href="/partidos-senior-a/">
                    <div>
                        <h1>Senior A</h1>
                        <img src="/wp-content/uploads/2022/08/IMG-20220519-WA0029.jpg" alt="">
                    </div>
                </a>
                <div>
                    <h1>Senior B</h1>

                    <img src="/wp-content/uploads/2022/08/IMG-20220519-WA0030.jpg" alt="">
                </div>
                <div>
                    <h1>Femenino</h1>
                    <img src="/wp-content/uploads/2022/08/IMG-20220519-WA0031.jpg" alt="">
                </div>
                <div>
                    <h1>Juvenil</h1>
                    <img src="/wp-content/uploads/2022/08/IMG-20220519-WA0032.jpg" alt="">
                </div>
            </div>
        </div>
</div>
<?php

get_footer();
