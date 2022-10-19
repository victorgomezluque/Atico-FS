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
            <div class="senior-A">
                <h2>Senior A</h2>
                <iframe src="https://www.fcf.cat/classificacio/2223/futbol-sala/lliga-segona-divisio-catalana-futbol-sala/bcn-gr-2" frameborder="0"></iframe>
            </div>
            <div class="senior-b">
                <h2>Senior B</h2>
                <iframe src="https://www.fcf.cat/classificacio/2223/futbol-sala/lliga-segona-divisio-catalana-futbol-sala/bcn-gr-2" frameborder="0"></iframe>
            </div>

            <div class="Femenino-A">
                <h2>Femenino</h2>
                <iframe src="https://www.fcf.cat/classificacio/2223/futbol-sala/lliga-segona-divisio-catalana-futbol-sala/bcn-gr-2" frameborder="0"></iframe>
            </div>
            <div class="Juvenil-A">
                <h2>Juvenil A</h2>
                <iframe src="https://www.fcf.cat/classificacio/2223/futbol-sala/lliga-segona-divisio-catalana-futbol-sala/bcn-gr-2" frameborder="0"></iframe>
            </div>
        </div>
    </main>
</div>
<?php

get_footer();
