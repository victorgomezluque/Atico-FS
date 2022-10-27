<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- ******************* Google Fonts ******************* -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nixie+One&display=swap" rel="stylesheet">
	<!-- **************************************************** -->
	<?php wp_head(); ?>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/emfasi/assets/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/emfasi/assets/icons/favicon.png">
	<link rel="manifest" href="/wp-content/themes/emfasi/assets/icons/site.webmanifest">
	<link rel="mask-icon" href="/wp-content/themes/emfasi/assets/icons/safari-pinned-tab.svg" color="#00913a">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
</head>

<?php
$page_background = '';
if (get_field('background_color')) :
	$page_background = get_field('background_color');
endif;

$header_color = '';
if (get_field('header_color')) :
	$header_color = get_field('header_color');
endif;
?>


<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site <?php print $page_background; ?>">
		<div class="wrapper" id="header-wrapper">

			<div class="container-fluid" id="content" tabindex="-1">

				<div class="row">

					<header id="masthead" class="site-header">
						<div class="cont--header <?php print $header_color; ?>">


							<div class="wrapper--logo">
								<?php if (is_front_page()) : ?>
									<h1 class="navbar-brand">
										<a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url">
											<div class="cont-logo">
												<img class="logo" src="/wp-content/themes/emfasi/assets/logo/logo.png" alt="">
											</div>
										</a>
									</h1>
								<?php else : ?>
									<a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url">
										<div class="cont-logo">
											<img class="logo" src="/wp-content/themes/emfasi/assets/logo/logo.png" alt="">
										</div>
									</a>
								<?php endif; ?>
							</div>

							<div class="cont--header-right">
								<?php /* 
						<div class="cont--header-right-item cont--user">
							<i class="icon icon-font-icon-icn-profile"></i>
						</div>

						<div class="cont--header-right-item cont--cart">
							<i class="icon icon-font-icon-icn-cart"></i>
						</div>
							*/
								?>
								<div class="cont--header-right-item mini-cart">
									<a href="/checkout"><img src="/wp-content/uploads/2022/10/icon-minicart-e1666878761324-removebg-preview.png" alt="/wp-content/uploads/2022/10/icon-minicart-e1666878761324-removebg-preview.png"></a>
								</div>
								<div class="cont--header-right-item cont--menu__open">
									<input class="menu-icon__cheeckbox" type="checkbox">
									<div>
										<span></span>
										<span></span>
									</div>
								</div>

							</div>




							<nav id="site-navigation" class="main-navigation">
								<div class="main-navigation-inner">
									<div class="menu-bottom-info-lang">
										<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('menu-lang')) : endif; ?>
									</div>
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>


									<div class="menu-bottom-info">
										<div class="menu-bottom-info--top desktop">
											<div class="cont--xarxes-socials">
												<a href="https://www.instagram.com/elaticofsc" class="icon icon-font-icono-icn-xxss-instagram" target="_blank"></a>
											</div>
										</div>
										<div class="menu-bottom-info--bottom">
											<div class="menu-bottom-info--bottom-left">
											</div>
											<div class="menu-bottom-info--top mobile">
												<div class="cont--xarxes-socials">
													<a href="https://www.instagram.com/elaticofsc" class="icon icon-font-icono-icn-xxss-instagram" target="_blank"></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</nav>

					</header><!-- #masthead -->

				</div><!-- .row -->

			</div><!-- #content -->

		</div><!-- #header-wrapper -->