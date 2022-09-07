<?php
/**
 * Template Name: Page full width no title
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package emfasi
 */
get_header();

?>

<div class="wrapper" id="page-full-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">

		<div class="row">

			<main id="primary" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page-no-title' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();


