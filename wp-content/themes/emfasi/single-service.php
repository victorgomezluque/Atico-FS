<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Underscores
 */

get_header();
?>
<div class="wrapper" id="single-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">

		<div class="row">

			<main id="primary" class="site-main">

				<div class="cont__content">
					<?php get_template_part( 'template-parts/content', 'flexible' ); ?>
				</div>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->				

<?php
 
get_footer();
