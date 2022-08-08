<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores
 */

?>
	<div class="wrapper" id="footer-wrapper">

		<div class="container-fluid" id="content" tabindex="-1">

			<div class="row">

				<footer id="colophon" class="site-footer">
				
					<div class="footer--column footer--column__left">
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-left')) : endif; ?>
					</div>
					<div class="footer--column footer--column__right">
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-right')) : endif; ?>
					</div>



				</footer><!-- #colophon -->
				
			</div><!-- row end -->

		</div><!-- container end -->

	</div><!-- footer-wrapper end -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
