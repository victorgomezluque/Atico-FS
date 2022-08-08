<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscores
 */

get_header();
?>
<div class="wrapper" id="index-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<main id="primary" class="site-main">

				<?php
				if (have_posts()) :

					if (is_home() && !is_front_page()) :
				?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							<?php $page_id = get_queried_object_id(); ?>
							<?php if (get_field('subtitle', $page_id)) : ?>
								<div class="entry-subtitle">
									<h2><?php echo get_field('subtitle', $page_id); ?></h2>
								</div>
							<?php endif; ?>
						</header>
					<?php
					endif;
					$thumbID = get_post_thumbnail_id($post->ID);
					$imgDestacada = wp_get_attachment_image_src($thumbID, 'TAMAÑO'); // Sustituir por thumbnail, medium, large o full
					echo $imgDestacada[0];
					?>

					<div class="grid-index">

						<?php
						get_template_part('template-parts/content', 'more-info');
						?>

						<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post();

							/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
							get_template_part('template-parts/content', get_post_type());

						endwhile;

						the_posts_navigation();
						?>
					</div>
				<?php
				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->


<?php

get_footer();
