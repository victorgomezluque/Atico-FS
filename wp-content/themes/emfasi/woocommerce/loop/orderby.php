<?php

/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}
$args = array(
	'taxonomy' => 'product_cat',
	'hide_empty' => false,
	'exclude' => array(16),
	'parent' => 0
);
$cats = get_terms($args);
?>
<div class="products-categories">
	<h3 class="title bar"><?php _e('Productos', 'venfilter'); ?></h3>
	<div class="slick-products-shop">
		<?php if ($cats) : foreach ($cats as $cat) : ?>
				<?php $id = get_term_meta($cat->term_id, 'thumbnail_id', true); ?>
				<div class="item">
					<a href="<?= get_term_link($cat->term_id, 'product_cat') ?>">
						<div class="name"><?= $cat->name ?></div>
					</a>
				</div>
			<?php endforeach;
			?>
			<div class="item">
				<a href="<?= get_permalink(get_page_by_title('productos')) ?>">
					<div class="name"><?php _e('Ver todos', 'atico'); ?></div>
				</a>
			</div>
		<?php endif; ?>
	</div>
</div>