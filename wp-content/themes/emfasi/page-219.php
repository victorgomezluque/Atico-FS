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
        <div class="calendario">
            <a href="/calendario-senior-a/">
                <div class="senior-A partido">
                    <h2>Senior A</h2>
                </div>
            </a>
            <a href="/calendario-senior-b/">
                <div class="senior-b partido">
                    <h2>Senior B</h2>

                </div>
            </a>
            <a href="/calendario-senior-a-femenino/ ">
                <div class="Femenino-A partido">
                    <h2>Femenino</h2>
                </div>
            </a>
            <a href="/calendario-juvenil/ ">
                <div class="Juvenil-A partido">
                    <h2>Juvenil A</h2>
                </div>
            </a>
        </div>
    </main>
</div>
<?php

get_footer();
