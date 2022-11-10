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
    <h2>CALENDARIO JUVENIL</h2>
    <main id="primary" class="site-main">
        <div class="button-link">
            <a href="#partido">Ir a partido</a>
            <a href="#classificación">Ir a classificación</a>
        </div>
        <div class="resultados-senior-a" id="partido">
            <div class="iframe">
                <h3>Proximo partido</h3>
                <iframe id="inlineFrameExample" title="Inline Frame Example" src="https://www.fcf.cat/equip/2223/3js/el-atico-futbol-sala-c-a"></iframe>
            </div>
            <div class="iframe" id="classificación">
                <h3>Classificación</h3>
                <iframe id="inlineFrameExample" title="Inline Frame Example" src="https://www.fcf.cat/classificacio/2223/futbol-sala/lliga-tercera-divisio-juvenil-futbol-sala/bcn-gr-3"></iframe>
            </div>
        </div>
</div>


<?php

get_footer();
