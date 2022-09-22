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
        <div class="partidos-senior-a">
            <?php

            $args = array(
                'post_type' => 'partidos',
                'posts_per_page' => -1,
                
            );

            $partidos = get_posts($args);
            print_r($partidos);
            ?>
        </div>
</div>
<?php

get_footer();
